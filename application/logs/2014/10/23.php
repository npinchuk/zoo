<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-23 13:56:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: keywords ~ APPPATH/views/layouts/login.php [ 10 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/login.php:10
2014-10-23 13:56:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/login.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 10, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/login.php:10
2014-10-23 14:03:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The recovery property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:702
2014-10-23 14:03:20 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('recovery', '96dbc426f8852e5...')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Login.php(76): Kohana_ORM->__set('recovery', '96dbc426f8852e5...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Login->action_resend()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:702
2014-10-23 14:07:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH/views/layouts/main.php [ 74 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:74
2014-10-23 14:07:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 74, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:74
2014-10-23 15:03:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH/views/layouts/main.php [ 74 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:74
2014-10-23 15:03:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 74, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ads))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:74