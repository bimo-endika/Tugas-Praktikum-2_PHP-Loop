<center>
<?php
/*do {
    //code yang akan dijalankan
} while (Condition);*/
?>

<h1>While Loop</h1>
<?php
//while loop
$i = 1;
while ($i < 6) {
    echo "nomor saat ini: $i<br>";
    $i++;
}
?>
<h1>Break</h1>
<?php
//break 
$i = 1;
while ($i <= 10) {
    if ($i == 5) break;
    echo "Angka: $i<br>";
    $i++;
}
?>
<h1>Continue</h1>
<?php
//continue
$i = 0;
while ($i <= 10) {
    $i++;
    if ($i == 5) continue;
    echo "Angka: $i<br>";
}
echo "<br>";
?>
<h1>Alternative Syntax</h1>
<?php
//alternative syntax
$i = 1;
while ($i <= 5):
    echo "Angka: $i<br>";
    $i++;
endwhile;

echo "<br>";

$i = 0;
while ($i < 100) {
    $i+=10;
    echo 'perhitingan ke: ' . $i . '<br>';
}

echo '<br>';
?>


</center>