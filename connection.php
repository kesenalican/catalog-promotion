<?php

// $db_host='localhost';
// $db_user='root';
// $db_pass='';
// $db_name='palucico_banyo';

$db_host='localhost';
$db_user='palucico_banyo';
$db_pass='VIr!S$B^?ZO-';
$db_name='palucico_banyo';


// define("DB_HOST", 'localhost');
// define("DB_USER", 'palucico_banyo');
// define("DB_PASS", 'VIr!S$B^?ZO-');
// define("DB_NAME", 'palucico_banyo');



$connect= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$connect->set_charset("utf8");

if(mysqli_connect_errno($connect)){
    echo "Bağlantı Hatası: ".mysqli_connect_error();
}
// else{
//     echo "bağlantı başarılı";
// }

?>
