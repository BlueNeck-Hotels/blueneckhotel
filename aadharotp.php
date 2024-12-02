<?php
$auth_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTczMDgwMjE5OCwianRpIjoiNDYyNDM1NmMtMGUxOS00MzliLWEzYzUtMTg4MmFjYTA3NTdmIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmJsdWVuZWNraG90ZWxAc3VyZXBhc3MuaW8iLCJuYmYiOjE3MzA4MDIxOTgsImV4cCI6MTczMzM5NDE5OCwiZW1haWwiOiJibHVlbmVja2hvdGVsQHN1cmVwYXNzLmlvIiwidGVuYW50X2lkIjoibWFpbiIsInVzZXJfY2xhaW1zIjp7InNjb3BlcyI6WyJ1c2VyIl19fQ.p63dFOpm5A9hFWPGsbZhI6_pgBgXfC7mLmWd9De0UAQ';
session_start();

function sendCurlRequest($url, $data, $headers) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $result = curl_exec($ch);
    curl_close($ch);

    return $result ? json_decode($result, true) : ["error" => "cURL Error"];
}

if (isset($_GET['sendotp'])) {
    $aadharno = $_POST['aadhar'];
    if (!preg_match('/^\d{12}$/', $aadharno)) {
        echo json_encode(["status_code" => 400, "message" => "Invalid Aadhaar number"]);
        exit;
    }

    $url = 'https://sandbox.surepass.io/api/v1/aadhaar-v2/generate-otp';
    $headers = ['Content-Type: application/json', 'Authorization: Bearer ' . $auth_token];
    $response = sendCurlRequest($url, ["id_number" => $aadharno], $headers);

    echo json_encode($response);
    exit;
}

if (isset($_GET['verifyotp'])) {
    $otpValue = $_POST['otpValue'];
    $client_id = $_POST['client_id'];

    // Check if client_id is provided
    if (empty($client_id)) {
        echo json_encode(["status_code" => 400, "message" => "Missing client ID"]);
        exit;
    }

    $url = 'https://sandbox.surepass.io/api/v1/aadhaar-v2/submit-otp';
    $headers = ['Content-Type: application/json', 'Authorization: Bearer ' . $auth_token]; 
    $response = sendCurlRequest($url, ["client_id" => $client_id, "otp" => $otpValue], $headers);

    if (isset($response['status_code']) && $response['status_code'] === 200) {
        $_SESSION['client_data'] =$response['data'] ;
        echo json_encode([
            'status_code' => 200,
            'message' => 'OTP verified and data stored in session.',
            'client_data' => $_SESSION['client_data']
        ]);
    } else {
        echo json_encode([
             'message' => $response['message'] ?? "OTP verification failed."
        ]);
    }
    exit;
}

// if (isset($_GET['resendotp'])) {
//     $client_id = $_POST['client_id'];

//     // Check if client_id is provided
//     if (empty($client_id)) {
//         echo json_encode(["status_code" => 400, "message" => "Missing client ID"]);
//         exit;
//     }

//     $url = 'https://sandbox.surepass.io/api/v1/aadhaar-v2/generate-otp';
//     $headers = ['Content-Type: application/json', 'Authorization: Bearer ' . $auth_token];
//     $response = sendCurlRequest($url, ["client_id" => $client_id, "otp" => $otpValue], $headers);

//     if (isset($response['status_code']) && $response['status_code'] === 200) {
//         $_SESSION['client_data'] =$response['data'] ;
//         echo json_encode([
//             'status_code' => 200,
//             'message' => 'OTP verified and data stored in session.',
//             'client_data' => $_SESSION['client_data']
//         ]);
//     } else {
//         echo json_encode([
//             'status_code' => $response['status_code'] ?? 500,
//             'message' => $response['message'] ?? "OTP verification failed."
//         ]);
//     }
//     exit;
// }

// if (isset($_GET['addharqr'])) {
//     $decodetext = $_POST['decodetext'];
//     if (empty($decodetext)) {
//         echo json_encode(["status_code" => 400, "message" => "Missing client addhar"]);
//         exit;
//     }

//     $url = 'https://sandbox.surepass.io/api/v1/ocr/aadhaar';
//     $headers = ['Content-Type: application/json', 'Authorization: Bearer ' . $auth_token];
//     $response = sendCurlRequest($url, ["id_number" => $decodetext], $headers);

//     echo json_encode($response);
//     exit;
// }
// ?>
