<?php

if (!isset($_GET['from'])) exit;
if (!isset($_GET['to'])) exit;

$from = $_GET['from'];
$to = $_GET['to'];
$diff = $from-$to;

// connect / select db
$res = mysql_query('SELECT * FROM `category_names` LIMIT '.$from-1.','.$to.';');
$arr = array();
while ($row = mysql_fetch_array($res)) {
    array_push($arr,$row['name']);
    }
    echo json_encode($arr);
    
    ?>  