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
    date_default_timezone_set('Asia/Jakarta');

    function generateRandomString($length = 16) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


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

    $id = generateRandomString();
    echo "---------------------------------------------\n";
    echo $kuning.$bold."Sebelum Menggunakan Bot, Silahkan Generate Key-nya\n".$normal.$t;
    echo $hijau."Serial ID    : ".$t.$id."\n";
    echo $hijau."Generate Key : ".$t."http://google.com \n";
    echo "---------------------------------------------\n";
    $cekserial = readline($biru."Masukan Serial Key : \n".$t);
    if($cekserial != md5($id)){
        echo $merah."Serial Key Salah \n".$t;
        exit();
    }
    echo "---------------------------------------------\n";
    echo $hijau."Serial Key Terverifikasi".$t;

    //$timestamp = "timeStamp=1632546383&apiSign=4FC7D956D8E33D81DA3BDB285C370F57";
    echo "---------------------------------------------\n";
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
        echo $str . " Detik     ";
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
            "1. Auto Buka Chest \n".
            "2. Auto Claim Chest \n".
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
                            
                            while($totalces != 0){
                         
                                echo "Membuka Chest Dalam : ";
                                sleep(5);
                                $bukces = bukachest($bchest, $rebod);
                                $openchest = json_decode($bukces, TRUE);
                                for($waktu = 5; $waktu > 0; $waktu--){
                                    echo $waktu;
                                    sleep(1);
                                    $pjg = strlen($waktu);
                                    for ($pjg; $pjg > 0; $pjg--){
                                        echo chr(8);
                                    }
                                }
                                if($openchest['status'] != 1){
                                    echo $merah."Gagal Membuka Chest \n".$t;
                                    echo "Status : ".$openchest['msg']."\n";
                                    exit();
                                }
                                else{
                                    echo " + ".$openchest['data']['num']."\n";
                                    sleep(5);
                                    $ceklagi = cekchest($chest);
                                    $chstot1 =  json_decode($ceklagi, TRUE);
                                    if($chstot1['status'] != 1){
                                        echo $merah."Gagal Membuka Chest \n".$t;
                                        echo "Status : ".$chstot1['msg']."\n";
                                        exit();
                                    }
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
                    echo "Total Chest Terklaim Hari Ini : ".$hijau.($cd['data']['total']-1).$t."\n";
                    echo "---------------------------------------------\n";
                    $cdstat = $cd['status'];
                    sleep(5);
                    while($cdstat == 1){
                        $cdnew = countchest($wak);
                        $newcd = json_decode($cdnew, TRUE);
                        $inicd = $newcd['data']['count_down'];
                        $pglulg = 11;
                        $cekwaktu = 0;
                        $sisawaktu = $inicd;
                        $sisa = $newcd['data']['total'];
                        echo $kuning."[!] Jika Waktu Tunggu Awal Lebh Dari 500 Detik, Nonaktifkan Saja Botnya. Karena Request Body 1 Akan Expire (Jadi Gagal Claim)\n";
                        echo $biru."[!] Claim Akan Berhenti jika total detik semua claim lebih dari 500  (Limit Request Dari Server Go Novel). Jadi Cari Request Body Baru\n".$t;
                        echo $normal."---------------------------------------------\n\n";

                        echo $bold.$kuning."Memeriksa Chest  \n".$normal.$t;
                        sleep(5);
                        echo $biru.'['.date('H:i:s').' WIB]'.$hijau.'['.$sisawaktu.' Detik]'.$t;
                        echo "Mulai Claim Dalam: \n".$t;
                        while($newcd['status'] == 1){
                            $waktu = $pglulg;
                            for($sisawaktu; $sisawaktu > 0; $sisawaktu--){
                                replaceOut($sisawaktu);
                                $modwaktu = $sisawaktu % $pglulg;
                                if($modwaktu == 0){
                                    $cdnew1 = countchest($wak);
                                    $newcd1 = json_decode($cdnew1, TRUE);
                                    if($newcd1['status'] != 1){
                                        echo $bold.$merah."\nGagal Claim Chest\n".$normal.$t;
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
                            echo $bold.$hijau."\n\nMencoba Meng-Claim Chest : \n".$normal.$t;
                            sleep(5);
                            $ccss = ccs($cc);
                            $claim = json_decode($ccss, TRUE);
                            if($claim['status'] != 1){
                                echo $bold.$merah."Gagal Claim Chest\n".$normal.$t;
                                echo "Status : ".$claim['msg'];
                                exit();
                            }
                            else{
                                echo $hijau."Berhasil Claim Chest\n".$t;
                                echo $kuning."Mulai Claim Dalam : \n\n".$t;
                            }
                            sleep(10);
                            $cdnew2 = countchest($wak);
                            $newcd2 = json_decode($cdnew2, TRUE);
                            if($newcd2['status'] != 1){
                                echo $bold.$merah."\nGagal Claim Chest\n".$normal.$t;
                                echo "Status : ".$newcd2['msg'];
                                exit();
                            }
                            $cdstat = $newcd2['status'];
                            $cekwaktu = 0;
                            $sisawaktu = $newcd2['data']['count_down'];
                            
                        }
                    }
                }
            }
            if($pilihan == 3){
                echo $hijau.$bold."Metode Force Claim Chest \n".$t.$normal;
                /*
                echo $kuning.$bold."[!] Metode Ini Berguna Agak Kita Tidak Perlu Membaca Di Go Novel\n".$t.$normal;
                echo $kuning.$bold."[!] Kapan Menggunakan Metode Ini?\n".$t.$normal;
                echo "[1] Saat Count Down Claim lebih Dari 500 Detik\n";
                echo "[2] Sesuaikan Jarak Waktu Force Claim Dengan Waktu Cek (Misal Saat Cek Claim ke-2 ternyata Muncul 800 Detik( 13 Menitan)) Jadi Kita Barus Bisa Sukses Force Claim 13 Menit Kedepan. Jangan Gunakan Auto Claim Karena Tidak Langsung Claim (Harus Nunggu 13 Menit Dlu, Keburu Expire Requestnya). \n";
                
                */ 
                echo $normal."---------------------------------------------\n\n";
                $ccss = ccs($cc);
                $claim = json_decode($ccss, TRUE);
                if($claim['status'] == 1){
                    echo $hijau."Berhasil Claim Chest \n".$t;
                    exit();
                }else{
                    echo $bold.$merah."Gagal Claim Chest \n".$t;
                    echo "Alasan : ".$normal.$claim['msg'].$t."\n";
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
