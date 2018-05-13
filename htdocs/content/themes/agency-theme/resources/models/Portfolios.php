<?php

namespace Theme\Models;

class Portfolios {
  /**
   * @var \WP_Query
   */
  protected $query;

  public function __construct(\WP_Query $query)
  {
    $this->query = $query;
  }

  /**
   * Try to retrieve WP_Post (organization).
   *
   * @param array $query
   *
   * @return $this
   */
  public function all()
  {
    $query = array(
      'post_type' => 'portfolio',
      'post_status' => 'publish',
      'order' => 'ASC'
    );
    $this->items = $this->query->query($query);
    return $this;
  }

  /**
   * Return queried organizations posts.
   *
   * @param bool $query
   * @return \WP_Query
   */
  public function get($query = false)
  {
    if ($query) {
      return $this->query;
    }
    return $this->items;
  }

  public $portfolios_meta = array();
  public function get_portfolios_meta($portfolios) {
    $portfolios_meta = array();
    foreach ($portfolios as $portfolio) {
      if (!empty(get_post_meta($portfolio->ID))) {
        $portfolio->meta = get_post_meta($portfolio->ID);
      }
      $portfolios_meta[] = $portfolio;
    }
    return $this->portfolios_meta = $portfolios_meta;
  }

}