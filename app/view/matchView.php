<?php
require_once '../../app/model/Database.class.php';
$match = new Database();
$sql="select * from matchs";
$resultMatch = $match->getAllrows($sql);

?>