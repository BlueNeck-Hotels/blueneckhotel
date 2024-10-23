<?php
   include_once './header.php';
    // $_SESSION['start'];
?>

<!-- ----------------hero-section---------------->
<section class="bg_patners" id="home">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="200">
                    <h1 class="font_size_47 h1_size text-white contact-padding-top text-capitalize">
                        <span class="yellow">Corporate Deals</span>
                    </h1>
                    <div class="row mashine_top">
                        <div class="col-3 col-md-3 col-lg-3">
                            <div class="pt-4"></div>
                        </div>
                        <p class="text-white font_size_18">
                            We provide high-quality services to corporate guests at the best prices. We ensure you the
                            best outcomes.
                        </p>
                    </div>
                </div>
                <div class="servic-manage">
                    <a href="./hotel-in-gurugram"><img src="./assets/font/side-hotel.svg" alt=""></a>
                    <a href=""><img src="./assets/font/side-mariage.svg" alt=""></a>
                    <a href=""><img src="./assets/font/side-confernce.svg" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6  msin-spin-logo">
                <div class="float-sm floating-bar">
                    <div class="fl-fl float-fb">
                        <a href="//api.whatsapp.com/send?phone=9319097977" target="_blank" class="">
                            <img src="./assets/font/whatsapp.svg" alt="" loading="lazy"> <span
                                class="text-white font_size_14 text-center">Whatsapp</span>
                        </a>
                    </div>
                    <div class="fl-fl float-tw">
                        <a href="tel:9319097977" target="_blank">
                            <img src="./assets/font/call.svg" alt=""> <span class="text-white font_size_14 text-center"
                                loading="lazy">Call
                                Now</span>
                        </a>
                    </div>
                    <div class="fl-fl float-gp">
                        <a href="mailto:enquiry@blueneckhotels.com" target="_blank"> <img src="./assets/font/mail.svg"
                                alt="" loading="lazy">
                            <span class="text-white font_size_14 text-center">Mail Us</span>
                        </a>
                    </div>
                    <div class="fl-fl float-rs" id="myButton">
                        <img src="./assets/font/all.svg" alt=""> <span class="text-white font_size_14 text-center"
                            loading="lazy">All</span>
                    </div>
                </div>
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
        </div>
    </div>
</section>


<section class="vertical_padding">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="./assets/img/partner&patrone.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-8 get-connect p-3">
                <form>
                    <div class="row">
                        <h1>Get Connected</h1>
                        <p class="pb-5 pt-2">Please fill in your details in the form below. We will answer shortly.</p>
                        <div class="col-7">
                            <div class="d-flex form-border py-2">
                                <img src="./assets/font/user.svg" alt="" class="img-fluid ps-2">
                                <input type="text" class="form-control ps-2" placeholder="Name">
                            </div>
                            <div class="d-flex form-border py-2 my-4">
                                <img src="./assets/font/message-form.svg" alt="" class="img-fluid ps-2">
                                <input type="email" class="form-control ps-2" placeholder="Email" required>
                            </div>
                            <div class="d-flex form-border py-2">
                                <img src="./assets/font/call-form.svg" alt="" class="img-fluid ps-2">
                                <input type="tel" class="form-control ps-2" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-5 form-border">
                            <input type="text" class="form-control" placeholder="Note" required>
                        </div>
                    </div>
                    <!-- <a href="unitech-cyberpark-sector40"><button class="w-100 book-btn py-2 mt-4 font_size_18">Submit Enquiry </button> -->
                    <a href="hotel-details-page.html" class=" book-btn py-2 font_size_18">Submit Enquiry</a>
                </form>
            </div>
        </div>
    </div>
</section>




<!-- --------------footer------------------ -->
<?php
        include_once 'footer.php';
    ?>

<!-- <script>
        let formto = "<?=$_SESSION['status'] ?? '';?>";
        if (formto !== '') {
            Swal.fire({
                title: "Thank you!",
                text: "Form submitted successfully!",
                icon: "success"
            });
        } else {
            Swal.fire({
                title: "Thank you!",
                text: "Form submitted successfully!",
                icon: "success"
            });
        }
    </script> -->
</body>

</html>