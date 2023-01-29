<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-12-28 23:28:20 --> Severity: Warning --> Undefined variable $new_room_type C:\xampp\htdocs\ci_hms\application\controllers\room.php 35
ERROR - 2022-12-28 23:28:20 --> Severity: Warning --> Undefined variable $new_min_id C:\xampp\htdocs\ci_hms\application\controllers\room.php 35
ERROR - 2022-12-28 23:28:20 --> Severity: Warning --> Undefined variable $new_max_id C:\xampp\htdocs\ci_hms\application\controllers\room.php 35
ERROR - 2022-12-28 23:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `room_id` < `IS` `NULL`' at line 3 - Invalid query: SELECT *
FROM `room`
WHERE `room_id` > `IS` `NULL`
AND `room_id` < `IS` `NULL`
