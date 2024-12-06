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
      <!-- ------addharnum verification-----   -->
      <div class="container numverification">
        <div class=box-shadow>
          <p class="font_size_22 text-center font_weight_600 py-3">Enter Your Aadhaar Card No</p>
          <input type="number" class="form-control py-2" id="addharValue" placeholder="Enter Your Aadhaar No">
          <div id="errormessage" style="color:red"></div>
          <a class="slef-booking" id="otpSumit">Submit</a>
        </div>
      </div>

      <!-- ------otp-verification----- -->
      <div class="container otp-verification" style="display:none">
        <div class="box-shadow">
          <p class="font_size_22 text-center font_weight_600 py-3">Send OTP for Registering Mobile Number</p>
          <input type="number" class="form-control my-3 py-2" id="otpvalue" placeholder="Enter OTP">
          <div id="otpmessage" style="color:red"></div>
          <a class="slef-booking" id="verification-otp">Verify OTP</a>
          <button class="slef-booking loader-button" id="verifcationotp" style="display:none;">
            <span class="spinner-border pe-3" role="status"></span> VERIFY OTP
          </button>
          <a class="slef-booking mt-3" id="resendOtp" style="display:none;">Resend OTP</a>
          <p id="countdown" class="mt-2"></p>
        </div>
      </div> 
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>
    <script>
      var client_id = null;
      var countdownInterval;

      // Function to handle OTP sending
      $("#otpSumit").click(function () {
        var addharValue = $("#addharValue").val();
        var errorMessage = $("#errormessage");

        if (!/^\d{12}$/.test(addharValue)) {
          errorMessage.text('Please enter a valid 12-digit Aadhaar number.');
          return;
        } else {
          errorMessage.text('');
        }

         $.ajax({
          url: 'aadharotp.php?sendotp',
          method: 'POST',
          dataType: 'json',
          data: { aadhar: addharValue },
          success: function (res) {
            if (res && res.status_code === 200 && res.data) {
              client_id = res.data.client_id || null;
              if (client_id) {
                $('.numverification').hide();
                $('.otp-verification').show();
                startCountdown(1); // Start 10-minute countdown
              } else {
                errorMessage.text('Error retrieving client ID.');
              }
            } else {
              errorMessage.text('Failed to send OTP. Please try again.');
            }
          },
          error: function () {
            errorMessage.text('An error occurred. Please try again later.');
          }
        });
      });

      // Function to handle OTP verification
      $("#verification-otp").click(function () {
        var otpValue = $("#otpvalue").val();
        var otpmessage = $("#otpmessage");

        if (!/^\d{6}$/.test(otpValue)) {
          otpmessage.text('Please enter a valid 6-digit OTP number.');
          return;
        } else {
          otpmessage.text('');
        }

        $(this).hide();
        $(".loader-button").show();

        $.ajax({
          url: 'aadharotp.php?verifyotp',
          method: 'POST',
          dataType: 'json',
          data: { otpValue: otpValue, client_id: client_id },
          success: function (res) {
            if (res && res.status_code === 200) {
              otpmessage.css('color', 'green').text('OTP verified successfully!');
              setTimeout(function () {
                window.location.href = 'userdetails.php';
              }, 2000);
            } else {
              otpmessage.text(res.message || 'Failed to verify OTP. Please try again.');
            }
          },
          error: function () {
            otpmessage.text('An error occurred. Please try again later.');
          },
          complete: function () {
            $(".loader-button").hide();
            $("#verification-otp").show();
          }
        });
      });

      // $("#resendOtp").click(function () {
      //   var otpValue = $("#otpvalue").val();
      //   var otpmessage = $("#otpmessage");

      //   $(this).hide();
      //   $(".loader-button").show();

      //   $.ajax({
      //     url: 'aadharotp.php?verifyotp',
      //     method: 'POST',
      //     dataType: 'json',
      //     data: { client_id: client_id },
      //     success: function (res) {
      //       if (res && res.status_code === 200) {
      //         otpmessage.css('color', 'green').text('OTP verified successfully!');
      //         setTimeout(function () {
      //           window.location.href = 'userdetails.php';
      //         }, 2000);
      //       } else {
      //         otpmessage.text(res.message || 'Failed to verify OTP. Please try again.');
      //         conslog.error(res.message)
      //       }
      //     },
      //     error: function () {
      //       otpmessage.text('An error occurred. Please try again later.');
      //     },
      //     complete: function () {
      //       $(".loader-button").hide();
      //       $("#verification-otp").show();
      //     }
      //   });
      // });

    // Function to handle Resend OTP
    
     $("#resendOtp").click(function () {
    $("#resendOtp").hide();
    $("#countdown").text('');
    startCountdown(1); // Restart 10-minute countdown

    $.ajax({
        url: 'aadharotp.php?resendotp',
        method: 'POST',
        dataType: 'json',
        data: { client_id: client_id },
        success: function (res) {
            console.log(res);
            if (res && res.status_code === 200) {
                alert('OTP has been resent successfully.');
            } else {
                alert('Failed to resend OTP. Please try again.');
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error("AJAX error:", textStatus, errorThrown); // Log error with detailed info
            alert('An error occurred. Please try again later.');
        }
    });
});


      // Function to start countdown timer
      function startCountdown(minutes) {
        var time = minutes * 60; // Convert minutes to seconds
        countdownInterval = setInterval(function () {
          var minutesLeft = Math.floor(time / 60);
          var secondsLeft = time % 60;
          $("#countdown").text(`You can resend OTP in ${minutesLeft}m ${secondsLeft}s`);
          if (time <= 0) {
            clearInterval(countdownInterval);
            $("#countdown").text('');
            $("#resendOtp").show();
          }
          time--;
        }, 1000);
      }
    </script>
  </body>
</html>
