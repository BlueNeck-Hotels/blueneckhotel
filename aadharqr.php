
<?php
session_start();
$auth_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTczMDgwMjE5OCwianRpIjoiNDYyNDM1NmMtMGUxOS00MzliLWEzYzUtMTg4MmFjYTA3NTdmIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmJsdWVuZWNraG90ZWxAc3VyZXBhc3MuaW8iLCJuYmYiOjE3MzA4MDIxOTgsImV4cCI6MTczMzM5NDE5OCwiZW1haWwiOiJibHVlbmVja2hvdGVsQHN1cmVwYXNzLmlvIiwidGVuYW50X2lkIjoibWFpbiIsInVzZXJfY2xhaW1zIjp7InNjb3BlcyI6WyJ1c2VyIl19fQ.p63dFOpm5A9hFWPGsbZhI6_pgBgXfC7mLmWd9De0UAQ'; // Replace with your token
function sendCurlRequest($url, $data, $headers) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        return ["error" => curl_error($ch)];
    }

    curl_close($ch);
    return $result ? json_decode($result, true) : ["error" => "Invalid server response"];
}

if (isset($_POST['output'])) {
    $qr_text = $_POST['output'];
    $url = 'https://sandbox.surepass.io/api/v1/aadhaar/upload/qr';
    $headers = [
        'Authorization: Bearer ' . $auth_token
    ];
    $postData = ['qr_text' => $qr_text];

    $response = sendCurlRequest($url, $postData, $headers);

    if (isset($response['status_code']) && $response['status_code'] === 200) {
        $_SESSION['qrdata'] = $response['data'];
        // Optionally debug or respond with data
        print_r($_SESSION['qrdata']);
    } else {
        echo "<script>alert('Session not set or response status code is not 200.');</script>";
    }

    if (isset($response['error'])) {
        echo json_encode(["status_code" => 500, "message" => $response['error']]);
        exit;
    }
    echo json_encode($response);
    exit;
} else {
    echo json_encode(["status_code" => 400, "message" => "Missing qr_text parameter"]);
    exit;
}
?>
