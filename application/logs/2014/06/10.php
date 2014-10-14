<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-10 12:10:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ SELECT `citys`.`city_id` AS `city_id`, `citys`.`country_id` AS `country_id`, `citys`.`region_id` AS `region_id`, `citys`.`name` AS `name` FROM `citys` AS `citys` WHERE `id` IN (4848, 4400, 4962, 3472, 3345, 3612, 4079, 4549, 4580, 4720, 4917, 5106, 5269, 5539) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-06-10 12:10:48 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `citys`....', 'Model_Citys', Array)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(35): Kohana_ORM->find_all()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-06-10 13:49:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_breeds' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-06-10 13:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-10 13:50:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_breeds' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-06-10 13:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-10 13:50:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_breeds' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-06-10 13:50:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-10 13:51:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_breeds' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-06-10 13:51:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-10 16:28:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: breeds ~ APPPATH/classes/Controller/Ajax.php [ 35 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:28:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 35, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getdistrict()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:29:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: breeds ~ APPPATH/classes/Controller/Ajax.php [ 35 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:29:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 35, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getdistrict()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:30:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: breeds ~ APPPATH/classes/Controller/Ajax.php [ 35 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:30:04 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 35, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getdistrict()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:31:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: breeds ~ APPPATH/classes/Controller/Ajax.php [ 35 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35
2014-06-10 16:31:01 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 35, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getdistrict()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php:35