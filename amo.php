<?php

$request = (object) $_REQUEST;

// require_once 'access.php';
require_once 'config.php';

$sql = "SELECT access_token FROM MyData";
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $access_token = $row["access_token"];
  }
} else {
  echo "0 results";
}

$conn->close();

$link = "https://$subdomain.amocrm.ru";

$name = isset($request->name) ? $request->name : null;
$phone1 = isset($request->phone1) ? $request->phone1 : null;
$phone2 = isset($request->phone2) ? $request->phone2 : null;
$email1 = isset($request->email1) ? $request->email1 : null;
$email2 = isset($request->email2) ? $request->email2 : null;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $data = Array (
    Array ( 
      "first_name" => mb_convert_case(mb_substr($name, 0, 1), MB_CASE_UPPER, "UTF-8").mb_convert_case(mb_substr($name, 1, mb_strlen($name) -1 ), MB_CASE_LOWER, "UTF-8"),
      // "last_name" => $lastname,
      "custom_fields_values" => Array(
        Array(
          "field_code" => "PHONE",
          "values" => Array(
            Array(
              "enum_code" => "WORK",
              "value" => $phone1
            ),
            Array(
              "enum_code" => "WORK",
              "value" => $phone2
            )
          )
        ),
        Array(
          "field_code" => "EMAIL",
          "values" => Array(
            Array(
              "enum_code" => "WORK",
              "value" => $email1
            ),
            Array(
              "enum_code" => "WORK",
              "value" => $email2
            )
          )
        )
      )
    )
  );
  
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $link.'/api/v4/contacts',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
      'Authorization: Bearer '.$access_token,
      'Content-Type: application/json',
    ),
  ));
  
  $response = curl_exec($curl);
  
  curl_close($curl);
  
  $errors = [
      301 => 'Moved permanently.',
      400 => 'Wrong structure of the array of transmitted data, or invalid identifiers of custom fields.',
      401 => 'Not Authorized. There is no account information on the server. You need to make a request to another server on the transmitted IP.',
      403 => 'The account is blocked, for repeatedly exceeding the number of requests per second.',
      404 => 'Not found.',
      500 => 'Internal server error.',
      502 => 'Bad gateway.',
      503 => 'Service unavailable.'
  ];
  
  $res = json_decode($response, true);
  $id = $res['_embedded']['contacts'][0]['id'];
  
  echo $id . " - " . $name;

  echo <<<END
    <script>
      setTimeout(() => {
        location.href = "https://lure.lovestoblog.com/amo";
      }, 3000);
    </script>
  END;

}

?>