<?php

$kalimat = $_GET["kata"];
$key = $_GET["key"];


for ($i = 0; $i < strlen($kalimat); $i++) {
 $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
 $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
 $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
}

?>
<div class="container">
<?php
echo "<br><br><hr>" ;

echo "KALIMAT ASLI = ";
for ($i = 0; $i < strlen($kalimat); $i++) {
 echo $kalimat[$i];
}
echo "<br><br>";

echo "HASIL ENKRIPSI = ";
$hsl = '';
for ($i = 0; $i < strlen($kalimat); $i++) {
 echo $c[$i];
 $hsl = $hsl . $c[$i];
}

echo "<br><br><hr>";

?>
</div>
<?php
//simpan data di file
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);
fclose($fp);


?>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <div class="container">

<button onclick="document.location='dekripsi.php'" type="submit" class="btn btn-primary" value="
decrypt" data-theme="a">Decrypt</button>

</div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>