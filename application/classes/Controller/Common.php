<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

  public $template = 'layouts/main';
  public $session;
  public $usid;
  public $ustype_id;
  public $activated;
  public $ustitle;
  public $manager;
  public $email;
  public $region_id;
  public $city_id;
  public $emailactive;
  public $phoneactive;
  public $phone;
  

  public function before() {
    parent::before();
    $session = Session::instance();
    $usid = $session->get('usid');
    $ustype_id = $session->get('ustype_id');
    $activated = $session->get('activated');
    $ustitle = $session->get('ustitle');
    $manager = $session->get('manager');
    $email = $session->get('email');
    $region_id = $session->get('region_id');
    $city_id = $session->get('city_id');
    $emailactive = $session->get('emailactive');
    $phoneactive = $session->get('phoneactive');
    $phone = $session->get('phone');


    // передаем в темлпейт
    View::set_global('usid', $usid);
    View::set_global('ustype_id', $ustype_id);
    View::set_global('activated', $activated);
    View::set_global('manager', $manager);
    View::set_global('ustitle', $ustitle);
    View::set_global('email', $email);
    View::set_global('region_id', $region_id);
    View::set_global('city_id', $city_id);
    View::set_global('emailactive', $emailactive);
    View::set_global('phoneactive', $phoneactive);
    View::set_global('phone', $phone);
    
    View::set_global('pagetitle', 'Название страницы');
    View::set_global('breadcrumb', '');
    View::set_global('title', 'Unipets.ru');
    View::set_global('description', 'Unipets.ru');

    // передаем в конроллер
    $this->usid = $usid;
    $this->ustype_id = $ustype_id;
    $this->activated = $activated;
    $this->ustitle = $ustitle;
    $this->manager = $manager;
    $this->email = $email;
    $this->region_id = $region_id;
    $this->city_id = $city_id;
    $this->emailactive = $emailactive;
    $this->phoneactive = $phoneactive;
    $this->phone = $phone;

    $this->template->content = '';
  }

}

// End Common