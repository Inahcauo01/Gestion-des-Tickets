<?php

require_once 'C:\xampp\htdocs\Gestion-des-Tickets\app\model\Database.class.php';
$instance = new Database();
$res = $instance->getRow("SELECT * FROM matchs WHERE id_match=?", [9])

?>
