<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-09 10:04:59 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'rok.types' doesn't exist [ SHOW FULL COLUMNS FROM `types` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php:359
2014-06-09 10:04:59 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('types')
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(16): Kohana_ORM::factory('types')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/MySQL.php:359
2014-06-09 10:08:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pettypes ~ APPPATH/views/home.php [ 44 ] in /Applications/MAMP/htdocs/zoo/application/views/home.php:44
2014-06-09 10:08:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/home.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 44, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(140): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/home.php:44
2014-06-09 10:09:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pettypes ~ APPPATH/views/home.php [ 44 ] in /Applications/MAMP/htdocs/zoo/application/views/home.php:44
2014-06-09 10:09:14 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/home.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 44, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(140): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/home.php:44
2014-06-09 10:11:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/home.php [ 70 ] in file:line
2014-06-09 10:11:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line