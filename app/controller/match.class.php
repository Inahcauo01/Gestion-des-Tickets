<?php
require_once '../../app/model/Database.class.php';

if(isset($_POST['save'])){
    
    $dbMatch = new Database();
    $sql="INSERT INTO matchs (id_equipe1, id_equipe2, date_match, stade_id, result_match) VALUES (?,?,?,?,?)";
    $id_equipe1   = $_POST["match-equipe1"];
    $id_equipe2   = $_POST["match-equipe2"];
    $date_match   = $_POST["match-date"];
    $stade_id     = $_POST["match-stade"];
    $result_match = $_POST["resultat"];
    $dbMatch->insertData($sql , [$id_equipe1, $id_equipe2, $date_match, $stade_id, $result_match]);
}


?>
