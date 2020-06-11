<?php
Global $db;

$db = new PDO('mysql:dbname=bank_app;host=localhost', 'root', '');

$db->query('set character_set_client=utf8');
$db->query('set character_set_connection=utf8');
$db->query('set character_set_results=utf8');
$db->query('set character_set_server=utf8');

?>
