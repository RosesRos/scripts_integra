
//Get ip only with PHP
<?php
$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];;

$url = "http://ip-api.com/json/{$ip_address}";

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
));
$response = curl_exec($ch);
$data = (object) json_decode($response);
curl_close($ch);

$city = $data->city;
print_r('your city' . ' ' . $city);
?>





// get ip with PHP and JAVASCRIPT

<?php
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
?>

<script>
    let ip = '<?= $ip_address ;?>'

    let p = document.getElementById('loca');

    var IPs = [`${ip}`];

    // ip-api endpoint URL
    // see http://ip-api.com/docs/api:batch for documentation
    var endpoint = 'https://api.techniknews.net/ipgeo/';

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Result array
            var response = JSON.parse(this.responseText);
            // console.log(response);
            p.innerHTML = response.city
            // response.forEach(function (item) {
            //     console.log(item.query + " is in " + item.city + ", " + item.country); 
            //     p.innerHTML = item.city
            // });
        }
     };
     var data = JSON.stringify(IPs);
     // console.log("sending:", data);

    xhr.open('POST', endpoint, true);
    xhr.send(data);

</script>





// Get IP with jquery
<script>
$(document).ready(function() {
    var $city = $('.popup-geocity');
    var city = '';
    $.get('https://api.sypexgeo.net/json/', function(location) {
        city = location.city.name_en;
        $city.text(city);
    })

    let isShowedPopup = false;

    $(document).mouseleave(function() {
        if (!isShowedPopup) {
            $('.popup-blackout').fadeIn();
            isShowedPopup = true;
        }
    });

    $('.popup-blackout').mouseup(function(e) {
        let popup = $('.popup');
        if (!popup.is(e.target) && popup.has(e.target).length === 0) {
            $('.popup-blackout').fadeOut();
        } else if ($('.popup-more-btn, .close-blackout').is(e.target)) {
            e.preventDefault();
            $('.popup-blackout').fadeOut();
        }
    });

    $("a").on("touchend, click", function(e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $('.toscroll').offset().top
        }, 400);
    });
});
</script>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<p id="demo"></p>    

<script>
    let demo = document.getElementById('demo');
    $.getJSON("https://api.ipify.org?format=json", function(data) {
        var ip = data.ip;
        // console.log(ip);
        var IPs = [`${ip}`];
        var endpoint = 'https://api.techniknews.net/ipgeo/';
            
        var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                demo.innerHTML = response.city;
            }
        }
        var data = JSON.stringify(IPs);
        xhr.open('POST', endpoint,true);
        xhr.send(data);
    });
</script>
