<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-10 10:21:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ustype_id ~ APPPATH/classes/Controller/Admin.php [ 32 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:32
2014-07-10 10:21:09 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 32, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:32
2014-07-10 10:26:07 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Admin.php [ 18 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:18
2014-07-10 10:26:07 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(18): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 18, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:18
2014-07-10 10:28:09 --- EMERGENCY: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/Controller/Admin.php [ 20 ] in file:line
2014-07-10 10:28:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(20): date('U', '2014-07-09 10:2...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-10 11:09:13 --- EMERGENCY: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/Controller/Admin.php [ 19 ] in file:line
2014-07-10 11:09:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Applications/M...', 19, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(19): date('c', '2014-07-09 11:0...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-10 11:15:46 --- EMERGENCY: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/Controller/Admin.php [ 19 ] in file:line
2014-07-10 11:15:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Applications/M...', 19, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(19): date('c', '2014-07-09 11:1...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_removetmpads()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-10 11:36:32 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 91 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-07-10 11:36:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Applications/M...', 423, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<contro...', 'admin/adlist', NULL)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-07-10 11:37:36 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 91 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-07-10 11:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Applications/M...', 423, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<contro...', 'admin/adlist', NULL)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-07-10 11:38:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 91 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-07-10 11:38:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Applications/M...', 423, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<contro...', 'admin/adlist', NULL)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-07-10 12:08:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: monads ~ APPPATH/views/admin/adlist.php [ 371 ] in /Applications/MAMP/htdocs/zoo/application/views/admin/adlist.php:371
2014-07-10 12:08:56 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/admin/adlist.php(371): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 371, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(175): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/zoo/application/views/admin/adlist.php:371