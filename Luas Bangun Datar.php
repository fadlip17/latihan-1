<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<title>Program Luas Bangun Datar</title>
    <link rel='stylesheet' type='text/css' href='style.css'>



<body>
  <form method= 'POST' action='Luas Bangun Datar.php' class='form'>
      <h1>Luas Bangun Datar</h1>
  <input type='text' name='a' placeholder='Masukan nilai alas atau jari-jari (cm) ' id='input'> 
  <input type='text' name='b' placeholder='Masukan nilai tinggi atau jari-jari (cm) ' id='input'>
  <select name='opsi' class='select'> 
        <option name='opsi' value=''> Pilih operasi </option>
        <option name='opsi' value='sgt'>Luas Segitiga</option>
        <option name='opsi' value='jjg'>Luas Jajar Genjang</option>
        <option name='opsi' value='lkg'>Luas Lingkaran</option>
    
    </select>

   <input type='submit' name='proses' value='Hitung' id='input'>    

   <div class='hasil'> 
     <?php include "proses.php"; ?>
    </div>
</body>
</html>