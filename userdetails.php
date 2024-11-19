<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/checking.css"/>
  </head>
  <body>
  <section class="horzontal-padding animation" >
    <a href="./slef-checking.php"><i class='bx bx-chevron-left back-arrow'></i>
    </a>
    <div class="loader-thank" id="animation-show">
    <img src="./assets/img/loader-thank.gif" alt="loader-thank.gif">
    </div>
    <div class="container reservation">
        <div class="row">
            <h1 class="font_size_25 font_weight_600  text-center main-heading-color py-3 ">Dhruv Gupta</h1>
           <div class="  user-details-outer">
           <div class="d-flex justify-content-between user-details-coloum ">
                <p>Name</p>
                <p><?php echo $_SESSION['client_data']['full_name'] ?></p>
            </div>
           <div class="d-flex justify-content-between user-details-coloum ">
                <p>state</p>
                <p> <?php echo $_SESSION['client_data']['address']['state'] ?> </p>
            </div>
           <!-- <div class="d-flex justify-content-between user-details-coloum ">
                <p>Email</p>
                <p><?php echo $_SESSION['client_data']['NA'] ?> </p> 
            </div> -->
           <div class="d-flex justify-content-between user-details-coloum ">
                <p>Date of Birth</p>
                <p><?php echo $_SESSION['client_data']['dob'] ?> </p>
            </div>
           <div class="d-flex justify-content-between user-details-coloum ">
                <p>Gender</p>
                <p><?php echo $_SESSION['client_data']['gender'] ?> </p>
            </div>
           <div class="d-flex justify-content-between user-details-coloum ">
                      <p>Address : <span class=""><?php echo $_SESSION['client_data']['address']['house']?> </span>,<span class=""><?php echo $_SESSION['client_data']['address']['state']?> </span> ,<span class=""><?php echo $_SESSION['client_data']['address']['street']?> </span>,<span class=""><?php echo $_SESSION['client_data']['zip']?> </span></p>
            </div>
           </div>
            <a href="#" class="slef-booking" id="conform">CONFORM</a>
        </div>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<script>
    const conformanimation = document.getElementById('conform');
    const animationShow = document.getElementById('animation-show');
    conformanimation.addEventListener('click', ()=>{
        animationShow .style.display="unset"
        setTimeout(()=>{
            window.location.href = './thankyou.php';
        }, 3000);
    }) 
</script>

 <?php
// echo "<pre/>";
// print_r($_SESSION['client_data']);
 ?>
 </body>
</html>