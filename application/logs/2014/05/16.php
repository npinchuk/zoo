<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-16 10:28:54 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'skstek' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /Applications/MAMP/htdocs/karma/modules/database/classes/Kohana/Database/MySQL.php:75
2014-05-16 10:28:54 --- DEBUG: #0 /Applications/MAMP/htdocs/karma/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('skstek')
#1 /Applications/MAMP/htdocs/karma/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /Applications/MAMP/htdocs/karma/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Applications/MAMP/htdocs/karma/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('arts')
#4 /Applications/MAMP/htdocs/karma/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /Applications/MAMP/htdocs/karma/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /Applications/MAMP/htdocs/karma/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /Applications/MAMP/htdocs/karma/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /Applications/MAMP/htdocs/karma/application/classes/Controller/Page.php(13): Kohana_ORM::factory('arts')
#9 /Applications/MAMP/htdocs/karma/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/karma/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/karma/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/karma/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/karma/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/karma/modules/database/classes/Kohana/Database/MySQL.php:75