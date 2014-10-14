<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Common {

  
  
  public function action_find() {
   
    
    $nav = View::factory('/navs/home');
    $content = View::factory('/home');
    $this->template->nav = $nav;
    $result = ORM::factory('ads')->where('active', '=', '1')->find_all();

    $content->result = $result;
    $this->template->content = $content;
    $this->template->nav = $nav;
  }

}

// End Page
