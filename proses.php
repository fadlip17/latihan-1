<?php
if(isset($_POST['proses'])){

$a= $_POST['a'];
$b= $_POST['b'];
$opsi = $_POST['opsi'];

    if($opsi== 'sgt'){
        $c = $a * $b/2; 
        echo"Hasil Luas Segitiga: <br> Alas = $a cm  Tinggi = $b cm <br> Luas= $c cm2";
    }
    elseif($opsi== 'jjg'){
        $c = $a * $b; 
        echo"Hasil Luas Jajar Genjang: <br> Alas = $a cm  Tinggi = $b cm <br> Luas= $c cm2";
    }
    elseif($opsi== 'lkg'){
        $c = $a * $b * 3.14 ; 
        echo"Hasil Luas Lingkaran: <br>Jari - jari = $a cm  <br> Luas= $c cm2";
    }
    
    else{
        echo"Anda belum memilih<br> operasi";
    }


}


?>