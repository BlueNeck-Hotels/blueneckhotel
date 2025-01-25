<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="" />
    <meta name="theme-color" content="#FFD603" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link
      rel="icon"
      href="assets/img/Blue-nack-logo-HQ-159.png"
      type="image/gif"
      sizes="20x20"
    />
    <title>BlueNack-hotel</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"
      integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css"
    />
    <link rel="manifest" href="./manifest.json">
  </head>

  <body>
    <!--------------------header--------------------->
    <header>
      <!-- ----------loader--------------- -->
      <div class="o-page-loader">
        <div class="o-page-loader--content">
          <div class="o-page-loader--spinner">
            <img
              src="./assets/font/Blue-nack-fb-logo.svg"
              alt=""
              class="img-f luid"
            />
          </div>
          <div class="o-page-loader--message loader"></div>
        </div>
      </div>

      <div class="container-fluid" id="navbar">
        <div class="container nav-bar-height">
          <div class="row overflow-x-hidden py-2">
            <div class="col-4 col-md-2 col-lg-2 p-0">
              <a href="./index">
                <img
                  src="./assets/font/orginal-logo.svg"
                  alt="main-logo"
                  class="img-fluid main-logo"
                />
              </a>
            </div>
            <div class="col-6 col-md-8 col-lg-9">
              <form name="myForm" action="#" id="form">
                <div
                  class="row align-items-center main-border p-2 px-2"
                  id="border-color"
                >
                  <div class="col-10" id="yourdiv3">
                    <div class="px-2 d-flex align-items-center">
                      <img
                        src="./assets/font/hotel-img.svg"
                        alt="hotel-img"
                        class="img-fluid pe-1 hotel-mini-image"
                      />
                      <input
                        type="text"
                        list="browser"
                        class="form-control input-size placholder-class ps-2 p-0 m-0 w-100"
                        id="where"
                        placeholder="Search location"
                        required
                        autocomplete="off"
                      />
                      <datalist id="browser">
                        <option value="BlueNeck Hotel - Opp. IKEA GMP"></option>
                        <option
                          value="BlueNeck Hotel - Millennium City"
                        ></option>
                        <option
                          value="BlueNeck Hotel - Unitech Cyber Park"
                        ></option>
                      </datalist>
                    </div>
                  </div>
                  <div
                    class="col-2 d-flex align-items-center justify-content-end p-0"
                  >
                    <button
                      class="seacrh-button"
                      type="button"
                      onclick="DeskTopView()"
                    >
                      Search
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-2 col-md-2 col-lg-1 hambardar">
              <i class="bx bx-menu menu menu-bar" id="menu"></i>
            </div>
          </div>
        </div>

        <!-- -----------mobile-nav-------------  -->
        <div class="overlay"> 
        <div class="color">
          <div class="row pt-3 overflow-x-hidden">
            <div class="col-6 mobile_log ps-4">
              <img src="./assets/font/main-logo.svg" alt="" class="d-flex" />
            </div>
            <div class="col-6 mt-3">
              <div class="float-end me-4">
                <i class="bx bx-x crose"></i>
              </div>
            </div>
            <div class="col-12 home-nav is_font_18 font_f_libre">
              <ul class="">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a href="hotel-listing" class="nav-link" aria-current="page"
                    >Our Hotels</a
                  >
                </li>
              </ul>
              <div class="font_size_18 ms-3 py-4">
                <!-- <button  class="contact_btn  px-3" id="myButton6">Contact Us</button> -->
                <a href="contact" class="contact_btn px-3">Contact Us</a>
              </div>
            </div>
            <div class="col-6 position-absolute bottom-0">
              <img
                src="./assets/img/Blue nack-big-logo.png"
                alt=""
                class="img-fluid"/>
            </div>
          </div>
        </div>
      </div>
      </div>
    </header>
  </body>
</html>
