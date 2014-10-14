<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-25 10:10:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ads ~ APPPATH/classes/Controller/Page.php [ 128 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:128
2014-07-25 10:10:49 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 128, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Page.php:128
2014-07-25 10:51:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH/views/layouts/main.php [ 112 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:112
2014-07-25 10:51:49 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 112, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php:112
2014-07-25 11:03:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/Controller/Admin.php [ 169 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 11:03:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 169, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 11:03:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:03:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:05:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:05:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:07:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:10:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:10:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:11:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:11:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:11:54 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 11:11:54 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 11:13:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 11:13:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 11:14:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:39:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:39:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:43:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:45:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:45:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:45:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:45:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:45:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:45:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:45:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:46:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:46:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:46:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:46:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:46:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:47:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:47:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 11:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:47:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:48:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:58:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:59:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:59:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 11:59:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 11:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:03:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:08:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:08:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:12:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:13:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:13:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:13:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:18:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'require_once' (T_REQUIRE_ONCE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin.php [ 6 ] in file:line
2014-07-25 12:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:18:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:19:19 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php on line 5 and defined ~ SYSPATH/classes/Kohana/Core.php [ 649 ] in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php:649
2014-07-25 12:19:19 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(649): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/M...', 649, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(5): Kohana_Core::find_file('/vendor/phpmorp...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(511): require('/Applications/M...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Admi...')
#4 [internal function]: spl_autoload_call('Controller_Admi...')
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Admi...')
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php:649
2014-07-25 12:20:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 156 ] in file:line
2014-07-25 12:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:20:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:20:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:20:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:20:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:41:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:41:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:42:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:42:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:42:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:42:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:42:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:42:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: start_form_body ~ APPPATH/classes/Controller/Admin.php [ 178 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:178
2014-07-25 12:42:44 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(178): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 178, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:178
2014-07-25 12:43:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:44:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 176 ] in file:line
2014-07-25 12:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:51:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 176 ] in file:line
2014-07-25 12:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 156 ] in file:line
2014-07-25 12:52:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:52:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 156 ] in file:line
2014-07-25 12:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:52:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 12:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:56:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:56:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 12:56:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 12:56:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:00:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:01:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$nav' (T_VARIABLE), expecting catch (T_CATCH) ~ APPPATH/classes/Controller/Admin.php [ 180 ] in file:line
2014-07-25 13:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:02:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 168 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:168
2014-07-25 13:02:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(168): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 168, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:168
2014-07-25 13:02:57 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 168 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:168
2014-07-25 13:02:57 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(168): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 168, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:168
2014-07-25 13:03:35 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 168 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:168
2014-07-25 13:03:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(168): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 168, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:168
2014-07-25 13:03:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 174 ] in file:line
2014-07-25 13:03:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:04:14 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:04:36 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:04:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:04:37 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:04:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:04:37 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:04:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:04:37 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:04:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:04:48 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:04:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:05:01 --- EMERGENCY: ErrorException [ 2 ]: fopen(/phpmorphy/dicts/common_aut.ru_ru.bin): failed to open stream: No such file or directory ~ DOCROOT/phpmorphy/src/storage.php [ 118 ] in file:line
2014-07-25 13:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/phpmorph...', '/Applications/M...', 118, Array)
#1 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(118): fopen('/phpmorphy/dict...', 'rb')
#2 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(34): phpMorphy_Storage_File->open('/phpmorphy/dict...')
#3 /Applications/MAMP/htdocs/zoo/phpmorphy/src/storage.php(209): phpMorphy_Storage->__construct('/phpmorphy/dict...')
#4 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(588): phpMorphy_Storage_Factory->open('file', '/phpmorphy/dict...', false)
#5 /Applications/MAMP/htdocs/zoo/phpmorphy/src/common.php(196): phpMorphy->initNewStyle(Object(phpMorphy_FilesBundle), Array)
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(174): phpMorphy->__construct('/phpmorphy/dict...', 'ru_RU', Array)
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-07-25 13:06:33 --- EMERGENCY: ErrorException [ 2 ]: include(/phpmorphy/src/common.php): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 164 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:06:33 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Kohana_Core::error_handler(2, 'include(/phpmor...', '/Applications/M...', 164, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Controller_Admin::action_searchindex()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:07:05 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/Controller/Admin.php [ 164 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:07:05 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 164, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Controller_Admin::action_searchindex()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:07:23 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/Controller/Admin.php [ 164 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:07:23 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 164, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Controller_Admin::action_searchindex()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:07:30 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH/classes/Controller/Admin.php [ 164 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:07:30 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Kohana_Core::error_handler(2, 'include(): File...', '/Applications/M...', 164, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(164): Controller_Admin::action_searchindex()
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:164
2014-07-25 13:10:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:10:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:10:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:10:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getBaseForm() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:14:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:15:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:15:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:15:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:15:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:18:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:18:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:19:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:19:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:19:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 13:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:19:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function lemmatize() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:19:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 156 ] in file:line
2014-07-25 13:21:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 13:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 13:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 156 ] in file:line
2014-07-25 13:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 13:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 13:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 13:21:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:21:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 156 ] in file:line
2014-07-25 13:21:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:22:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 177 ] in file:line
2014-07-25 13:22:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:23:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpmorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 177 ] in file:line
2014-07-25 13:23:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:23:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Phpmorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 177 ] in file:line
2014-07-25 13:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:23:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 178 ] in file:line
2014-07-25 13:23:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:23:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 178 ] in file:line
2014-07-25 13:23:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:24:25 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:25 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:35 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:35 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:36 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:36 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:36 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:36 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:37 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 182 ] in file:line
2014-07-25 13:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:24:48 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:24:48 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:25:08 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:25:08 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 13:25:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 182 ] in file:line
2014-07-25 13:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:25:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 183 ] in file:line
2014-07-25 13:25:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:25:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: start_form_body ~ APPPATH/classes/Controller/Admin.php [ 185 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:185
2014-07-25 13:25:29 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 185, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:185
2014-07-25 13:25:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: start_form_body ~ APPPATH/classes/Controller/Admin.php [ 185 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:185
2014-07-25 13:25:42 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 185, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:185
2014-07-25 13:26:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 183 ] in file:line
2014-07-25 13:26:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:58:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 183 ] in file:line
2014-07-25 13:58:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:58:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 181 ] in file:line
2014-07-25 13:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:58:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 181 ] in file:line
2014-07-25 13:58:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:58:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpmorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 181 ] in file:line
2014-07-25 13:58:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 13:58:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 183 ] in file:line
2014-07-25 13:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:02:30 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 179 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 14:02:30 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(179): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 179, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:179
2014-07-25 14:07:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 181 ] in file:line
2014-07-25 14:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:07:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 184 ] in file:line
2014-07-25 14:07:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:08:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 183 ] in file:line
2014-07-25 14:08:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:08:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 192 ] in file:line
2014-07-25 14:08:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:08:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: start_form_body ~ APPPATH/classes/Controller/Admin.php [ 194 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:194
2014-07-25 14:08:56 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(194): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 194, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:194
2014-07-25 14:10:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'get_class_vars' (T_STRING), expecting '(' ~ APPPATH/classes/Controller/Admin.php [ 191 ] in file:line
2014-07-25 14:10:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:11:28 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Admin.php [ 192 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:192
2014-07-25 14:11:28 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(192): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/M...', 192, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:192
2014-07-25 14:13:54 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/config/morphy.php [ 33 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:33
2014-07-25 14:13:54 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 33, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(182): Kohana_Morphy::factory()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:33
2014-07-25 14:14:18 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 33 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:33
2014-07-25 14:14:18 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 33, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(182): Kohana_Morphy::factory()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:33
2014-07-25 14:14:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 66 ] in file:line
2014-07-25 14:14:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:15:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 66 ] in file:line
2014-07-25 14:15:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:15:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 66 ] in file:line
2014-07-25 14:15:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:15:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 66 ] in file:line
2014-07-25 14:15:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:15:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 66 ] in file:line
2014-07-25 14:15:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:15:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 66 ] in file:line
2014-07-25 14:15:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:44:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Morphy' not found ~ APPPATH/classes/Controller/Common.php [ 26 ] in file:line
2014-07-25 14:44:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:44:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Common.php [ 26 ] in file:line
2014-07-25 14:44:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:49:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Morphy' not found ~ APPPATH/classes/Controller/Admin.php [ 176 ] in file:line
2014-07-25 14:49:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:49:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 176 ] in file:line
2014-07-25 14:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:49:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Morphy' not found ~ APPPATH/classes/Controller/Admin.php [ 176 ] in file:line
2014-07-25 14:49:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:56:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 14:56:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:56:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getEncoding() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 14:56:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:57:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Morphy' not found ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 14:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:57:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 14:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:58:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 14:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 14:59:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 14:59:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:00:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 172 ] in file:line
2014-07-25 15:00:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:00:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2014-07-25 15:00:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:04:13 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Morphy - assumed 'Morphy' ~ APPPATH/classes/Controller/Admin.php [ 167 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:167
2014-07-25 15:04:13 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(167): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 167, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:167
2014-07-25 15:05:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: language ~ APPPATH/classes/Kohana/Morphy.php [ 25 ] in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-07-25 15:05:54 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/M...', 25, Array)
#1 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#2 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php:25
2014-07-25 15:06:16 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:06:16 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:07:39 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:07:39 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:10:12 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:10:12 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:10:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-07-25 15:10:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:10:23 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/config/morphy.php [ 31 ] in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:10:23 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/config/morphy.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 31, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Core.php(829): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('morphy')
#4 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(22): Kohana_Config->load('morphy')
#5 /Applications/MAMP/htdocs/zoo/application/classes/Kohana/Morphy.php(50): Kohana_Morphy::factory('')
#6 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(172): Kohana_Morphy::instance()
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/MAMP/htdocs/zoo/application/config/morphy.php:31
2014-07-25 15:10:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/config/morphy.php [ 64 ] in file:line
2014-07-25 15:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:10:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-07-25 15:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:10:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-07-25 15:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:10:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2014-07-25 15:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:12:08 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_FILE - assumed 'PHPMORPHY_STORAGE_FILE' ~ APPPATH/classes/Controller/Admin.php [ 169 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 15:12:08 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(169): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 169, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 15:12:16 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/classes/Controller/Admin.php [ 169 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 15:12:16 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(169): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 169, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 15:12:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 171 ] in file:line
2014-07-25 15:12:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:12:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 171 ] in file:line
2014-07-25 15:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:12:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 171 ] in file:line
2014-07-25 15:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:12:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 171 ] in file:line
2014-07-25 15:12:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:13:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 171 ] in file:line
2014-07-25 15:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:13:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'phpMorphy' not found ~ APPPATH/classes/Controller/Admin.php [ 171 ] in file:line
2014-07-25 15:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:14:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 188 ] in file:line
2014-07-25 15:14:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:15:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::getEncoding() ~ APPPATH/classes/Controller/Admin.php [ 188 ] in file:line
2014-07-25 15:15:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:15:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Phpmorphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 189 ] in file:line
2014-07-25 15:15:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:16:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Morphy::lemmatize() ~ APPPATH/classes/Controller/Admin.php [ 189 ] in file:line
2014-07-25 15:16:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-25 15:17:05 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PHPMORPHY_STORAGE_MEM - assumed 'PHPMORPHY_STORAGE_MEM' ~ APPPATH/classes/Controller/Admin.php [ 169 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 15:17:05 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(169): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/M...', 169, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:169
2014-07-25 15:41:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/classes/Controller/Admin.php [ 173 ] in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:173
2014-07-25 15:41:49 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php(173): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 173, Array)
#1 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(84): Controller_Admin->action_searchindex()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/zoo/application/classes/Controller/Admin.php:173
2014-07-25 16:46:53 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/layouts/search.php [ 59 ] in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:59
2014-07-25 16:46:53 --- DEBUG: #0 /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php(59): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 59, Array)
#1 /Applications/MAMP/htdocs/zoo/application/views/home.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/zoo/application/views/layouts/main.php(120): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/zoo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/zoo/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/zoo/application/views/layouts/search.php:59