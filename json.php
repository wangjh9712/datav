<?php
//通过GET获得表数据
require_once 'conncet.php';
$table = _GET('t');
getJson($table);
?>