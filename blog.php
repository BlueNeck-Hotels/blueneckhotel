<?php
   include_once './header.php';
    // $_SESSION['start'];
?>

<!-- ----------------hero-section---------------->

<section class="bg_blog" id="home">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="200">
          <h1 class="font_size_47 h1_size text-white  contact-padding-top text-capitalize"><span
              class="yellow">Blog</span> </h1>
          <div class="row mashine_top">
            <div class="col-3 col-md-3 col-lg-3 ">
              <div class="pt-4">
              </div>
            </div>
            <p class="text-white font_size_18 ">
              We are a corporate hotel chain for creative business professionals, offering a seamless experience with
              on-time, high-quality, and tailored services.
            </p>
          </div>
        </div>
        <div class="servic-manage ">
          <a href="./hotel-listing.html"><img src="./assets/font/side-hotel.svg" alt=""></a>
          <a href=""><img src="./assets/font/side-mariage.svg" alt="">
          </a>
          <a href=""><img src="./assets/font/side-confernce.svg" alt="">
          </a>
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
            <a href="mailto:enquiry@blueneckhotels.com" target="_blank"> <img src="./assets/font/mail.svg" alt=""
                loading="lazy">
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
                <a href="https://www.linkedin.com/company/103818025/admin/feed/posts/?feedType=following"
                  target="_blank"> <img src="./assets/font/pop-linkedin.svg" alt="" class="img-fulid">
                </a>
                <p class="pop-content font_size_18 fw-light text-center pt-3">linkedin</p>
              </div>

              <div class="col-3 ">
                <a href="https://www.facebook.com/people/Blue-Neck-Hotel/61559168582310/" target="_blank"> <img
                    src="./assets/font/pop-facebook.svg" alt="" class="img-fulid"> </a>
                <p class="pop-content font_size_18 fw-light text-center pt-3">Facebook</p>
              </div>

              <div class="col-3 ">
                <a href="https://www.instagram.com/blueneckhotel/?next=%2F" target="_blank"><img
                    src="./assets/font/pop-instagram.svg" alt="" class="img-fulid">
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

<section class="blog-page">
  <div class="container mt-5">
    <div class="row">
      <div class="blog-flexi">
        <div onClick="window.location='.';" class=" left_blog_img">
          <a href="./blog-details.php">
            <img class="img-fluid" src="./assets/img/image.png" alt="blog-img">
          </a>
        </div>
        <div class="right_blog_content">
          <h4 class="send-font">Send us your queries through phone or email anytime</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et
            dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula
              venenatis dolor.
              Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet.
              Nunc sagittis dictum nisi, sed ullamcorper
              ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget
              tellus gravida venenatis.
              Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

          <button onclick="myFunction()" id="myBtn" class="readmore">Read more</button>
          <p class="mt-3 w-600">4 Min . Jun 20 2024</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="rec-bg">
  <div class="container">
    <div class="row">
      <h2 class="heading-re">Recent <span>Blog Post</span></h2>
      <div class="recent-blog">
        <div class="left-recent">
          <a href="./blog-details.php">
            <img class="img-fluid" src="./assets/img/blog-image1.png" alt="blog-img">
          </a>
        </div>
        <div class="right_recent_content">
          <h4>Send us your queries through phone or email anytime</h4>
          <p class="mt-3 w-600">4 Min . Jun 20 2024</p>
        </div>
      </div>
      <!--  -->
      <div class="recent-blog">
        <div class="left-recent">
          <a href="./blog-details.php">
            <img class="img-fluid" src="./assets/img/blog-image1.png" alt="blog-img">
          </a>
        </div>
        <div class="right_recent_content">
          <h4>Send us your queries through phone or email anytime</h4>
          <p class="mt-3 w-600">4 Min . Jun 20 2024</p>
        </div>
      </div>
      <!--  -->
      <div class="recent-blog">
        <div class="left-recent">
          <a href="./blog-details.php">
            <img class="img-fluid" src="./assets/img/blog-image1.png" alt="blog-img">
          </a>
        </div>
        <div class="right_recent_content">
          <h4>Send us your queries through phone or email anytime</h4>
          <p class="mt-3 w-600">4 Min . Jun 20 2024</p>
        </div>
      </div>
      <!--  -->
      <div class="recent-blog">
        <div class="left-recent">
          <a href="./blog-details.php">
            <img class="img-fluid" src="./assets/img/blog-image1.png" alt="blog-img">
          </a>
        </div>
        <div class="right_recent_content">
          <h4>Send us your queries through phone or email anytime</h4>
          <p class="mt-3 w-600">4 Min . Jun 20 2024</p>
        </div>
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