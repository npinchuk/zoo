<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-25 15:37:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: art ~ APPPATH/views/art.php [ 12 ] in /Applications/MAMP/htdocs/skstek/application/views/art.php:12
2014-02-25 15:37:20 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/views/art.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 12, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/skstek/application/views/layouts/main.php(214): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/skstek/application/views/art.php:12
2014-02-25 15:37:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/Controller/Page.php [ 29 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:29
2014-02-25 15:37:29 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:29
2014-02-25 15:40:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:40:08 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:44:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:44:33 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:44:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:44:53 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:45:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:45:08 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:45:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:45:36 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:47:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:47:39 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:47:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:47:53 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:48:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:48:12 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:48:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:48:29 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:49:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:49:35 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:52:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:52:50 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:54:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:54:54 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:58:05 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH/classes/Controller/Page.php [ 30 ] in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30
2014-02-25 15:58:05 --- DEBUG: #0 /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Controller.php(84): Controller_Page->action_savefeed()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/skstek/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/skstek/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/skstek/application/classes/Controller/Page.php:30