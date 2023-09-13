<?php
require 'botsScripts.php';
define('YOUR_DIR', '../../../');

$click = $_REQUEST['click'];
$arb = $_REQUEST['arb'];
$ApiKey='30000019ce789af5b6eb1b1c536cc722302869e';

$params = $_REQUEST['params'];
$offerUrl = "https://bangasmoke.com/cnl2l7k.php?lp=1";

if (isset($params)) {
    $path1 = explode('/', $params);
    $path2 = $path1[2][0];
    $mainPath = explode($path2, $params);
    $land = $path1[2];
    // echo '<base href="https://proficientobject.com/' . $params .  '/lp.php">';
    echo '<base href="https://' . $_SERVER["HTTP_HOST"] . '/' . $params .  '/lp.php">';
    require_once "./$params/lp.php";
}

if (!empty($click)) {
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
}

// Обработка кампания-домонетка
$backurl = $_REQUEST['backurl'];
if (isset($backurl)) {
    $ch = curl_init();
    curl_setopt_array($ch, array(
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
    $resBack = curl_exec($ch);
    $resBack = json_decode($resBack, true);
    curl_close($ch);
    $backurl = $resBack['campaign']['url'];

    if(!empty($backurl)) {
        $backoffer = $land;
        echo "<script " . "src='" . YOUR_DIR . "back.js'" . ">";
        echo "</script>";
    
        echo '<script>document.addEventListener("DOMContentLoaded", function () {window.vitBack("'.$backurl.'&offername='.$backoffer.'", true); });</script>';
    }
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
                path: '<?= $mainPath[0]; ?>',
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
                // console.log(err);
            });

        });
    });
</script>