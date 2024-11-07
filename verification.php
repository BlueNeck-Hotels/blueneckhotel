<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/global.css" />
<link rel="stylesheet" href="./assets/css/checking.css"/>
<title>QR Code Scanner</title>

<style> 
.verification-button{
  position: absolute;
  bottom: 0px;
  right: 0;
  text-align: center;
  border-top: 1px solid #b4afaf;
  padding: 80px 0px;
  border-top-left-radius: 30px;
  border-top-right-radius: 30px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);

}

/* @keyframes fadeIn {
  from {
    opacity: 0;
    transform: translatey(100px);w
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
} */

/* Heading Styles */
/* h1 {
  font-size: 2.5rem;
  color: #00796b;
  text-align: center;
  margin-bottom: 20px;
  position: relative;
}

/* Section Styling
.section {
  padding: 30px;
  border-radius: 10px;
  border: 1px solid #ddd;
  transition: all 0.3s ease;
} */

/* .section:hover {
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
} */

/* #my-qr-reader {
  padding: 20px;
  border: 2px solid #00796b;
  border-radius: 10px;
} */

/* Button Enhancements */
#start-scan{
  width: 100%;
  padding: 15px;
  background-color: var(--main_color);
  color: #fff !important ;
  border: none;
  border-radius: 50px;
  font-size: 18px;
  margin-top: 20px;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  display:block;
  /* transition: all 0.3s ease; */
}

/* #start-scan:hover {
  background-color: #004d40;
  transform: translateY(-2px);
}

#start-scan:active {
  transform: scale(0.98);
}

#start-scan i {
  margin-left: 10px;
  transition: margin-left 0.3s ease;
}

#start-scan:hover i {
  margin-left: 15px;
} */

/* QR Result Section */
/* #result {
  margin-top: 20px;
  font-size: 1.2rem;
  color: #000;
  word-wrap: break-word;
  padding: 30px;
  animation: fadeInUp 0.7s ease;
}

#result a {
  color: #a662ff;
  text-decoration: none;
  border-bottom: 2px solid transparent;
  transition: border-bottom 0.3s ease;
  border: 2px #001d25;
}

#result a:hover {
  border-bottom: 2px solid #0288d1;
}

#my-qr-reader__scan_region img{
    display: none;
    min-height: 275px !important;
}

#my-qr-reader__scan_region{
    min-height: 275px !important;
}


Loading Feedback
.loading {
  display: none;
  font-size: 1.5rem;
  color: #00796b;
  margin-top: 20px;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Animation for scanning */
/* .scan-progress {
  margin-top: 10px;
  border: 2px solid #00796b;
  border-radius: 8px;
  padding: 10px;
  font-size: 1.2rem;
  color: #00796b;
  animation: pulse 1.5s infinite;
}

@keyframes pulse {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(1.05);
    opacity: 0.8;
  } 
}*/

/* Responsive Styling */
/* @media (max-width: 600px) {
  .container {
    padding: 20px;
  }

  h1 {
    font-size: 2rem;
  }

  button {
    font-size: 16px;
  }

  #start-scan{
    width: 97%;
  }
}  */

</style>
</head>

<body>
  <!-- <div class="container">
    <h1><i class="fas fa-qrcode"></i> Scan QR Code</h1>
    <div class="section">
      <div id="my-qr-reader">

      </div>
      <div id="result">Scanned QR code will appear here.</div>
      <div class="loading"><i class="fas fa-spinner fa-spin"></i> Scanning...</div>
    </div>
    <div class="scan-progress">Scan Progress...</div> Animated progress feedback
  </div> -->
  <div>
    <img src="./assets/img/scanner.gif" alt="" class="scanner-img  img-fluid">
  </div>

    <div class="row">
    <div class="verification-button ">
            <h4>ID Verification</h4>
        <p class="text-muted font_size_18 py-2 m-0">lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do</p>
  <!-- <button id="start-scan">Start Scanning</button> -->
x`  </div>
</div>



  <!-- <script src="https://unpkg.com/html5-qrcode"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- <script>
    function domReady(fn) {
  if (
    document.readyState === "complete" ||
    document.readyState === "interactive"
  ) {
    setTimeout(fn, 1000);
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
}

domReady(function () {
  const loadingIcon = document.querySelector(".loading");
  const scanButton = document.getElementById("start-scan");
  const progressDiv = document.querySelector(".scan-progress");

  scanButton.addEventListener("click", function () {
    loadingIcon.style.display = "block";
    progressDiv.style.display = "block"; // Show scanning progress animation
  });

  function onScanSuccess(decodeText, decodeResult) {
    const resultDiv = document.getElementById("result");
    const urlPattern = /^(https?:\/\/[^\s$.?#].[^\s]*)$/;

    if (urlPattern.test(decodeText)) {
      resultDiv.innerHTML =
        'Your QR code is: <a href="' +
        decodeText +
        '" target="_blank">' +
        decodeText +
        "</a>";
    } else {
      resultDiv.innerText = "Your QR code is: " + decodeText;
    }

    loadingIcon.style.display = "none";
    progressDiv.style.display = "none"; // Hide progress animation after scan
  }

  function onScanFailure(error) {
    console.warn(`QR scan error: ${error}`);
    loadingIcon.style.display = "block"; // Show loading icon while scanning
  }

  let htmlscanner = new Html5QrcodeScanner(
  "my-qr-reader", 
  {
    fps: 10,
    qrbox: 250,
    supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA]
  },
  {
    // Specify camera facing mode to open back camera by default
    videoConstraints: {
      facingMode: { exact: "environment" }
    }
  }
);
htmlscanner.render(onScanSuccess, onScanFailure);

});
  </script> -->
</body>