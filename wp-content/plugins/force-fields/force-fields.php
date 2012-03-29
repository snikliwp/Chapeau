<?php
/*
Plugin Name: Force Fields
Plugin URI: https://github.com/thomasjbradley/force-fields
Description: Extends the <a href="http://wordpress.org/extend/plugins/more-fields/" rel="external">More Fields</a> plugin, allowing developers to <strong>hide or show input boxes per template</strong>.
Version: 1.0.0
Author: Thomas J Bradley
Author URI: http://thomasjbradley.ca/
License: ModifiedBSD
*/

if (!class_exists('ForceFields')) {
  /**
   * A WordPress plugin that extends the More Fields plugin,
   * allowing developers to hide or show input boxes per template
   *
   * @package ForceFields
   */
  class ForceFields {
    /**
     * The key for storing the version number in the WordPress database
     */
    const VERSION_KEY = 'Force-Fields-Version';

    /**
     * The current plugin version
     */
    const VERSION = '1.0.0';

    /**
     * The key for defining field restrictions in template file comments
     *
     * @var string
     */
    public $template_key = 'Fields';

    /**
     * The possible field restriction types for template files
     *
     * @var array
     */
    public $types = array(
      'only' => 'only'
      , 'omit-all' => 'omit-all'
      , 'omit' => 'omit'
    );

    /**
     * Constructor; adds the required actions
     */
    public function __construct () {
      add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
    }

    /**
     * When the plugin is activated, update the version number
     *
     * @return void
     */
    public function install () {
      update_option(self::VERSION_KEY, self::VERSION);
    }

    /**
     * Checks the selected template for meta box restrictions and applies them
     *
     * @return void
     */
    public function add_meta_boxes () {
      /**
       * @global object $post The WordPress post variable
       * @global object $more_fields The More Fields plugin object
       */
      global $post, $more_fields;

      $more_fields_objects = $more_fields->get_objects();
      $comment = $this->get_comments($post->page_template);

      if (!$comment) return;

      $type = $this->get_type($comment);
      $boxes = array();

      if ($type != $this->types['omit-all'])
        $boxes = $this->get_boxes($comment);

      $this->process_boxes($type, $boxes, $more_fields_objects['_plugin']);
    }

    /**
     * Finds the Force Fields comments in the current template or defaults to page.php
     *
     * @param string $template The current template's name, default or empty
     *
     * @return false|string False if no comments
     */
    public function get_comments ($template) {
      $template_file = ($template != '' && $template != 'default') ? locate_template($template) : get_page_template();

      $comments = $this->get_comments_from_template($template_file);

      if (!isset($comments[1]))
        $comments = $this->get_comments_from_template(get_page_template());

      return (!isset($comments[1])) ? false : $comments[1];
    }

    /**
     * Extracts the comments from a specific template file
     *
     * @param string $template_file The fully qualified template path
     *
     * @return array Empty if no comments
     */
    public function get_comments_from_template ($template_file) {
      $comment_matches = array();

      if (!file_exists($template_file)) return $comment_matches;

      $template_data = implode('', array_slice(file($template_file), 0, 10));
      preg_match('@^.*\/\*.*' . $this->template_key . '\s*:\s*([^\r\n]+)@isu', $template_data, $comment_matches);

      return $comment_matches;
    }

    /**
     * Extracts the type from the comment or defaults to 'only'
     *
     * @param string $comment
     *
     * @return string
     */
    public function get_type ($comment) {
      preg_match('@^(' . implode('|', $this->types) . ')@iu', $comment, $type_matches);

      return (isset($type_matches[1])) ? $type_matches[1] : $this->types['only'];
    }

    /**
     * Extracts the boxes from the comment
     *
     * @param string $comment
     *
     * @return false|array
     */
    public function get_boxes ($comment) {
      $box_matches = array();
      preg_match('@^\w*\s*(.+)@iu', $comment, $box_matches);

      if (!isset($box_matches[1])) return false;

      return preg_split('@[\'"]\s+[\'"]@iu', preg_replace(array('@^[\'"]@iu', '@[\'"]$@iu'), '', trim($box_matches[1])));
    }

    /**
     * Loops through all the meta boxes created by More Fields
     * and removes them form the page admin screen, if requested by the template comment
     *
     * @param string $type The type of list, only, omit, omit-all, etc.
     * @param array $boxes The list of box names/IDs; ignored if type is omit-all
     * @param array $more_fields_objects The list of More Fields input boxes
     *
     * @return void
     */
    public function process_boxes ($type, $boxes, $more_fields_objects) {
      foreach ($more_fields_objects as $key => $box) {
        if ($type == $this->types['omit-all']) {
          $this->remove_box($key);
        } else {
          $in_list = (bool) (in_array($box['label'], $boxes) || in_array($key, $boxes));

          switch ($type) {
            case $this->types['only'] :
              if (!$in_list)
                $this->remove_box($key);
              break;

            case $this->types['omit'] :
              if ($in_list)
                $this->remove_box($key);
              break;
          }
        }
      }
    }

    /**
     * Removes a meta box from the admin screen
     * Brute force: does both advanced and normal
     *
     * @param string $key The meta box's key
     *
     * @return void
     */
    public function remove_box ($key) {
      remove_meta_box($key, 'page', 'normal');
      remove_meta_box($key, 'page', 'advanced');
    }
  }
}

$force_fields = null;

if (class_exists('ForceFields')) {
  $force_fields = new ForceFields();

  register_activation_hook(__FILE__, array($force_fields, 'install'));
}
