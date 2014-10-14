<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Empty extends Controller_Template {

  public $template = 'layouts/empty';

  public function before() {
    parent::before();
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustitle = $session->get('ustitle');
    $ustype_id = $session->get('ustype_id');
    $this->template->content = '';
  }

}

// End Common