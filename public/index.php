<?php
require_once('../app/loader.php');
// require_once dirname(__DIR__).'app/model/database.class.php';
// require_once dirname(__DIR__) . '/model/Database.class.php';

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>YouTickets</title>
</head>
<body>

<header class="header-landingpage">
    <nav class="d-flex px-2 justify-content-between align-items-center nav-landingpage ">
      <a class="nav-logo" href="#">YouTickets.com</a>
      <ul id="nav-page" class="d-flex my-auto nav-pages ">
        <li><a class="me-2 about-page" href="#">About</a></li>
        <li><a class="ms-2 me-2 news-page" href="#">News</a></li>
        <li><a class="ms-2 me-2 tearms-page" href="#">Tearms</a></li>
        <li><a class="ms-2 me-2 contact-page" href="#">Contact</a></li>
      </ul>
      <ul id="nav-compt" class="d-flex  my-auto nav-compte">
        <?php
        if(!isset($_SESSION["email"]) && !isset($_SESSION["emailadmin"]) ){
        ?>
        <li><a class="me-1 nav-login" href="pages/signin.php">Log In</a></li>
        <li><a class="ms-1 nav-Signup" href="pages/signin.php">Sign Up</a></li>
        <?php }else{
            if(isset($_SESSION["email"])){
            ?>
            <li><a class="me-1 nav-login" href="pages/userdashboard.php">Mon compte</a></li>
            <?php }else if(isset($_SESSION["emailadmin"])){
              ?>
            <li><a class="me-1 nav-login" href="pages/user-list-datatable.php">Mon compte</a></li>
              <?php
            }?>
            <li><a class="me-1 nav-Signup" href="../public/pages/déconexion.php">Déconnexion</a></li>
         <?php
            }?>
      </ul>
      <!-- <i class="fs-3 cursor-pointer fa-solid fa-bars header-menu"></i> -->
      <div class="header-menu">
        <span class="ligne"></span>
        <span class="ligne"></span>
        <span class="ligne"></span>
      </div>
    </nav>
    <div class="header-image">
    </div>
    <h1 class="fw-2  text-light text-center header-heading">Exclusive Matchs,priceless moments</h1>
    <div class="search-bar my-auto">
      <form class="d-flex w-100 align-items-center" action="pages/search.php" method="POST">
        <div id="header-search">
            <input placeholder="search by events,name,location,and more" name="mot" type="search" required>
        </div>
        <div class="d-flex align-items-center date-container mt-1 ps-2" id="header-date">
            <input  name="dateDebut" type="date"><i class="mx-2 fa-sharp fa-solid fa-arrow-right"></i>
            <input  name="dateFin" type="date">
        </div>
        <button class="text-light" name="search" type="submit" id="submit-search"><i
            class="fs-6 fa-solid fa-magnifying-glass"></i><span>search</span></button>
      </form>
    </div>
  </header>

<!-- MAIN -->
<main class="container mt-5">

<!-- matches -->
<div class="d-flex justify-content-between align-items-center">
    <h2 class="part-title">Upcoming Matchs</h2>
    <a href="pages/viewMatch.php" class="text-dark">View All <i class="fa-solid fa-angle-right"></i></a>
</div>


<div class="d-flex row">
<?php
    $sql="SELECT * from matchs m ,stade s where m.stade_id=s.id_stade order by date_match desc limit 4";
    $resultM = $match_parent->getAllrows($sql);
    foreach($resultM as $match){
    $sql1="SELECT nom_equipe FROM equipe where id_equipe= ?";
    $equipeNom1 = $match_parent->getRow($sql1, [$match["id_equipe1"]]);

    $sql2="SELECT nom_equipe FROM equipe where id_equipe= ? ";
    $equipeNom2 = $match_parent->getRow($sql2, [$match["id_equipe2"]]);

    $image = (!empty($match['image_match'])) ? './pages/images/uploads/'.$match["image_match"] : './pages/images/uploads/aucune.jpg';
    
?>
    <a href="./pages/reservation.php?id=<?=$match['id_match']?>" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body d-flex">
                <div class="text-center p-3">
                    <?php 
                    $date = new DateTime($match["date_match"]);
                    echo $date->format('M')."<br>".$date->format('d');
                    ?>
                </div>
                <div>
                    <div><?php echo $equipeNom1["nom_equipe"]." vs ".$equipeNom2["nom_equipe"]?></div>
                    <div>$ <?php echo $match["prix_match"] ?></div>
                    <div>$ <?php echo $match["date_match"] ?></div>
                    <div><i class="fa-solid fa-location-dot text-secondary"></i><?php echo $match["nom_stade"] ?></div>
                </div>
            </div>
        </div>
    </a>

    <?php
    }
?>
</div>
<!-- image groupes -->
<img class="image-groupes" src="assets/images/FIFA-World-Cup-Qatar-2022-Final-groups.avif" alt="groupes">

<!-- natioal teams -->
<div class="d-flex justify-content-between align-items-center">
    <h2 class="part-title">Browse National Teams</h2>
    <a href="pages/viewEquipe.php" class="text-dark">View All <i class="fa-solid fa-angle-right"></i></a>
</div>
<div class="d-flex row">
    
<?php
    $sql="SELECT * from equipe limit 4";
    $resultE = $match_parent->getAllrows($sql);
    foreach($resultE as $equipe){
        
    $image = (!empty($equipe['image'])) ? '../assets/upload_image/'.$equipe["image"] : './pages/images/uploads/aucune.jpg';
?>
    <a href="#" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body">
                <div><?php echo $equipe["nom_equipe"] ?></div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Morocco</div>
            </div>
        </div>
    </a>
<?php
    }
?>
</div>
<!-- staduims -->
<div class="d-flex justify-content-between align-items-center mt-4">
    <h2 class="part-title">Browse Available Staduims</h2>
    <a href="pages/viewStade.php" class="text-dark">View All <i class="fa-solid fa-angle-right"></i></a>
</div>
<div class="d-flex row mb-5">
    
<?php
    $sql="SELECT * from stade limit 4";
    $resultS = $match_parent->getAllrows($sql);
    foreach($resultS as $stade){
        
    $image = (!empty($stade['stade_image'])) ? '../public/assets/images/stades/'.$stade["stade_image"] : '../../public/assets/images/stades/aucune.jpg';
?>
    <a href="#" class="col-md-3 my-3 a-card">
        <div class="card">
            <img class="card-img-top" src="<?php echo $image ?>" style="width:100%;height: 176px" >
            <div class="card-body">
                <div><?php echo $stade["nom_stade"] ?></div>
                <div>Capacity : <?php echo $stade["capacite"] ?></div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> <?php echo $stade["lieu"] ?></div>
            </div>
        </div>
    </a>
<?php
    }
?>
</div>

</main>

<!-- Footer -->
<?php include_once 'components/footer.php'; ?>

<!-- scripts -->
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>