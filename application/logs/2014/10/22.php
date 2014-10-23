<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-22 13:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-10-22 13:50:07 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Login.php(175): Kohana_ORM->__get('title')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Login->action_testreg()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-10-22 13:51:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The manager property does not exist in the Model_Users class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-10-22 13:51:27 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('manager')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Login.php(176): Kohana_ORM->__get('manager')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Login->action_testreg()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603