<?php
$request = (object) $_REQUEST;

use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Models\ContactModel;
use AmoCRM\Models\CustomFieldsValues\MultitextCustomFieldValuesModel;
use AmoCRM\Models\CustomFieldsValues\ValueCollections\MultitextCustomFieldValueCollection;
use AmoCRM\Models\CustomFieldsValues\ValueModels\MultitextCustomFieldValueModel;
use League\OAuth2\Client\Token\AccessTokenInterface;
use AmoCRM\Collections\CustomFieldsValuesCollection;

include_once __DIR__ . '/bootstrap.php';

$accessToken = getToken();
$apiClient->setAccessToken($accessToken)
    ->setAccountBaseDomain($accessToken->getValues()['baseDomain'])
    ->onAccessTokenRefresh(
        function (AccessTokenInterface $accessToken, string $baseDomain) {
            saveToken(
                [
                    'accessToken' => $accessToken->getToken(),
                    'refreshToken' => $accessToken->getRefreshToken(),
                    'expires' => $accessToken->getExpires(),
                    'baseDomain' => $baseDomain,
                ]
            );
        }
    );

$name = $request->name;
$phone = $request->phone;
$phone2 = $request->phone2;
$email = $request->email;
$email2 = $request->email2;

//Создадим контакт
$contact = new ContactModel();
$contact->setName($name);

//Создадим коллекцию полей сущности
$customFields = new CustomFieldsValuesCollection();
//Получим значение поля по его коду
$phoneField = $customFields->getBy('fieldCode', 'PHONE');
$phoneField2 = $customFields->getBy('fieldCode', 'PHONE');
$emailField = $customFields->getBy("fieldCode", "EMAIL");
$emailField2 = $customFields->getBy("fieldCode", "EMAIL");

$phones = Array(
    Array("HOME",$phone, $phoneField),
    Array("WORK",$phone2, $phoneField2)
);

for ($cow = 0; $cow < count($phones); $cow++) {
    $phoneFields = $phones[$cow][2];
    
    if (empty($phoneFields)) {
        $phoneFields = (new MultitextCustomFieldValuesModel())->setFieldCode("PHONE");
        $customFields->add($phoneFields);
    }

    $phoneFields->setValues(
        (new MultitextCustomFieldValueCollection())->add(
            (new MultitextCustomFieldValueModel())
                ->setEnum($phones[$cow][0])
                ->setValue($phones[$cow][1])
        )
    );
}

//Если значения нет, то создадим новый объект поля и добавим его в коллекцию значений
// if (empty($phoneField)) {
//     $phoneField = (new MultitextCustomFieldValuesModel())->setFieldCode('PHONE');
//     $customFields->add($phoneField);
// }

//Установим значение поля
// $phoneField->setValues(
//     (new MultitextCustomFieldValueCollection())
//         ->add(
//             (new MultitextCustomFieldValueModel())
//                 ->setEnum('WORK')
//                 ->setValue($phone)
//         )
// );

$emails = Array(
    Array("OTHER",$email, $emailField),
    Array("WORK",$email2, $emailField2)
);

for ($row = 0; $row < count($emails); $row++) {
    $emailFields = $emails[$row][2];

    if (empty($emailFields)) {
        $emailFields = (new MultitextCustomFieldValuesModel())->setFieldCode("EMAIL");
        $customFields->add($emailFields);
    }

    $emailFields->setValues(
        (new MultitextCustomFieldValueCollection())->add(
            (new MultitextCustomFieldValueModel())
                ->setEnum($emails[$row][0])
                ->setValue($emails[$row][1])
        )
    );
}


// die();
//Получим коллекцию значений полей контакта
$contact->setCustomFieldsValues($customFields);


try {
    $apiClient->contacts()->addOne($contact);
    echo <<<HTML
        <div>
            <h1>уважамый клиент</h1>
            <p><span>Имя: $name </span> <br> <span>телефон: $phone </span> <br> <span>Email: $email</span></p>
        </div>
    HTML;
} catch (AmoCRMApiException $e) {
    printError($e);
    die();
}

