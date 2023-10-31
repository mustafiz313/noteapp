<?php

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';


$id = (int)$_GET['id'];

$notes = $db->query("SELECT * FROM `notes` WHERE id = $id");



//$notes = $db->query('SELECT * FROM `notes` WHERE id = :id', ['id' => $_GET['id']])->fetchAll();


require "views/notes.view.php";