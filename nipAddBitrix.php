<?php
session_start();
if (isset($_POST['name'], $_POST['address'], $_POST['nip'], $_POST['regon'], $_SESSION['auth_id'], $_SESSION['domain'])) {

    // The data you want to save
    $name = $_POST['name'];
    $address = $_POST['address'];
    $nip = $_POST['nip'];
    $regon = $_POST['regon'];

    $auth = $_SESSION['auth_id'];
    $method = 'crm.company.add';
    echo ($_SESSION['domain']);
    $queryUrl = 'https://' . $_SESSION['domain'] . '/rest/' . $method . '.json';

    $companyData = array(
        'auth' => $auth,
        'fields' => array(
            'TITLE' => $name,
            'UF_CRM_1700135057' => $nip,
           // 'UF_NIP' => $nip,
           // 'UF_REGON' => $regon,
            // 'PHONE' => array(array('VALUE' => $phone, 'VALUE_TYPE' => 'WORK')),
            // 'EMAIL' => array(array('VALUE' => $email, 'VALUE_TYPE' => 'WORK')),
        ),
    );

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => http_build_query($companyData),
        CURLOPT_HTTPHEADER => array("Authorization: Bearer " . $auth),
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($result, true);

    if (isset($result['result'])) {
        echo '<p>Firma została pomyślnie dodana do Bitrix!</p>';
    } else {
        echo '<p>Błąd podczas dodawania firmy w Bitrix:</p>';
        var_dump($result);
    }
} else {
    echo '<p>Nieprawidłowe dane do dodania firmy w Bitrix.</p>';
}

