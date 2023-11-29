<?php
require_once './crest.php';

if (isset($_POST['name'], $_POST['address'], $_POST['nip'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $nip = $_POST['nip'];

    $companies = CRest::call('crm.company.list', [
        'select' => ['ID', 'TITLE', 'ADDRESS', 'UF_CRM_NIP'],
    ]);

    $existingCompany = null;

    foreach ($companies['result'] as $company) {
        if ($company['UF_CRM_NIP'] == $nip) {
            $existingCompany = $company;
            break;
        }
    }

    if ($existingCompany) {
        CRest::call('crm.company.update', [
            'id' => $existingCompany['ID'],
            'fields' => [
                'TITLE' => $name,
                'ADDRESS' => $address,
                'UF_CRM_NIP' => $nip,
            ],
        ]);
        header('Location: https://1828-79-163-251-170.ngrok-free.app/successUpdated.php'.'?id='.$existingCompany['ID']);
    } else {
        $result = CRest::call('crm.company.add', [
            'fields' => [
                'TITLE' => $name,
                'ADDRESS' => $address,
                'UF_CRM_NIP' => $nip,
            ],
        ]);
        var_dump($result);
        $newCompanyId = $result['result'];
        header('Location: https://1828-79-163-251-170.ngrok-free.app/successAdded.php'.'?id='.$newCompanyId);
    }
} else {
    echo '<p>Nieprawidłowe dane do dodania firmy w Bitrix. Skontaktuj się z deweloperem aplikacji.</p>';
}

