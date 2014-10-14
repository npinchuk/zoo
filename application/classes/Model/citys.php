<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Citys extends ORM {

  protected $_table_name = 'citys';
  protected $_primary_key = 'id';
  protected $_belongs_to = array(
      'region' => array(
          'model' => 'regions',
          'foreign_key' => 'region_id',
      ),
      'country' => array(
          'model' => 'countrys',
          'foreign_key' => 'country_id',
      )
  );

}
