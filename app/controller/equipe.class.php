<?php
// require_once dirname(__DIR__) . '/model/Database.class.php';
require_once('C:\xampp\htdocs\Gestion-des-Tickets\app\model\Database.class.php');
// require_once('../../app/model/Database.class.php');
// inser equipe

        $db = new Database;
        if(isset($_POST['save_equipe'])){
            $nomequipe=$_POST['nom_equipe'];
            $imageEquipe=$_FILES['image_equipe']['name'];
            $tmpdir=$_FILES['image_equipe']['tmp_name'];

            $param=[$nomequipe,$imageEquipe];
            $query ="INSERT INTO equipe(nom_equipe,image) VALUES (?,?)";
            $db->insertData($query,$param);
            
            move_uploaded_file($tmpdir,'../../public/assets/upload_image/'.$imageEquipe);
        }
// update datae

    if(isset($_POST['update_equipe'])){
        
        
        $id = $_POST['id_equipe'];
        $nomequipe = $_POST['nom_equipe'];
        $image_equipe = $_FILES['image_equipe']['name'];
        $tmp_dir = $_FILES['image_equipe']['tmp_name'];

        $params = [ $_POST['nom_equipe'],$image_equipe, $_POST['id_equipe']];
            $query = "UPDATE equipe SET nom_equipe = ? , image = ?  WHERE id_equipe = ?";
             $db->updateData($query,$params);
            

        }
        // delete equipe
        if(isset($_POST['deleteEquipe'])){
            $param=[$_POST['id_equipe']];
            $result=$db->getRow("select * from equipe where id_equipe=?",$param);
            if(!$result){
                $query="delete from equipe where id_equipe=?";
                $resultt= $db->deleteData($query,$param);

                if(!$resultt){
                    echo "good";
                }
            }
        }
            
            









?>