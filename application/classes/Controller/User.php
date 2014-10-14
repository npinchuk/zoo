<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Common {

  public function action_profile() {
    $nav = View::factory('/navs/home');
    $content = View::factory('/user/profile');
    
    $this->template->content = $content;
    $this->template->nav = $nav;
  }

}

// End Page
