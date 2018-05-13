<?php
namespace Theme\Models;

/**
 * Class Front
 * Gets Front-Page Gallery Meta Data and push it in array for view.
 * @package Theme\Models
 */
class Front {
  public $front_meta = array();
  public function page_meta ($id) {
    $meta_keys = array();
    if(!empty(get_post_meta($id))) {
      $meta_keys = get_post_meta($id);
    }
    foreach($meta_keys as $key => $value) {
      switch ($key) {
        case 'services':
          $this->front_meta['serv'] = maybe_unserialize( $value[0] );
          break;
        case 'about':
          $this->front_meta['about'] = maybe_unserialize( $value[0] );
          break;
        case 'clients':
          $this->front_meta['clients'] = maybe_unserialize( $value[0] );
          break;
        default:
          $this->front_meta[$key] = $value[0];
      }
    }
    return $this->front_meta;
  }
}