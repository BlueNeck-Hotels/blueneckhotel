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
      <P class="font_size_22 text-center font_weight_600  py-3">Enter Your Adahar Card No</P>
        <input type="number" class="form-control py-2" id="addharValue" aria-describedby="emailHelp" placeholder="Enter You Aadhar No">
        <div id="errormessage" style="color:red"></div>
        <!-- <a href="#" class="slef-booking" id="otpSumit">Sumit</a> -->
         <a type="submit" class="slef-booking " id="otpSumit">sumit</a>
      </div>
     </div>

  <!-- ------otp-verification----- -->
    <div class="container otp-verification" style="display:none">
        <div class=box-shadow>
        <P class="font_size_22 text-center font_weight_600  py-3">Send OTP for Registering Mobile Number</P>
        <input type="number" class="form-control my-3 py-2" id="otpvalue" aria-describedby="emailHelp" placeholder="Enter A OTP">
        <div id="otpmessage" style="color:red"></div>
        <a type="submit" class="slef-booking " id="verification-otp">VERIFY OTP</a>
         <button  type="submit" class="slef-booking loader-button " id="verifcationotp" style="  display:none;">
          <span  class="spinner-border pe-3"  text-warning" role="status "> </span> VERIFY OTP
         </button>
        </div>
        </div> 
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
        // var client_id = null;
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
            console.log('Response:', res);
            if (res && res.status_code === 200 && res.data) {
                client_id = res.data.client_id || null;
                if (client_id) {
                    $('.numverification').hide();
                    $('.otp-verification').show();
                } else {
                    errorMessage.text('Error retrieving client ID.');
                }
            } else {
                errorMessage.text('Failed to send OTP. Please try again.');
                console.log('Debug Info:', res.debug_info); // Log debug info for errors
            }
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            errorMessage.text('An error occurred. Please try again later.');
        }
    });
});


        // Function to handle OTP verification
        $("#verification-otp").click(function () {
    var otpValue = $("#otpvalue").val();
    var otpmessage = $("#otpmessage");

    // Validate OTP
    if (!/^\d{6}$/.test(otpValue)) {
        otpmessage.text('Please enter a valid 6-digit OTP number.');
        return;
    } else {
        otpmessage.text('');
    }

    // Show loader and hide button
    $(this).hide();
    $(".loader-button").show();

    // AJAX request to verify OTP
    $.ajax({
        url: 'aadharotp.php?verifyotp',
        method: 'POST',
        dataType: 'json',
        data: { otpValue: otpValue, client_id: client_id },
        success: function (res) {
            console.log('succes', res);
            if (res && res.status_code === 200) {
                // No need to use sessionStorage here; data is stored in the server-side session
                otpmessage.css('color', 'green').text('OTP verified successfully!');
                setTimeout(function () {
                    window.location.href = 'userdetails.php'; // Redirect to user details page
                }, 2000);
            } else {
                otpmessage.text(res.mdessage || 'Failed to verify OTP. Please try again.');
            }
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            otpmessage.text('An error occurred. Please try again later.');
        },
        complete: function () {
            $(".loader-button").hide();
            $("#verification-otp").show();
        }
    });
});

    </script>
</body>

</html>