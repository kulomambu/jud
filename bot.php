<?php
include 'cfg.php';
function randomName() {
    $names = array(
        'over',
        'under',
        // and so on

    );
    return $names[rand ( 0 , count($names) -1)];
}

//$opi = randomName();
//echo $opi."\n";
//exit;
system("clear");
system('pkg update && pkg upgrade -y');
system("clear");
//system("ifconfig");

$ping1 = url("https://ipsaya.com/");
$a = explode('value="',$ping1);
$ip = explode('"',$a[1]);
//echo $ip[0];
$b = explode('ISP :</b><br>',$ping1);
$isp = explode('<',$b[1]);
$c = explode('Kota :</b><br>',$ping1);
$kota = explode('<',$c[1]);
$d = explode('title="',$ping1);
$ng = explode('"',$d[1]);
//echo $isp[0];
//sleep(3);
//echo " \033[1;92mGet Your Ip Address \033[1;91mhttps://ipsaya.com/\n";
//echo " \033[1;91m◼ \033[1;37mInput Your Ip Address Here : \033[1;91m";
//$ip1 = trim(fgets(STDIN));

//if($ip1==""){
//echo " \033[1;91mACCESS DENIED...!!!\n\n";
//exit;
//}

//if ($ip1==$ip[0]){
//echo " \033[1;92mSUCCESS ... ACCESS SCRIPT...\r";
///sleep(5);
//exitsystem("clear");
//}else{
//echo " \033[1;91mACCESS DENIED...!!!\n\n";
//exit;
//}

echo " \033[1;97m•Your Ip Address \033[1;91m".$ip[0]."\n";
echo " \033[1;97m•Your ISP        \033[1;92m".$isp[0]."\n";
echo " \033[1;97m•Your City       \033[1;92m".$kota[0]."\n";
echo " \033[1;97m•Your Country    \033[1;92m".$ng[0]."\n\n";
sleep(3);
echo " \033[1;91mAll your data is connected to the \033[1;92mSugiono Official \033[1;91mserver \n";
sleep(3);
//exit;
system("rm cookie.txt");
date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$H="\033[0;30m";
$AB2="\033[1;30m";
$P="\033[0;37m";
$P2="\033[1;37m";
$M="\033[0;31m";
$M2="\033[1;31m";
$HJ="\033[0;32m";
$HJ2="\033[1;32m";
$K="\033[0;33m";
$K2="\033[1;33m";
$B="\033[0;34m";
$B2="\033[1;34m";
$U="\033[0;35m";
$U2="\033[1;35m";
$BL="\033[0;36m";
$BL2="\033[1;36m";
/* END COLOR */

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$SC = $HJ2."1";

