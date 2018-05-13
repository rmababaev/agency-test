<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::match(['get', 'post'],'front', 'Pages@home');
Route::match(['get', 'post'], 'page', function(){
  return view('pages.pages');
});
