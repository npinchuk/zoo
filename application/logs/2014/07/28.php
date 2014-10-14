<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-28 10:26:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 174 ] in file:line
2014-07-28 10:26:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 10:26:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 174 ] in file:line
2014-07-28 10:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 10:26:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 174 ] in file:line
2014-07-28 10:26:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 10:27:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 174 ] in file:line
2014-07-28 10:27:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 10:32:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH/classes/Controller/Admin.php [ 161 ] in file:line
2014-07-28 10:32:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 10:35:52 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 174 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:174
2014-07-28 10:35:52 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 174, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:174
2014-07-28 11:30:22 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 175 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:175
2014-07-28 11:30:22 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(175): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 175, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:175
2014-07-28 11:30:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 182 ] in file:line
2014-07-28 11:30:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:31:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 182 ] in file:line
2014-07-28 11:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:31:23 --- EMERGENCY: ErrorException [ 2 ]: The use statement with non-compound name 'phpMorphy' has no effect ~ APPPATH/classes/Controller/Admin.php [ 3 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php:511
2014-07-28 11:31:23 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2, 'The use stateme...', '/Applications/M...', 3, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Controller_Admi...')
#3 [internal function]: spl_autoload_call('Controller_Admi...')
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Admi...')
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php:511
2014-07-28 11:31:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:31:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:31:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:32:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:32:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:32:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:32:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:33:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:34:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/bootstrap.php [ 151 ] in file:line
2014-07-28 11:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:34:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:34:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:37:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 214 ] in file:line
2014-07-28 11:37:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:37:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 214 ] in file:line
2014-07-28 11:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:38:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:38:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:38:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 214 ] in file:line
2014-07-28 11:38:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:38:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 214 ] in file:line
2014-07-28 11:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:38:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 214 ] in file:line
2014-07-28 11:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:41:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-07-28 11:41:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:42:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-07-28 11:42:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:42:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:42:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-28 11:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:43:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'morphy' at 'APPPATH/merphy' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Applications/MAMP/htdocs/zoo/application/bootstrap.php:129
2014-07-28 11:43:52 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/bootstrap.php(129): Kohana_Core::modules(Array)
#1 /Applications/MAMP/htdocs/zoo/index.php(102): require('/Applications/M...')
#2 {main} in /Applications/MAMP/htdocs/zoo/application/bootstrap.php:129
2014-07-28 11:44:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'morphy' at '/phpmorphy/' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Applications/MAMP/htdocs/zoo/application/bootstrap.php:129
2014-07-28 11:44:17 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/bootstrap.php(129): Kohana_Core::modules(Array)
#1 /Applications/MAMP/htdocs/zoo/index.php(102): require('/Applications/M...')
#2 {main} in /Applications/MAMP/htdocs/zoo/application/bootstrap.php:129
2014-07-28 11:45:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method phpMorphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 185 ] in file:line
2014-07-28 11:45:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:45:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method phpMorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:45:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:46:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method phpMorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:46:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:46:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method phpMorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:46:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:46:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method phpMorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:46:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:47:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method phpMorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:47:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:48:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:48:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:49:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 215 ] in file:line
2014-07-28 11:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:49:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: language ~ APPPATH/classes/Kohana/Morphy.php [ 25 ] in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-07-28 11:49:24 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 25, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(48): Kohana_Morphy::factory('')
#2 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(185): Kohana_Morphy::instance()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-07-28 11:49:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Kohana/Morphy.php [ 31 ] in file:line
2014-07-28 11:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:50:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 216 ] in file:line
2014-07-28 11:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:51:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 185 ] in file:line
2014-07-28 11:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:51:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 185 ] in file:line
2014-07-28 11:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:51:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 185 ] in file:line
2014-07-28 11:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:52:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 185 ] in file:line
2014-07-28 11:52:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 11:55:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 186 ] in file:line
2014-07-28 11:55:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 12:00:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 12:00:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 12:00:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 12:00:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 18:34:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 18:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 18:35:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 18:35:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:10:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:11:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:11:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:15:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:15:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:16:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:16:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:17:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:17:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:19:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:19:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:24:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 159 ] in file:line
2014-07-28 23:24:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:24:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:24:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:24:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:26:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:26:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:29:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:31:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:31:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:37:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:37:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:37:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:37:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:40:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH/classes/Controller/Admin.php [ 160 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:160
2014-07-28 23:40:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 160, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:160
2014-07-28 23:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/Controller/Admin.php [ 160 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:160
2014-07-28 23:41:14 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 160, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:160
2014-07-28 23:42:06 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant morphy - assumed 'morphy' ~ APPPATH/classes/Controller/Admin.php [ 160 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:160
2014-07-28 23:42:06 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(160): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 160, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:160
2014-07-28 23:42:13 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-28 23:42:13 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(160): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-28 23:42:25 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-28 23:42:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(159): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-28 23:42:36 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-28 23:42:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(159): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-28 23:42:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-07-28 23:42:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:43:01 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'RESOLVE_ANCODES_AS_TEXT' ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-07-28 23:43:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:43:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:43:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:43:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:43:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:43:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/Controller/Admin.php [ 162 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:162
2014-07-28 23:43:44 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(162): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 162, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:162
2014-07-28 23:43:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:43:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:44:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:45:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) ~ APPPATH/classes/Morphy.php [ 4 ] in file:line
2014-07-28 23:45:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:45:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:46:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:49:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:49:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:51:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2014-07-28 23:51:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-28 23:51:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Morphy' not found ~ APPPATH/classes/Controller/Admin.php [ 160 ] in file:line
2014-07-28 23:51:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line