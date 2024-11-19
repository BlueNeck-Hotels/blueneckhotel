<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="./assets/css/global.css" />
  <link rel="stylesheet" href="./assets/css/booking.css" />
  <link rel="stylesheet" href="./assets/css/booking-responsive.css" />
  <link rel="stylesheet" href="./build/css/intlTelInput.css" />
</head>

<body>
  <section class="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3 innear-padding m-0">
          <img src="./assets/img/logo.png" alt="" class="img-fluid" />
          <div class="number-rapper">
            <div class="number">
              <p class="number-color font_size_25">1</p>
              <p class="check-box" id="check-box">
                <i class="bx bx-check"></i>
              </p>
              <p class="font_size_25 text-color ps-0 ps-md-0 ps-lg-5 cursor-poiter" id="text-one">Search</p>
              <div class="vertical" id="vertical"></div>
            </div>
            <div class="number">
              <p class="number-color font_size_25">2</p>
              <p class="check-box" id="check-box-second">
                <i class="bx bx-check"></i>
              </p>
              <p class="font_size_25 text-color ps-0 ps-md-0 ps-lg-5 cursor-poiter" id="text-two">Room & Rate</p>
              <div class="vertical " id="vertical-second"></div>
            </div>
            <div class="number">
              <p class="number-color font_size_25">3</p>
              <p class="check-box" id="check-box-three">
                <i class="bx bx-check"></i>
              </p>
              <p class="font_size_25 text-color ps-0 ps-md-0 ps-lg-5 cursor-poiter" id="text-color">Review & Pay</p>
            </div>
          </div>
          <!-- <div class="number-two">
                      <p class="number-color font_size_25">2</p>
                      <p class="text-color font_size_25 ps-5">Room & Rate</p>
                     <div class="vertical-two"></div>
                     </div>
                     <div class="number-two">
                     <p class="number-color font_size_25">3</p>
                     <p class="text-color font_size_25 ps-5">Review & Pay</p>
                     </div> -->
        </div>
        <div class="col-9 form-width">
          <!-- ================form1================-->
          <form action="" id="form1">
            <div class="row align-items-center input-size overflow-x-hidden">
              <div class="col-12 col-md-6 col-lg-6">
                <label for="datepickerOne">Check In</label>
                <div class="check-border">
                  <input type="text" class="form-control" placeholder="Check In" aria-label="First name"
                    id="datepickerOne" autocomplete="off" />
                  <img src="./assets/font/clender.svg" alt="#" class="img-fluid" id="datepickerIcon" />
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <label for="datepickerTwo">Check Out</label>
                <div class="check-border">
                  <input type="text" class="form-control" placeholder="Check Out" aria-label="Last name"
                    id="datepickerTwo" autocomplete="off" />
                  <img src="./assets/font/clender.svg" alt="#" class="img-fluid" id="datepickerIconSecond" />
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <label for="">Nights</label>
                <div class="night-button">
                  <a onclick="minus()" class="carsour-pointer">-</a>
                  <p class="m-0" id="count">01</p>
                  <a onclick="plus()" class="carsour-pointer">+</a>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <label for="">Room</label>
                <select class="form-select" aria-label="Default select example" id="room">
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <label for="">Room 1</label>
                <p>ADULTS</p>
                <p class="above-color">(13 YRS & ABOVE)</p>
                <select class="form-select" aria-label="Default select example">
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-12 col-md-4 col-lg-4"">
                         <label for="" class=" pt-0 pt-md-2 pt-lg-3"></label>
                <p class="pt-0 pt-md-4 pt-lg-3">CHILDREN</p>
                <p class="above-color">(6-12 Yrs)</p>
                <select class="form-select" aria-label="Default select example">
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-12 col-md-4 col-lg-4"">
                         <label for="" class=" pt-0 pt-md-3 pt-lg-3"></label>
                <p class="pt-0 pt-md-3 pt-lg-3">INFANT</p>
                <p class="above-color">(0-5 Yrs)</p>
                <select class="form-select" aria-label="Default select example">
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <hr class="my-5 formone-hr" />
              <div class="proceed-button pb-4">
                <button type="button" class="procced-btn" id="Book">
                  proceed
                </button>
              </div>
            </div>
          </form>
          <!-- ================form2================-->
          <form action="" id="form2">
            <div class="row overflow-x-hidden input-size ">
              <div class="date-container d-flex px-2 px-md-2 px-lg-0 ">
                <div class="col-3 date-child">
                  <label for="datepickerOne" class="label-size">Check In</label>
                  <div class="check-border">
                    <input type="text" class="form-control" placeholder="Check In" aria-label="First name"
                      autocomplete="off" />
                  </div>
                </div>
                <div class="col-3 date-child">
                  <label for="datepickerTwo" class="label-size">Check Out</label>
                  <div class="check-border">
                    <input type="text" class="form-control" placeholder="Check Out" aria-label="Last name"
                      autocomplete="off" />
                  </div>
                </div>
                <div class="col-6 date-child p-0">
                  <label for="datepickerTwo" class="label-size">NO. OF ROOM</label>
                  <div class="check-border">
                    <input type="text" class="form-control" placeholder="NO.OF Room" aria-label="Last name"
                      autocomplete="off" />
                  </div>
                </div>
              </div>
              <!-- <div class="d-flex" id="productContainer">
                  
                  </div> -->
              <div id="rooms-container"></div>

            </div>
            <!-- <template id="productTemplate">
            <div class="col-12 col-md-3 col-lg-3 pt-0 pt-md-0 pt-lg-5">
                           <img src="./assets/img/blueneck-hotel-image.jpg" alt="" class="img-fluid self-check-in-images" />
                         </div>
                         <div class="price-flex col-12 col-md-3 col-lg-3 pt-4 pt-md-4 pt-lg-5 ">
                           <div>
                             <h2 class="font_size_25 blue roomName pt-2 font_weight_600"></h2>
                             <p class="price m-0 pt-0 pt-md-3 pt-lg-4 night"><del></del></p>
                             <p class="taxes m-0">*</p>
                           </div>
                           <div>
                             <h3 class="pt-5 font_size_23 font_weight_700 price-for-mobile">/<span
                                 class="night"></span></h3>
                           </div>
                         </div>
                         <div class="col-12 col-md-3 col-lg-3 pt-2 pt-md-2 pt-md-3">
                           <h3 class="pt-5 font_size_23 price-for-desktop"></h3>
                         </div>
                         <div class="col-12 col-md-3 col-lg-3 pt-3 pt-md-4 pt-lg-5">
                           <button type="button" class="procced-btn" id="bookingdetails"></button>
                         </div>
                       </div> 
                  </div>
            </template> -->
          </form>
          <!-- ================form3================  -->
          <form action="" id='form3'>
            <div class="row ms-0 ms-md-0 ms-lg-3">
              <div class="room-crose p-0">
                <div class="col-12  d-flex justify-content-between pt-4 pb-4 px-0">
                  <div class="d-flex">
                    <img src="./assets/img/Premium-With-Balcony.jpg" alt="Premium-With-Balcony"
                      class="img-fluid Premium-With">
                    <h2 class="font_size_30 premium" id="summaryRoomName">Premium With<br>Balcony</h2>
                  </div>
                  <p class="crose" id="crose-btn">x</p>
                </div>
                <div class="col-12">
                  <hr>
                  <div class="nav-tabs-wrapper nav-border">
                    <ul class="nav" id="tabs-title-region-nav-tabs" role="tablist">
                      <li class="nav-item cursor-pointer">
                        <a class="nav-link font_size_20 font_weight_600 ps-0 carsour-pointer" data-toggle="tab"
                          role="tab" aria-selected="false" id="block-simple-text-1-tab">RATES</a>
                      </li>
                      <li class="nav-item cursor-pointer">
                        <a class="nav-link font_size_20 font_weight_600 carsour-pointer" data-toggle="tab" role="tab"
                          aria-selected="false" id="block-simple-text-2-tab">ROOM & INCLUSIONS</a>
                      </li>
                      <li class="nav-item cursor-pointer">
                        <a class="nav-link font_size_20 font_weight_600 carsour-pointer" data-toggle="tab" role="tab"
                          aria-selected="false" id="block-simple-text-3-tab">PICTURES</a>
                      </li>
                      <li class="nav-item cursor-pointer">
                        <a class="nav-link font_size_20 font_weight_600 carsour-pointer" data-toggle="tab" role="tab"
                          aria-selected="false" id="block-simple-text-4-tab">TERMS & CONDITIONS</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 p-0">
                <div class="tab-content">
                  <div id="block-simple-text-1"
                    class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                    role="tabpanel" aria-labelledby="block-simple-text-1-tab">
                    <h3 class="font_size_20 py-3">Best Available Rate</h3>
                    <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del id="brekfast">₹</del></span> <span
                              class="font_size_20 font_weight_600 m-0" id="brekfastdiscount"></span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del id="desktopprice"></del></span> <span
                            class="font_size_20 font_weight_600 m-0 " id="desktopdiscount"> </span></p>
                        <button class="booking-button" type="button" id="roomratebook">Book</button>
                        
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del id="brekfasttwo"></del></span> <span
                              class="font_size_20 font_weight_600 m-0" id="brekfastdiscounttwo"></span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del id="desktoppricetwo"></del></span> <span
                            class="font_size_20 font_weight_600 m-0 " id="desktopdiscounttwo"></span></p>
                        <button class="booking-button" type="button" id="roomratebooktwo">Book</button>
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del id="brekfastthree"></del></span> <span
                              class="font_size_20 font_weight_600 m-0" id="brekfastdiscountthree"></span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del id="desktoppricethree"></del></span> <span
                            class="font_size_20 font_weight_600 m-0 " id="desktopdiscountthree"></span></p>
                        <button class="booking-button" type="button" id="roomratebookthree">Book</button>
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del id="brekfastfour"></del></span> <span
                              class="font_size_20 font_weight_600 m-0" id="brekfastdiscountfour"></span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del id="desktoppricefour"></del></span> <span
                            class="font_size_20 font_weight_600 m-0 " id="desktopdiscountfour"></span></p>
                        <button class="booking-button" type="button" id="roomratebookfour">Book</button>
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>
                    <!-- <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del>₹ 4,480</del></span> <span
                              class="font_size_20 font_weight_600 m-0 ">₹ 3,136</span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del>₹ 4,480</del></span> <span
                            class="font_size_20 font_weight_600 m-0 ">₹ 3,136</span></p>
                        <button class="booking-button" type="button">Book</button>
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del>₹ 4,480</del></span> <span
                              class="font_size_20 font_weight_600 m-0 ">₹ 3,136</span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del>₹ 4,480</del></span> <span
                            class="font_size_20 font_weight_600 m-0 ">₹ 3,136</span></p>
                        <button class="booking-button" type="button">Book</button>
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="room-rate">
                      <div class="room-only">
                        <div>
                          <p class="room-only-child">Room Only</p>
                          <p class="discound-coppen">BNH30</p>
                        </div>
                        <div>
                          <p class="m-0  mobile-price"><span class="night"><del>₹ 4,480</del></span> <span
                              class="font_size_20 font_weight_600 m-0 ">₹ 3,136</span></p>
                        </div>
                      </div>
                      <div class="rate-book">
                        <p class="m-0  desktop-price"><span class="night"><del>₹ 4,480</del></span> <span
                            class="font_size_20 font_weight_600 m-0 ">₹ 3,136</span></p>
                        <button class="booking-button" type="button">Book</button>
                        <select id="cars">
                          <option value="volvo">1</option>
                          <option value="saab">2</option>
                          <option value="opel">3</option>
                          <option value="audi">4</option>
                        </select>
                      </div>
                    </div>  -->
                  </div>
                  <div id="block-simple-text-2"
                    class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                    role="tabpanel" aria-labelledby="block-simple-text-2-tab">
                    <h3 class="font_size_20 py-3">Descriptione</h3>
                    <p class="py-2">Premium With Balcony Blue Room With 8" Spring Matress, 42" SMART Blue LED,
                      Mini Bar, Study Table & Chair, Sofa, WiFi, Private Bathroom, Total Room Size 265 SQFT</p>
                    <h3 class="font_size_20 py-3">Inclusion</h3>
                    <ul class="inclusion">
                      <li><img src="./assets/icon/wifi-booking.svg" alt=""> <span>Free WiFi</span></li>
                      <li><img src="./assets/icon/free-parking-booklng.svg" alt=""> <span>Free Parking</span>
                      </li>
                      <li><img src="./assets/icon/coffie-booking.svg" alt=""> <span>In-Room Tea/Coffee
                          Maker</span></li>
                      <li><img src="./assets/icon/room-service-booking.svg" alt=""> <span>Room Service
                          24/7</span></li>
                    </ul>
                  </div>
                  <div id="block-simple-text-3"
                    class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                    role="tabpanel" aria-labelledby="block-simple-text-3-tab">
                    <div class="row gx-2 gy-4 pt-1 rooms">
                      <div class="col-6">
                        <img src="./assets/img/blue-neck-IKEA-sec-47-room.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="col-6">
                        <img src="./assets/img/blue-neck-IKEA-sec-47-room-2.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="col-6">
                        <img src="./assets/img/blue-neck-IKEA-sec-47-balconi.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="col-6">
                        <img src="./assets/img/blue-neck-IKEA-sec-47-washroom.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div id="block-simple-text-4"
                    class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                    role="tabpanel" aria-labelledby="block-simple-text-4-tab">
                    <ul class="terms-and-condition rooms">
                      <li>In Keep with Government regulations, we request all guests (on single/double/triple
                        occupancy) to carry a photo identity to present on check-in.</li>
                      <li>Foreign nationals are required to present their valid passport and visa.</li>
                      <li>The Indian nationals can present any government issued photo identitu]y
                        address proof card. eg. Driving License, Passport, Aadhar Card, Voters ID Card.
                        Pan Card will not be accepted.</li>
                      <li>Check-In Policies: 14:00 Hours Hotel Local Time</li>
                      <li>Check-Out Policies: 10:00Hours Hotel Local Time</li>
                    </ul>
                    <h3 class="font_size_20 py-3">Cancellation/Refund Policy:</h3>
                    <p>We understand that plans change sometimes. If you need to cancel/reduce/amend
                      a guaranteed reservation, please do so least 12 Noon Hotel Local Time, 14 Days Prior To
                      Arrival to avoid cancellation charges.</p>
                  </div> 
                </div>
              </div>
            </div>
          </form>
          <!-- ================form4================ -->
          <form id="form4">
            <div class="row form-inner-padding ">
              <p class="blue font_size_18 font_weight_600 carsour-pointer" id="back-payment"><i
                  class='bx bx-arrow-back pe-3 '></i>Back</p>
              <hr>
              <div class="col-12 col-md-12 col-lg-6 px-0">
                <div class="d-flex align-items-start guest-details-height">
                  <p class="user-image"><img src="./assets/icon/user-profile.svg" alt="" class="img-fluid"></p>
                  <p class="ps-3 font_size_20 font_weight_600 m-0 h-50">GUEST DETAILS</p>
                </div>
                <hr>
                <div class="row g-3">
                  <div class="col-6 ">
                    <div>
                      <label for="firstName">First Name <span class="verfiy"> * </span></label>
                      <input type="text" class="form-control " id="firstName" placeholder="Enter First Name">
                      <span id="formTextValidation" style="display: none;">Please fill out this field.</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div>
                      <label for="lastName">Last Name <span class="verfiy">*</span></label>
                      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="emailAddress">Email Address <span class="verfiy">*</span></label>
                      <input type="email" class="form-control input-validation" id="emailAddress"
                        placeholder="Enter Email Address">
                    </div>
                  </div>
                  <label class="mobile-number" for="phone">Mobile Number <span class="verfiy">*</span> </label>
                  <div class="col-3 m-0">
                    <input type="email" class="form-control" id="phone">
                  </div>
                  <div class="col-9 m-0 ">
                    <input type="tel" class="form-control ms-1" id="NumberValidata" placeholder="Enter Mobile Number">
                  </div>
                  <div class="col-12">
                    <label for="">Special Requests</label>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="floatingInputGrid">Payment Mode <span class="verfiy">*</span></label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Selec Payment Mode</option>
                      <option value="1">Pay at hotel</option>
                    </select>

                  </div>
                  <div class="terms-conditions d-flex py-2">
                    <input type="checkbox" class="check-box-border" id="termsCheckbox">
                    <p class="ps-2 m-0 font_size_18 "><span>I agree with the <span><a href="#" class="blue">terms and
                            conditions</a></span>
                        and data <span><a href="" class="blue">privacy policy</a></span> for this booking.</span>
                      <span class="checkbox-container"></span>
                    </p>
                  </div>
                  <div class="proceed-button pb-2">
                    <button type="button" class="procced-btn" id="#" onclick="validateForm()">
                      Book Now
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6 pe-0 ">
                <p class="user-image ps-3 font_size_20 font_weight_600 m-0  ">BOOKING SUMMARY</p>
                <hr>
                <div class="booking-summary">
                  <div class="d-flex justify-content-between">
                    <p class="light-color">CHECK-IN:</p>
                    <p class="light-color">07/09/2024</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="light-color">CHECK-IN:</p>
                    <p class="light-color">07/09/2024</p>
                  </div>
                  <hr class="mini-line">
                  <div class="d-flex justify-content-between">
                    <p class="light-color">ROOM 1:</p>
                    <p class="light-color">Premium with
                      Balcony
                    </p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="light-color">GUESTS:</p>
                    <p class="light-color">1 ADULT</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="font_weight_600">ROOM ONLY</p>
                    <p class="font_weight_600">₹ 3,700</p>
                  </div>
                  <p class="light-color">SELECT MORE OFFERS:</p>
                  <div class="summary-check pb-2">
                    <input type="checkbox" name="rad" id="Radio" class="p" />
                    <span class="light-color ps-2">USE <span class="blue">BNH30</span> TO AVAIL <span
                        class="font_weight_600">30%</span> DISCOUNT.</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="I HAVE A PROMO CODE">
                    <button class="apply px-4 text-white color border-0 py-2 " type="button">Apply</button>
                  </div>
                  <hr class="mini-line">
                  <div class="d-flex justify-content-between">
                    <p class="font_weight_700">Subtotal</p>
                    <p class="font_weight_700 me-3">₹ 3,700</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="font_weight_700">Total Taxes</p>
                    <p class="font_weight_700 ms-3">₹ 444 <img src="./assets/font/tax-details.svg" alt=""
                        class="img-fluid" type="button" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                    </p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="blue font_weight_600">Total Cost</p>
                    <p class="blue  font_weight_600 me-3">₹ 4,144 </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade " id="exampleModalToggle" aria-hidden="true"
              aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content p-4">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 blue font_weight_600" id="exampleModalToggleLabel  P</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="font_size_18">CGST</p>
                    <p class="light-color m-0">Room 1 - Premium with Balcony <br> (Room Tax) <span
                        class="text-black font_weight_600">₹ 222</span></p>
                  </div>
                  <hr class="mini-line">
                  <div class="modal-body">
                    <p class="font_size_18">CGST</p>
                    <p class="light-color m-0">Room 1 - Premium with Balcony <br> (Room Tax) <span
                        class="text-black font_weight_600">₹ 222</span></p>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <form action="" id="form5">
            <div class="container mt-5">
              <div class="text-center">
                <div class="mt-4">
                  <h2>Thank You for Your Booking!</h2>
                </div>
                <img src="./assets/img/check-animation-v2.gif" alt="" class="img-fluid booking-verification">
                <div class="">
                  <p class="payment-color m-0">Your booking at <strong>Blue Neck Hotel</strong> is confirmed with the
                    <span class="blue">Blue Neck Hotel</span> option. You can pay upon check-in.
                  </p>
                  <p class="payment-color m-0">For a smoother experience, use our <a href="#">self-check-in service</a>
                    before your arrival.</p>
                  <p class="payment-color py-4 m-0">For any assistance, feel free to contact us at
                    <strong>956XXXXXXX</strong>.
                  </p>
                  <div class="d-flex justify-content-center mt-4 gap-3">
                    <a href="https://www.blueneckhotels.com/" class="gohome">Go to Home</a>
                    <a href="https://blueneckhotel.in/" class="selfcheckin">Self Check-in</a>
                  </div>
                </div>
                <div class="card-footer text-muted pt-4 blue">
                  We look forward to welcoming you soon at Blue Neck Hotel!
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="sweetalert2.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="build/js/intlTelInput.js"></script>
  <script>
    var phone = document.getElementById('phone');

    var iti = window.intlTelInput(phone, {
      initialCountry: "in",  // Default country India
      separateDialCode: true, // Display dial code separately
      // Other options can go here
    });

    // Optional: If you need to handle changes or other functionality
    phone.addEventListener("countrychange", function () {
      // You can handle changes here if needed
    });
  </script>
  <script>
    window.onscroll = function () {
      var element = document.querySelector('.innear-padding');
      if (window.pageYOffset > 0) {
        element.classList.add("scrolled");
      } else {
        element.classList.remove("scrolled");
      }
    };  
  </script>

