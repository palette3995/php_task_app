<?php
require_once('Models/DB.php');

$db = new DB("tasks");
$tasks = $db->getAll();

include('Views/head.php');
include('Views/header.php');