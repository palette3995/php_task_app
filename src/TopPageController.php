<?php
require_once('Models/DB.php');

$db = new DB("tasks");
$tasks = $db->getAll();
