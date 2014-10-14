<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Breeds extends ORM {

  protected $_table_name = 'breeds';
  protected $_primary_key = 'id';
  protected $_belongs_to = array(
      'pettype' => array(
          'model' => 'pettypes',
          'foreign_key' => 'pettype_id',
      )
  );
}
