<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

Error - 2013-12-28 10:32:21 --> 2 - call_user_func_array() expects parameter 1 to be a valid callback, class 'Fuel\Tasks\Migrate' does not have a method 'update' in /Applications/MAMP/htdocs/Life Helper/fuel/packages/oil/classes/refine.php on line 60
Error - 2013-12-28 10:32:34 --> 2 - call_user_func_array() expects parameter 1 to be a valid callback, class 'Fuel\Tasks\Migrate' does not have a method 'all' in /Applications/MAMP/htdocs/Life Helper/fuel/packages/oil/classes/refine.php on line 60
Error - 2013-12-28 10:33:22 --> 1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(11),
	PRIMARY KEY `id` (`id`)
)' at line 6 [ CREATE TABLE IF NOT EXISTS `comments` (
	`id` int(11) AUTO_INCREMENT,
	`comment` text,
	`event_id` int(11),
	`user_id` int(11),
	`created` datetime(11),
	PRIMARY KEY `id` (`id`)
); ] in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/database/mysql.php on line 180
Error - 2013-12-28 10:35:26 --> 1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(11),
	PRIMARY KEY `id` (`id`)
)' at line 6 [ CREATE TABLE IF NOT EXISTS `comments` (
	`id` int(11) AUTO_INCREMENT,
	`comment` text,
	`event_id` int(11),
	`user_id` int(11),
	`created` date(11),
	PRIMARY KEY `id` (`id`)
); ] in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/database/mysql.php on line 180
Error - 2013-12-28 10:36:21 --> 2048 - Non-static method Fuel\Core\Migrate::_update_schema_version() should not be called statically in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/migrate.php on line 210
Error - 2013-12-28 10:38:45 --> 2048 - Non-static method Fuel\Core\Migrate::_update_schema_version() should not be called statically in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/migrate.php on line 210
Error - 2013-12-28 10:39:42 --> 2048 - Non-static method Fuel\Core\Migrate::_update_schema_version() should not be called statically in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/migrate.php on line 210
Error - 2013-12-28 10:39:42 --> Error - Class 'Model_Orm_Location' not found in /Applications/MAMP/htdocs/Life Helper/fuel/app/migrations/002_demo_data.php on line 12
Error - 2013-12-28 10:49:43 --> Error - Class 'Fuel\Core\Exception' not found in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/migrate.php on line 174
Error - 2013-12-28 10:49:56 --> Error - Class 'Fuel\Core\Exception' not found in /Applications/MAMP/htdocs/Life Helper/fuel/core/classes/migrate.php on line 174
