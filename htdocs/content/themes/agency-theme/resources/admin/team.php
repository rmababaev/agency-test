<?php
$users = array(
  ['Kay Garland','kaypass','garland@mail.ru'],
  ['Larry Parker','larrypass','parker@mail.ru'],
  ['Diana Pertersen','dianapass','pertersen@mail.ru'],
);

foreach ($users as $user) {
  $new_user = User::make($user[0],$user[1],$user[2]);
}
$new_user = User::addSections([
  Section::make('post','User Post'),
  Section::make('social','User Social addresses'),
]);
$new_user->addFields([
  'post' => [
    Field::text('post', ['title' => 'Post'])
  ],
  'social' => [
    Field::text('twitter', ['title' => 'Twitter account address']),
    Field::text('facebook', ['title' => 'Facebook account address']),
    Field::text('linkedin', ['title' => 'LinkedIn account address'])
  ]
]);