<script>
document.querySelectorAll("#roomratebook, #roomratebooktwo, #roomratebookthree, #roomratebookfour ").forEach(function(button) {
    button.addEventListener("click", function() {
        const brekfastPrice = document.getElementById("brekfast").innerText;
        const brekfastDiscount = document.getElementById("brekfastdiscount").innerText;
        const brekfastPricetwo = document.getElementById("brekfasttwo").innerText;
        const brekfastDiscounttwo = document.getElementById("brekfastdiscounttwo").innerText;
        const brekfastPricethree = document.getElementById("brekfastthree").innerText;
        const brekfastDiscountthree = document.getElementById("brekfastdiscountthree").innerText;
        const brekfastPricefour = document.getElementById("brekfastfour").innerText;
        const brekfastDiscountfour = document.getElementById("brekfastdiscountfour").innerText;
        const formThree = document.getElementById("form3");
        const formFour = document.getElementById("form4");
        const checkSecond = document.getElementById("check-box-second");
        const verticalSecond = document.getElementById("vertical-second");
        const textTwo = document.getElementById("text-two");
        // console.log("Brekfast Price: " + brekfastPricethree);
        // console.log("Brekfast Discounted Price: " + brekfastDiscountthree);
        if (formThree && formFour && checkSecond && verticalSecond && textTwo) {
      formThree.style.display = "none";
      formFour.style.display = "inherit";
      checkSecond.style.display = "inherit";
      verticalSecond.style.border = "2px solid var(--main_color)";
      textTwo.style.color = "var(--main_color)";
  
      // Update URL for formFour
      history.pushState(null, "", "?step=4");
  
      formFour.scrollIntoView({ behavior: "smooth", block: "center" });
   }    });
});

</script>
</body>
</html>