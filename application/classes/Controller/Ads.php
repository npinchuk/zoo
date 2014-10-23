<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ads extends Controller_Common {

  public function action_list() {
    $content = View::factory('/ads/list');
     $head = View::factory('/navs/head'); // верхняя шапка
    $nav = View::factory('/navs/left'); // левое меню
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    $ustype_id = $session->get('ustype_id');
    if ($usid > 0) {
      View::set_global('pagetitle', 'Личный кабинет');
      View::set_global('breadcrumb', '');
      $activeads = ORM::factory('ads')->where('author_id', '=', $usid)->where('active', '=', 1)->or_where('active', '=', 4)->find_all();
      $content->activeads = $activeads;

      $endads = ORM::factory('ads')->where('author_id', '=', $usid)->where('active', '=', 2)->find_all();
      $content->endads = $endads;

      $blockads = ORM::factory('ads')->where('author_id', '=', $usid)->where('active', '=', 3)->find_all();
      $content->blockads = $blockads;

      $modads = ORM::factory('ads')->where('active', '=', 4)->find_all();
      $content->modads = $modads;
      $adactivecount = ORM::factory('ads')->where('author_id', '=', $usid)->where('active', '=', 1)->find_all()->count();
      $content->adactivecount = $adactivecount;
      $adendcount = ORM::factory('ads')->where('author_id', '=', $usid)->where('active', '=', 2)->find_all()->count();
      $content->adendcount = $adendcount;
      $adblockcount = ORM::factory('ads')->where('author_id', '=', $usid)->where('active', '=', 3)->find_all()->count();
      $content->adblockcount = $adblockcount;
      $admodcount = ORM::factory('ads')->where('active', '=', 4)->find_all()->count();
      $content->admodcount = $admodcount;
      $this->template->content = $content;
      $this->template->nav = $nav;
      $this->template->head = $head;
    } else {
      Controller::redirect('/');
    }
  }

  public function action_new() {
    $nav = View::factory('/navs/ads');
    $this->template->nav = $nav;

    if ($this->usid > 0) {
      $content = View::factory('/ads/new');
      $userinfo = ORM::factory('users')->where('id', '=', $this->usid)->find();
      $content->userinfo = $userinfo;
      $types = ORM::factory('types')->find_all();
      $content->types = $types;
      $pettypes = ORM::factory('pettypes')->find_all();
      $content->pettypes = $pettypes;
      $breeds = ORM::factory('breeds')->where('pettype_id', '=', 1)->find_all();
      $content->breeds = $breeds;
      $regions = ORM::factory('regions')->where('country_id', '=', 3159)->find_all();
      $content->regions = $regions;
      View::set_global('pagetitle', 'Личный кабинет');
      View::set_global('breadcrumb', '');
      // делаем предварительную запись 
      $ad = ORM::factory('ads');
      $ad->author_id = $this->usid;
      $ad->created = date("Y-m-d H:i:s");
      $ad->active = 0;
      $ad->save();
      $content->ad = $ad;
      $session = Session::instance();
      $session->set('ad', $ad->id);
      $this->template->content = $content;
    } else {
      Controller::redirect('/login/login');
    }
  }

  public function action_edit() {
    $nav = View::factory('/navs/ads');
    $this->template->nav = $nav;
    $session = Session::instance();
//    $usid = $session->get('usid');
//    $ustitle = $session->get('ustitle');
//    $ustype_id = $session->get('ustype_id');
//    echo $this->usid;
    if ($this->usid > 0) {
      $id = $this->request->param('id');
      $content = View::factory('/ads/edit');
      $ad = ORM::factory('ads')->where('id', '=', $id)->where('active', '<', 5)->find();
      if ($ad->id > 0) {
        // проверяем - может ли пользователь редактировать это объявления? 
        if ($ad->author_id == $this->usid) {
          // это он - все ок
          $content->ad = $ad;
          $types = ORM::factory('types')->find_all();
          $content->types = $types;
          $pettypes = ORM::factory('pettypes')->find_all();
          $content->pettypes = $pettypes;
          $breeds = ORM::factory('breeds')->where('pettype_id', '=', 1)->find_all();
          $content->breeds = $breeds;
          if ($ad->region_id <> 0) {
            $citys = ORM::factory('citys')->where('region_id','=',$ad->region_id)->find_all();
            $content->citys = $citys;
          } 
          // находим фото
          $photos = ORM::factory('photos')->where('ad_id','=',$ad->id)->find_all();
          $content->photos = $photos;
          $regions = ORM::factory('regions')->where('country_id', '=', 3159)->find_all();
          $content->regions = $regions;
        } else {
          //  пользователь пытается открыть чужое объявление
        }
      } else {
        // такого объявления нет
      }


      View::set_global('pagetitle', 'Личный кабинет');
      View::set_global('breadcrumb', '');
      // делаем предварительную запись 
      $ad = ORM::factory('ads')->where('id', '=', $id)->find();
      $content->ad = $ad;
      $session->set('ad', $ad->id);
      $this->template->content = $content;
    } else {
      Controller::redirect('/login/login');
    }
  }

  public function action_item() {
    $content = View::factory('/ads/item');
    $nav = View::factory('/navs/home');
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    $id = $this->request->param('id');
    $tmp = explode("_", $id);
    $ad = ORM::factory('ads')->where('id', '=', $tmp[0])->find();
    $photos = ORM::factory('photos')->where('ad_id', '=', $ad->id)->find_all();
    $photo = ORM::factory('photos')->where('ad_id', '=', $ad->id)->find();
    $content->photo = $photo;
    $content->photos = $photos;
    $content->ad = $ad;
    $this->template->content = $content;
    $this->template->nav = $nav;
  }

}

// End Page
