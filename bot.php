<?php 
    include 'config.php';
    $t = "\e[97m";
    $merah = "\e[91m";
    echo $merah."BOT Go Novel Bye Ryan \n".$t;
    $urel = 'https://api.igonovel.com/v1/me/info';

    function get($url){
        global $uid, $token, $timestamp;
        $ch = curl_init();
        //set URL
        curl_setopt($ch, CURLOPT_URL, $url);
        //get Data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

       $headers = [
            'qr-client: android',
            'qr-uuid: '.$uid,
            'qr-language: 3',
            'qr-timezone: Asia/Jakarta',
            'qr-token: '.$token,
            'qr-version: 1.1.6',
            'qr-sex: 1',
            'qr-model: POCOPHONE F1',
            'qr-r: 0',
            'share-stamp: ',
            'share-text: ',
            'Content-Type: application/x-www-form-urlencoded',
            'Content-Length: 61',
            'Host: api.igonovel.com',
            'Connection: Keep-Alive',
            'Accept-Encoding: gzip',
            'User-Agent: okhttp/4.9.1'
        ];
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $timestamp); 
        $response_json = curl_exec($ch);
        curl_close($ch);
        return $response_json;
    }
    
    $cek = get($urel);
    $data = json_decode($cek, TRUE);


    if($data['status'] == 1){
        
        echo "Nama Akun: ".$data['data']['nickname']."\n";
    }
    else{
        echo "Status: ".$data['msg']."\n";
    }
    ?>
