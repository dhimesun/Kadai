<?php
require_once('app/Database.php');
require_once('app/html_func.php');
$db = new Database();
$members = $db->getallsyain();
show_top();
show_syainlist($members);
show_down();
?>


