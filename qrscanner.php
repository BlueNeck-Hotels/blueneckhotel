<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aadhaar QR Code Scanner</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(45deg, #6a11cb, #2575fc);
      color: #fff;
      font-family: Arial, sans-serif;
    }

    #reader {
      width: 500px;
      height: 500px;
      border: 5px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
      border-radius: 20px;
      overflow: hidden;
    }
  </style>
  <script src="https://unpkg.com/html5-qrcode"></script>
</head>
<body>
  <h1>Aadhaar QR Code Scanner</h1>
  <div id="reader"></div>

  <script>
    function onScanSuccess(decodedText) {
      console.log("Decoded Text: ", decodedText);

      // Assuming Aadhaar QR data is XML or JSON-like
      if (!decodedText) {
        alert("Invalid QR Code.");
        return;
      }

      alert("QR Code scanned successfully! Processing Aadhaar data...");

      const bearerToken = "YOUR_BEARER_TOKEN"; // Replace with your actual token
      fetch('https://sandbox.surepass.io/api/v1/ocr/aadhaar', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': `Bearer ${bearerToken}`
        },
        body: JSON.stringify({ qrCodeData: decodedText })
      })
      .then(response => response.json())
      .then(data => {
        console.log('Success:', data);
        if (data?.success) {
          alert("Aadhaar Data Processed Successfully: " + JSON.stringify(data));
        } else {
          alert("Failed to process Aadhaar QR Code.");
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert("Error while processing Aadhaar QR Code.");
      });
    }

    function onScanFailure(error) {
      console.warn("QR Code scan error: ", error);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner("reader", {
      fps: 10,
      qrbox: { width: 300, height: 300 },
    });
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
  </script>
</body>
</html> -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Upload Aadhaar File</h1>
    <form id="uploadForm" enctype="multipart/form-data">
        <label for="file">Select File:</label>
        <input type="file" id="file" name="file" required>
        <button type="button" id="uploadBtn">Upload</button>
    </form>
    <div id="response"></div>

    <script>
     document.getElementById('uploadBtn').addEventListener('click', function () {
    const formData = new FormData(document.getElementById('uploadForm'));

    fetch('upload.php', {
        method: 'POST',
        body: formData,
        headers: {
            'Authorization':'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTczMDgwMjE5OCwianRpIjoiNDYyNDM1NmMtMGUxOS00MzliLWEzYzUtMTg4MmFjYTA3NTdmIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmJsdWVuZWNraG90ZWxAc3VyZXBhc3MuaW8iLCJuYmYiOjE3MzA4MDIxOTgsImV4cCI6MTczMzM5NDE5OCwiZW1haWwiOiJibHVlbmVja2hvdGVsQHN1cmVwYXNzLmlvIiwidGVuYW50X2lkIjoibWFpbiIsInVzZXJfY2xhaW1zIjp7InNjb3BlcyI6WyJ1c2VyIl19fQ.p63dFOpm5A9hFWPGsbZhI6_pgBgXfC7mLmWd9De0UAQ', // Include the Bearer Token
        }
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('response').innerText = `Response: ${data}`;
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('response').innerText = 'An error occurred.';
    });
});
    </script>
</body>
</html>