<?php
$anak_ayam = $_POST['ayam']; 
echo "<center><strong>Jumlah anak ayam = $anak_ayam </strong></center><br><br>";
// Menggunakan perulangan while
while ($anak_ayam > 0) {
    if ($anak_ayam > 1) {
        $sisa = $anak_ayam - 1;
        echo "<center>Anak ayam turun $anak_ayam, mati satu tinggalah $sisa </center><br>";
    } else {
        // Kondisi ketika anak ayam terakhir mati
        echo "<center><strong>Anak ayam turun $anak_ayam, mati satu tinggalah Induknya </strong></center><br>";
    }
    $anak_ayam--;
}
echo "<style>";
echo "body { font-family: serif, georgia; font-size: 20px; color: #2b4d52; background-color: #b2e3eb; }";
echo "</style>";
?>