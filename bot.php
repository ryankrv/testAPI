<?php 
    include 'config.php';
    $t = "\e[97m";
    //warna
    $merah = "\e[91m";
    $kuning = "\e[33m";
    $hijau = "\e[32m";
    $bold = "\e[1m";
    $normal = "\e[0m";
    

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
    
    $timestamp = readline("Masukkan timeStam & apiSign : ");
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

    function cekchest($url){
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
    //Requset
    $profil = 'https://api.igonovel.com/v1/me/info';
    $chest = 'https://api.igonovel.com/v112/user/get_mess_chest_num';
    //ke server
    $prof = get($profil);
    $getchest = cekchest($chest);

    //
    $pr = json_decode($prof, TRUE);
    $chstot =  json_decode($getchest, TRUE);


    if($pr['status'] == 1){
        echo "---------------------------------------------\n";
        echo "Status Login :".$hijau." Berhasil Login"."\n".$t;
        echo "Nama Akun    : ".$pr['data']['nickname']."\n";
        echo "Jumlah Koin  : ".$pr['data']['coin']."\n";
        echo "---------------------------------------------\n";
        echo $bold.$hijau."Cek Chest\n".$normal.$t;
        echo "Total Chest : ".$chstot['data']['chest_num']."\n";
        
    }
    else{
        echo "---------------------------------------------\n";
        echo "Status Login :".$merah." Gagal Login"."\n".$t;
        echo "Pesan        : ".$kuning.$pr['msg']."\n".$t;
        echo "---------------------------------------------\n";

    }
    ?>
