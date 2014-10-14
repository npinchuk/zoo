<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-14 14:25:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH/views/layouts/main.php [ 115 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:115
2014-07-14 14:25:47 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:115
2014-07-14 14:26:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: adactivecount ~ APPPATH/views/ads/list.php [ 13 ] in /Applications/MAMP/htdocs/zoo/application/views/ads/list.php:13
2014-07-14 14:26:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/ads/list.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 13, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(118): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/ads/list.php:13
2014-07-14 14:26:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH/views/home.php [ 28 ] in /Applications/MAMP/htdocs/zoo/application/views/home.php:28
2014-07-14 14:26:45 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/home.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 28, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(118): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/home.php:28
2014-07-14 14:29:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: main ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php:215
2014-07-14 14:29:40 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(215): Kohana_Route::get('main')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(37): Kohana_Route::url('main', Array)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php:215
2014-07-14 14:29:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: search ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php:215
2014-07-14 14:29:53 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(215): Kohana_Route::get('search')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(37): Kohana_Route::url('search', Array)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php:215
2014-07-14 15:23:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/ORM.php [ 22 ] in file:line
2014-07-14 15:23:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:58:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH/classes/Controller/Search.php [ 42 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:42
2014-07-14 15:58:40 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 42, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:42
2014-07-14 16:31:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH/views/layouts/main.php [ 115 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:115
2014-07-14 16:31:51 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 115, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:115
2014-07-14 16:37:00 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-07-14 16:37:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Applications/M...', 423, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(423): preg_match('#^search(?:/(?P...', 'search/prepare', NULL)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-07-14 16:37:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-07-14 16:37:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Applications/M...', 423, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(423): preg_match('#^search(?:/(?P...', '', NULL)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#5 {main} in file:line