$res = url("https://controlc.com/4af51d22");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}
echo $baner = "
\033[1;31m ██████╗ ██████╗ ██╗   ██╗██╗██████╗       ██████╗  ██╗ \033[1;92m$o\033[1;91m
██╔════╝██╔═══██╗██║   ██║██║██╔══██╗      ╚════██╗███║
██║     ██║   ██║██║   ██║██║██║  ██║█████╗ █████╔╝╚██║\033[1;97m
██║     ██║   ██║╚██╗ ██╔╝██║██║  ██║╚════╝██╔═══╝  ██║
╚██████╗╚██████╔╝ ╚████╔╝ ██║██████╔╝      ███████╗ ██║
 ╚═════╝ ╚═════╝   ╚═══╝  ╚═╝╚═════╝       ╚══════╝ ╚═╝ SCRIPT V$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($pass == 'update'){
      echo $HJ2." ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo " ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo $HJ2." ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($link[0]==""){
echo " \033[1;91mCONNECTING LOST...!!!\n\n";
exit;
}
if ($pass == 'off'){

      echo $M2." ◼ SCRIPT SEDANG OFFLINE atau MAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo $HJ2." ▶ UPLOAD Password \r";
      sleep(5);
       system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";
echo $M2." ◼ \033[1;37mMASUKAN PASSWORD DI SINI : ".$M2;
$p = trim(fgets(STDIN));

echo $P2."\n Loading \033[1;31m•\033[1;32m>\r";
sleep(1);
echo $P2." Loading \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m>\r";
sleep(1);
echo $P2." Loading \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m>\r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo $HJ2." ◼ OPEN SCRIPT SUCCESS            \r";
        fclose($save);
        sleep(5);
        system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo $M2." ◼ GAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "$P2   Silahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ".$M2;
$kkk = trim(fgets(STDIN));
system("clear");

$payout="2.00000";
$winning_chance="47.50";

include"cfg.php";
date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m"; 

echo $green2."";
system("toilet --width 70 -f pagga -F border  'EXPRESScryptoDICE'");
echo $red2.$baner1 = " @@@@@@ @@@  @@@  @@@@@@@  @@@  @@@@@@  @@@  @@@  @@@@@@$green2 SERVER ON
\033[1;31m!@@     @@!  @@@ !@@       @@! @@!  @@@ @@!@!@@@ @@!  @@@
 !@@!!  @!@  !@! !@! @!@!@ !!@ @!@  !@! @!@@!!@! @!@  !@!
    !:! !!:  !!! :!!   !!: !!: !!:  !!! !!:  !!! !!:  !!!
 ::.: :   :.:: :   :: :: :  :    : :. :  ::    :   : :. :
\033[1;37m SCRIPT VERSION\033[1;31m $SC ";
echo $putih2."                DATE ".$green2.date("d.m.Y ").$putih2."   TIME ".$green2.date("H:i:s")."\n";
echo " ===============================\033[1;31m404\033[1;32m===============================";
echo $baner2 = "
$putih2 •Creator        :$green2 Kakek Sugiono
$putih2 •Support By     :$green2 All Member
$putih2 •Group Tele     :$green2 @SugionoShatoshi
$putih2 •Channel YT     :$green2 Sugiono Official
$putih2 •Donation Doge  :$red2 DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
$putih2 =================================================================
$red2 •SCRIPT NOT FOR SALE •SCRIPT GRATIS GUNAKAN DENGAN BIJAK YA CUK
 •SEGALA RESIKO DI TANGGUNG CUCUK YA •KAKEK MAU KABUR DULU\n";
echo $blue2." •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";

echo $putih2." Silahkan Pilih Mode\n";
echo "\033[1;37m          [\033[1;31m1\033[1;37m] MODE \033[1;31m1 Prediksi \n";
echo "\033[1;37m          [\033[1;31m2\033[1;37m] MODE\033[1;32m Random \n";
//echo "\033[1;37m          [\033[1;31m3\033[1;37m] MODE\033[1;32m 2up\033[1;31m 2low \033[1;92mVERSI LAWAS\n";
echo "\033[1;37m          Input Pilihan MODE : ".$red2;
$mtd = trim(fgets(STDIN));
echo "\n";

if ($mtd=="1"){

echo $yellow2."[\033[100m \033[1;92mBTC ADA DGB DOGE KMD LTC TRX \033[0m\033[1;93m] \033[3;91mUppercase\033[0m\n";
echo $putih2." Masukan Curency     : ".$red2;
$coin = trim(fgets(STDIN));
echo $putih2." Masukan Bet         : ".$red2;
$be = trim(fgets(STDIN));
echo $putih2." Target Profit       : ".$red2;
$opit = trim(fgets(STDIN));
echo " \033[3;91mlowercase\033[0m\n";
echo " \033[1;91m[\033[1;92mover\033[1;91m] \033[1;95mor \033[1;91m[\033[1;92munder\033[1;91m]   \033[1;97m: ".$red2;
$opi = trim(fgets(STDIN));
echo "\n";
echo " \033[1;90mex: \033[1;92m1 2 3 4 5 6 7 8 9 10\n";
echo " \033[1;97mChose Your PayOut   \033[1;97m: ".$green2;
$po = trim(fgets(STDIN));
//echo "\n";

echo " \033[1;97mSet Stop Lose       : ".$green2;
$sl = trim(fgets(STDIN));
//echo $po."\n";
echo "\n\n";
$kali = array("1","2","4","8","16","32","64","128","256","512",
"1024","2048","4096","8192","16384","32768","65536","131072","262144","524288",
"1048576","2097152","4194304","8388608","16777216","33554432","67108864","134217728","268435465","536870912","536870912*2");
$GG = current($kali);
//$be = "0.00000001";

while("true"){
$bet1 = number_format($be*$GG,8);
if ($opi=="over"){
$op = "🔺";}
if ($opi=="under"){
$op = "🔻";
}
$ua = array(
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"referer: https://expresscrypto.io/games/royaldice",
"cookie: ExpressCrypto=".$ExpressCrypto);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://expresscrypto.io/internal-api/games/royaldice/roll");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "bet=".$bet1."&multiplier=".$po."&hilo=".$opi."&clientseed=".$clientseed."&private=1&coin=".$coin;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$bet = $json->Bet;
$wl = $json->Winlose;
$clientseed = $json->CurrentClientSeed;
$bl = $json->Balance;
$rol = $json->Roll;
$pro = $json->ProfitRoll;
$mu = $json->Multiplier;
$w = $json->Win;
$L = $json->Lose;
$pr = $json->Profit;
if ($bl>$opit){
echo $green2." Profit Sudah Mencapai Target...!!!\n";
exit;
}
if ($bl==""){
echo " \033[1;91mPlease Update Your Cookie...!!! \n";
exit;
}

if($pro>"0.00000000"){
echo "\033[1;91m".$op."\033[102m \033[1;94mBet ".$bet." \033[0m "."\033[102m \033[1;94mR ".$rol." \033[0m "."\033[102m \033[1;94mProfit ".$pro." \033[0m "."\033[102m \033[1;94mBalance ".$bl." \033[0m\n";
$GG = reset($kali);
echo "\t \033[1;90mWIN \033[1;91m[\033[1;92m".$w."\033[1;91m]   \033[1;90mLose \033[1;91m[\033[1;90m".$L."\033[1;91m]   \033[1;90mProfit \033[1;91m[\033[1;92m".$pr."\033[1;91m] \033[1;92m$coin\r";
}else{
echo "\033[1;91m".$op."\033[101m \033[1;97mBet ".$bet." \033[0m "."\033[101m R ".$rol." \033[0m "."\033[101m Lose  ".$wl." \033[0m "."\033[101m Balance ".$bl." \033[0m\n";
echo "\t \033[1;90mWIN \033[1;91m[\033[1;90m".$w."\033[1;91m]   \033[1;90mLose \033[1;91m[\033[1;91m".$L."\033[1;91m]   \033[1;90mProfit \033[1;91m[".$pr."] \033[1;92m$coin\r";
$GG = next($kali);
}
if ($bet1>$d){
echo " \033[1;91mBALANCE TIDAK MENCUKUPI... Alias Bangkrut………!!!\n\n";
exit;
}
}
}


if ($mtd=="2"){

echo $yellow2."[\033[100m \033[1;92mBTC ADA DGB DOGE KMD LTC TRX \033[0m\033[1;93m] \033[3;91mUppercase\033[0m\n";
echo $putih2." Masukan Curency     : ".$red2;
$coin = trim(fgets(STDIN));
echo $putih2." Masukan Bet         : ".$red2;
$be = trim(fgets(STDIN));
echo $putih2." Target Profit       : ".$red2;
$opit = trim(fgets(STDIN));
//echo " \033[3;91mlowercase\033[0m\n";
//echo " \033[1;91m[\033[1;92mover\033[1;91m] \033[1;95mor \033[1;91m[\033[1;92munder\033[1;91m]   \033[1;97m: ".$red2;
//$opi = trim(fgets(STDIN));
echo "\n";
echo " \033[1;90mex: \033[1;92m1 2 3 4 5 6 7 8 9 10\n";
echo " \033[1;97mChose Your PayOut   \033[1;97m: ".$green2;
$po = trim(fgets(STDIN));
//echo "\n";

echo " \033[1;97mSet Stop Lose       : ".$green2;
$sl = trim(fgets(STDIN));
//echo $po."\n";
echo "\n\n";
$kali = array("1","2","4","8","16","32","64","128","256","512",
"1024","2048","4096","8192","16384","32768","65536","131072","262144","524288",
"1048576","2097152","4194304","8388608","16777216","33554432","67108864","134217728","268435465","536870912","536870912*2");
$GG = current($kali);
//$be = "0.00000001";

while("true"){
$bet1 = number_format($be*$GG,8);
$opi = randomName();
//$opi = ran(over,under);
if ($opi=="over"){
$op = "🔺";}
if ($opi=="under"){
$op = "🔻";
}
$ua = array(
"accept: application/json, text/javascript, */*; q=0.01",
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"referer: https://expresscrypto.io/games/royaldice",
"cookie: ExpressCrypto=".$ExpressCrypto);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://expresscrypto.io/internal-api/games/royaldice/roll");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "bet=".$bet1."&multiplier=".$po."&hilo=".$opi."&clientseed=".$clientseed."&private=1&coin=".$coin;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$bet = $json->Bet;
$wl = $json->Winlose;
$clientseed = $json->CurrentClientSeed;
$bl = $json->Balance;
$rol = $json->Roll;
$pro = $json->ProfitRoll;
$mu = $json->Multiplier;
$w = $json->Win;
$L = $json->Lose;
$pr = $json->Profit;
if ($bl>$opit){
echo $green2." Profit Sudah Mencapai Target...!!!\n";
exit;
}
if ($bl==""){
echo " \033[1;91mPlease Update Your Cookie...!!! \n";
exit;
}

if($pro>"0.00000000"){
echo "\033[1;91m".$op."\033[102m \033[1;94mBet ".$bet." \033[0m "."\033[102m \033[1;94mR ".$rol." \033[0m "."\033[102m \033[1;94mProfit ".$pro." \033[0m "."\033[102m \033[1;94mBalance ".$bl." \033[0m\n";
$GG = reset($kali);
echo "\t \033[1;90mWIN \033[1;91m[\033[1;92m".$w."\033[1;91m]   \033[1;90mLose \033[1;91m[\033[1;90m".$L."\033[1;91m]   \033[1;90mProfit \033[1;91m[\033[1;92m".$pr."\033[1;91m] \033[1;92m$coin\r";
}else{
echo "\033[1;91m".$op."\033[101m \033[1;97mBet ".$bet." \033[0m "."\033[101m R ".$rol." \033[0m "."\033[101m Lose  ".$wl." \033[0m "."\033[101m Balance ".$bl." \033[0m\n";
echo "\t \033[1;90mWIN \033[1;91m[\033[1;90m".$w."\033[1;91m]   \033[1;90mLose \033[1;91m[\033[1;91m".$L."\033[1;91m]   \033[1;90mProfit \033[1;91m[".$pr."] \033[1;92m$coin\r";
$GG = next($kali);
}
if ($bet1>$d){
echo " \033[1;91mBALANCE TIDAK MENCUKUPI... Alias Bangkrut………!!!\n\n";
exit;
}
}
}
