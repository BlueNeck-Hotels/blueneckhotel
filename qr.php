<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhaar QR Code Scanner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/checking.css"/>
    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.min.js"></script>
    <style>
        #video {
            /* border: 2px solid black; */
            /* width: 100%; */
            max-width: 400px;
            margin-bottom: 10px;
        }
        #result {
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
        }

        .adhar-button button{
            width: 100%;
        }

        .video-section{
            width: 100%;
            margin:auto;
            height: 50vh;
            display: flex;
            justify-content: center;
        }
        
        .upload-image{
            display: block;
            text-align: center;
            width: 250px;
            margin: auto;
            border-radius:15px; 
            font-size:14px;
            cursor: pointer;
            border: 1px solid #000
        }
    </style>
</head>
<body>
    <h1>Scan qr code</h1>

    <!-- Video element for QR code scanning -->
    <div class="video-section">
    <img src="./assets/img/scanner.gif" alt="" class="scanner-img img-fluid" id=scaner-image>
    <video id="video" autoplay style="display:none;"></video>
    </div>
    <!-- Input to upload QR code image -->
    <h3 class="text-center">Upload QR Code Image</h3>
    <input type="file" id="qrInput" style="visibility:hidden; accept="image/*" >
    <label for="qrInput" class="upload-image">Click me to upload image</label>

    <!-- Buttons to start and stop scanning -->
<div class="adhar-button">
<button id="startScanButton">Start Scan</button>
<button id="stopScanButton" style="display: none;">Stop Scan</button>
</div>  

    <!-- Input field for the JWT or scanned QR code -->
    <!-- <h3>QR Code Data / JWT</h3>
    <textarea id="jwtInput" rows="5" style="width: 100%;"></textarea> -->
    <!-- <button id="decodeButton">Decode JWT</button> -->

    <!-- Result display -->
    <div id="result"></div>

    <script>
        // Decode Base64 URL
        function base64UrlDecode(input) {
            const base64 = input.replace(/-/g, '+').replace(/_/g, '/');
            const padded = base64.padEnd(base64.length + (4 - base64.length % 4) % 4, '=');
            return atob(padded);
        }

        // Decode JWT function
        function decodeJWT(jwt) {
            try {
                const [header, payload, signature] = jwt.split('.');

                if (!header || !payload || !signature) {
                    throw new Error("Invalid JWT format.");
                }

                const decodedHeader = JSON.parse(base64UrlDecode(header));
                const decodedPayload = JSON.parse(base64UrlDecode(payload));

                return {
                    valid: true,
                    header: decodedHeader,
                    payload: decodedPayload,
                    signature: signature,
                };
            } catch (error) {
                return { valid: false, error: error.message };
            }
        }

        // Webcam QR Code Scanner
        const videoElement = document.getElementById('video');
        const resultDiv = document.getElementById('result');
        const scanerImage  = document.getElementById('scaner-image');
        let scanning = false;
        let stream = null;

        // Start Webcam for QR scanning
        async function startScanner() {
            console.log("Starting scanner...");
            try {
                const newStream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } });
                stream = newStream;
                videoElement.style.display = "inline";
                scanerImage.style.display = "none";
                videoElement.srcObject = stream;
                videoElement.setAttribute("playsinline", true);
                videoElement.play();
                scanning = true;
                document.getElementById('startScanButton').style.display = 'none';
                document.getElementById('stopScanButton').style.display = 'inline';
                scanQRCode();
                // console.log("QR code found:", code.data);
            } catch (err) {
                console.error("Error accessing webcam:", err);
                resultDiv.innerHTML = `<p class="error">Error accessing webcam: ${err.message}</p>`;
            }
        }

        // Function to scan QR Code from the video stream
        function scanQRCode() {
            if (scanning) {
                if (videoElement.videoWidth > 0 && videoElement.videoHeight > 0) {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = videoElement.videoWidth;
                    canvas.height = videoElement.videoHeight;

                    ctx.drawImage(videoElement, 0, 0, canvas.width, canvas.height);
                    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                    const code = jsQR(imageData.data, canvas.width, canvas.height);

                    if (code) {
                        console.log("QR code found:", code.data);
                        document.getElementById('jwtInput').value = code.data;
                        console.log("QR code found:", code.data);
                        resultDiv.innerHTML = '<p>QR code successfully decoded. Click "Decode JWT" to view details.</p>';
                        stopScanner();
                    } else {
                        requestAnimationFrame(scanQRCode);
                    }
                } else {
                    requestAnimationFrame(scanQRCode);
                }
            }
        }

        // Stop Webcam for QR scanning
        function stopScanner() {
            console.log("Stopping scanner...");
            scanning = false;
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
            }
            videoElement.srcObject = null;
            document.getElementById('startScanButton').style.display = 'inline';
            document.getElementById('stopScanButton').style.display = 'none';
            videoElement.style.display = "none";
            scanerImage.style.display = "inline";
        }

        // QR Code Processing from Image Upload
        document.getElementById('qrInput').addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (!file) {
                resultDiv.innerHTML = '<p class="error">Please upload a valid QR code image.</p>';
                return;
            }

            const reader = new FileReader();
            reader.onload = (e) => {
                const img = new Image();
                img.src = e.target.result;
                img.onload = () => {
                    const canvas = document.createElement('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;

                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0, img.width, img.height);

                    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                    const code = jsQR(imageData.data, canvas.width, canvas.height);

                    if (code) {
                        // document.getElementById('jwtInput').value = code.data;
                        resultDiv.innerHTML = '<p>QR code successfully decoded. Click "Decode JWT" to view details.</p>';
                        console.log("QR code found:", code.data);
                    } else {
                        resultDiv.innerHTML = '<p class="error">Failed to decode QR code.</p>';
                    }
                };
            };
            reader.readAsDataURL(file);
        });

        // Decode Button Functionality
        // document.getElementById('decodeButton').addEventListener('click', () => {
        //     const jwtInput = document.getElementById('jwtInput').value.trim();

        //     if (!jwtInput) {
        //         resultDiv.innerHTML = '<p class="error">Please enter or upload a JWT.</p>';
        //         return;
        //     }

        //     const decoded = decodeJWT(jwtInput);

        //     if (decoded.valid) {
        //         resultDiv.innerHTML = `
        //             <h3>Decoded JWT</h3>
        //             <h4>Header:</h4>
        //             <pre>${JSON.stringify(decoded.header, null, 2)}</pre>
        //             <h4>Payload:</h4>
        //             <pre>${JSON.stringify(decoded.payload, null, 2)}</pre>
        //             <h4>Signature:</h4>
        //             <pre>${decoded.signature}</pre>
        //         `;
        //     } else {
        //         resultDiv.innerHTML = `<p class="error">Error: ${decoded.error}</p>`;
        //     }
        // });

        // Event Listeners for Start and Stop Buttons
        document.getElementById('startScanButton').addEventListener('click', startScanner);
        document.getElementById('stopScanButton').addEventListener('click', stopScanner);
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
