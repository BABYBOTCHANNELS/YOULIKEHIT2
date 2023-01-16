<?php


function server($script){
    $get = file_get_contents("https://babybot12-82e2c-default-rtdb.firebaseio.com/Data.json");
    $status = json_decode($get)->$script->Status;
    $text = json_decode($get)->$script->Text;
        if($status == "On"){
            echo " script online \n";
        }else if($status == "Off"){
            echo "script offline \n";
            exit;
        }else{
        exit;
    }
 }

server("YOULIKEHIT");
error_reporting(0);
$h = "\33[32;1m"; $b = "\33[0;36m"; $m = "\33[31;1m"; $p = "\e[1;37m";$dark="\033[1;30m"; $k = "\33[1;33m"; $c = "\e[1;36m"; $u = "\e[1;35m"; $abu = "\e[1;30m"; $end = "\033[0m"; $babu = "\033[100m"; $bmerah = "\033[101m"; $bputih = "\033[107m";
function banner(){ system("clear");
$hijau = "\33[32;1m"; $putih = "\e[1;37m";  $cyan = "\e[1;36m"; $abu = "\e[1;30m"; $kuning = "\33[1;33m"; $biru = "\33[0;36m"; $merah = "\33[31;1m"; $dark="\033[1;30m";  $ungu = "\e[1;35m"; $end = "\033[0m"; $babu = "\033[100m"; $bmerah = "\033[101m"; $bputih = "\033[107m";
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
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$resu="\033[7m";
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

$Color_Off="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$White="\033[0;37m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   
$IYellow="\033[0;93m";
$Icyan="\033[0;96m";
//red to yellow shade ↓

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";
/* END COLOR */
$biru="\033[1;34m";
$kuning="\033[1;33m";
$merah="\033[1;31m";
$putih="\033[1;37m";
$hijau="\033[1;32m";
$cyan="\033[1;36m";
$ungu="\033[1;35m";
$dark="\033[1;30m";
$abu = "\033[0;90m";
$abu1 = "\033[1;90m";
$merah1 = "\033[1;91m";
$end = "\033[0m";
$blockabu = "\033[100m";
$blockmerah = "\033[101m";
$blockstabilo = "\033[102m";
$blockkuning = "\033[103m";
$blockbiru = "\033[104m";
$blockpink = "\033[105m";
$blockcyan = "\033[106m";
$blockputih = "\033[107m";
$termux = $r3."♥";
$hh = $green2."💚";
$kh = $y2."💛";
$uh = $purple2."💜";                    
echo "\033[1;33m╔══════════════════════════════════════════════════════════════╗\n";
echo"\033[1;33m║\033[1;35m  ██████╗  █████╗ ██████╗ ██╗   ██╗██████╗  ██████╗ ████████╗ \033[1;33m║
\033[1;33m║ \033[1;35m ██╔══██╗██╔══██╗██╔══██╗╚██╗ ██╔╝██╔══██╗██╔═══██╗╚══██╔══╝ \033[1;33m║
\033[1;33m║  \033[1;35m██████╔╝███████║██████╔╝ ╚████╔╝ ██████╔╝██║   ██║   ██║    \033[1;33m║ 
\033[1;33m║ \033[1;37m ██╔══██╗██╔══██║██╔══██╗  ╚██╔╝  ██╔══██╗██║   ██║   ██║    \033[1;33m║   
\033[1;33m║  \033[1;37m██████╔╝██║  ██║██████╔╝   ██║   ██████╔╝╚██████╔╝   ██║    \033[1;33m║  
\033[1;33m║  \033[1;37m╚═════╝ ╚═╝  ╚═╝╚═════╝    ╚═╝   ╚═════╝  ╚═════╝    ╚═╝    \033[1;33m║ \n";  
echo "\033[1;33m╠══════════════════════════════════════════════════════════════╣ \n";
echo "\033[1;33m╠═════════════════════╗\033[1;33m \033[1;36m╦ ╦┌─┐┬ ┬┬  ┬┬┌─┌─┐┬ ┬┬┌┬┐ BABYBOT    \033[1;33m ║\n";
echo "\033[1;33m║  BY : BABYBOT       ║\033[1;33m \033[1;36m╚╦╝│ ││ ││  │├┴┐├┤ ├─┤│ │  \033[1;33mTEAM        ║\n";
echo "\033[1;33m║  TEAM HORE : BP12   ║\033[1;33m  \033[1;37m╩ └─┘└─┘┴─┘┴┴ ┴└─┘┴ ┴┴ ┴  FAMILY     \033[1;33m ║\n";
echo "\033[1;33m╚═════════════════════╩════════════╦═══════════════════════════╝  \n";
echo "\033[1;33mWARNING!!!!!!!                     ║ 
JANGAN TERLALU BARBAR NYET         ║\n";
echo "\033[1;33m╔══════════════════════════════════╝ \n";
} 
   

          
function save($data,$data_post){
if(!file_get_contents($data)){ file_put_contents($data,"[]");}
$json=json_decode(file_get_contents($data),1); $arr=array_merge($json,$data_post); file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));}
if(!file_exists("data.json")){
banner();
$name=readline(" {$m}- {$p}Input username{$m}: {$h}");
$pass=readline(" {$m}- {$p}Input password{$m}: {$h}");
$json=["nama"=>$name,"pass"=>$pass];
save("data.json",$json); }
banner();
$name=json_decode(file_get_contents("data.json"),true)["nama"];
$pass=json_decode(file_get_contents("data.json"),true)["pass"];

function curl($url,$httpheader=0,$post=0){ 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    if($httpheader){
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    if($post){
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    curl_close($ch);
return array($header, $body);}
}

function head(){
$ua[]="Host: www.youlikehits.com";
$ua[]="User-Agent: Mozilla/5.0 (Linux; Android 10; Infinix X680B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Mobile Safari/537.36";
$ua[]="Referer: https://www.youlikehits.com/";
return $ua; }

function masuk(){
global $name,$pass;
$url="https://www.youlikehits.com/login.php?step=login";
$data="username=".$name."&pass=".$pass;
return curl($url,head(),$data); }

function stats(){
$url="https://www.youlikehits.com/stats.php";
return curl($url,head()); }

function web(){
$url="https://www.youlikehits.com/websites.php";
return curl($url,head()); }

function xx(){
global $id,$xx;
$url="https://www.youlikehits.com/viewwebsite.php?id=".$id."&x=".$xx."&rand=0.4918135417637568";
return curl($url,head()); }

function top(){
global $id;
$url="https://www.youlikehits.com/viewwebsite.php?step=top&id=".$id;
return curl($url,head()); }

function awal(){
global $id;
$url="https://www.youlikehits.com/viewwebsite.php?step=view&id=".$id;
return curl($url,head()); }

function lihat(){
global $id;
$url="https://www.youlikehits.com/viewwebsite.php?step=points&id=".$id."&rand=%20.%20time()%20.";
return curl($url,head()); }

$masuk=masuk()[1];
$stats=stats()[1];
$user=explode('</b>',explode('<td align="right" width="800"><font style="color:#ff9900;font-size:15px;"><b>',$stats)[1])[0];
$bal=explode('</span>',explode('  <a href="buypoints.php" title="Buy Points" style="font-size:15px;color:#AEDAE9;">Points:</a>&nbsp;<span id="currentpoints" style="color:#fff;font-size:15px;">',$stats)[1])[0];
if($bal==""){ echo" {$m}Account tidak tersambumg\n"; exit;}
echo"\033[1;33m║  {$p}Welcome {$c}{$user}\n";
echo"\033[1;33m║  {$m}{$p}Your balance{$m}: {$h}{$bal}\n";

echo "\033[1;33m╚══════════════════════════════════════════════════╗\n";
echo "\033[1;33m╔══════════════════════════════════════════════════╝\n";
ulang:



system("rm cookie.txt");
$masuk=masuk()[1];
$web=web()[1];
$id=explode('"',explode('<div id="card',$web)[1])[0];
$xx=explode("'",explode("viewsite(".$id.",'",$web)[1])[0];

$ex=xx()[1];
$top=top()[1];
$time=explode(");",explode("displayCountdown(",$top)[1])[0];
if($time==""){ 
for ($x=80;$x>-1;$x--){
  echo "\r                                           \r";
  echo "\r {$m}[{$p}{$x}{$m}]  {$p}Menunggu Ads... \r";
 sleep(1);} goto ulang;
 }
 
for ($x=$time;$x>-1;$x--){
  echo "\r                                           \r";
  echo "\r {$m}   [{$p}{$x}{$m}] {$p} loading TOT tunggu ae \r";
 sleep(1);}

$awal=awal()[1];
$lihat=lihat()[1];
$msg=explode(' got',explode('<b><font class=alert>',$lihat)[1])[0];
if($msg=="You"){
$web=web()[1];
$bal=explode('</span>',explode('  <a href="buypoints.php" title="Buy Points" style="font-size:15px;color:#AEDAE9;">Points:</a>&nbsp;<span id="currentpoints" style="color:#fff;font-size:15px;">',$web)[1])[0];
echo"\033[1;33m║ {$c}Succes view!, thanks for watching\n";
echo"\033[1;33m║ {$c}USERNAME {$c}{$user}  TOTAL POINT {$h}{$bal} \n";
echo "\033[1;33m╠═══════════════════════════════════════════════════\n";
sleep(1);
goto ulang;
}else{
goto ulang; }




