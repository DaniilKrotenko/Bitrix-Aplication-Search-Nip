<?php

require_once './vendor/autoload.php';
require_once './crest.php';

use GusApi\Exception\InvalidUserKeyException;
use GusApi\Exception\NotFoundException;
use GusApi\GusApi;
use GusApi\ReportTypes;

function getBitrixCompanyData($nip)
{
    $result = CRest::call('crm.company.list', [
        'select' => ['ID', 'TITLE', 'ADDRESS', 'EMAIL', 'PHONE', 'WEB', 'UF_CRM_NIP']
    ]);

    foreach ($result['result'] as $company) {
        if ($company["UF_CRM_NIP"] == $nip) {
            return [
                'id' => $company['ID'],
                'name' => $company['TITLE'],
                'street' => $company['ADDRESS'],
                'nip' => $company['UF_CRM_NIP'],
            ];
        }
    }

    return null;
}

try {
    $nipToCheck = $_POST['nip'];
    $key = "f253e819300a49b0a1aa";
    $gus = new GusApi($key);
    // for development server use:
    // $gus = new GusApi('abcde12345abcde12345', 'dev');
    $gus->login();

    $bitrixData = getBitrixCompanyData($nipToCheck);

    if ($bitrixData) {
        $check = true;
        $data_to_pass = [
            'data' => $bitrixData,
            'check' => $check,
        ];
        $data_string = json_encode($data_to_pass);
        $data_encrypted = base64_encode($data_string);
        header('Location: https://1828-79-163-251-170.ngrok-free.app/nipSuccessSearched.php' . '?data=' . $data_encrypted);
    } else {
        $gusReports = $gus->getByNip($nipToCheck);

        foreach ($gusReports as $gusReport) {
            $reportType = ReportTypes::REPORT_PERSON;

            $fullReport = $gus->getFullReport($gusReport, $reportType);

            if ($fullReport) {
                $data_to_pass = [
                    'data' => [
                        'name' => $gusReport->getName(),
                        'street' => $gusReport->getStreet() . ' ' . $gusReport->getPropertyNumber() . ', ' . $gusReport->getZipCode() . ' ' . $gusReport->getCity(),
                        'nip' => $gusReport->getNip(),
                    ],
                ];
                $data_string = json_encode($data_to_pass);
                $data_encrypted = base64_encode($data_string);
                var_dump($fullReport);
                header('Location: https://1828-79-163-251-170.ngrok-free.app/nipSuccessSearched.php' . '?data=' . $data_encrypted);
            } else {
                header('Location: https://1828-79-163-251-170.ngrok-free.app/404.php');
            }
        }
    }
} catch (InvalidUserKeyException $e) {
    echo 'Bad user key';
} catch (NotFoundException $e) {
    header('Location: https://1828-79-163-251-170.ngrok-free.app/404.php');
}
