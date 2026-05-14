<center>
<?php
/*do {
  // code yang akan dijalankan
} while (condition);*/
?>

<h1>Do While Loop</h1>
<?php
//dowhile
$i = 0;
do {
    echo "Angka: $i<br>";
    $i++;
} while ($i < 5);
echo "<br>";
?>

<h1>Do While break</h1>
<?php
//dowhile break
$i = 0;
do {
    if ($i == 3) break;
    echo "Angka: $i<br>";
    $i++;
} while ($i < 5);
echo "<br>";
?>

<h1>Do While continue</h1>
<?php
//dowhile continue
$i = 0;
do {
    if ($i == 3) continue;
    echo "Angka: $i<br>";
    $i++;
} while ($i < 5);
echo "<br>";
?>

</center>

