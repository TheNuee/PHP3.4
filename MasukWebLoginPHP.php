<?php
$name = $_POST['name'] ;
$psw = $_POST['psw'] ;
if($name == "Udin" && $psw == "123"){
    echo "Login Berhasil";
}else{
    echo "Login Gagal";
}
?>