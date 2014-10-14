<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-19 00:03:13 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Cookie.php:67
2013-12-19 00:03:13 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /Applications/MAMP/htdocs/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Cookie.php:67
2013-12-19 00:04:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-19 00:04:28 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/login')
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/login', NULL)
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Login.php(32): Kohana_View::factory('admin/login')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_logout()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-19 00:06:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/Controller/Admin/Common.php [ 26 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Common.php:26
2013-12-19 00:06:18 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Common.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 26, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(69): Controller_Admin_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Page))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Common.php:26
2013-12-19 00:07:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/Controller/Admin/Page.php [ 9 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Page.php:9
2013-12-19 00:07:35 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Page.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 9, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Page))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Page.php:9
2013-12-19 00:22:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH/views/admin/home.php [ 5 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/home.php:5
2013-12-19 00:22:56 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/home.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 5, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(295): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/home.php:5
2013-12-19 16:07:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/artlist could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137
2013-12-19 16:07:22 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/artlist')
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/artlist', NULL)
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Art.php(28): Kohana_View::factory('admin/artlist')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Art->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php:137