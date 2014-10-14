<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Ads extends ORM {

  protected $_table_name = 'ads';
  protected $_primary_key = 'id';
  protected $_belongs_to = array(
      'author' => array(
          'model' => 'users',
          'foreign_key' => 'author_id',
      ), 'region' => array(
          'model' => 'regions',
          'foreign_key' => 'region_id',
      ), 'city' => array(
          'model' => 'citys',
          'foreign_key' => 'city_id',
      ), 'type' => array(
          'model' => 'types',
          'foreign_key' => 'type_id',
      ), 'pettype' => array(
          'model' => 'pettypes',
          'foreign_key' => 'pettype_id',
      ), 'breed' => array(
          'model' => 'breeds',
          'foreign_key' => 'breed_id',
      )
  );
}
