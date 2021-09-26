<?php 
    include 'config.php';
    $t = "\e[97m";
    //warna
    $merah = "\e[91m";
    $kuning = "\e[33m";
    $hijau = "\e[32m";
    $bold = "\e[1m";
    $normal = "\e[0m";
    $biru = "\e[34m";
    

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
    $timestamp = readline($bold.$kuning."Masukkan Request Body 1 : ".$normal.$t);
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

    function bukachest($url, $rebody){
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, $rebody); 
        $response_json = curl_exec($ch);
        curl_close($ch);
        return $response_json;
    }

    function ccs($url){
        global $uid, $token, $timestamp;
        $ch = curl_init();
        //set URL
        curl_setopt($ch, CURLOPT_URL, $url.$timestamp);
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
            //'Content-Type: application/x-www-form-urlencoded',
            //'Content-Length: 61',
            'Host: api.igonovel.com',
            'Connection: Keep-Alive',
            'Accept-Encoding: gzip',
            'User-Agent: okhttp/4.9.1'
        ];
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response_json = curl_exec($ch);
        curl_close($ch);
        return $response_json;
    }

    function countchest($url){
        global $uid, $token, $timestamp;
        $ch = curl_init();
        //set URL
        curl_setopt($ch, CURLOPT_URL, $url.$timestamp);
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
            //'Content-Length: 61',
            'Host: api.igonovel.com',
            'Connection: Keep-Alive',
            'Accept-Encoding: gzip',
            'User-Agent: okhttp/4.9.1'
        ];
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response_json = curl_exec($ch);
        curl_close($ch);
        return $response_json;
    }

    function replaceOut($str)
    {
        $numNewLines = substr_count($str, "\n");
        echo chr(27) . "[0G"; // Set cursor to first column
        echo $str;
    }
    

    //Requset
    $profil = 'https://api.igonovel.com/v1/me/info';
    $chest = 'https://api.igonovel.com/v112/user/get_mess_chest_num';
    $bchest = 'https://api.igonovel.com/v113/user/get_chest_rewards';
    //count down ambil
    $wak = 'https://api.igonovel.com:443/v112/user/get_chest_info?';
    //ambil
    $cc= 'https://api.igonovel.com/v112/user/receive_chest?';

    //ke server
    $prof = get($profil);
    $getchest = cekchest($chest);
    
    $wakk = countchest($wak);
    //
    $pr = json_decode($prof, TRUE);
    $chstot =  json_decode($getchest, TRUE);
    $cd = json_decode($wakk, TRUE);
    


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
            "3. Force Claim Chest \n".
            "4. Keluar Dari Bot \n";
            echo "---------------------------------------------\n";
            $pilihan = readline($hijau.'Ketik Nomor Menu Yang Akan Dijalankan : '.$t);
            echo "---------------------------------------------\n";
            if($pilihan == 1){
                {
                    if($chstot['status'] == 1){
                        $bykces = $chstot['data']['chest_num'];
                        $rebod = '';
                        //cek jumlah chest dan siapkan Execute;
                        if($bykces != 0){
                            $totalces = $bykces;
                            $rebod = readline($bold.$kuning."Masukkan Request Body 2 : ".$normal.$t."\n");
                            $bukces = bukachest($bchest, $rebod);
                            $openchest = json_decode($bukces, TRUE);
                            echo "Membuka Chest Dalam : ";
                            while($totalces != 0){
                                for($waktu = 5; $waktu > 0; $waktu--){
                                    echo $waktu;
                                    sleep(1);
                                    $pjg = strlen($waktu);
                                    for ($pjg; $pjg > 0; $pjg--){
                                        echo chr(8);
                                    }
                                }
                                if($openchest['status'] != 1){
                                    echo $merah."Tidak Ada Chest Yang Tersedia \n".$t;
                                    exit();
                                }
                                else{
                                    echo " + ".$openchest['data']['num']."\n";
                                    sleep(10);
                                    $ceklagi = cekchest($chest);
                                    $chstot1 =  json_decode($ceklagi, TRUE);
                                    $totalces = $chstot1['data']['chest_num'];
                                }
                            }
                            
                        }
                        else{
                            echo $merah."Tidak Ada Lagi Chest Yang Bisa Dibuka \n".$t;
                            exit(); 
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
                if($pr['status'] != 1){
                    echo $bold.$merah."Gagal Claim Chest\n".$normal.$t;
                    echo "Status : ".$pr['msg'];
                    exit();
                }
                else{
                    echo $biru."[*] Memeriksa Ketersedian Chest \n";
                    echo "Total Chest Terklaim : ".$hijau. $cd['data']['total'].$t."\n";
                    echo "---------------------------------------------\n";
                    $cdstat = $cd['status'];
                    while($cdstat == 1){
                        $cdnew = countchest($wak);
                        $newcd = json_decode($cdnew, TRUE);
                        $inicd = $newcd['data']['count_down'];
                        $pglulg = 10;
                        $cekwaktu = 0;
                        $sisawaktu = $inicd;
                        $sisa = $newcd['data']['total'];
                        echo $kuning.$bold."[!] Jika Waktu Tunggu Lebih Awal Dari 500 Detik, Nonaktifkan Saja Botnya. Karena Request Body 1 Akan Expire (Jadi Gagal Claim). Silahkan Gunakan Force Claim\n";
                        echo $merah."[!] Jika Ada Penambahan Angka 0 (Terlihat Seperti Di blok) Pada Perubahan CountDown, biarkan saja karena Itu Bug, Angka yang benar berada disebelah kiri dari 0 tadi\n".$t;
                        echo $normal."---------------------------------------------\n\n";
                        echo $kuning."Memeriksa Chest  \n".$t;
                        sleep(5);
                        echo $kuning."Mulai Claim Dalam: \n".$t;
                        while($newcd['status'] == 1){
                            $waktu = $pglulg;
                            for($sisawaktu; $sisawaktu > 0; $sisawaktu--){
                                replaceOut($sisawaktu);
                                $modwaktu = $sisawaktu % $pglulg;
                                if($modwaktu == 0){
                                    $cdnew1 = countchest($wak);
                                    $newcd1 = json_decode($cdnew1, TRUE);
                                    if($newcd1['status'] != 1){
                                        echo $bold.$merah."Gagal Claim Chest\n".$normal.$t;
                                        echo "Silahkan Ganti Request Body 1\n";
                                        echo "Status : ".$newcd1['msg']."\n";
                                        exit();
                                    }
                                }
                                sleep(1);
                            }                            

                            /*
                            while($cekwaktu < $inicd){
                                replaceOut($sisawaktu);
                                sleep($waktu);
                                $cdnew1 = countchest($wak);
                                $newcd1 = json_decode($cdnew1, TRUE);
                                $sisawaktu -= $waktu;
                                $cekwaktu += $waktu;
                                if($newcd1['status'] != 1){
                                    echo $bold.$merah."Gagal Claim Chest\n".$normal.$t;
                                    echo "Silahkan Ganti Request Body 1\n";
                                    echo "Status : ".$newcd1['msg']."\n";
                                    exit();
                                }
                            }
                            */
                            $ccss = ccs($cc);
                            $claim = json_decode($ccss, TRUE);
                            if($claim['status'] != 1){
                                echo $bold.$merah."Gagal Claim Chest\n".$normal.$t;
                                echo "Status : ".$claim['msg'];
                                exit();
                            }
                            else{
                                echo $hijau."\nBerhasil Claim Chest\n".$t;
                                echo $kuning."Mulai Claim Dalam (CountDown update setiap 10 Detik) : \n".$t;
                            }
                            sleep(10);
                            $cdnew2 = countchest($wak);
                            $newcd2 = json_decode($cdnew2, TRUE);
                            $cdstat = $newcd2['status'];
                            $cekwaktu = 0;
                            $sisawaktu = $newcd2['data']['count_down'];
                            
                        }
                    }
                }
            }
            if($pilihan == 3){
                echo "Force Claim Chest \n";
                $ccss = ccs($cc);
                $claim = json_decode($ccss, TRUE);
                if($claim['status'] == 1){
                    echo "Berhasil Claim Chest \n";
                    exit();
                }else{
                    echo "Error : ".$merah.$claim['msg'].$t;
                    exit();
                }
            }
            if($pilihan == 4){
                echo $bold.$merah."Keluar Dari Bot \n".$normal.$t;
                exit();
            }
        }


        
    }
    else{

        echo "---------------------------------------------\n";
        echo "Status Login :".$merah." Gagal Login"."\n".$t;
        echo "---------------------------------------------\n";
        exit();
    }
    ?>
