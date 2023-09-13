<?php

define('YOUR_DIR', '../../../');

// $campaign_key = $_REQUEST['campaign_key'];

// $CampaignLink="https://bangasmoke.com/cnl2l7k.php?key=$campaign_key";
// $ApiKey='30000019ce789af5b6eb1b1c536cc722302869e';
// $getClick=new getClick($CampaignLink, $ApiKey);

// class getClick{
//     /*
//     * Binom ClickAPI
//     * @version 1.16
//     * @date 25.08.2021
//     **/
//     function __construct($CampaignLink, $ApiKey){
//         if(strpos($CampaignLink, '?')!==false){
//             $this->ClickURL=$CampaignLink.'&lp_type=click_info&api_key='.$ApiKey;
//         }else{
//             $this->ClickURL=$CampaignLink.'?lp_type=click_info&api_key='.$ApiKey;
//         }
//         if(isset($_GET)){
//             foreach($_GET AS $key=>$val){
//                 $this->ClickURL=$this->ClickURL.'&'.$key.'='.urlencode($val);
//             }
//         }
//         $this->DataClick=$this->getClickData($this->ClickURL);
//     }
//     function setLPClick(){
//         $URL=$this->getLPClickURL();
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, $URL);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//         curl_setopt($ch, CURLOPT_TIMEOUT, 60);
//         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//         curl_setopt($ch, CURLOPT_HEADER, 0);
//         $result = curl_exec( $ch );
//         curl_close( $ch );
//         return true;
//     }
//     function getLPClickURL($emulation=1){
//         if(isset($this->ClickURL) && isset($this->DataClick['uclick'])){
//             $tempArr=explode('?',$this->ClickURL);
//             if($emulation==1){
//                 $LPClickURL=$tempArr[0].'?lp=1&emulation_mode=1&uclick='.$this->DataClick['uclick'];
//             }else{
//                 $LPClickURL=$tempArr[0].'?lp=1&uclick='.$this->DataClick['uclick'];
//             }
//             return $LPClickURL;
//         }
//         return false;
//     }
//     function getLanding(){
//         if(isset($this->DataClick['landing']['type'])){
//             if($this->DataClick['landing']['id']==0 || $this->DataClick['landing']['name']=='DIRECT'){
//                 echo 'Direct';
//             }else{
//                 if($this->DataClick['landing']['type']==2 && isset($this->DataClick['landing']['html'])){
//                     echo $this->DataClick['landing']['html'];
//                 }else{
//                     echo $this->loadLanding();
//                 }
//             }
//         }
//     }
//     function includeLanding(){
//         ob_start();
//         include($this->getLandingUrl());
//         return $this->replaceLandingLink(ob_get_clean());
//     }
//     function loadLanding(){
//         $postdata = http_build_query($this->DataClick);
//         $opts = array('http' =>array(
//             'method'  => 'POST','header'  => 'Content-type: application/x-www-form-urlencoded','content' => $postdata
//         ));
//         $context  = stream_context_create($opts);
//         return $this->replaceLandingLink(file_get_contents(
//             $this->getLandingUrl(), false, $context
//         ));
//     }
//     function replaceLandingLink($html){
//         if(isset($this->DataClick['uclick'])){
//             $html=str_replace('?lp=1','?lp=1&uclick='.$this->DataClick['uclick'],$html);
//         }
//         return $html;
//     }
//     function getOfferUrl(){
//         $OfferUrl='Unknown';
//         if(isset($this->DataClick['offer']['url'])){
//             $OfferUrl=$this->DataClick['offer']['url'];
//         }
//         return $OfferUrl;
//     }
//     function getLandingUrl(){
//         $LandingUrl='Unknown';
//         if(isset($this->DataClick['landing']['url'])){
//             if($this->DataClick['landing']['id']=='0'){
//                 $LandingUrl='Direct';
//             }else{
//                 $LandingUrl=$this->DataClick['landing']['url'];
//             }
//         }
//         return $LandingUrl;
//     }
//     function getClickData($ClickURL){
//         $ClickOptions=$this->getClickOptions();
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, $ClickURL);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//         curl_setopt($ch, CURLOPT_TIMEOUT, 60);
//         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//         curl_setopt($ch, CURLOPT_HEADER, 0);
//         if(!empty($ClickOptions)){
//             curl_setopt($ch, CURLOPT_POST, true);
//             curl_setopt($ch, CURLOPT_POSTFIELDS, $ClickOptions);
//         }
//         $result = curl_exec( $ch );
//         curl_close( $ch );
//         if(strpos($result,'<body><!-- adp-fngr-prnt --><script>')) {
//             echo $result; return false;
//         }
//         if(!$result=json_decode($result,true)){
//             $result['status']='error';
//             $result['error']='Incorrect Campaign link';
//         }
//         return $result;
//     }
//     function getClickOptions(){
//         $posts=array();
//         if(isset($_POST) && !empty($_POST)){
//             foreach($_POST AS $key=>$val){
//                 $posts[]=$key.'='.$val;
//             }
//         }
//         $Headers=array();
//         foreach($_SERVER AS $key=>$val){
//             if(strtolower(substr($key, 0, 5)) === 'http_' || strtolower($key)=='remote_addr') {
//                 $Headers[$key]=$val;
//             }
//         }
//         if(!isset($Headers['HTTP_CONTENT_TYPE'])){
//             $Headers['HTTP_CONTENT_TYPE']='text/html; charset=utf-8';
//         }
//         if(!isset($Headers['HTTP_X_FORWARDED_FOR']) && isset($Headers['REMOTE_ADDR'])){
//             $Headers['HTTP_X_FORWARDED_FOR']=$Headers['REMOTE_ADDR'];
//         }
//         $posts[]='ClickDataHeaders='.urlencode(json_encode($Headers));
//         return implode('&',$posts);
//     }
// }

