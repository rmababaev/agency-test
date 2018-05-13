<?php
namespace Theme\Controllers;

use Theme\Models\Portfolios;
use Themosis\Facades\Asset;
use Themosis\Route\BaseController;
use Theme\Models\Front;

class Pages extends BaseController
{
  public function __construct()
  {
    Asset::add('ag-bootstrap','vendor/bootstrap/css/bootstrap.min.css',false, 'style');
    Asset::add('ag-font','vendor/font-awesome/css/font-awesome.min.css', false, 'style');
    Asset::add('ag-font-mont','https://fonts.googleapis.com/css?family=Montserrat:400,700', false, false, 'style');
    Asset::add('ag-font-kaush','https://fonts.googleapis.com/css?family=Kaushan+Script', false, false, 'style');
    Asset::add('ag-font-roboto','https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', false, false, 'style');
    Asset::add('ag-theme','css/agency.min.css', false, 'style');

    Asset::add('ag-jquery', 'vendor/jquery/jquery.min.js', false, false, true, 'script');
    Asset::add('ag-bootstrap_bundle', 'vendor/bootstrap/js/bootstrap.bundle.min.js', false, false, true, 'script');
    Asset::add('ag-jquery-easing', 'vendor/jquery-easing/jquery.easing.min.js', false, false, true, 'script');
    Asset::add('ag-bootstrap_validation', 'js/bootstrapvalidation.min.js', false, false, true, 'script');
    Asset::add('ag-script', 'js/agency.min.js', false, false, true, 'script');
  }
  public function home(Front $front, Portfolios $portfolios, $post){
    $front_fields = $front->page_meta($post->ID);

    $portfolios_data = $portfolios->all()->get();
    $portfolios_data = $portfolios->get_portfolios_meta($portfolios_data);

    $users = get_users(['role__in' => 'subscriber']);

    return view('pages.home',[
      'front_fields' => $front_fields,
      'portfolios' => $portfolios_data,
      'users' => $users
    ]);
  }

}