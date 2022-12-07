<?php
require_once '../../app/model/Database.class.php';
$match_parent = new Database();
$sql="SELECT *
    from matchs m ,stade s
    where m.stade_id=s.id_stade";
$resultMatch = $match_parent->getAllrows($sql);
?>