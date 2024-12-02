<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $filePath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];

        // API endpoint
        $url = 'https://sandbox.surepass.io/api/v1/ocr/aadhaar';

        // Bearer Token
        $bearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTczMDgwMjE5OCwianRpIjoiNDYyNDM1NmMtMGUxOS00MzliLWEzYzUtMTg4MmFjYTA3NTdmIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmJsdWVuZWNraG90ZWxAc3VyZXBhc3MuaW8iLCJuYmYiOjE3MzA4MDIxOTgsImV4cCI6MTczMzM5NDE5OCwiZW1haWwiOiJibHVlbmVja2hvdGVsQHN1cmVwYXNzLmlvIiwidGVuYW50X2lkIjoibWFpbiIsInVzZXJfY2xhaW1zIjp7InNjb3BlcyI6WyJ1c2VyIl19fQ.p63dFOpm5A9hFWPGsbZhI6_pgBgXfC7mLmWd9De0UAQ';

        // Initialize cURL
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'Authorization: Bearer ' . $bearerToken, // Include Bearer Token
            ],
            CURLOPT_POSTFIELDS => [
                'file' => new CURLFile($filePath, mime_content_type($filePath), $fileName),
            ],
        ]);

        // Execute cURL request
        $response = curl_exec($curl);

        // Check for cURL errors
        if ($response === false) {
            echo 'cURL Error: ' . curl_error($curl);
        } else {
            echo $response;
        }

        // Close cURL session
        curl_close($curl);
    } else {
        echo 'File upload error.';
    }
} else {
    echo 'Invalid request method.';
}

?>
