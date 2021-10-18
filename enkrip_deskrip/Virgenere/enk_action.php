<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

<?php

    include "lib.php";
    $kunci = str_replace(" ", "", $_POST['kunci']);
    $plain = str_replace(" ", "", $_POST['plain']);
    $panjang_plain = strlen($plain);
    $panjang_kunci = strlen($kunci);
    $index_x = 0;
    $index_y = 0;
    $hasil_ciper = array();
    $hasil_akhir = "";
    while ($index_x < $panjang_plain) { $x=substr($plain, $index_x, 1); $y=substr($kunci, $index_y, 1);
        $hasil_ciper[$index_x]=$tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)]; $index_x++; $index_y++; if
        ($index_y==$panjang_kunci) { $index_y=0; } } $i=0; while ($i < $index_x) { $hasil_akhir .=$hasil_ciper[$i];
        $i++; } 
?>
        
        <div class="container">
        <h1>Hasil - Enkripsi</h1>
        <hr>
        <form action="dekvigenere.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Cipherteks :</label>
            <textarea class="form-control" name="ciper" id="textarea-a"><?php echo $hasil_akhir; ?></textarea>
            <label for="basic">Masukkan Kunci :</label>
            <textarea class="form-control" name="kunci" id="textarea-a"><?php echo $kunci; ?></textarea><br>
            <input type="submit" class="btn btn-primary" value="
Decrypt" data-theme="a">
        </form>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>