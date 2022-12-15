<?php


require_once('C:\xamp\htdocs\Gestion-des-Tickets\app\model\Database.class.php');

        $db = new Database;
		$user=$db->numberRow('SELECT * FROM `utilisateur` WHERE role_u=?',array(2));
        $match=$db->totalRow("SELECT * FROM matchs");
        $equipe=$db->totalRow("SELECT * FROM equipe");
        $stade=$db->totalRow("SELECT * FROM stade");
        $ticket=$db->getAllrows("SELECT SUM(nombre_place) as nombreplaceReserve FROM `reservation`");
        foreach($ticket as $val){
            foreach($val as $value){
            }
        }
        
        

		
								


?>