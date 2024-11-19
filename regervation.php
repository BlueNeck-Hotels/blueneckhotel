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
    <section class="horzontal-padding animation">
      <a href="./slef-checking.php">
        <i class='bx bx-chevron-left back-arrow'></i>
      </a>
      <div class="container reservation">
        <div class="row">
          <img src="./assets/img/regervation.jpg" alt="" class="img-fulid checking-img">
          <input type="text" oninput="this.value = this.value.toUpperCase()" id="resVal" class="form-control reservation-input" placeholder="Reservation ID">
          <a href="#" class="slef-booking" id="resbutton">Self Checkin</a>
          <p class="text-center py-4 light-color">Please fill in your Reg. ID above to proceed further.</p>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    let resVal = document.getElementById("resVal");
let resbutton = document.getElementById("resbutton");

resbutton.addEventListener('click', function () {
  // Check if the input is empty
  if (resVal.value === '') {
    Swal.fire({
      title: 'Error!',
      text: 'Please enter a valid Reservation ID.',
      icon: 'error',
      confirmButtonText: 'OK'
    });
  } 
  else if (resVal.value.length < 12  || resVal.value.length > 12 ) { // Check if the length exceeds 4 characters
    Swal.fire({
      title: 'Error!',
      text: 'Reservation ID should not exceed 4 characters.',
      icon: 'error',
      confirmButtonText: 'OK'
    });
    
    resVal.value = ''; // Clear the input field
    resVal.focus(); // Set focus back to the input field
  } 

  else if ((/[a-zA-Z]/.test(resVal) && resVal.length < 5) || (/\d/.test(resVal) && Number(resVal) < 7)) {
    Swal.fire({
      title: 'Error!',
      text: 'Input contains invalid letters or numbers less than 7.',
      icon: 'error',
      confirmButtonText: 'OK'
    });
    resVal.value = ''; // Clear the input field
    resVal.focus(); // Set focus back to the input field
  } 

  else {
    // Perform self-checking action here
    // window.location.href = "./verification.php";
    Swal.fire({
      title: 'DONE',
      text: 'success Reservation ID is Conform',
      icon: 'success',
      confirmButtonText: 'OK'
    });
    resVal.value = ''; // Clear the input field
    resVal.focus(); // Set focus back to the input field
    setTimeout(() => {
          window.location.href = "enteraddharnum.php";

    }, 2000);
  }
});

    </script>
  </body>
</html>
