<?php
require_once 'C:\xampp\htdocs\Gestion-des-Tickets\app\model\Database.class.php';

$instance = new Database();
$res = $instance->getRow("SELECT * FROM matchs WHERE id_match=?", [9]);

if(isset($_POST['saveMatch'])){
    
    $dbMatch = new Database();
    $sql="INSERT INTO matchs(id_equipe1, id_equipe2, date_match, stade_id, result_match, prix_match, image_match) VALUES (?,?,?,?,?,?,?)";
    $id_equipe1   = $_POST["match-equipe1"];
    $id_equipe2   = $_POST["match-equipe2"];
    $date_match   = $_POST["match-date"];
    $stade_id     = $_POST["match-stade"];
    $prix_match   = $_POST["match-prix"];
    $result_match = $_POST["resultat"];

    $filename = $_FILES['image']['name'];

    if(!empty($filename)){
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = time().'.'.$ext;
        move_uploaded_file($_FILES['image']['tmp_name'], './images/uploads/'.$new_filename);
    }
    else{
        $new_filename = $filename;
    }

    $dbMatch->insertData($sql , [$id_equipe1, $id_equipe2, $date_match, $stade_id, $result_match, $prix_match, $new_filename]);
}


if(isset($_POST['updateMatch'])){
    
    $dbMatch = new Database();
    $id_match     = $_POST["match-id"];
    $id_equipe1   = $_POST["match-equipe1"];
    $id_equipe2   = $_POST["match-equipe2"];
    $date_match   = $_POST["match-date"];
    $stade_id     = $_POST["match-stade"];
    $prix_match   = $_POST["match-prix"];
    $result_match = $_POST["resultat"];


    $filename = $_FILES['image']['name'];
    
    if(!empty($filename)){
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = time().'.'.$ext;
        move_uploaded_file($_FILES['image']['tmp_name'], './images/uploads/'.$new_filename);
        $sql='UPDATE matchs set id_equipe1 = ? ,id_equipe2= ? ,date_match= ? ,stade_id= ? ,result_match= ? , prix_match = ? ,image_match = ? WHERE id_match= ?';
        $dbMatch->updateData($sql , [$id_equipe1, $id_equipe2, $date_match, $stade_id, $result_match,$prix_match, $new_filename, $id_match]);
        }
    else{
        $sql='UPDATE matchs set id_equipe1 = ? ,id_equipe2= ? ,date_match= ? ,stade_id= ? ,result_match= ? ,prix_match = ? WHERE id_match= ?';
        $dbMatch->updateData($sql , [$id_equipe1, $id_equipe2, $date_match, $stade_id, $result_match,$prix_match, $id_match]);
    }

}
if(isset($_GET['SuppMatch'])){
    $dbMatch = new Database();
    $sql="DELETE from matchs where id_match= ?";
    $dbMatch->deleteData($sql, [$_GET['SuppMatch']]);
}
?>
