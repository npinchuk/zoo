<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-04 12:13:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: artcats ~ APPPATH/views/layouts/main.php [ 70 ] in /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php:70
2014-01-04 12:13:58 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 70, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php:70
2014-01-04 12:14:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: artcats ~ APPPATH/views/layouts/main.php [ 70 ] in /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php:70
2014-01-04 12:14:23 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 70, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php:70
2014-01-04 16:27:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Arts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:603
2014-01-04 16:27:01 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/kohana/application/views/art.php(5): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/kohana/application/views/layouts/main.php(240): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:603