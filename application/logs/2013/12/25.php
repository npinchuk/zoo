<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-25 12:09:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/views/home.php [ 17 ] in file:line
2013-12-25 12:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-25 12:27:31 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): No ending delimiter '#' found ~ APPPATH/views/home.php [ 20 ] in file:line
2013-12-25 12:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/kohana/application/views/home.php(20): preg_replace('#\[img.*?\[/img...', ' ', '<table border="...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-12-25 12:30:55 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 24 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:24
2013-12-25 12:30:55 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(24): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 24, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:24
2013-12-25 12:31:00 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 24 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:24
2013-12-25 12:31:00 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(24): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 24, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:24
2013-12-25 12:33:45 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:33:45 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:33:50 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:33:50 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:38:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:38:16 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:41:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: art ~ APPPATH/views/home.php [ 23 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:23
2013-12-25 12:41:33 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 23, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:23
2013-12-25 12:47:18 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:47:18 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:48:33 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:48:33 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:50:00 --- EMERGENCY: ErrorException [ 2 ]: preg_match_all(): No ending delimiter '/' found ~ APPPATH/views/home.php [ 20 ] in file:line
2013-12-25 12:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/kohana/application/views/home.php(20): preg_match_all('/<img[^>]+src', '<table border="...', NULL)
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-12-25 12:50:05 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:50:05 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:50:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH/views/home.php [ 21 ] in file:line
2013-12-25 12:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-25 12:52:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:52:42 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:52:56 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:52:56 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:53:00 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:53:00 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:54:04 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/home.php [ 21 ] in /Applications/MAMP/htdocs/kohana/application/views/home.php:21
2013-12-25 12:54:04 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/home.php(21): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(425): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/home.php:21