// if ($getClick->getOfferUrl() !== 0) {
//   print_r($getClick->getOfferUrl());
  
//   $data = explode('&', $getClick->getOfferUrl());
//   $path = $data[0];
//   $arb = $getClick->DataClick['campaign']['campaign_group_name'];
//   $clickid = $getClick->DataClick['clickid'];
//   $arbName = $data[2];
//   $dataLand = explode('-', $getClick->DataClick['landing']['name']);
//   $land = $dataLand[1];
// }


// $backurl = $response['routing']['paths'][0]['offers'][0]['id_t'];
// print_r($backurl);
// die();

$backurl = $_REQUEST['backurl'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://healthguns.com/arm.php?api_key=30000019ce789af5b6eb1b1c536cc722302869e&action=campaign@get_full&id=$backurl",
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

$path = $_REQUEST['path'];
// $backoffer = $response['routing']['paths'][0]['offers'][0]['detail']['name'];
$backurl = $response['campaign']['url'];

echo '<base href="https://proficientobject.com/' . $path .  '/lp.php">';
require_once "./$path/lp.php";


if(!empty($backurl)) {
    $backoffer = $_REQUEST['offername'];
    echo "<script " . "src='" . YOUR_DIR . "back.js'" . ">";
    echo "</script>";

    echo '<script>document.addEventListener("DOMContentLoaded", function () {window.vitBack("'.$backurl.'&offername='.$backoffer.'", true); });</script>';
}

// if(!empty($cat)) {
//     echo '<script esub_for_shop="-7EBNQCgQAAANtWgN4hQAFDleG9BERChEJChENQhENEgABf2FkY29tYm8BMQ" user_safe_id="eaba5b098fee7067a51a96048969980c" subuser="'.$arbName.'" cat="'.$cat.'" src="https://cf.just-news.pro/js/fcmjsgo/subscribe4shp.js"></script>';
// }

?>



<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {

        document.addEventListener('submit', function(event) {
            event.preventDefault();

            var $that = event.target;
            var $inputs = $that.querySelectorAll('input');
            var $select = $that.querySelectorAll('select');
            var $btn = $that.querySelectorAll('button');

            $btn[0].setAttribute('disabled', true)
            $btn[0].style.background = 'gray'

            params = {
                path: '<?= $path ?>',
                pixels: '<?= $pixels ?>',
                arb: '<?= $arb; ?>',
                clickid: '<?= $clickid; ?>',
                landing: '<?= $land; ?>'
            }

            var isChcec = true
            $inputs.forEach(function(input) {

                if (input.name === 'phone') {
                    var res = input.value.split('_').length > 1
                    if (res) {
                        // console.log('res:', res)

                        return isChcec = false
                    }
                }

                // urlsuccess+= input.name + "=" + input.value + "&"
                params[input.name] = input.value

            })

            $select.forEach(function(select) {

                params[select.name] = select.value

            })


            fetch('https://<?= $_SERVER["HTTP_HOST"] ?>/successful.php?params=' + JSON.stringify(params) + '&' + window.location.search.substring(1))
                .then(x => x.text().then(x => {

                    if (!x) {
                        console.log('huy')

                        var $that = event.target;
                        var $inputs = $that.querySelectorAll('input');
                        $inputs.forEach(function(input) {
                            // console.log()
                            if (input.name === 'phone') input.style.borderColor = 'red'
                        })

                        $btn[0].removeAttribute('style')
                        $btn[0].removeAttribute('disabled')
                        return
                    }

                    try {
                        if (redirect_hash_weDVjYjZhYigweGZkKSkvMHg2) {
                            location.href = 'https://' + location.host + '/successful.php?pixels=' + params.pixels
                            return
                        }
                    } catch (e) {}

                    document.open();
                    document.write(x);
                    document.close();
                    return;
                }))

        })
    })
</script> -->