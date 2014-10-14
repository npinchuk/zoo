<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-08 17:53:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The surname property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-10-08 17:53:16 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('surname')
#1 /Applications/MAMP/htdocs/zoo/application/views/admin/adlist.php(120): Kohana_ORM->__get('surname')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(185): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-10-08 17:53:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: words ~ APPPATH/classes/Controller/Admin.php [ 213 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:213
2014-10-08 17:53:21 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(213): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 213, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:213