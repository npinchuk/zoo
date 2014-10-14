<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Regions extends ORM {

  protected $_table_name = 'regions';
  protected $_primary_key = 'id';
  protected $_belongs_to = array(
      'country_id' => array(
          'model' => 'regions',
          'foreign_key' => 'region_id',
      )
  );

}
