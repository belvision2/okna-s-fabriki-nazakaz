<?php
$cena_pvh_dver = htmlspecialchars($_POST['cena_pvh_dver'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$cena_pvh_dver)) { }
else {
$data2 = '$cena_pvh_dver = '.$cena_pvh_dver.';' . "\n";//В виндовс не \n, а \r\n
$file2 = 'prais.php';
$array2=file( $file2 ); //файл в котором надо изменить строку
$array2[1]=$data2; //строка в которой нужно изменить значение $data
file_put_contents( $file2, $array2 );}


$cena_pvh_dver_2 = htmlspecialchars($_POST['cena_pvh_dver_2'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$cena_pvh_dver_2)) { }
else {
$data3 = '$cena_pvh_dver_2 = '.$cena_pvh_dver_2.';' . "\n";//В виндовс не \n, а \r\n
$file3 = 'prais.php';
$array3=file( $file3 ); //файл в котором надо изменить строку
$array3[2]=$data3; //строка в которой нужно изменить значение $data
file_put_contents( $file3, $array3 );}

$gluhoe = htmlspecialchars($_POST['gluhoe'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$gluhoe)) { }
else {
$data4 = '$gluhoe = '.$gluhoe.';' . "\n";//В виндовс не \n, а \r\n
$file4 = 'prais.php';
$array4=file( $file4 ); //файл в котором надо изменить строку
$array4[3]=$data4; //строка в которой нужно изменить значение $data
file_put_contents( $file4, $array4 );}


$povorotnoe_otkidnoe = htmlspecialchars($_POST['povorotnoe_otkidnoe'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$povorotnoe_otkidnoe)) { }
else {
$data5 = '$povorotnoe_otkidnoe = '.$povorotnoe_otkidnoe.';' . "\n";//В виндовс не \n, а \r\n
$file5 = 'prais.php';
$array5=file( $file5 ); //файл в котором надо изменить строку
$array5[4]=$data5; //строка в которой нужно изменить значение $data
file_put_contents( $file5, $array5 );}


$povorotnoe = htmlspecialchars($_POST['povorotnoe'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$povorotnoe)) { }
else {
$data6 = '$povorotnoe = '.$povorotnoe.';' . "\n";//В виндовс не \n, а \r\n
$file6 = 'prais.php';
$array6=file( $file6 ); //файл в котором надо изменить строку
$array6[5]=$data6; //строка в которой нужно изменить значение $data
file_put_contents( $file6, $array6 );}

$podokonnik_otliv = htmlspecialchars($_POST['podokonnik_otliv'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$podokonnik_otliv)) { }
else {
$data7 = '$podokonnik_otliv = '.$podokonnik_otliv.';' . "\n";//В виндовс не \n, а \r\n
$file7 = 'prais.php';
$array7=file( $file7 ); //файл в котором надо изменить строку
$array7[6]=$data7; //строка в которой нужно изменить значение $data
file_put_contents( $file7, $array7 );}

$montaz = htmlspecialchars($_POST['montaz'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$montaz)) { }
else {
$data8 = '$montaz = '.$montaz.';' . "\n";//В виндовс не \n, а \r\n
$file8 = 'prais.php';
$array8=file( $file8 ); //файл в котором надо изменить строку
$array8[7]=$data8; //строка в которой нужно изменить значение $data
file_put_contents( $file8, $array8 );}

$koofficient = htmlspecialchars($_POST['koofficient'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{1}$/",$koofficient)) { }
else {
$data9 = '$koofficient = '.$koofficient.';' . "\n";//В виндовс не \n, а \r\n
$file9 = 'prais.php';
$array9=file( $file9 ); //файл в котором надо изменить строку
$array9[8]=$data9; //строка в которой нужно изменить значение $data
file_put_contents( $file9, $array9 );}


$economiya = htmlspecialchars($_POST['economiya'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$economiya)) { }
else {
$data10 = '$economiya = '.$economiya.';' . "\n";//В виндовс не \n, а \r\n
$file10 = 'prais.php';
$array10=file( $file10 ); //файл в котором надо изменить строку
$array10[9]=$data10; //строка в которой нужно изменить значение $data
file_put_contents( $file10, $array10 );}

$rassrochka = htmlspecialchars($_POST['rassrochka'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{1}$/",$rassrochka)) { }
else {
$data11 = '$rassrochka = '.$rassrochka.';' . "\n";//В виндовс не \n, а \r\n
$file11 = 'prais.php';
$array11=file( $file11 ); //файл в котором надо изменить строку
$array11[10]=$data11; //строка в которой нужно изменить значение $data
file_put_contents( $file11, $array11 );}
header("Location: index.html");
?>