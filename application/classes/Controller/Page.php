<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {
  // Главная страница
  public function action_index() {
    
//  echo $this->usid;
    $content = View::factory('/home'); // общий файл контента
    $head = View::factory('/navs/head'); // верхняя шапка
    $nav = View::factory('/navs/left'); // левое меню
    $session = Session::instance(); // стартуем сессии
   
    View::set_global('pagetitle', 'Главная страница');
    View::set_global('breadcrumb', '');
    // для поиска
    $types = ORM::factory('types')->find_all();
    $content->types = $types;
    $pettypes = ORM::factory('pettypes')->find_all();
    $content->pettypes = $pettypes;
    $bigcity = array();
    $bigcity[] = 4848; // Ростов на дону
//    $bigcity[] = 4400; // МСК
//    $bigcity[] = 4962; // СПБ
    $bigcity[] = 3472; // Волгоград
    $bigcity[] = 3345; // Уфа
    $bigcity[] = 3612; //НН
    $bigcity[] = 4079; // Краснодар
    $bigcity[] = 4549; // Новосибирск
    $bigcity[] = 4580; // ОМСк
    $bigcity[] = 4720; // Пермь 
    $bigcity[] = 4917; //Самара
    $bigcity[] = 5106; // Екатеринбург
    $bigcity[] = 5269; // Казань
    $bigcity[] = 5539; // Челябинск
    // pagination
    $limit = 3; // показывать объявлений на странице
    if (isset($_GET['p'])) {
      // если прилетела какая то конкретно страница
      $p = $_GET['p'];
      // смещение
      $offset = $limit * $p;
    } else {
      $p = 0;
      $offset = 0;
    }
    // end pagination
    //  если это режим поиска

    if (isset($_GET['type_id'])) {
      // режим поиска
//         = :topic_id')->param(':topic_id', $id)
//        $ads = DB::query(Database::SELECT, 'SELECT * FROM ads where type_id = :type_id and pettype_id = :pettype_id   ')->param(':type_id', $_GET['type_id'])->param(':pettype_id', $_GET['pettype_id']);
      $ads = DB::select()->from('ads');
      $ads = $ads->where('active', '=', 1);
      if (isset($_GET['type_id']) and ( $_GET['type_id'] <> 0)) {
        $ads = $ads->where('type_id', '=', $_GET['type_id']);
        $content->typecurr = $_GET['type_id'];
      }

      if (isset($_GET['pettype_id']) and ( $_GET['pettype_id'] <> 0)) {
        $ads = $ads->where('pettype_id', '=', $_GET['pettype_id']);
        $content->pettypecurr = $_GET['pettype_id'];
      }
      if (isset($_GET['breed_id']) and ( $_GET['breed_id'] <> 0)) {
        $ads = $ads->where('breed_id', '=', $_GET['breed_id']);
        $content->breed_id = $_GET['breed_id'];
      }

      if ((isset($_GET['male'])) and ( isset($_GET['female']))) {
        // ищем все
        $content->female = 1;
        $content->male = 1;
      } else {
        // один из них
        if ((!isset($_GET['male'])) and ( !isset($_GET['female']))) {
          // ни один из них
        } else {
          if (isset($_GET['male'])) {
            $ads = $ads->where('sex', '=', 1);

            $content->male = 1;
          }
          if (isset($_GET['female'])) {
            $ads = $ads->where('sex', '=', 2);
            $content->female = 1;
          }
        }
      }

      if (isset($_GET['city_id'])) {

        if ($_GET['city_id'] <> 0) {

          if ($_GET['help'] == 1) {
            // город
            $ads = $ads->where('city_id', '=', $_GET['city_id']);
//              $result = $result->where('city_id', '=', $_GET['city_id']);
            $content->city_id = $_GET['city_id'];
            $content->help = $_GET['help'];
            $bigcity[] = $_GET['city_id']; // город
            $citycurr = $_GET['city_id'];
            $content->citycurr = $citycurr;
          }
          if ($_GET['help'] == 2) {
            // region
            $ads = $ads->where('region_id', '=', $_GET['city_id']);
//              $result = $result->where('region_id', '=', $_GET['city_id']);
            $region = ORM::factory('regions')->where('id', '=', $_GET['city_id'])->find();
            $content->region = $region;
            $content->help = $_GET['help'];
          }
          if ($_GET['help'] == 3) {

            // rus
            $content->help = $_GET['help'];
            $content->city_id = 0;
          }
        }
      }


      if ($_GET['q']) {
        // Очищаем от html-тегов и прочего
        $search = mb_strtoupper(str_ireplace("ё", "е", strip_tags($_GET['q'])), "UTF-8");
//        $search = $this->_clear_var($_GET['q']);
        $request = $search;
        if (!empty($search)) {
          $dir = MODPATH . '/phpmorphy/vendor/phpmorphy/dicts';
          $lang = 'ru_RU';
          $opts = array(
            'storage' => PHPMORPHY_STORAGE_FILE,
          );
          $morphy = new phpMorphy($dir, $lang, $opts);
          // Обрабатываем данные 
          if (mb_strlen($search, "UTF-8") > 2) {
            preg_match_all('/([a-zа-яё]+)/ui', mb_strtoupper($search, "UTF-8"), $search_words);
            $words = $morphy->lemmatize($search_words[1]);
            $s_words = array();
            $pre_result = array();
            foreach ($words as $k => $w) {
              if (!$w)
                $w[0] = $k;
              if (mb_strlen($w[0], "UTF-8") > 3) {
                $s_words[] = $w[0];
              }
            }
            $data = array();
            $data[] = 0;
            if (!count($s_words)) {
              // Обрабатываем ошибку (нет ни одного слова длиннее 3 символов)
            } else {
              foreach ($s_words as $s_word) {
                $search_index = ORM::factory('searchindex')->where('word', '=', $s_word)->find_all();

                if (isset($search_index)) {
                  foreach ($search_index as $si) {
                    $data[] = $si->ad_id;
                  }
                } else {
                  
                }
              }
              $ads = $ads->where('id', 'in', $data);
//              $result = $result->where('id', 'in', $data);
            }
          } else {
            // Обрабатываем ошибку - введен слишком короткий запрос
          }
        }
        $content->q = $_GET['q'];
      }
      $countall = $ads->execute()->count();
//echo "countall = ".$countall."ds";
//die();
      $ads = $ads->limit($limit)->offset($offset)->execute()->as_array();
//        echo "<pre>";
//        print_r($ads);
//        die();
      foreach ($ads as $value) {
        //echo $value['id'];
      }
//           die();
//      $result = $result->where('active', '=', 1)->limit($limit)->offset($offset);
//      $ads = $result->find_all();
      if ($countall > 1) {
        $pages = ceil($countall / $limit);
        $pages--;
      }
      if ($countall == 1) {
        // одна запись
        $pages = 1;
      }
      if ($countall == 0) {
        // ничего не нашли
        $pages = 1;
      }
    //  echo $countall;
//      die();
      $content->p = $p;
      $content->countall = $countall;
      $content->limit = $limit;
      $content->pages = $pages;
    }



    else {
      // режим  не поиска
       $ads = DB::select()->from('ads');
      $ads = $ads->where('active', '=', 1)->limit($limit)->offset($offset)->execute()->as_array(); //300
      $countall = ORM::factory('ads')->where('active', '=', 1)->count_all(); //300
      $pages = ceil($countall / $limit) - 1;  //  100/3 = 33 -> 34
      $content->p = $p; // текущая страница
      $content->countall = $countall;
      $content->limit = $limit;
      $content->pages = $pages;
    }

    if (isset($_GET['help'])) {
      if ($_GET['help'] == 2) {
        // regions
        $citys = ORM::factory('citys')->where('region_id', '=', $_GET['city_id'])->order_by('title')->find_all();
      } else {
        $citys = ORM::factory('citys')->where('id', 'in', $bigcity)->order_by('title')->find_all();
      }
    } else {
      $citys = ORM::factory('citys')->where('id', 'in', $bigcity)->order_by('title')->find_all();
    }

    $content->citys = $citys;
    $regions = ORM::factory('regions')->where('country_id', '=', 3159)->find_all();
    $content->regions = $regions;

    $content->result = $ads;
    $this->template->content = $content;
    $this->template->nav = $nav;
    $this->template->head = $head;
  }

}

// End Page
