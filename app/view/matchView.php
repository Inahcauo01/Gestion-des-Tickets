<?php
require_once 'C:\xamp\htdocs\Gestion-des-Tickets\app\model\Database.class.php';
$match_parent = new Database();
$sql="SELECT *
    from matchs m ,stade s
    where m.stade_id=s.id_stade";
$resultMatch = $match_parent->getAllrows($sql);
?>