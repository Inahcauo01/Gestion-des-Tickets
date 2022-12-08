<?php
// require_once dirname(__DIR__) . '/model/Database.class.php';
require_once('../../app/model/Database.class.php');
// inser equipe

        $db = new Database;
        if(isset($_POST['save_equipe'])){
            $nomequipe=$_POST['nom_equipe'];
            $image_equipe=$_FILES['image_equipe']['name'];
            $tmp_dir=$_FILES['image_equipe']['tmp_name'];

            $param=[$nomequipe,$image_equipe];
            $query ="INSERT INTO equipe(nom_equipe,image) VALUES (?,?)";
            $db->insertData($query,$param);
            
            move_uploaded_file($tmp_dir,'../../public/assets/upload_image/'.$image_equipe);
        }
// update datae

    if(isset($_POST['update_equipe'])){
        
        
        $id = $_POST['id_equipe'];
        // $nomequipe = $_POST['nom_equipe'];
        $image_equipe = $_FILES['image_equipe']['name'];
        // $tmp_dir = $_FILES['image_equipe']['tmp_name'];

        $params = [ $_POST['nom_equipe'],$image_equipe, $_POST['id_equipe']];
            $query = "UPDATE equipe SET nom_equipe = ? , image = ?  WHERE id_equipe = ?";
             $db->updatData($query,$params);
            

        }
        // delete equipe
        
            
            









?>