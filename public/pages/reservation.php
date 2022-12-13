<!DOCTYPE html>
<html lang="en">
<?php
require_once("../../app/loader.php");

if(!isset($_SESSION["email"])){
    header('location:signin.php');
}

$db=new Database();
$email=$_SESSION["email"];
$rows=$db->getAlrows("SELECT * FROM utilisateur WHERE email=?",array($email));
foreach($rows as $row)


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style/style_reservation.css">
    <link rel="stylesheet" href="../assets/style/style.css">
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
                <li><a class="me-1 nav-login" href="userdashboard.php">Mon compte</a></li>
            </ul>
            <!-- <i class="fs-3 cursor-pointer fa-solid fa-bars header-menu"></i> -->
            <div class="header-menu">
                <span class="ligne"></span>
                <span class="ligne"></span>
                <span class="ligne"></span>
            </div>
        </nav>
    </header>


    <main>
        <div class="container mt-5">
            <div class="row  d-flex flex-column flex-lg-row align-items-start">
                <div class="  col-1 fs-3 d-flex flex-lg-column text-center">
                    <h5 class="mt-2 ">Share</h5>
                    <div class=" ms-3 mt-3 mb-3 icons d-flex justify-content-center border-icon">
                        <i class="bi bi-link-45deg  rounded-1 ">  </i>
                    </div>
                    <div class="ms-3 mt-3 mb-3 icons d-flex justify-content-center border-icon">
                        <i class="bi bi-instagram rounded-1 ">  </i>
                    </div>
                    <div class="ms-3 mt-3 mb-3 icons d-flex justify-content-center border-icon">
                        <i class="bi bi-twitter rounded-1 ">  </i>
                    </div>
                    <div class="ms-3 mt-3 mb-3 icons d-flex justify-content-center border-icon">
                        <i class="bi bi-facebook rounded-1 ">  </i>
                    </div>
                </div>
                <div class="col-12 col-lg-11 d-flex flex-column ">
                    <div class=" match d-flex  align-items-center justify-content-center w-100">
                        <!-- section match -->
                        <div class=" res d-flex flex-column  justify-content-center ">
                            <div class="  d-flex justify-content-center text-white">
                                <h2 class="gol rounded" id="match-counter">00:00</h2>
                            </div>
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="drapo d-flex flex-column align-items-center">
                                    <img src="../assets/images/flags/bahrain-197_256.gif" alt="flag canada" class="w-75 ">
                                    <span class="text-white fs-4 fw-bold">Canada</span>
                                </div>
                                <div class="drapo d-flex flex-column align-items-center">
                                    <H1 class=" vs text-white  ">VS</H1>
                                </div>
                                <div class="drapo d-flex flex-column  align-items-center">
                                    <img src="../assets/images/flags/jamaica-458_256.gif" alt="flag canada" class="w-75">
                                    <span class="text-white fs-4 fw-bold">Gamaica</span>
                                </div>
                            </div> 
                        </div>
                        <!-- end section match -->
                    </div>
                    <div class="mt-4 d-flex flex-column flex-lg-row justify-content-between align-items-center ">
                        <div class=" ms-2 ms-lg-0 my-3  d-flex flex-column align-items-between ">
                            <h3 class=" ">Morocco vs Canada</h3>
                            <div class="mb-3"><i class="me-2  my-1 py-2 mr-2 bi bi-geo-alt"></i><span>Al Thumama Stadium</span></div>
                            <div><i class=" me-2 my-2 py-2 mr-2 bi bi-calendar4-week"></i><span id="match-date"><?=$match_data['date_match'] ?></span></div>
                            <p class="my-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus debitis repudiandae non! Laborum</p>
                        </div>
                        <div id="reservation-card">
                        <div class="cardhover ticketshadow h-75 card border border-2 rounded-3 "  style="  width: 15rem;">
                            <div class="card-body ">
                                <h5 class=" text-center card-title">Tickets starting at</h5>
                                <h6 class=" text-center card-subtitle mb-2 text-muted">220$</h6>
                                <button class=" ticket  border border-0 rounded text-light text-center btn-ticket w-100 " data-bs-toggle="modal" data-bs-target="#réserver-tickets" id="reserve-btn" >Reserve your  E-Tickets</button>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div class=" mt-4 mt-lg-0 d-flex flex-column ">
                        <h3 class=" ">Match Information</h3>
                        <h4 class="mt-2 ">Description</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet p
                            orttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.</p>
                    </div>
                    <div class="my-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
        </div> 
    </main>
      <!-- modal of reservation -->
  <div class="modal " tabindex="-1" id="reserve-btn">
        <div class="modal-dialog modal-dialog-centered">
            <form action="" method="post" id="reserve-tickets">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">réserver tickets</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="ticket-number">Nombre des tickets</label>
                        <input type="hidden" name="id_utilisateur" value="<?php echo $row["id"]?>">
                        <input id="ticket-number" min=1 type="number" name="ticket-number" class="form-control">
                        <p id="erreur-number" class="d-none text-danger">Merci d'entrée un nombre correct</p>
                        <br>
                        <label for="ticket-nom">Choisir votre place</label>
                        <select name="place-catégorie" id="place-catégorie" class="form-select">
                            <option value="" disabled selected>sélectioné une catégorie</option>
                            <option value="400$">premiére catégorie &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>400$</b></option>
                            <option value="300$">deuxiéme ctégorie &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>300$</b></option>
                            <option value="200$">troisiéme ctégorie &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>200$</b></option>
                            <option value="100$">quatriéme ctégorie &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>100$</b></option>
                        </select>
                        <p id="erreur-catégorie" class="d-none text-danger">Merci d'entrée une catégorie</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuller</button>
                        <input name="Enregistrer" type="submit" value="Enregistrer" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>   
    
    
    <script>
            let reservebtn = document.querySelector("#reserve-btn");
            reservebtn.onclick=()=>{
                console.log("ofpknsd");
            }
            let reserveTickets = document.querySelector("#reserve-tickets");
            let ticketNumber = document.querySelector("#ticket-number");
            let placeCatégorie = document.querySelector("#place-catégorie");
            let erreurNumber = document.querySelector("#erreur-number");
            let erreurCatégorie = document.querySelector("#erreur-catégorie");
            let regexNumber = /^[0-9]{1,4}$/;


            let mydate = document.getElementById('match-date').textContent
            
            let spiltDate = date => date.split(" ")[0]+'T'+date.split(" ")[1];

            let dataDate = new Date(spiltDate(mydate));
            var date = dataDate.getTime()



            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();
                
                // Find the distance between now and the count down date
                var distance = date - now;
                
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                // Display the result in the element with id="match counter"
                document.getElementById("match-counter").innerHTML = days + "d   " + hours + "h "
                + minutes + "m " + seconds + "s ";
                
                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("match-counter").innerHTML = "Match Expiré";
                    document.getElementById('reservation-card').innerHTML=""
                }
                }, 1000);

            reserveTickets.addEventListener('submit', (e) => {
                if (regexNumber.test(ticketNumber.value) == false) {
                    ticketNumber.classList.add("border-danger");
                    erreurNumber.classList.remove("d-none");
                    e.preventDefault();
                }
                ticketNumber.onclick = () => {
                    erreurNumber.classList.add("d-none");
                    ticketNumber.classList.remove("border-danger");
                }
                if (placeCatégorie.value == "") {
                    placeCatégorie.classList.add("border-danger");
                    erreurCatégorie.classList.remove("d-none");
                    e.preventDefault();
                }
                placeCatégorie.onclick = () => {
                    erreurCatégorie.classList.add("d-none");
                    placeCatégorie.classList.remove("border-danger");
                }
        })
    </script>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</html>