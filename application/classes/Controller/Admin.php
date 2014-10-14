<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Common {

  public function action_removetmpads() {
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    if ($ustype_id == 1) {
      $content = View::factory('/admin/removetmpads');
      $nav = View::factory('/navs/admin');
      $timestamp = time();
      echo $timestamp;
      $date_time_array = getdate($timestamp);
      $timestamp = date("Y-m-d H:i:s", mktime($date_time_array['hours'], $date_time_array['minutes'], $date_time_array['seconds'], $date_time_array['mon'], $date_time_array['mday'] - 1, $date_time_array['year']));
      $finding = ORM::factory('ads')->where('created', '<', $timestamp)->where('active', '=', 0)->find_all();
      foreach ($finding as $value) {
        $value->delete();
      }

      $this->template->content = $content;
      $this->template->nav = $nav;
    } else {
      Controller::redirect('/');
    }
  }

  public function action_index() {
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    if ($ustype_id == 1) {
      $nav = View::factory('/navs/admin');
      $this->template->nav = $nav;
      $content = View::factory('/admin/index');
      $userinfo = ORM::factory('users')->where('id', '=', $usid)->find();
      $content->userinfo = $userinfo;
      $types = ORM::factory('types')->find_all();
      $content->types = $types;
      $pettypes = ORM::factory('pettypes')->find_all();
      $content->pettypes = $pettypes;
      $regions = ORM::factory('regions')->where('country_id', '=', 3159)->find_all();
      $content->regions = $regions;
      View::set_global('pagetitle', 'Личный кабинет');
      View::set_global('breadcrumb', '');
      // делаем предварительную запись 
      $ad = ORM::factory('ads');
      $ad->author_id = $usid;
      $ad->created = date("Y-m-d H:i:s");
      $ad->active = 0;
      $ad->save();
      $content->ad = $ad;
      $session->set('ad', $ad->id);
      $this->template->content = $content;
    } else {
      Controller::redirect('/');
    }
  }

  public function action_finishads() {
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    if ($ustype_id == 1) {
      $content = View::factory('/admin/finishads');
      $nav = View::factory('/navs/admin');
      $timestamp = time();
      echo $timestamp;
      $date_time_array = getdate($timestamp);
      $timestamp = date("Y-m-d H:i:s", mktime($date_time_array['hours'], $date_time_array['minutes'], $date_time_array['seconds'], $date_time_array['mon'] - 1, $date_time_array['mday'], $date_time_array['year']));
      $finding = ORM::factory('ads')->where('created', '<', $timestamp)->where('active', '=', 1)->find_all();
      foreach ($finding as $value) {
        $value->active = 2;
        $value->update();
      }

      $this->template->content = $content;
      $this->template->nav = $nav;
    } else {
      Controller::redirect('/');
    }
  }

  public function action_adlist() {
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    if ($ustype_id == 1) {
      $content = View::factory('/admin/adlist');
      $nav = View::factory('/navs/admin');
      $activeads = ORM::factory('ads')->where('active', '=', 1)->find_all();
      $content->activeads = $activeads;

      $endads = ORM::factory('ads')->where('active', '=', 2)->find_all();
      $content->endads = $endads;

      $blockads = ORM::factory('ads')->where('active', '=', 3)->find_all();
      $content->blockads = $blockads;

      $modads = ORM::factory('ads')->where('active', '=', 4)->find_all();
      $content->modads = $modads;

      $delads = ORM::factory('ads')->where('active', '=', 5)->find_all();
      $content->delads = $delads;

      $adactivecount = ORM::factory('ads')->where('active', '=', 1)->find_all()->count();
      $content->adactivecount = $adactivecount;
      $adendcount = ORM::factory('ads')->where('active', '=', 2)->find_all()->count();
      $content->adendcount = $adendcount;
      $adblockcount = ORM::factory('ads')->where('active', '=', 3)->find_all()->count();
      $content->adblockcount = $adblockcount;
      $admodcount = ORM::factory('ads')->where('active', '=', 4)->find_all()->count();
      $content->admodcount = $admodcount;
      $addelcount = ORM::factory('ads')->where('active', '=', 5)->find_all()->count();
      $content->addelcount = $addelcount;

      $this->template->content = $content;
      $this->template->nav = $nav;
    } else {
      Controller::redirect('/');
    }
  }

  public function action_changestatus() {
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    if ($ustype_id == 1) {
      $id = $this->request->param('id');
      $secondid = $this->request->param('second');


      $upd = ORM::factory('ads')->where('id', '=', $id)->find();
      $upd->active = $secondid;

      // если активируем нужно прописать новую дату.
      if ($secondid == 1) {
        $upd->created = date("Y-m-d H:i:s");
      }

      $upd->update();
      Controller::redirect('/admin/adlist');
    } else {
      Controller::redirect('/');
    }
  }

  public function action_searchindex() {

    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    if ($ustype_id == 1) {
      $nav = View::factory('/navs/admin');
      $this->template->nav = $nav;
      $dir = MODPATH . '/phpmorphy/vendor/phpmorphy/dicts';
      $lang = 'ru_RU';
      $opts = array(
          'storage' => PHPMORPHY_STORAGE_FILE,
      );
      $morphy = new phpMorphy($dir, $lang, $opts);
      // удаляем все значения из searchindex

      $offset = $this->request->param('id');
      if ($offset == 1) {
        DB::query(Database::DELETE, "TRUNCATE TABLE `searchindex`")->execute();
      }
      $data = array();
      $ads = ORM::factory('ads')->where('active', '=', 1)->find_all();
      foreach ($ads as $post) {
        // Очищаем от html, заменяем Ё на Е и приводим к верхнему регистру
        $summary = mb_strtoupper(str_ireplace("ё", "е", strip_tags($post->summary)), "UTF-8");
        $body = mb_strtoupper(str_ireplace("ё", "е", strip_tags($post->body)), "UTF-8");
        // Разбиваем текст на слова
        preg_match_all('/([a-zа-яё]+)/ui', $summary, $word_summary);
        preg_match_all('/([a-zа-яё]+)/ui', $body, $word_body);
        // Получаем нормальную форму слова, например помидоров => помидор
        $start_form_summary = $morphy->lemmatize($word_summary[1]);
        $start_form_body = $morphy->lemmatize($word_body[1]);
        
        
        foreach ($start_form_summary as $k => $w) {
          if (!$w) {
            // Если не получилось определить начальную форму слова, используем исходное слово
            $w[0] = $k;
          }
          if (mb_strlen($w[0], "UTF-8") > 3) { // Проверяем длину слова, не индексируем короткие слова
            if (!isset($words[$w[0]]))
              $words[$w[0]] = 0;
            $words[$w[0]]+= 5; // Устанавливаем вес для слова
          }
        }
        foreach ($start_form_body as $k => $w) {
          if (!$w) {
            // Если не получилось определить начальную форму слова, используем исходное слово
            $w[0] = $k;
          }
          if (mb_strlen($w[0], "UTF-8") > 3) { // Проверяем длину слова, не индексируем короткие слова
            if (!isset($words[$w[0]]))
              $words[$w[0]] = 0;
            $words[$w[0]]+= 2; // Устанавливаем вес для слова
          }
        }
        // Тут перебираем массив значений и заносим их в базу
        foreach ($words as $word => $weight) {
          $data['ad_id'] = $post->id;
          $data['word'] = $word;
          $data['weight'] = $weight;
          $addindex = ORM::factory('searchindex');
          $addindex->values($data);
          try {
            $addindex->save();
          } catch (ORM_Validation_Exception $e) {
            $errors = $e->errors('validation');
          }
        }
        unset($words);
      }
    } else {
      Controller::redirect('/');
    }
  }

}

// End Page
