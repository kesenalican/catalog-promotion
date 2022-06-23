<?php

$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='palucico_banyo';



$connect= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$connect->set_charset("utf8");

if(mysqli_connect_errno($connect)){
    echo "Bağlantı Hatası: ".mysqli_connect_error();
}
// else{
//     echo "bağlantı başarılı";
// }

?>
