<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
        <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/checking.css"/>
  </head>
  <body>
  <section class="horzontal-padding">
    <a href="./slef-checking.php"><i class='bx bx-chevron-left back-arrow'></i>
    </a>
    <h1 class="font_size_25 font_weight_600  text-center main-heading-color pt-3">Available Rooms</h1>
    
<div class="container">
<div class="row"> 
        <div class="col-12 p-0">
        <div class="form-item">
    <!-- <input type="password" id="password" autocomplete="off" required  class="form-label "> -->
     <select name="" id="">
      <option value="">29</option>
      <option value="">31</option>
      <option value="">32</option>
     </select>
    <label for="password">Room No.</label>
          </div>
        </div>
    </div>
    <div class="row rooms" >
      <div class="text-center img-rapper">
      <img src="./assets/img/hotels-room-images.jpg" alt="" class="img-fuild">
      <p class="font_size_18">Rooms for single staying people</p>
      <h2 class="font_size_20">₹2700</h2>
      </div>
      <div class="text-center img-rapper">
      <img src="./assets/img/hotels-room-images.jpg" alt="" class="img-fuild">
      <p class="font_size_18">Rooms for single staying people</p>
      <h2 class="font_size_20">₹2700</h2>
    </div>
  </div>
  <div class="slef_button">
  <a href="./roomavailable.php" class="slef-booking" id="#">Self Checkin</a>
  </div>
</div>

  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script>
 $(document).ready(function(){
  $('.rooms').slick({
    infinite: true,
  slidesToShow: 1 ,
  slidesToScroll: 1,
  prevArrow: "<button type='button' class='slick-prev'> <img src='./assets/font/up-right-arrow.svg' alt='Previous'> </button>",
  nextArrow: "<button type='button' class='slick-next'> <img src='./assets/font/up-arrow.svg' alt='Previous'></button>",
  });
});
  </script>
</body>

</html>