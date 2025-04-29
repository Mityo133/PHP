<?php 

$config = require "backend/config.php";
$data = new Database($config['database']);

$notes = $data->getPdo("SELECT * FROM notes")->fetchAll(PDO::FETCH_ASSOC);

require "views/notes.view.php";

?>