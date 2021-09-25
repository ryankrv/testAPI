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
    "--- BOT Go Novel By Ryan Kurniadi --- \n\n".$t;

    
    echo 
    $merah.$bold."Disclaimer: \n".$normal.$t.
    "- Resiko Di Tanggung Sendiri \n".
    "- Menggunaka Bot Sama Saja Meggunakan Cara Ilegal \n".
    "\n";
    //$timestamp = "timeStamp=1632546383&apiSign=4FC7D956D8E33D81DA3BDB285C370F57";
    $timestamp = readline($bold.$kuning."Masukkan timeStam & apiSign : ".$normal.$t);
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

    function bukachest($url){
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
            'Content-Length: 68',
            'Host: api.igonovel.com',
            'Connection: Keep-Alive',
            'Accept-Encoding: gzip',
            'User-Agent: okhttp/4.9.1'
        ];
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "type=2&".$timestamp); 
        $response_json = curl_exec($ch);
        curl_close($ch);
        return $response_json;
    }

    //Requset
    $profil = 'https://api.igonovel.com/v1/me/info';
    $chest = 'https://api.igonovel.com/v112/user/get_mess_chest_num';
    $bchest = 'https://api.igonovel.com/v113/user/get_chest_rewards';
    //ke server
    $prof = get($profil);
    $getchest = cekchest($chest);
    $bukces = bukachest($bchest);
    //
    $pr = json_decode($prof, TRUE);
    $chstot =  json_decode($getchest, TRUE);
    $openchest = json_decode($bukces, TRUE);


    if($pr['status'] == 1){
        echo "---------------------------------------------\n";
        echo "Status Login :".$hijau." Berhasil Login"."\n".$t;
        echo "Nama Akun    : ".$pr['data']['nickname']."\n";
        echo "Jumlah Koin  : ".$pr['data']['coin']."\n";
        echo "Sisa Chest   : ".$chstot['data']['chest_num']."\n";
        echo "---------------------------------------------\n";

        $pilih = 1;
        while($pilih == 1){
            echo $kuning.$bold."Menu Bot".$normal.$t."\n";
            echo 
            "1. Membuka Chest \n".
            "2. Claim Chest \n".
            "3. Keluar Dari Bot \n";
            echo "---------------------------------------------\n";
            $pilihan = readline($hijau.'Ketik Nomor Menu Yang Akan Dijalankan : '.$t);
            echo "---------------------------------------------\n";
            if($pilihan == 1){
                {
                    if($chstot['status'] == 1){
                        $bykces = $chstot['data']['chest_num'];
                        while($bykces != 0){
                            echo "Membuka Chest Dalam : ";
                            for($waktu = 5; $waktu > 0; $waktu--){
                                echo $waktu;
                                sleep(1);
                                $pjg = strlen($waktu);
                                for ($pjg; $pjg > 0; $pjg--){
                                    echo chr(8);
                                }
                            }
                            if($openchest['status'] == 1){
                                echo " + ".$openchest['data']['num']."\n";
                            }
                            else{
                                echo $merah."Gagal Membuka Chest \n".$t;
                                $bykces = 0;
                            }
                        }
                    }
                    else{
                        echo "-------------------------------------------------------\n";
                        echo $merah."Gagal Melakukan Aksi"."\n".$t;
                        echo "Sesi Login Berakhir, Silahkan Ganti timeStamp baru\n";
                        echo "-------------------------------------------------------\n";
                    }
                }
            }
            if($pilihan == 2){
                echo "Nomor 2 \n";
            }
            if($pilihan == 3){
                echo $bold.$merah."Keluar Dari Bot \n".$normal.$t;
                $pilih = 2;
            }
        }


        
    }
    else{

        echo "---------------------------------------------\n";
        echo "Status Login :".$merah." Gagal Login"."\n".$t;
        echo "---------------------------------------------\n";
    }
    ?>
