<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-09 14:41:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: endads ~ APPPATH/views/ads/list.php [ 147 ] in /Applications/MAMP/htdocs/zoo/application/views/ads/list.php:147
2014-07-09 14:41:23 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/ads/list.php(147): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 147, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(167): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/ads/list.php:147
2014-07-09 14:54:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ustype_id ~ APPPATH/classes/Controller/Admin.php [ 8 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:8
2014-07-09 14:54:49 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 8, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:8
2014-07-09 14:54:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view /admin/removetmpads could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php:137
2014-07-09 14:54:58 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/admin/removetm...')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(30): Kohana_View->__construct('/admin/removetm...', NULL)
#2 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(13): Kohana_View::factory('/admin/removetm...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php:137
2014-07-09 14:55:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view /navs/admin could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php:137
2014-07-09 14:55:32 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/navs/admin')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(30): Kohana_View->__construct('/navs/admin', NULL)
#2 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(14): Kohana_View::factory('/navs/admin')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php:137
2014-07-09 15:30:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH/classes/Controller/Admin.php [ 17 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:17
2014-07-09 15:30:50 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:17
2014-07-09 15:33:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/Controller/Admin.php [ 22 ] in file:line
2014-07-09 15:33:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 15:34:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/Controller/Admin.php [ 22 ] in file:line
2014-07-09 15:34:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 15:37:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/Controller/Admin.php [ 20 ] in file:line
2014-07-09 15:37:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 16:08:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/Controller/Admin.php [ 20 ] in file:line
2014-07-09 16:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line