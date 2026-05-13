<?php
for (initialization; condition; increment) {
  // code yang akan dijalankan
}
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