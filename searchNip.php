<?php
session_start();

require_once 'vendor/nip24/client/NIP24/NIP24Client.php';

\NIP24\NIP24Client::registerAutoloader();

// Login and password from nip24.pl account for API request
$login = "login";
$password = "password";
$nip24 = new \NIP24\NIP24Client($login, $password);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nip'])) {
    $nip = $_POST['nip'];
    $auth_id = $_POST['auth_id'];

    // Request to Bitrix24
    $method = 'crm.company.list';
    $queryUrl = 'https://' . $_REQUEST['domain'] . '/rest/' . $method . '.json';
    $params = [
        'select' => ['ID', 'TITLE', 'EMAIL', 'PHONE', 'WEB', 'UF_CRM_1700135057']
    ];
    $queryData = http_build_query(array_merge($params, array("auth" => $auth_id)));

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = json_decode(curl_exec($curl), true);
    curl_close($curl);

    $companyExists = false;
    foreach ($result['result'] as $company) {
        if ($company['UF_CRM_1700135057'] == $nip) {
            $companyExists = true;
            break;
        }
    }

    if ($companyExists) {
        echo json_encode(['success' => true, 'data' => 'Już Jest']);
    } else {
        $all = $nip24->getAllDataExt(\NIP24\Number::NIP, $nip);
        if ($all) {
            $data_to_pass = [
                'nip' => $nip,
                'allData' => $all,
                'auth_id' => $auth_id,
            ];
            $data_string = json_encode($data_to_pass);
            $data_encrypted = base64_encode($data_string);
            echo json_encode(['success' => true, 'data' => $data_encrypted]);
        } else {
            echo json_encode(['success' => false, 'error' => $nip24->getLastError()]);
        }
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid data received']);
}

