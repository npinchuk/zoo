<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_Empty {

  public function action_getbreeds() {
    if ($_POST['pettype_id'] == 0) {
      // не выбрано ничего нужно убрать....
      echo "<select class='form-control'  name='breed_id'>";
      echo "<option value='0'>Не выбрана порода</option>";
      echo "</select>";
    } else {
      $breeds = ORM::factory('breeds')->where('pettype_id', '=', $_POST['pettype_id'])->find_all();
      echo "<select class='form-control'  name='breed_id'>";
      echo "<option value='0' selected>Все породы</option>";
      foreach ($breeds as $value) {
        echo "<option value='$value->id'>$value->title</option>";
      }
      echo "</select>";
    }
  }

  public function action_getdistrict() {
    if ($_POST['city_id'] == 0) {
      // не выбрано ничего нужно убрать....
      echo "<select class='form-control hidden'  name='district_id'>";
      echo "<option value='0'>Не выбрана порода</option>";
      echo "</select>";
    } else {
      $districts = ORM::factory('districts')->where('city_id', '=', $_POST['city_id'])->find_all();
      echo "<select class='form-control' name='district_id'>";
      echo "<option value='0' selected>Любой район</option>";
      foreach ($districts as $value) {
        echo "<option value='$value->id'>$value->title</option>";
      }
      echo "</select>";
    }
  }

  public function action_getcitys() {
    if ($_POST['region_id'] == 0) {
      // не выбрано ничего нужно убрать....
      echo "<select class='form-control hidden'  name='city_id'>";
      echo "<option value='0'>Не выбран регион</option>";
      echo "</select>";
    } else {
      $citys = ORM::factory('citys')->where('region_id', '=', $_POST['region_id'])->find_all();
      echo "<select class='form-control' name='city_id'>";
      echo "<option value='0' selected>Любой город</option>";
      foreach ($citys as $value) {
        echo "<option value='$value->id'>$value->title</option>";
      }
      echo "</select>";
    }
  }

  public function action_fileupload() {
    $extensions = array('jpeg', 'jpg', 'png');
    $max_size = 5000000;
    $path = DOCROOT . '/uploads/';
    $path2 = '/uploads/';
    $response = '';

    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    $ad = $session->get('ad');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($_FILES['image']['size'] > $max_size) {
        $response = 'File is too large';
      } else {
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        if (in_array($ext, $extensions)) {
          $uniq = $usid . "_" . $ad . "_" . date("_YmdHis_") . uniqid();
          $path = $path . $uniq . '.' . $ext;
          $path2 = $path2 . $uniq . '.' . $ext;
          $photo = ORM::factory('photos');
          $photo->author_id = $usid;
          $photo->ad_id = $ad;
          $photo->src = $path2;
          $photo->save();

          if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $response = "<img  src='$path2' class='smallpic'  /> <img src='/images/turn.png' class='turn' />
          <img src='/images/cross.png' class='cross' />";
          }
        } else {
          $response = 'Не выбрано изображение';
//          $response = print_r($_POST);
        }
      }
    }
    echo $response;
  }

  public function action_updatead() {
    $upd = ORM::factory('ads')->where('id', '=', $_POST['ad_id'])->find();
    // готовим название латинское
    $lat = $_POST['summary'];

    function rus2translit($string) {
      $converter = array(
          'а' => 'a', 'б' => 'b', 'в' => 'v',
          'г' => 'g', 'д' => 'd', 'е' => 'e',
          'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
          'и' => 'i', 'й' => 'y', 'к' => 'k',
          'л' => 'l', 'м' => 'm', 'н' => 'n',
          'о' => 'o', 'п' => 'p', 'р' => 'r',
          'с' => 's', 'т' => 't', 'у' => 'u',
          'ф' => 'f', 'х' => 'h', 'ц' => 'c',
          'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
          'ь' => "", 'ы' => 'y', 'ъ' => "",
          'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
          'А' => 'A', 'Б' => 'B', 'В' => 'V',
          'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
          'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
          'И' => 'I', 'Й' => 'Y', 'К' => 'K',
          'Л' => 'L', 'М' => 'M', 'Н' => 'N',
          'О' => 'O', 'П' => 'P', 'Р' => 'R',
          'С' => 'S', 'Т' => 'T', 'У' => 'U',
          'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
          'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
          'Ь' => "", 'Ы' => 'Y', 'Ъ' => "",
          'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya', ' ' => '_',
      );
      return strtr($string, $converter);
    }

    $upd->lat = rus2translit($lat);
    $upd->active = 4;
    $upd->values($_POST);
    $upd->update();
  }

  public function action_turnph() {
    $upd = ORM::factory('photos')->where('src', '=', $_POST['src'])->find();
    $upd->angle = $_POST['angle'];
    $upd->update();
  }

  public function action_removeph() {
    $upd = ORM::factory('photos')->where('ad_id', '=', $_POST['ad_id'])->where('src', '=', $_POST['src'])->find();
    $upd->delete();
  }
  
   public function action_sendsmscheck() {
     

  }

}

// End Page
