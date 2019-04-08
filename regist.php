<?php
function RegisterBigToken($mail, $reff){
    $body = http_build_query(array(
        "password" => "Mazterin312~",
        "monetize" => "1",
        "referral_id" => $reff,
        "email" => $mail
    ));
    $headers = array();
    $headers[] = "Accept: application/json";
    $headers[] = "User-Agent: Redmi 5A_9_".rand(1,100).".0.".rand(1,50);
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = "Host: api.bigtoken.com";
    $headers[] = "Connection: Keep-Alive";
    $headers[] = "Accept-Encoding: gzip";

    $post = curl("https://api.bigtoken.com/signup", $body, $headers);
    $decode = json_decode($post[1], true);
    if(isset($decode['data']['user_id'])){
        echo "Success register | User id : ".$decode['data']['user_id']." | BigId : ".$decode['data']['bigid'];
    }else{
        echo "Failed Register | ".print $post[1];
    }
}
$reff = "ZM654CIID";
echo ">>>> : "; $mail = trim(fgets(STDIN));
echo RegisterBigToken($mail, $reff);
?>