<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-21 10:36:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/admin/artcat.php [ 31 ] in file:line
2013-12-21 10:36:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-21 11:26:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_artpart' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-21 11:26:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-21 11:27:58 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 39 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2013-12-21 11:27:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Applications/M...', 423, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Route.php(423): preg_match('#^(?:artpart(?:...', 'artpart/2', NULL)
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2013-12-21 11:30:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The arttype property does not exist in the Model_Artparts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:603
2013-12-21 11:30:23 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('arttype')
#1 /Applications/MAMP/htdocs/kohana/application/views/admin/artpart.php(36): Kohana_ORM->__get('arttype')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:603
2013-12-21 11:37:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_artcat' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-21 11:37:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-21 11:50:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arttypes ~ APPPATH/views/admin/artcat.php [ 17 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/artcat.php:17
2013-12-21 11:50:04 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/artcat.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/artcat.php:17
2013-12-21 11:50:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arttypes ~ APPPATH/views/admin/artcat.php [ 17 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/artcat.php:17
2013-12-21 11:50:57 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/artcat.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 17, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/artcat.php:17
2013-12-21 11:53:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: artcats ~ APPPATH/views/admin/artpart.php [ 18 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/artpart.php:18
2013-12-21 11:53:40 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/artpart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 18, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/artpart.php:18
2013-12-21 12:02:18 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant artcat_id - assumed 'artcat_id' ~ APPPATH/classes/Controller/Admin/Art.php [ 114 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Art.php:114
2013-12-21 12:02:18 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Art.php(114): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 114, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Art->action_artpartsave()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Admin/Art.php:114
2013-12-21 12:52:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH/views/admin/artlist.php [ 34 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php:34
2013-12-21 12:52:56 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 34, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php:34
2013-12-21 12:53:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH/views/admin/artlist.php [ 34 ] in /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php:34
2013-12-21 12:53:21 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 34, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php:34
2013-12-21 12:54:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Arts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:603
2013-12-21 12:54:06 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/kohana/application/views/admin/artlist.php(34): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/kohana/application/views/admin/layouts/main.php(336): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Art))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:603
2013-12-21 12:56:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_artstatus' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-21 12:56:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line