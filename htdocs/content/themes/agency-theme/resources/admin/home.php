<?php
$home = (int) get_option('page_on_front');

if (themosis_is_post($home)) {
  // Metabox for the front page.
  Metabox::make(__('Front Gallery', THEME_TEXTDOMAIN), 'page')->set([
    Field::text('gal-title', ['title' => __('Title', THEME_TEXTDOMAIN),'info' => __('Select a gallery title', THEME_TEXTDOMAIN),]),
    Field::text('gal-subtitle', ['title' => __('Subtitle', THEME_TEXTDOMAIN),'info' => __('Select a gallery subtitle', THEME_TEXTDOMAIN),]),
    Field::text('gal-btn-text', ['title' => __('Button text', THEME_TEXTDOMAIN),'info' => __('Select a gallery button text', THEME_TEXTDOMAIN),])
  ]);
  Metabox::make(__('Front Services', THEME_TEXTDOMAIN), 'page')->set([
    Field::infinite('services', [
      Field::text('icon', [
        'title' => 'Icon',
        'info' => 'Set Icon Class'
      ]),
      Field::text('serv-title', [
        'title' => 'Title',
        'info' => 'Set Service Title'
      ]),
      Field::textarea('subtitle',[
        'title' => 'Title',
        'info' => 'Set Subtitle Text',
      ])
    ], [
      'title' => 'Services',
      'limit' => 3
    ])
  ]);
  Metabox::make(__('About', THEME_TEXTDOMAIN), 'page')->set([
    Field::infinite('about', [
      Field::text('timeline',[
        'title' => 'Timeline',
        'info' => 'Set timeline data'
      ]),
      Field::text('title', [
        'title' => 'Title',
        'info' => 'Set About Icon',
      ]),
      Field::media('icon', [
        'title' => 'Icon',
        'type' => ['image', 'application']
      ]),
      Field::textarea('about-text',[
        'title' => 'Main Text'
      ]),
      Field::text('type', [
        'title' => 'Class',
        'info' => 'Set class'
      ])
    ], [
      'title' => 'About',
      'limit' => 4
    ])
  ]);

  Metabox::make(__('Clients', THEME_TEXTDOMAIN),'page')->set([
    Field::infinite('clients', [
      Field::text('title',[
        'title' => 'Title',
        'info' => 'Set Client Title'
      ]),
      Field::media('logo', [
        'title' => 'Logo',
        'type' => ['image', 'application']
      ]),
      Field::text('site', [
        'title' => 'Clients Site',
        'info' => 'Set Client Site Address'
      ])
    ], [
      'title' => 'Clients'
    ])
  ]);
}

