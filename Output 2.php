<?php
echo "<br>Fungsi Perkalian Volume Balok";
function volume($lebar, $panjang, $tinggi){
    $hasil=$panjang*$lebar*$tinggi;
    echo "<br> $hasil";
}
volume(4, 8, 3);
volume(10, 12, 20);
volume(11, 4, 7);
?>