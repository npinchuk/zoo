<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-19 11:02:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: citys ~ APPPATH/views/ads/new.php [ 34 ] in /Applications/MAMP/htdocs/zoo/application/views/ads/new.php:34
2014-06-19 11:02:14 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/ads/new.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 34, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(166): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/ads/new.php:34
2014-06-19 11:03:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Citys class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:03:16 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/zoo/application/views/ads/new.php(35): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(166): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:03:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Citys class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:03:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/zoo/application/views/ads/new.php(35): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(166): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:03:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Citys class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:03:38 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/zoo/application/views/ads/new.php(35): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(166): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:04:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Regions class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:04:49 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id')
#1 /Applications/MAMP/htdocs/zoo/application/views/ads/new.php(35): Kohana_ORM->__get('id')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(166): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 11:55:54 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/uploads/53a2978a53d9a.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Ajax.php [ 69 ] in file:line
2014-06-19 11:55:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/Applications/M...', 69, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Ajax.php(69): move_uploaded_file('/Applications/M...', '/uploads/53a297...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_fileupload()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-06-19 14:20:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'order clause' [ SELECT `citys`.`id` AS `id`, `citys`.`country_id` AS `country_id`, `citys`.`region_id` AS `region_id`, `citys`.`title` AS `title` FROM `citys` AS `citys` WHERE `id` IN (4848, 3472, 3345, 3612, 4079, 4549, 4580, 4720, 4917, 5106, 5269, 5539) ORDER BY `name` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-06-19 14:20:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `citys`....', 'Model_Citys', Array)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(36): Kohana_ORM->find_all()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-06-19 14:20:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Citys class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 14:20:58 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(57): Kohana_ORM->__get('name')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(167): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-06-19 14:59:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ads' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-06-19 14:59:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line