<?php
header('Access-Control-Allow-Origin: *');
$request = (object) $_REQUEST;

/** @custom params */
$key = "5f35c9a6ca424605013a07";
$offer = "962";
$lp = "2367";
/** END params */


$params = [
    'uid' => '4aac09a4-7859-461c-8479-ec5459f4cdde',
    'key' => $key,
    'offer' => $offer,
    'lp' => $lp,
    'name' => $request->name,
    'tel' => $request->phone,
    'subid' => $request->clickid,
    'utm_source' => $request->arb,
];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://new-tech.co/forms/api/?' . http_build_query($params),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $params,
));

$response = curl_exec($curl);
curl_close($curl);
$response = (object) json_decode($response);


if ($response->code !== 200) die();
if ($response->message !== "OK") die();

// echo '<pre>';
// print_r($response);
// echo '<pre>';


?>


<!--PIXELS-->
<?php
echo '<script>script = document.getElementsByTagName("script");script[0].remove()</script>';

$pixels = explode(",", $request->pixels);
echo "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');";
foreach ($pixels as &$value) {
    echo "fbq('init', '" . trim($value) . "');";
};
echo  "fbq('track', 'PageView');";
echo  "fbq('track', 'Lead');";
echo "</script>";
?>



<!DOCTYPE html>
<html style="background-color: #f36f61;">

<head>
    <meta charset="UTF-8">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <title></title>



    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7COswald:400,700%7CDroid+Sans:400,700%7CRoboto:400,700%7CLato:400,700%7CPT+Sans:400,700%7CSource+Sans+Pro:400,600,700%7CNoto+Sans:400,700%7CPT+Sans:400,700%7CUbuntu:400,700%7CBitter:400,700%7CPT+Serif:400,700%7CRokkitt:400,700%7CDroid+Serif:400,700%7CRaleway:400,700%7CInconsolata:400,700" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--96539" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 40px; outline: none; background-color: rgba(246, 107, 93, 0.82);" data-trigger="none" data-animate="fade" data-delay="500">
        <div class="containerInner ui-sortable">
            <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--20547" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 35px; padding-bottom: 0px; margin: 0px; outline: none;">
                <div id="col-full-114" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                    <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                       
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-46548" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style='margin-top: 5px; outline: none; cursor: pointer; font-family: "Amatic SC", Helvetica, sans-serif !important;' data-google-font="Amatic+SC" data-htype="headline" aria-disabled="false">
                            <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 42px; color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false"><b>Grazie! La tua richiesta è stata accettata!</b>
                            </div>
                        </div>
                        <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-38884" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false" style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                            <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0" style="text-align: center; font-size: 23px; color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false">Il nostro chiamante vi inviterà a confermare l'ordine. Consegna tramite corriere o corriere. Il pagamento viene effettuato al ricevimento del prodotto (il pagamento è in ordine)!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>