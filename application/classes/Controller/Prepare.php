<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Prepare extends Controller_Common {

  public function action_index() {
    $nav = View::factory('/navs/home');
    $this->template->nav = $nav;

    if (isset($_POST)) {
      $type = ORM::factory('types')->where('id', '=', $_POST['type_id'])->find();
      $pet = ORM::factory('pettypes')->where('id', '=', $_POST['pettype_id'])->find();
      // нужно проверить что пришло город или регион
      if ($_POST['help'] == 1 ) {
        // по города
        $city = ORM::factory('citys')->where('id', '=', $_POST['city_id'])->find();
        $string = $type->lat . "/" . $pet->lat . "/" . $city->title."/?";
      } 
      if ($_POST['help'] == 2 ) {
        // по region
//        echo $_POST['city_id']; 
//        die();
        $region = ORM::factory('regions')->where('id', '=', $_POST['city_id'])->find();
        $string = $type->lat . "/" . $pet->lat . "/" . $region->title."/?";
        
      }
      if ($_POST['help'] == 3 ) {
        // по России
        $string = $type->lat . "/" . $pet->lat . "/Россия/?";
      }
      
      $d =  "d=".$_POST['type_id'].",".$_POST['pettype_id'].",".$_POST['city_id'].",".$_POST['help']."&";
      $string = $string.$d;
      if ($_POST['q']<>'') {
        $string = $string."q=".$_POST['q']."&";
      }
      if (isset($_POST['match'])) {
        $string = $string."match=".$_POST['match']."&";
      }
      if (isset($_POST['photo'])) {
        $string = $string."photo=".$_POST['photo']."&";
      }
      if (isset($_POST['male'])) {
        $string = $string."male=".$_POST['male']."&";
      }
      if (isset($_POST['female'])) {
        $string = $string."female=".$_POST['female']."&";
      }
      if (isset($_POST['breed_id'])) {
        $string = $string."breed_id=".$_POST['breed_id']."&";
      }
      echo $string;
      Controller::redirect('/search/find/'.$string);
    } else {
      
    }
  }

}

// End Page
