<?php

if (isset($_GET['url'])) {
    $link = base64_decode($_GET['url']);
    $curlobj = curl_init();
    curl_setopt($curlobj, CURLOPT_POST, 0);
    curl_setopt($curlobj,CURLOPT_URL,$link);
    curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curlobj);
    curl_close($curlobj);
    echo $result;
}

?>