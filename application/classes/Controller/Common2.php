<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common2 extends Controller_Template {

  public $template = 'layouts/login';

  public function before() {
    parent::before();
    View::set_global('title', 'Unipets.ru');
    View::set_global('description', 'Unipets.ru');
    $this->template->content = '';
  }

}

// End Common