<?php
   include_once './header.php';
    // $_SESSION['start'];
?>

<!-- ----------------hero-section----------------> 
    <section class="bg_contact" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="200">
                        <h1 class="font_size_47 h1_size text-white contact-padding-top text-capitalize">
                            <span class="yellow">Contact Us</span>
                        </h1>
                        <div class="row mashine_top">
                            <div class="col-3 col-md-3 col-lg-3 ">
                                <div class="pt-4"></div>
                            </div>
                            <p class="text-white font_size_18">
                                BlueNeck is always ready to answer your queries. You have to just fill the form given
                                below and write your queries in the query box.
                            </p>
                        </div>
                    </div>
                    <div class="servic-manage">
                        <a href="./hotel-in-gurugram"><img src="./assets/font/side-hotel.svg" alt=""></a>
                        <a href=""><img src="./assets/font/side-mariage.svg" alt=""></a>
                        <a href=""><img src="./assets/font/side-confernce.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 msin-spin-logo">
                    <div class="float-sm floating-bar">
                        <div class="fl-fl float-fb">
                            <i class="fa fa-facebook"></i>
                            <a href="//api.whatsapp.com/send?phone=9319097977" target="_blank" class="">
                                <img src="./assets/font/whatsapp.svg" alt="">
                                <span class="text-white font_size_14 text-center">Whatsapp</span>
                            </a>
                        </div>
                        <div class="fl-fl float-tw">
                            <i class="fa fa-twitter"></i>
                            <a href="tel:9319097977" target="_blank">
                                <img src="./assets/font/call.svg" alt="">
                                <span class="text-white font_size_14 text-center">Call Now</span>
                            </a>
                        </div>
                        <div class="fl-fl float-gp">
                            <i class="fa fa-google-plus"></i>
                            <a href="mailto:enquiry@blueneckhotels.com" target="_blank">
                                <img src="./assets/font/mail.svg" alt="">
                                <span class="text-white font_size_14 text-center">Mail Us</span>
                            </a>
                        </div>
                        <div class="fl-fl float-rs" id="myButton4">
                            <i class="fa fa-rss"></i>
                            <a href="">
                                <img src="./assets/font/all.svg" alt="">
                                <span class="text-white font_size_14 text-center">All</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------contact-information----------------->
    <section class="vertical_padding backgroung-color">
        <div class="container">
            <div class="row contact-main-row">
                <div class="col-12 col-md-12 col-lg-5">
                    <img src="./assets/img/blueneck-contact-image.png" alt="blueneck-contact-image" class="img-fluid">
                </div>
                <div class="col-12 col-md-12 col-lg-7 px-3 px-md-5 px-lg-0">
                    <div class="contact-side-padding">
                        <h2 class="font_size_40 text-center text-lg-start h3_size">
                            <span class="yellow">Contact</span>
                            <span class="blue">Information</span>
                        </h2>
                        <p class="font_size_18 py-2 text-center text-lg-start">We are tech friendly hotel. We have
                            automatized</p>
                        <div class="contact">
                            <div class="d-flex align-items-start contact-first-row">
                                <img src="./assets/font/contact-call.svg" alt="" class="img-fluid me-4">
                                <div>
                                    <h3 class="font_size_25">Phone</h3>
                                    <p>+91 9319097976 / 9319097977 / 9319097978</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start contact-first-row">
                                <img src="./assets/font/email-contact.svg" alt="" class="img-fluid me-4">
                                <div>
                                    <h3 class="font_size_25">Email Address</h3>
                                    <a href="mailto:enquiry@blueneckhotels.com" target="_blank">
                                        enquiry@blueneckhotels.com
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start contact-first-row">
                                <img src="./assets/font/contact-location.svg" alt="" class="img-fluid me-4">
                                <div>
                                    <h3 class="font_size_25">Location</h3>
                                    <p>Plot No.1088P, Sector 40, Adjacent Unitech Cyber Park,<br> Opposite Unitech
                                        Commercial Tower, <br>
                                        Gurgaon, Haryana, India. 122001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-blue-position">
        <div class="container">
            <div class="row vertical_padding">
                <div class="col-12 col-md-12 col-lg-6 form-center px-3 px-md-5 px-lg-0">
                    <div class="form-border-line p-4 p-md-5 p-lg-5">
                        <form action="./sendmail.php" method="post" id="formto" class="form">
                            <h2 class="font_size_40 h3_size">
                                <span class="yellow">Submit Your</span>
                                <span class="blue">Query</span>
                            </h2>
                            <p class="font_size_18 py-2">Please fill contact details and your query in the form below and we will answer shortly.</p>
                            <input type="hidden" name="access_key" value="28452cf1-af1a-4778-bbe2-0c85c62fc188">
                            <div class="form-control">
                                <label for="username" class="text-start">Username <span class="validation-section">*</span></label>
                                <input type="text" id="username" name="name" placeholder="Enter username" required />
                                <small>Error message</small>
                            </div>
                            <div class="form-control">
                                <label for="email" class="text-start">Email <span class="validation-section">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Enter email" required />
                                <small>Error message</small>
                            </div>
                            <div class="form-control">
                                <label for="mobile">Phone <span class="validation-section">*</span></label>
                                <input type="text" inputmode="numeric" name="Phone" placeholder="Phone" id="mobile" required />
                                <small>Error message</small>
                            </div>
                            <div class="form-control">
                                <label for="message">Message</label>
                                <textarea class="form-control-message" name="message" id="message" rows="3" required></textarea>
                                <small>Error message</small>
                            </div>
                            <button type="submit" name="clicksubmit">Submit</button>
                            <div id="result"></div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 contact-images">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.121927180646!2d77.05426007553639!3d28.445740692538465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d188a9c407c43%3A0x5d074c1af3a8784e!2sBlueNeck%20Sec%2040%20Unitech%20Cyber%20Park%20Gurugram!5e0!3m2!1sen!2sin!4v1718692808030!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="dark-blue-box">
                <div class="dots-img-section">
                    <img src="./assets/img/contact-dots-images.png" alt="" class="img-fluid">
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
