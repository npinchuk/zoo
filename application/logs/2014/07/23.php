<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-23 10:53:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: search ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-23 10:53:31 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('search')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-23 11:02:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: search ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-23 11:02:53 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('search')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-23 12:14:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH/views/layouts/search.php [ 15 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:15
2014-07-23 12:14:19 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 15, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(120): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:15
2014-07-23 12:15:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH/views/layouts/search.php [ 15 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:15
2014-07-23 12:15:55 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 15, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(120): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:15
2014-07-23 14:33:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/Controller/Page.php [ 61 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 14:33:51 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 61, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 14:33:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: p ~ APPPATH/classes/Controller/Page.php [ 52 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:52
2014-07-23 14:33:55 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 52, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:52
2014-07-23 14:34:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: p ~ APPPATH/classes/Controller/Page.php [ 52 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:52
2014-07-23 14:34:04 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 52, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:52
2014-07-23 14:34:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: p ~ APPPATH/classes/Controller/Page.php [ 52 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:52
2014-07-23 14:34:05 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 52, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:52
2014-07-23 14:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Controller/Page.php [ 53 ] in file:line
2014-07-23 14:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 14:47:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `ads`.`id` AS `id`, `ads`.`author_id` AS `author_id`, `ads`.`author_name` AS `author_name`, `ads`.`phone` AS `phone`, `ads`.`summary` AS `summary`, `ads`.`body` AS `body`, `ads`.`region_id` AS `region_id`, `ads`.`city_id` AS `city_id`, `ads`.`type_id` AS `type_id`, `ads`.`pettype_id` AS `pettype_id`, `ads`.`breed_id` AS `breed_id`, `ads`.`price` AS `price`, `ads`.`active` AS `active`, `ads`.`created` AS `created`, `ads`.`timestamp` AS `timestamp` FROM `ads` AS `ads` WHERE `type_id` = '1' AND (`active` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 14:47:10 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ads`.`i...', 'Model_Ads', Array)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(53): Kohana_ORM->find_all()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 15:04:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Controller/Page.php [ 53 ] in file:line
2014-07-23 15:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 17:15:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `ads`.`id` AS `id`, `ads`.`author_id` AS `author_id`, `ads`.`author_name` AS `author_name`, `ads`.`phone` AS `phone`, `ads`.`summary` AS `summary`, `ads`.`body` AS `body`, `ads`.`region_id` AS `region_id`, `ads`.`city_id` AS `city_id`, `ads`.`type_id` AS `type_id`, `ads`.`pettype_id` AS `pettype_id`, `ads`.`breed_id` AS `breed_id`, `ads`.`sex` AS `sex`, `ads`.`price` AS `price`, `ads`.`active` AS `active`, `ads`.`created` AS `created`, `ads`.`timestamp` AS `timestamp` FROM `ads` AS `ads` WHERE (`active` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 17:15:10 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ads`.`i...', 'Model_Ads', Array)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(64): Kohana_ORM->find_all()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-07-23 17:22:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:66
2014-07-23 17:22:10 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(66): Kohana_ORM->find_all()
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:66
2014-07-23 17:22:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 17:22:20 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(61): Kohana_ORM->find_all()
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 17:22:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 17:22:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(61): Kohana_ORM->find_all()
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 17:22:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/Controller/Page.php [ 72 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:72
2014-07-23 17:22:55 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 72, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:72
2014-07-23 17:28:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 17:28:00 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(61): Kohana_ORM->find_all()
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 18:01:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 18:01:59 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(61): Kohana_ORM->find_all()
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:61
2014-07-23 18:02:09 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/layouts/result.php [ 16 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php:16
2014-07-23 18:02:09 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php(16): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 16, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(31): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(120): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php:16
2014-07-23 18:02:45 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/views/layouts/result.php [ 17 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php:17
2014-07-23 18:02:45 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php(17): Kohana_Core::error_handler(2, 'Illegal string ...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(31): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(120): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php:17
2014-07-23 18:04:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:62
2014-07-23 18:04:19 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(62): Kohana_ORM->find_all()
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:62
2014-07-23 18:08:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/Controller/Page.php [ 62 ] in file:line
2014-07-23 18:08:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-23 18:15:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Page.php [ 63 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:63
2014-07-23 18:15:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 63, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:63