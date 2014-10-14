<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 17:30:31 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 17:30:31 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('types')
#3 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(17): Kohana_ORM::factory('types')
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php:171