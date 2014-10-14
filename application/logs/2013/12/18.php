<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-18 16:00:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '—' (T_STRING), expecting ',' or ';' ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in file:line
2013-12-18 16:00:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 16:00:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php:8
2013-12-18 16:00:33 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 8, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php:8
2013-12-18 16:11:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/welcome.php [ 1 ] in /Applications/MAMP/htdocs/kohana/application/views/welcome.php:1
2013-12-18 16:11:01 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/welcome.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 1, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Welcome.php(9): Kohana_Response->body(Object(View))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/kohana/application/views/welcome.php:1
2013-12-18 16:14:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-18 16:14:30 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-18 16:31:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/show could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-18 16:31:49 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/pages/show')
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/show', NULL)
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Page.php(8): Kohana_View::factory('/pages/show')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-18 18:09:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ussurname ~ APPPATH/views/main.php [ 115 ] in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:09:36 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ussurname ~ APPPATH/views/main.php [ 115 ] in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:24 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ussurname ~ APPPATH/views/main.php [ 115 ] in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:41 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ussurname ~ APPPATH/views/main.php [ 115 ] in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:42 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ussurname ~ APPPATH/views/main.php [ 115 ] in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:10:45 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/main.php:115
2013-12-18 18:20:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Common' not found ~ APPPATH/classes/Controller/Admin/Page.php [ 3 ] in file:line
2013-12-18 18:20:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 18:23:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ussurname ~ APPPATH/views/admin/layouts/main.php [ 115 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php:115
2013-12-18 18:23:46 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php:115