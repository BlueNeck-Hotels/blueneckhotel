<?php 
  include_once'./header.php';
?>
<!-------------------hero-section----------------> 
  <section class="bg_banner" id="home">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
          <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="200">
            <h1 class="font_size_47 h1_size text-white padding-top text-capitalize"><span class="yellow">planning travel
              </span></h1>
            <h1><span class="yellow font_size_47 text-capitalize ">Trust</span><span
                class="blue  font_size_47 text-capitalize "> blue
                <img src="./assets/font/fab-icon.svg" alt="maini_mashin" class="img-fluid spin-fav-icon" />
              </span> </h1>
            <div class="row mashine_top">
              <div class="col-3 col-md-3 col-lg-3 ">
              </div>
              <p class="text-white font_size_18 pt-3  pt-md-3 pt-lg-2">
                We are a chain of corporate hotels serving modern-age business professionals. Our focus is on providing
                a marvelous experience to all our guests through high-quality, customized services.
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-6  msin-spin-logo">
          <img src="./assets/font/Blue-nack-fb-logo.svg" alt="" class="img-fluid opacity-50 logo_spin" loading="lazy">
        </div>
        <div class="float-sm floating-bar">
            <div class="fl-fl float-fb">
              <a href="//api.whatsapp.com/send?phone=9319097977" target="_blank" class="">
                <img src="./assets/font/whatsapp.svg" alt="" loading="lazy"> <span
                  class="text-white font_size_14 text-center">Whatsapp</span>
              </a>
            </div>
            <div class="fl-fl float-tw">
              <a href="tel:9319097977" target="_blank">
                <img src="./assets/font/call.svg" alt=""> <span class="text-white font_size_14 text-center" loading="lazy">Call
                  Now</span>
              </a>
            </div>
            <div class="fl-fl float-gp">
              <a href="mailto:enquiry@blueneckhotels.com" target="_blank"> <img src="./assets/font/mail.svg" alt="" loading="lazy">
                <span class="text-white font_size_14 text-center">Mail Us</span>
              </a>
            </div>
            <div class="fl-fl float-rs" id="myButton">
              <img src="./assets/font/all.svg" alt=""> <span class="text-white font_size_14 text-center" loading="lazy">All</span>
            </div>
          </div>
        <form id="hotelForm">
          <div class="mobile-mode-form px-3 py-3 rounded-4">
            <div class="d-flex justify-content-between">
              <div class="col-12 d-flex">
                <div class="d-flex w-100 mobile-input-border">
                  <img src="./assets/font/hotel-img.svg" alt="hotel-img" class="img-fluid ps-2 hotel-mini-image" loading="lazy">
                  <input type="text" list="browser" class="form-control m-0 py-3 ps-3 w-75" placeholder="Where to next"
                    aria-label="Recipient's username" aria-describedby="basic-addon2" required  id="where1">
                </div>
                <datalist id="browser">
                  <option value="BlueNeck Hotel - Opp. IKEA GMP">
                  <option value="BlueNeck Hotel - Millennium City">
                  <option value="BlueNeck Hotel - Unitech Cyber Park">
                </datalist>
              </div>
            </div>
            <div class="col-12 pt-3 text-center mt-2">
              <button type="submit" class="text-center w-100 py-3 mt-2 font_size_18 search rounded-3" onclick="redirectToSelectedOption()" >Search</button>
              <!-- <button class="seacrh-button" type="button" >Search</button> -->

            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!----------------company---------------->

  <section>
    <div class="hostag-slider desktop-view overflow-x-hidden">
    
      <div class="slider_bg">
        <div>
          <img src="./assets/img/sliderblum.png" alt="" class="img-fluid" loading="lazy" >
        </div>
      </div>
      <div class="slider_bg">
        <div>
          <img src="./assets/img/home-slider-second-hastag.png" alt="" class="img-fluid" loading="lazy" >
        </div>
      </div>
      <div class="slider_bg">
        <div>
          <img src="./assets/img/home-slider-third-hastag.png" alt="" class="img-fluid" loading="lazy" >
        </div>
      </div>
    </div>
  </section> 

  <section class="mobile-slider">
    <div class="raper hostag-slider overflow-x-hidden">
      <div class="mobile-slider">
        <img src="./assets/img/mobile-slider.png" alt="" loading="lazy" class="img-fluid" loading="lazy">
        <p class="font_size_45 yellow  yellow-manage hastag-mobile-three">#iamabluetraveller</p>
      </div>
      <div class="mobile-slider">
        <img src="./assets/img/home-slider-mobile-second-hastag.png" alt="" class="img-fluid" loading="lazy" >
        <p class="font_size_45 yellow yellow-manage hastag-mobile-two">#iamabluehost</p>
      </div>
      <div class="mobile-slider">
        <img src="./assets/img/home-slider-mob-third-hastag.png" alt="" class="img-fluid"  loading="lazy">
        <p class="font_size_45 yellow  yellow-manage hastag-mobile-three">#iamablueguest</p>
      </div>
    </div>
  </section>




  <!----------------HOTEL------------------->

  <section class=" vertical_padding position-relative">
    <div class="side-big-logo">
      <img src="./assets/img/Blue-nack-big-logo.png" alt="" class="img-fluid" loading="lazy">
    </div>
    <div class="container">
      <div class="row overflow-x-hidden">
        <div class=" col-12 second-heading">
          <h2 class="font_size_40 h2-size text-capitalize font_weight_700 blue">Our Essence</h2>
          <p class="font_size_18">BlueNeck is a chain of entry-level three-star and boutique hotels located across Cyber City, Gurugram. Our mission is to provide a remarkable experience for all our guests by ensuring seamless, high-quality service.</p>
        </div>
      </div>
      <div class="row product_slider overflow-hidden">
        <div class="col-4 py-5">
          <div class="card-border p-3">
            <img src="./assets/img/blue-neck-sectot-40-hotel.png" class="img-fluid hotel-images-room"
              alt="hotel-images" loading="lazy">
            <div class="card-body py-2 pt-4">
              <h5 class="card-title font_weight_700 ">BlueNeck Sec 40 Unitech Cyber Park Gurugram </h5>
              <p class="card-text pt-3">Hotel is located near Unitech Cyber Park & Unitech Business Tower, Sector 40 Gurugram.</p>
              <p class="font_size_22"><span class=""><strong>₹2,499</strong>/Night</span>
                <span class="float-end d-flex mt-2"> <img src="./assets/font/hotel-star-ranking.svg" alt="">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid" loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid" loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid" loading="lazy">
                  <img src="./assets/font/hotel-star-Iranking.svg" alt="" class="img-fluid" loading="lazy">
                </span>
              </p>
              <!-- <a href="unitech-cyberpark-sector40"><button class="w-100 book-btn py-2 font_size_18">Book Now</button> -->
                <a href="unitech-cyberpark-sector40" class=" book-btn py-2 font_size_18">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-4 py-5">
          <div class="card-border p-3">
            <img src="./assets/img/new-47.jpg " class="img-fluid hotel-images-room"
              alt="hotel-images" loading="lazy">
            <div class="card-body py-2 pt-4">
              <h5 class="card-title  font_weight_700 ">BlueNeck Sec 47 Near IKEA GMP Gurugram</h5>
              <p class="card-text pt-3">Hotel is located near Subhash Chowk , Opp. IKEA GMP Sector 47,
            Gurugram.</p>
              <p class="font_size_22 "><span class=""><strong>₹2,499</strong> /Night</span>
                <span class="float-end d-flex mt-2"> <img src="./assets/font/hotel-star-ranking.svg" alt="">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                </span>
              </p>
              <!-- <a href="subhash-chowk-sector47"><button class="w-100 book-btn py-2 font_size_18">Book Now</button> -->
                <a href="subhash-chowk-sector47" class=" book-btn py-2 font_size_18">Book Now</a>
            </div>
          </div>
        </div>
        
        <div class="col-4 py-5">
          <div class="card-border p-3">
            <img src="./assets/img/blueNack-hotel-millinium-city-main-page.png" class="img-fluid hotel-images-room" alt="hotel-images" loading="lazy">
            <div class="card-body py-2 pt-4">
              <h5 class="card-title font_weight_700">BlueNeck Sec 41 Millenium City Centre Gurugram</h5>
              <p class="card-text pt-3">Hotel is located in South City 1, near Millennium City Centre Metro Station , Sector 41,
                Gurugram.
            </p>
              <p class="font_size_22"><span class=""><strong>₹2,499</strong> /Night</span>
                <span class="float-end d-flex mt-2"> <img src="./assets/font/hotel-star-ranking.svg" alt="">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                  <img src="./assets/font/hotel-star-ranking.svg" alt="" class="img-fluid"  loading="lazy">
                </span>
              </p>
              <!-- <a href="unitech-cyberpark-sector40"><button class="w-100 book-btn py-2 font_size_18">Book Now</button></a> -->
              <a href="millennium-city-centre-sector41" class=" book-btn py-2 font_size_18">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ------------------make-us--------------------------- -->
  <section class="product_bg vertical_padding ">
    <div class="container">
      <div class="row ">
        <div class=" col-12 second-heading">
          <h2 class="font_size_40 h2-size blue text-capitalize font_weight_700">What Makes Us <span class="yellow">#</span>BlueHost</h2>
          <p class="font_size_18 py-3">Blue is a symbol of infinity, serenity, and calmness. We strive to provide a personalized experience for all our guests, tailored to their comfort, needs, and preferences. Our team is dedicated to the <span class="blue">"I AM YOUR BLUE HOST"</span> culture, working tirelessly around the clock to help you create lasting memories during every stay with us.</p>
        </div>
      </div>

      <div class="servic-manage ">
            <a href="./hotel-in-gurugram"><img src="./assets/font/side-hotel.svg"  alt="" class="img-fluid"  loading="lazy"></a>
            <a href=""><img src="./assets/font/side-mariage.svg" alt="" class="img-fluid"  loading="lazy">
            </a>
            <a href=""><img src="./assets/font/side-confernce.svg" alt="" class="img-fluid"  loading="lazy">
            </a>
      </div>


      <!-- ==============POP=========== -->
      <div id="myPopup" class="popup">
        <div class="popup-content py-3 px-4">
         <div class="d-flex justify-content-between pt-3 ">
         <p class="socal-media font_size_25 m-0">social media</p>
          <button id="closePopup" class="m-0 ">
            <i class='bx bx-x'></i>  
            </div>
          <hr class="blue">
          </button>
          <div class="container">
            <div class="row g-4 py-3 pop-images">
              <div class="col-3 ">
                <a href="https://www.linkedin.com/company/103818025/admin/feed/posts/?feedType=following" target="_blank"> <img src="./assets/font/pop-linkedin.svg" alt="" class="img-fulid">
                </a>
              <p class="pop-content font_size_18 fw-light text-center pt-3">linkedin</p>
              </div>

              <div class="col-3 ">
                <a href="https://www.facebook.com/people/Blue-Neck-Hotel/61559168582310/" target="_blank">  <img src="./assets/font/pop-facebook.svg" alt="" class="img-fulid"> </a>
              <p class="pop-content font_size_18 fw-light text-center pt-3">Facebook</p>
              </div>

              <div class="col-3 ">
                <a href="https://www.instagram.com/blueneckhotel/?next=%2F" target="_blank"><img src="./assets/font/pop-instagram.svg" alt="" class="img-fulid">
                </a>
              <p class="pop-content font_size_18 fw-light text-center pt-3">Instagram</p>
              </div>

              <div class="col-3 ">
              <a href="" target="_blank"> <img src="./assets/font/pop-twitter.svg" alt="" class="img-fulid">
              </a>
              <p class="pop-content font_size_18 fw-light text-center pt-3">Twitter</p>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- -----------desktop------------- -->
      <div class="row img-manage-us g-3">
        <div class="col-7 col-md-6 col-lg-7 position-relative">
          <img src="./assets/img/hotel-respection-images.png" alt="hotel-respection-images" class="img-fluid big-img"  loading="lazy">
          <div class="hotel-contant ">
            <h3 class="font_size_30">Security Tech</h3>
            <p> Our reception and corridors are equipped with  CCTV which 
              enhances your safety and security.</p>
          </div>
        </div>
        <div class="col-5 col-md-6 col-lg-5">
          <div class="row g-3">
            <div class="col-12 position-relative">
              <img src="./assets/img/automated-cleanliness-images.png" alt="" class="img-fluid"  loading="lazy">
              <div class="hotel-contant ">
                <h3 class="font_size_30">StayTech</h3>
                <p>All our rooms have Wi-Fi access.</p>
              </div>
            </div>
            <div class="col-12 position-relative">
              <img src="./assets/img/sleep-tech-images.png" alt="" class="img-fluid"  loading="lazy">
              <div class="hotel-contant ">
                <h3 class="font_size_30">Anytime Breakfast
                </h3>
                <p>We cater to your tastes and preferences.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- -----------mobile------------- -->

      <div class="row img-manage-us mobile-design g-3 overflow-x-hidden" >

        <div class="col-4 py-5 px-2">
          <div class="p-3 card-border">
            <img src="./assets/img/hotel-respection-images.png" class="img-fluid hotel-images-room" alt="hotel-images"  loading="lazy">
            <div class="card-body py-4">
              <h3 class="font_size_30 text-capitalize">Security Tech</h3>
              <p class="card-text"> Our reception and corridors are equipped with  CCTV which 
              enhances your safety and security.</p>
            </div>
          </div>
        </div>`
        <div class="col-4 py-5 px-2">
          <div class="p-3 card-border">
            <img src="./assets/img/automated-cleanliness-images.png" class="img-fluid hotel-images-room"
              alt="hotel-images" loading="lazy">
            <div class="card-body py-4">
              <h3 class="font_size_30 text-capitalize">StayTech</h3>
              <p class="card-text">All our rooms have Wi-Fi access.</p>
            </div>
          </div>
        </div>
        <div class="col-4 py-5 px-2">
          <div class="p-3 card-border">
            <img src="./assets/img/sleep-tech-images.png" class="img-fluid hotel-images-room" alt="hotel-images"  loading="lazy">
            <div class="card-body py-4">
              <h3 class="font_size_30 text-capitalize">Security Tech</h3>
              <p class="card-text"> Our reception and corridors are equipped with  CCTV which 
              enhances your safety and security.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- -----------------------------gallery-------------------------- -->
  <section class="vertical_padding position-relative">
    <div class="side-big-logo">
      <img src="./assets/img/Blue-xnack-big-logo.png" alt="" class="img-fluid"  loading="lazy">
    </div>
    <div class="container">
      <h2 class="font_size_40 h2-size blue text-capitalize font_weight_700 pb-2 pb-md-3 pb-lg-5">what makes us blueneck </h2>
      <div class="row gallery-images-size gallery overflow-x-hidden">
         <div class="col-12 col-md-12 col-lg-6 mx-2 ps-2">
          <div class="row g-4 mx-2">
            <div class="col-12 p-0 pe-3">
              <img src="./assets/img/blue-nack-gallert-image.png" alt="blue-nack-gallert-image" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12 p-0 pe-3">
                  <div class="">
                    <img src="./assets/img/gallery-yellow-layer.png" alt="" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <div class="col-12 p-0 pe-3">
                  <img src="./assets/img/blue-nack-gallert-caple.png" alt="blue-nack-gallert-caple" class="img-fluid" loading="lazy">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12">
                    <img src="./assets/img/gallery-yellow-layer-second.png" alt="" class="img-fluid" class="img-fluid" loading="lazy" >
                </div>
                <div class="col-12">
                    <img src="./assets/img/clean-and-glow.png" alt=""  class="img-fluid" loading="lazy">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <div class="row g-4">
            <div class="col-6 ps-4">
              <img src="./assets/img/blue-nack-gallert-cake.png" alt="blue-nack-gallert-cake" class="img-fluid" loading="lazy" >
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12">
                  <div class="">
                    <img src="./assets/img/growing-hotel.png" alt="" class="img-fluid" loading="lazy" >
                  </div>
                </div>
                <div class="col-12">
                  <img src="./assets/img/gallery-blue-come-layer.png" alt="" class="img-fluid"  loading="lazy">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4 ps-4">
            <div class="">
              <img src="./assets/img/gallery-blue-layer.png" alt="" class="img-fluid" loading="lazy" >
            </div>
          </div>
        </div> 
        <div class="col-12 col-md-12 col-lg-6 mx-2 ps-2">
          <div class="row g-4 mx-2">
            <div class="col-12 p-0 pe-3">
              <img src="./assets/img/specal-banquit.png" alt="blue-nack-gallert-image" class="img-fluid" loading="lazy" >
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12 p-0 pe-3">
                  <div class="">
                    <img src="./assets/img/best-options.png" alt="" class="img-fluid" loading="lazy" >
                  </div>
                </div>
                <div class="col-12 p-0 pe-3">
                  <img src="./assets/img/dayning-table.png" alt="blue-nack-gallert-caple" class="img-fluid" loading="lazy">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12">
                    <img src="./assets/img/gallery-food-area.png" alt="" class="img-fluid"  loading="lazy" >
                </div>
                <div class="col-12">
                    <img src="./assets/img/fully-equipped.png" alt="" class="img-fluid"  loading="lazy" >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <div class="row g-4">
            <div class="col-6">
              <img src="./assets/img/gallery-family.png" alt="blue-nack-gallert-cake" class="img-fluid"  loading="lazy" >
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12">
                  <div class="">
                    <img src="./assets/img/primeriy-locartion.png" alt="" class="img-fluid"  loading="lazy">
                  </div>
                </div>
                <div class="col-12">
                  <img src="./assets/img/creating-good-memeries.png" alt="" class="img-fluid"  loading="lazy">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="">
              <img src="./assets/img/budget-stay.png" alt="" class="img-fluid"  loading="lazy" >
            </div>
          </div>
        </div> 

        <div class="col-12 col-md-12 col-lg-6 mx-2  ps-2">
          <div class="row g-4 mx-2">
            <div class="col-12 p-0 pe-3">
              <img src="./assets/img/one-lakh-plus.png" alt="blue-nack-gallert-image" class="img-fluid"  loading="lazy" >
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12 p-0 pe-3">
                  <div class="">
                    <img src="./assets/img/customize-food.png" alt="" class="img-fluid"  loading="lazy" >
                  </div>
                </div>
                <div class="col-12 p-0 pe-3">
                  <img src="./assets/img/plet-food.png" alt="blue-nack-gallert-caple" class="img-fluid"  loading="lazy">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12">
                    <img src="./assets/img/good-luck.png" alt="" class="img-fluid"  loading="lazy" >
                </div>
                <div class="col-12">
                    <img src="./assets/img/high-customer.png" alt="" class="img-fluid"  loading="lazy" >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <div class="row g-4">
            <div class="col-6">
              <img src="./assets/img/best-corpreat-stay.png" alt="blue-nack-gallert-cake" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-6">
              <div class="row g-4">
                <div class="col-12">
                  <div class="">
                    <img src="./assets/img/corporate-cab.png" alt="" class="img-fluid"  loading="lazy">
                  </div>
                </div>
                <div class="col-12">
                  <img src="./assets/img/texs-imeages.png" alt="" class="img-fluid"  loading="lazy">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="">
              <img src="./assets/img/blue-neck-buliding.png" alt="" class="img-fluid"  loading="lazy" >
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <!-- ---------------------owner----------------------  -->

  <section class="product_bg vertical_padding ">
    <div class="container">
      <div class="row ">
        <div class="col-4">
          <div class="mx-1 bg-white pt-3">
            <img src="./assets/img/Blue-nack-owner.png" alt="" class="img-fluid"   loading="lazy">
            <h4 class="text-center font_size_25 text-capitalize opacity-75 pt-4">patron & partners</h4>
            <p class="text-center pt-4 px-2">We are one of the best mid-scale budget hotels across gurugram. We believe in growing together and we ensure that all our associates grow with us.</p>
            <div class="text-color pt-2 d-flex justify-content-center align-it">
              <a href="./patron&partners"  class="d-flex justify-content-center align-items-center let-grow " id="#" >Let’s grow together
                <i class='bx bx-right-arrow-alt'></i>
</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="mx-1 bg-white pt-3">
            <img src="./assets/img/Corporate Bookings.png" alt="" class="img-fluid"   loading="lazy">
            <h4 class="text-center font_size_25 text-capitalize opacity-75 pt-4">Corporate Deals</h4>
            <p class="text-center py-4  px-2">We are always interested in and open to collaborating with corporate and travel agents. Let’s get connected and work together.</p>

            <div class="text-color pt-2 d-flex justify-content-center align-it">
              <a href="./corporate-bookings"  class="d-flex justify-content-center align-items-center let-grow " id="#" >Collaborate with us
                <i class='bx bx-right-arrow-alt'></i>
</a>
            </div>
          </div>
        </div>
        <div class="col-4 m-auto">
          <div class="mx-1 bg-white pt-4">
            <img src="./assets/img/Careers @ blue neck.png" alt="" class="img-fluid "  loading="lazy">
            <h4 class="text-center font_size_25 text-capitalize opacity-75 pt-4">Jobs @blueNeck</h4>
            <p class="text-center py-3 px-2">BlueNeck is always in search of young talents and is ready to work with those who are dedicated and passionate about contributing to business growth.</p>
            <div class="text-color pt-2 d-flex justify-content-center align-it">
              <a href="./careers-blueNeck"  class="d-flex justify-content-center align-items-center let-grow " id="#" >Join us
                <i class='bx bx-right-arrow-alt'></i>
</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-4 ">
        <div class="col-12 mobile-off">
          <div class=" mobile-bg d-flex">
            <div class="col-4 m-auto">
              <img src="./assets/img/Blue-nack-owner.png" alt="" class="img-fluid"  loading="lazy" >
            </div>
            <div class="col-8 px-2 pt-3 pt-md-5">
              <h4 class=" font_size_25 text-capitalize opacity-75 pt-2">patron & partners</h4>
              <p class=" py-3">We are one of the best mid-scale budget hotels across gurugram. We believe in growing together, and we ensure that all our associates grow with us.</p>
            </div>
            <div class="mx-1  pt-3">
            </div>
          </div>
        </div>
        <div class="col-12 mobile-off">
          <div class=" mobile-bg d-flex">
            <div class="col-4 m-auto">
              <img src="./assets/img/Corporate Bookings.png" alt="" class="img-fluid"  loading="lazy">
            </div>
            <div class="col-8 px-2 pt-3 pt-md-5">
              <h4 class=" font_size_25 text-capitalize opacity-75 pt-2">Corporate Deals</h4>
              <p class=" py-3">We are always interested in and open to collaborating with corporate and travel agents. Let’s get connected and work together. </p>
            </div>
            <div class="mx-1  pt-3">
            </div>
          </div>
        </div>
        <div class="col-12 mobile-off ">
          <div class=" mobile-bg d-flex">
            <div class="col-4 m-auto ">
              <img src="./assets/img/Careers @ blue neck.png" alt="" class="img-fluid"  loading="lazy" >
            </div>
            <div class="col-8 px-2 pt-3 pt-md-5">
              <h4 class=" font_size_25 text-capitalize opacity-75 pt-2 ">Jobs @blueNeck</h4>
              <p class=" py-3">BlueNeck is always in search of young talents and is ready to work with those who are dedicated and passionate about contributing to business growth. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- --------------partner-slider----------------- -->

<section>
  <div class="container">
    <div class="row  galleryOne overflow-x-hidden py-4"  >
      <div class="col-2">
        <img src="./assets/img/gold-woman.png" alt="gold-woman" class="img-fluid"  loading="lazy">
      </div>
      <div class="col-2">
        <img src="./assets/img/nsr-slider.png" alt="gold-woman" class="img-fluid"  loading="lazy">
      </div>
      <div class="col-2">
        <img src="./assets/img/himanchal-pardesh.png" alt="gold-woman" class="img-fluid"  loading="lazy" >
      </div>
      <div class="col-2">
        <img src="./assets/img/mou.png" alt="gold-woman" class="img-fluid"  loading="lazy">
      </div>
      <div class="col-2">
        <img src="./assets/img/corooms-images.png" alt="gold-woman" class="img-fluid"  loading="lazy" >
      </div>
    </div>
  </div>
</section>

  <!-- --------------need-banner------------------ -->

  <section>
    <div class="help-banner position-relative">
      <img src="./assets/img/need-banner.png" alt="" class="img-fluid need-dekstop-view"  loading="lazy">
      <img src="./assets/img/need-banner-mobile.png" alt="" class="img-fluid mobile-view"  loading="lazy">
      <div class=" help-bannder-heading">
          <h5 class=" h5-size yellow text-center">Need Any Help?</h5>
          <p class="font_size_18 text-center text-white py-1">Customer satisfaction is always our top priority at Blue Neck, <br> and we are dedicated to delivering the highest level of service to each and <br> every one of our customers.</p>
            <div class="text-center">
              <button class="py-2 py-md-2 py-lg-3 px-4 btn-connect font_size_18"  onclick="location.href = 'contact'; return false" >Let’s connect</button>
            </div>
          </div>
    </div>
  </section> 
  <!-- --------------footer------------------ -->
  <?php 
  include_once'./footer.php';
?>
</body>
</html>