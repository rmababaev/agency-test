<?php
PostType::make('portfolio', 'Portfolio', 'portfolios')->set([
  'public' => true,
  'supports' => ['title'],
]);

Metabox::make(__('Portfolio Fields',THEME_TEXTDOMAIN), 'portfolio')->set([
  Field::media('cover',[
    'title' => 'Cover',
    'type' => ['image', 'application']
  ]),
  Field::text('subtitle', [
    'title' => 'SubTitle',
    'info' => 'Set Portfolio Subtitle'
  ]),
  Field::editor('main-content',[
    'title' => 'Content'
  ]),
]);