<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Districts extends ORM {

   protected $_table_name = 'districts';
   protected $_primary_key = 'id';
   protected $_belongs_to = array(
      'city' => array(
          'model' => 'citys',
          'foreign_key' => 'city_id',
      )
  );

  

}