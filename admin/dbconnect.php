<?php
$database = mysqli_connect("localhost", "root", "root", "autotalkz");
$k = $database->query("SET NAMES 'utf8'");
$k = $database->query("SET GLOBAL sql_mode = ''");