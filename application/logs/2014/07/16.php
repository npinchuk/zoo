<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-16 11:12:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/views/layouts/result.php [ 16 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php:16
2014-07-16 11:12:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 16, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(29): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(118): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php:16
2014-07-16 22:48:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-07-16 22:48:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/zoo/application/views/layouts/result.php(35): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/zoo/application/views/home.php(29): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(118): Kohana_View->__toString()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#16 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-07-16 22:52:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: typecurr ~ APPPATH/views/layouts/search.php [ 15 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:15
2014-07-16 22:52:09 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 15, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(118): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:15