<?php

$key = $_GET["key"];
$nmfile = "enkripsi.txt";

$fp = fopen($nmfile,"r"); // buka file hasil enkripsi
$isi = fread($fp,filesize($nmfile));


for($i=0;$i<strlen($isi);$i++)
{
$kode[$i]=ord($isi[$i]); // rubah ASII ke desimal
$b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
$c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}

?>
<div class="container">
<?php
echo "<br><br><hr><br>" ;
echo "KALIMAT CHIPERTEXT = ";

for($i=0;$i<strlen($isi);$i++)
{
echo $isi[$i];
}

echo "<br><br>";

echo "HASIL DESKRIPSI = ";
for ($i=0;$i<strlen($isi);$i++)
{
echo $c[$i];

}
echo "<br><br><hr>" ;
?>
</div>

 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
<button onclick="document.location='../../dashboard.php'" type="submit" class="btn btn-primary" value="
decrypt" data-theme="a">Dashboard</button>

<button onclick="document.location='index.php'" type="submit" class="btn btn-danger" value="
decrypt" data-theme="a">Caesar</button>

</div>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>