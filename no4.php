<?php

$total_detik = (int)readline("Masukkan detik: ");

$jam = (int)($total_detik / 3600);
$menit = (int)(($total_detik % 3600) / 60);
$detik = $total_detik % 60;


echo "$jam jam $menit menit $detik detik";
?>
