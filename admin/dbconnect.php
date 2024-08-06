<?php
$database = mysqli_connect("localhost", "root", "Oi09XC34Ozc5", "autotalkz");
$k = $database->query("SET NAMES 'utf8'");
$k = $database->query("SET GLOBAL sql_mode = ''");