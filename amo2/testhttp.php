<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://webhook.site/token/ec0100dd-99bb-49d7-a535-66956f0fa1d2/requests',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
$response = json_decode($response, true);

curl_close($curl);
echo "<pre>";
// Перебираем элементы массива "data"
foreach ($response['data'] as $item) {
  $uuid = $item['uuid'];
  echo "UUID: $uuid\n";

  $contactId = $item['request']['contacts']['add'][0]['id'];
  echo "Contact ID: $contactId\n";

  $timeCreate = $item["created_at"];
  echo "created_at: $timeCreate\n";

  $customfields = $item['request']['contacts']['add'][0]["custom_fields"][0]["name"];
  echo "names: $customfields\n";

}

echo "</pre>";
