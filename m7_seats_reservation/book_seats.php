<?php
session_start();
include './functions.php';

if (!isset($_SESSION['user']) && !strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') && !strpos($_SERVER['SCRIPT_FILENAME'], 'user_registration.php'))
    ts_redirect('./');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ticketing System</title>


</head>

<body>

    <header class=" position-absolute top-0 start-0 translate-middle m-5 px-5 w-25 ">
    <button onclick="history.go(-1);">Back </button>



    </header>


    
    <div class="container">
        <!-- closing tag in the footer.php -->
<main class="container my-5">

    <h1 class="text-center text-white">All Ticket</h1>
    <hr class="w-50 m-auto">

    <div id="htu-courses" class="mt-5 row">
      
   <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>
 
<div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>

 <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>
 <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>

 <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>
 
<div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>

 <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>
 <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
  <div class="card">
  <img src="assets\20221004_1664859250-701.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">ID :</h5>
  <p class="card-text">Is Available :</p>
   <button>Book it</button>
  </div>
 </div>
 </div>


<?php include './footer.php' ?>
 

 


   <!--  <?php foreach (get_seats() as $seat) :
        // if the seat is available > let any user reserve
        if ($seat->is_available) { ?>
            <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                <?= $seat->seat_num ?>
            </a>
            <?php
        } else {
            // if the seat is unavailable > check if the current user is the one who reserved the seat
            if ($seat->user_id == $_SESSION['user']['user_id']) {
                // if true
                // allow the user to make the seat available 
            ?>
                <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </a>
            <?php
            } else {
                // if false
                // do not allow the user to make the seat available
            ?>
                <div class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </div>
    <?php
            }
        }
    endforeach; ?> -->




