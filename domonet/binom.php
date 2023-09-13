<?php
define('YOUR_DIR', '../../../');

$click = $_REQUEST['click'];
$arb = $_REQUEST['arb'];
$ApiKey='30000019ce789af5b6eb1b1c536cc722302869e';

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://healthguns.com/arm.php?api_key=$ApiKey&action=clickinfo@get&clickid=$click",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);
$response = json_decode($response);
curl_close($curl);

$landPath = explode('-', $response->click->landing_name);
$land = $landPath[1];

// Формирование данных лида
$leadData = array(
    'clickid' => $click,
    'campaign_id' => $response->click->campaign_id,
    'offer_id' => $response->click->offer_id,
    'arb' => $arb,
    'land' => $land,
);

$params = $_REQUEST['params'];
$path2 = explode('@', $params);
echo '<base href="https://proficientobject.com/' . $params .  '/lp.php">';
require_once "./$params/lp.php";

// Преобразование данных в формат JSON
$jsonData = json_encode($leadData);

// Формирование HTTP-заголовков
$headers = array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData),
);

// Отправка HTTP-запроса на API-эндпоинт трекера Binom
$apiUrl = "https://healthguns.com/api/v1/leads?api_key=$ApiKey";
$response = file_get_contents($apiUrl, false, stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => implode("\r\n", $headers),
        'content' => $jsonData,
    ),
)));

// Обработка ответа от трекера Binom
$responseData = json_decode($response, true);


// Обработка кампания-домонетка
$backurl = $_REQUEST['backurl'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://healthguns.com/arm.php?api_key=$ApiKey&action=campaign@get_full&id=$backurl",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));
$response = curl_exec($curl);
$response = json_decode($response, true);
curl_close($curl);
$backurl = $response['campaign']['url'];

if(!empty($backurl)) {
    $backoffer = $land;
    echo "<script " . "src='" . YOUR_DIR . "back.js'" . ">";
    echo "</script>";

    echo '<script>document.addEventListener("DOMContentLoaded", function () {window.vitBack("'.$backurl.'&offername='.$backoffer.'", true); });</script>';
}

// Проверка успешности отправки лида
// if ($responseData['success']) {
//     echo 'Lead sent successfully';
// } else {
//     echo 'Failed to send lead: ' . $responseData['error'];
// }

?>

<script>
    console.log('<?=$land;?>');
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('submit', function(event) {
            event.preventDefault();

            var $that = event.target;
            var $inputs = $that.querySelectorAll('input');
            var $select = $that.querySelectorAll('select');
            var $btn = $that.querySelectorAll('button');

            $btn[0].setAttribute('disabled', true);
            $btn[0].style.background = 'gray';

            params = {
                path: '<?= $path2[0] ?>',
                // pixels: '<?= $pixels ?>',
                arb: '<?= $arb; ?>',
                clickid: '<?= $click; ?>',
                landing: '<?= $land; ?>'
            }
            console.log(params);

            var isChcec = true
            $inputs.forEach(function(input) {
                if (input.name === 'phone') {
                    var res = input.value.split('_').length > 1
                    if (res) {
                        return isChcec = false
                    }
                }
                params[input.name] = input.value;
            })
            $select.forEach(function(select) {
                params[select.name] = select.value
            })

            pairs = [];
	    
	        for (var key in params) {
                if (params.hasOwnProperty(key)) {
                    pairs.push(key+"="+encodeURIComponent(params[key]));
                    // console.log(pairs.push(key+"="+encodeURIComponent(params[key])));
                }
	        };
	    
	        var qs = pairs.join('&');
            var url = 'https://<?= $_SERVER["HTTP_HOST"] ?>/' + params.path + 'successful.php?params=' + JSON.stringify(params) + '&' + qs;

            fetch(url, {
                method: 'POST',
                mode: 'no-cors',
                cache: 'no-cache'
            })
            .then((x) => x.text())
            .then((x) => {
                if (!x) {
                    console.log('huy')

                    var $that = event.target;
                    var $inputs = $that.querySelectorAll('input');
                    $inputs.forEach(function(input) {
                        if (input.name === 'phone') input.style.borderColor = 'red'
                    })

                    $btn[0].removeAttribute('style')
                    $btn[0].removeAttribute('disabled')
                    return
                }

                // try {
                //     if (redirect_hash_weDVjYjZhYigweGZkKSkvMHg2) {
                //         location.href = 'https://' + location.host + '/successful.php?pixels=' + params.pixels
                //         return
                //     }
                // } catch (e) {}

                document.open();
                document.write(x);
                document.close();
                return;
            })
            .catch((err) => {
                console.log(err);
            });

        });
    });
</script>