<center>
<?php
/*for (initialization; condition; increment) {
  // code yang akan dijalankan
}
*/
?>
<h1>For Loop</h1>
<?php
//for loop
for ($i = 0; $i < 5; $i++) {
    echo "Angka: $i<br>";
}
echo "<br>";
?>
<h1>Break For Loop</h1>
<?php
//break for loop
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) break;
    echo "Angka: $i<br>";
}
echo "<br>";
?>
<h1>Continue For Loop</h1>
<?php
//continue for loop
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) continue;
    echo "Angka: $i<br>";
}
echo "<br>";
?>


<h1>Pengulangan For</h1>
<?php
//pengulangan for

for($hitung = 0; $hitung < 10; $hitung--){
    if ($hitung == -11) break;/*BERIKAN BREAK UNTUK MENGHENTIKAN 
PERULANGAN JIKA SUDAH MENCAPAI -10*/
    echo "Hitungan ke - " . $hitung . "<br>";
}

//perbaiki logika dari looping foor di atas

?>

</center>