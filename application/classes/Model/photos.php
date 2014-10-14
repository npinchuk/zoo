<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Photos extends ORM {

  protected $_table_name = 'photos';
  protected $_primary_key = 'id';
  protected $_belongs_to = array(
      'author' => array(
          'model' => 'users',
          'foreign_key' => 'author_id',
      ), 'ad' => array(
          'model' => 'ads',
          'foreign_key' => 'ad_id',
      )
  );

}
