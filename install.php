<?php
require_once(__DIR__ . '/crest.php');

$result = CRest::installApp();
CRest::call('crm.company.userfield.add', [
    'fields' => ['FIELD_NAME' => 'UF_CRM_NIP', 'USER_TYPE_ID' => 'double', 'XML_ID' => 'UF_CRM_NIP', 'EDIT_FORM_LABEL' => 'NIP', 'LIST_COLUMN_LABEL' => 'NIP']]);
if ($result['rest_only'] === false):?>
    <head>
        <script src="//api.bitrix24.com/api/v1/"></script>
        <?php if ($result['install'] == true): ?>
            <script>
                BX24.init(function () {
                    BX24.installFinish();
                });
            </script>
        <?php endif; ?>
    </head>
    <body>
    <?php if ($result['install'] == true): ?>
        Success! Installation has been finished
    <?php else: ?>
        Failed! Installation error
    <?php endif; ?>
    </body>
<?php endif;