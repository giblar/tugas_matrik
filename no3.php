<?php 

$jam = (int)readline("Masukkan jam: ");
$menit = (int)readline("Masukkan menit: ");
$detik = (int)readline("Masukkan detik: ");

$detik_jam = $jam * 3600;
$detik_menit = $menit * 60;
$detik_total = $detik_jam + $detik_menit + $detik;

echo "$detik_total detik";
?>