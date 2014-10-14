<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-05 10:25:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Kohana/SphinxQL/Core.php [ 36 ] in file:line
2014-08-05 10:25:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 10:25:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Kohana/SphinxQL/Core.php [ 36 ] in file:line
2014-08-05 10:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 10:29:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Page.php [ 12 ] in file:line
2014-08-05 10:29:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 10:29:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/sphinxql/classes/Kohana/SphinxQL/Core.php [ 36 ] in file:line
2014-08-05 10:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 10:30:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/sphinxql/classes/Kohana/SphinxQL/Core.php [ 36 ] in file:line
2014-08-05 10:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 10:30:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/sphinxql/classes/Kohana/SphinxQL/Core.php [ 36 ] in file:line
2014-08-05 10:30:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 10:31:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/sphinxql/classes/Kohana/SphinxQL/Core.php [ 36 ] in file:line
2014-08-05 10:31:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:12:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:12:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:13:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin.php [ 168 ] in file:line
2014-08-05 11:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:13:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:13:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:27:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:27:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:28:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:28:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:28:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:28:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:29:30 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ MODPATH/phpmorphy/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/config/morphy.php:31
2014-08-05 11:29:30 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/config/morphy.php:31
2014-08-05 11:30:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'phpmorphy' at 'MODPATH/phpmorphy' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Applications/MAMP/htdocs/zoo/application/bootstrap.php:135
2014-08-05 11:30:12 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /Applications/MAMP/htdocs/zoo/index.php(102): require('/Applications/M...')
#2 {main} in /Applications/MAMP/htdocs/zoo/application/bootstrap.php:135
2014-08-05 11:32:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Morphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:32:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: language ~ APPPATH/classes/Kohana/Morphy.php [ 25 ] in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-08-05 11:32:16 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 25, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#2 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Morphy::instance()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-08-05 11:32:25 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-08-05 11:32:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-08-05 11:33:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-08-05 11:33:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-08-05 11:33:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:33:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:33:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Kohana/Morphy.php [ 31 ] in file:line
2014-08-05 11:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:33:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Kohana/Morphy.php [ 31 ] in file:line
2014-08-05 11:33:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-08-05 11:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Kohana/Morphy.php [ 31 ] in file:line
2014-08-05 11:34:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-08-05 11:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:34:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Kohana/Morphy.php [ 31 ] in file:line
2014-08-05 11:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 11:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be of the type array, integer given, called in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Arr.php:30
2014-08-05 11:36:21 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Applications/M...', 30, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Arr.php:30
2014-08-05 11:36:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/Kohana/Morphy.php [ 25 ] in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-08-05 11:36:47 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 25, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#2 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Morphy::instance()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-08-05 11:40:11 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:40:11 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:40:39 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:40:39 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:25 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:26 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:55 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:55 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:56 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:41:56 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:42:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:42:20 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:42:34 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:42:34 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:42:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 166 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:42:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(166): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:44:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 171 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:44:20 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(171): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:44:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for phpMorphy::__construct(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 171 and defined ~ MODPATH/phpmorphy/vendor/phpmorphy/src/common.php [ 189 ] in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:44:21 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 189, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(171): phpMorphy->__construct()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/phpmorphy/vendor/phpmorphy/src/common.php:189
2014-08-05 11:44:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'catch' (T_CATCH) ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-08-05 11:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 12:50:47 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Admin.php [ 193 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:193
2014-08-05 12:50:47 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(193): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 193, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:193
2014-08-05 13:30:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH/classes/Controller/Common.php [ 11 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Common.php:11
2014-08-05 13:30:20 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Common.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 11, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Common.php:11
2014-08-05 13:30:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 187 ] in file:line
2014-08-05 13:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 13:32:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Page::_clear_var() ~ APPPATH/classes/Controller/Page.php [ 115 ] in file:line
2014-08-05 13:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 13:34:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The post_id property does not exist in the Model_Searchindex class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-08-05 13:34:30 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('post_id')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(145): Kohana_ORM->__get('post_id')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-08-05 13:35:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The post_id property does not exist in the Model_Searchindex class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-08-05 13:35:01 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('post_id')
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(145): Kohana_ORM->__get('post_id')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php:603
2014-08-05 13:35:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: citys ~ APPPATH/classes/Controller/Page.php [ 187 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:187
2014-08-05 13:35:55 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 187, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:187
2014-08-05 13:36:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: citys ~ APPPATH/classes/Controller/Page.php [ 187 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:187
2014-08-05 13:36:26 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 187, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:187
2014-08-05 13:36:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: citys ~ APPPATH/classes/Controller/Page.php [ 187 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:187
2014-08-05 13:36:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 187, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:187
2014-08-05 13:41:05 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Page.php [ 129 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:129
2014-08-05 13:41:05 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(129): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 129, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:129
2014-08-05 13:44:56 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Page.php [ 151 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:151
2014-08-05 13:44:56 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(151): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 151, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:151
2014-08-05 13:55:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/classes/Controller/Admin.php [ 197 ] in file:line
2014-08-05 13:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 16:10:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Page.php [ 147 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:147
2014-08-05 16:10:15 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(147): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 147, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:147
2014-08-05 16:10:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Page.php [ 147 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:147
2014-08-05 16:10:21 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(147): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 147, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:147
2014-08-05 16:30:59 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `active` = 1' at line 1 [ SELECT `ads`.`id` AS `id`, `ads`.`lat` AS `lat`, `ads`.`author_id` AS `author_id`, `ads`.`author_name` AS `author_name`, `ads`.`phone` AS `phone`, `ads`.`summary` AS `summary`, `ads`.`body` AS `body`, `ads`.`region_id` AS `region_id`, `ads`.`city_id` AS `city_id`, `ads`.`type_id` AS `type_id`, `ads`.`pettype_id` AS `pettype_id`, `ads`.`breed_id` AS `breed_id`, `ads`.`sex` AS `sex`, `ads`.`price` AS `price`, `ads`.`active` AS `active`, `ads`.`created` AS `created`, `ads`.`timestamp` AS `timestamp` FROM `ads` AS `ads` WHERE `id` IN () AND `active` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-08-05 16:30:59 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ads`.`i...', 'Model_Ads', Array)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(163): Kohana_ORM->find_all()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-08-05 16:39:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Page.php [ 146 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:146
2014-08-05 16:39:33 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(146): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 146, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:146
2014-08-05 16:41:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `active` = 1' at line 1 [ SELECT `ads`.`id` AS `id`, `ads`.`lat` AS `lat`, `ads`.`author_id` AS `author_id`, `ads`.`author_name` AS `author_name`, `ads`.`phone` AS `phone`, `ads`.`summary` AS `summary`, `ads`.`body` AS `body`, `ads`.`region_id` AS `region_id`, `ads`.`city_id` AS `city_id`, `ads`.`type_id` AS `type_id`, `ads`.`pettype_id` AS `pettype_id`, `ads`.`breed_id` AS `breed_id`, `ads`.`sex` AS `sex`, `ads`.`price` AS `price`, `ads`.`active` AS `active`, `ads`.`created` AS `created`, `ads`.`timestamp` AS `timestamp` FROM `ads` AS `ads` WHERE `id` IN () AND `active` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-08-05 16:41:05 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ads`.`i...', 'Model_Ads', Array)
#1 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/zoo/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(167): Kohana_ORM->find_all()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/modules/database/classes/Kohana/Database/Query.php:251
2014-08-05 16:41:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Page.php [ 154 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:154
2014-08-05 16:41:13 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 154, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:154
2014-08-05 17:25:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/views/ads/item.php [ 26 ] in file:line
2014-08-05 17:25:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-05 17:25:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH/views/ads/item.php [ 26 ] in file:line
2014-08-05 17:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line