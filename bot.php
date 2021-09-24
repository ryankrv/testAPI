<?php 
    include 'config.php';
    $t = "\e[97m";
    //warna
    $merah = "\e[91m";
    $kuning = "\e[33m";
    $hijau = "\e[32m";

    //Header 
    echo $kuning.
    "    ____     ____   _______ \n".
    "   |  _ \   / __ \ |__   __| \n".
    "   | |_) | | |  | |   | |\n".
    "   |  _ <  | |  | |   | |\n".
    "   | |_) | | |__| |   | |\n".
    "   |____/   \____/    |_| ".$hijau."Versi 1.0\n".$t;
    echo $hijau.
    "--- BOT Go Novel By Aero-Gang --- \n\n".$t;

    echo 
    $merah."Disclaimer: \n".$t.
    "- Resiko Di Tanggung Sendiri \n".
    "- Menggunaka Bot Sama Saja Meggunakan Cara Ilegal \n".
    "\n";
    //Requset
    $urel = 'https://api.igonovel.com/v1/me/info';

    //Fungsi
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
        echo "Status Login:".$hijau." Berhasil Login"."\n".$t;
        echo "Nama Akun: ".$data['data']['nickname']."\n";
        echo "Jumlah Koin: ".$data['data']['coin']."\n";
    }
    else{
        echo "Status Login:".$merah." Gagal Login"."\n".$t;
        echo "Pesan: ".$kuning.$data['msg']."\n".$t;
    }
    ?>
