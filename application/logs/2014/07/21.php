<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-21 12:42:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/Page.php [ 9 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:42:10 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 9, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:42:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Page.php [ 9 ] in file:line
2014-07-21 12:42:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-21 12:43:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/Controller/Page.php [ 9 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:43:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 9, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:50:57 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ APPPATH/classes/Controller/Page.php [ 0 ] in file:line
2014-07-21 12:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-21 12:56:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: article_posts ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:56:09 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('article_posts')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:56:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: view ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:56:19 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('view')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 12:56:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: d ~ APPPATH/classes/Controller/Search.php [ 17 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:17
2014-07-21 12:56:47 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:17
2014-07-21 12:57:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: d ~ APPPATH/classes/Controller/Search.php [ 17 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:17
2014-07-21 12:57:03 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:17
2014-07-21 12:58:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data_arr ~ APPPATH/classes/Controller/Search.php [ 16 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:16
2014-07-21 12:58:34 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 16, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:16
2014-07-21 12:58:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data_arr ~ APPPATH/classes/Controller/Search.php [ 17 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:17
2014-07-21 12:58:39 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:17
2014-07-21 12:58:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data_arr ~ APPPATH/classes/Controller/Search.php [ 20 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:20
2014-07-21 12:58:43 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Search->action_find()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Search.php:20
2014-07-21 13:00:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH/views/layouts/main.php [ 112 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:112
2014-07-21 13:00:55 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 112, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:112
2014-07-21 13:01:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH/views/layouts/main.php [ 112 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:112
2014-07-21 13:01:02 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 112, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:112
2014-07-21 13:01:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: view ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:01:26 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('view')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:01:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: find ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:01:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('find')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:03:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: find ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:03:15 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('find')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:03:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: find ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:03:29 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('find')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:07:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: route ~ APPPATH/classes/Controller/Page.php [ 10 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:10
2014-07-21 13:07:09 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 10, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:10
2014-07-21 13:21:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: article_posts ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9
2014-07-21 13:21:07 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(9): Kohana_Route::get('article_posts')
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:9