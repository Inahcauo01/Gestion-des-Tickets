<?php
// require_once('../app/loader.php');
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
        <li><a class="me-1 nav-login" href="pages/signin.php">Log In</a></li>
        <li><a class="ms-1 nav-Signup" href="pages/signin.php">Sign Up</a></li>
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
      <form class="d-flex w-100 align-items-center" action="">
        <div id="header-search"><input placeholder="search by events,name,location,and more" type="search"></div>
            <div class="d-flex align-items-center date-container mt-1 ps-2" id="header-date">
                <input value="select date" type="date"><i class="mx-2 fa-sharp fa-solid fa-arrow-right"></i>
                <input placeholder="select date" type="date">
            </div>
        <button class="text-light" type="submit" id="submit-search"><i
            class="fs-6 fa-solid fa-magnifying-glass"></i><span>search</span></button>
      </form>
    </div>
  </header>

<!-- MAIN -->
<main class="container mt-5">

<!-- matches -->
<div class="d-flex justify-content-between align-items-center">
    <h2 class="part-title">Upcoming Matchs</h2>
    <span>View All <i class="fa-solid fa-angle-right"></i></span>
</div>
<div class="d-flex row">
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/matches/BEL_MAR_F_FWC22_THUMB_V2.webp" alt="nom-jeu">
            <div class="card-body d-flex">
                <div class="text-center p-3">NOV<br>23</div>
                <div>
                    <div>Morocco vs Croitia</div>
                    <div>$ 150</div>
                    <div><i class="fa-solid fa-location-dot text-secondary"></i> Ahmad Bin Ali Staduim</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/matches/IRN_USA_B_FWC22_THUMB.webp" alt="nom-jeu">
            <div class="card-body d-flex">
                <div class="text-center p-3">NOV<br>23</div>
                <div>
                    <div>Iran vs USA</div>
                    <div>$ 150</div>
                    <div><i class="fa-solid fa-location-dot text-secondary"></i> Al Bayt Staduim</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/matches/BEL_MAR_F_FWC22_THUMB_V2.webp" alt="nom-jeu">
            <div class="card-body d-flex">
                <div class="text-center p-3">NOV<br>23</div>
                <div>
                    <div>Morocco vs Croitia</div>
                    <div>$ 150</div>
                    <div><i class="fa-solid fa-location-dot text-secondary"></i> Ahmad Bin Ali Staduim</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/matches/BEL_MAR_F_FWC22_THUMB_V2.webp" alt="nom-jeu">
            <div class="card-body d-flex">
                <div class="text-center p-3">NOV<br>23</div>
                <div>
                    <div>Morocco vs Croitia</div>
                    <div>$ 150</div>
                    <div><i class="fa-solid fa-location-dot text-secondary"></i> Ahmad Bin Ali Staduim</div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- image groupes -->
<img class="image-groupes" src="assets/images/FIFA-World-Cup-Qatar-2022-Final-groups.avif" alt="groupes">

<!-- natioal teams -->
<div class="d-flex justify-content-between align-items-center">
    <h2 class="part-title">Browse National Teams</h2>
    <span>View All <i class="fa-solid fa-angle-right"></i></span>
</div>
<div class="d-flex row">
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/equipes/equipemaroc.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>Moroccan National team</div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Morocco</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/equipes/equipemaroc.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>Moroccan National team</div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Morocco</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/equipes/equipemaroc.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>Moroccan National team</div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Morocco</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/equipes/equipemaroc.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>Moroccan National team</div>
                <div>Group F</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Morocco</div>
            </div>
        </div>
    </div>
</div>
<!-- staduims -->
<div class="d-flex justify-content-between align-items-center mt-4">
    <h2 class="part-title">Browse Available Staduims</h2>
    <span>View All <i class="fa-solid fa-angle-right"></i></span>
</div>
<div class="d-flex row mb-5">
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/stades/Ahmad-Bin-Ali-Stadium.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>Ahmad Bin Ali Staduim</div>
                <div>Capacity : 40,000</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Next to the Mall of Qatar</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/stades/Khalifa-International-Stadium.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>Khalifa International Staduim</div>
                <div>Capacity : 45,857</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Next to the Mall of Qatar</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/stades/Stadium-974.jpg" alt="nom-jeu">
            <div class="card-body">
                <div>974 Staduim</div>
                <div>Capacity : 40,000</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Next to the Mall of Qatar</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-3">
        <div class="card">
            <img class="card-img-top" src="assets/images/stades/Al-Bayt-Stadium.webp" alt="nom-jeu">
            <div class="card-body">
                <div>Al Bayt Staduim</div>
                <div>Capacity : 68,895</div>
                <div><i class="fa-solid fa-location-dot text-secondary"></i> Next to the Mall of Qatar</div>
            </div>
        </div>
    </div>
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