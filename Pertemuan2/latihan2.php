<?php
// nama barang
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// harga
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// jumlah
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

// total per barang
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

// total semua
$tharga = $th1 + $th2 + $th3 + $th4;

// diskon
$diskon = 5;
$tdiskon = ($diskon * $tharga) / 100;

// total bayar
$tdibayar = $tharga - $tdiskon;
?>