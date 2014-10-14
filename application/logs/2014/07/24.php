<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-24 09:53:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Page.php [ 53 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:53
2014-07-24 09:53:24 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 53, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:53
2014-07-24 09:54:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$result' (T_VARIABLE) ~ APPPATH/classes/Controller/Page.php [ 53 ] in file:line
2014-07-24 09:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 10:10:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH/classes/Controller/Page.php [ 53 ] in file:line
2014-07-24 10:10:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 10:14:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Controller/Page.php [ 52 ] in file:line
2014-07-24 10:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 10:32:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: breed_id ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 10:32:18 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:21:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: breed_id ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:21:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:21:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: breed_id ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:21:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:23:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: sex ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:23:29 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:25:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: male ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:25:46 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:26:42 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:26:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:27:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: male ~ APPPATH/classes/Controller/Page.php [ 51 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:27:14 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:51
2014-07-24 12:47:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Page.php [ 63 ] in file:line
2014-07-24 12:47:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 13:11:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Page.php [ 55 ] in file:line
2014-07-24 13:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 13:11:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Page.php [ 55 ] in file:line
2014-07-24 13:11:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 13:18:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH/classes/Controller/Page.php [ 53 ] in file:line
2014-07-24 13:18:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 13:19:11 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Page.php [ 53 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:53
2014-07-24 13:19:11 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(53): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/M...', 53, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:53
2014-07-24 14:33:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Page.php [ 84 ] in file:line
2014-07-24 14:33:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 14:33:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Page.php [ 84 ] in file:line
2014-07-24 14:33:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 14:33:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Page.php [ 84 ] in file:line
2014-07-24 14:33:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 14:34:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: breed_id ~ APPPATH/classes/Controller/Page.php [ 85 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:85
2014-07-24 14:34:15 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(85): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 85, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:85
2014-07-24 14:34:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Page.php [ 84 ] in file:line
2014-07-24 14:34:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line