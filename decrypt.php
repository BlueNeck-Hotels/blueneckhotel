<?php
header('Content-Type: application/json');

// Retrieve the QR code data from the POST request
$requestPayload = file_get_contents("php://input");
$data = json_decode($requestPayload, true);

if (!isset($data['qr_data'])) {
    echo json_encode(['success' => false, 'error' => 'No QR data provided']);
    exit;
}

$qrData = $data['qr_data'];

// Simulating decryption process
try {
    // If UIDAI SDK is integrated, use it here to decrypt the $qrData.
    // Example: $decryptedData = decryptWithUIDAI($qrData);

    // Mock decrypted data for demonstration:
    $decryptedData = [
        'uid' => '123456789012',
        'name' => 'John Doe',
        'gender' => 'M',
        'yob' => '1990',
        'address' => '123 Main Street, Example City, Example State',
    ];

    echo json_encode(['success' => true, 'decrypted_data' => $decryptedData]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
