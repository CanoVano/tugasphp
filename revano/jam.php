<?php
$jam = date("15"); // ubah jam sesuai mau kau

if ($jam >= 0 && $jam < 4) {
    $waktu = "Dini Hari";
} 
elseif ($jam >= 4 && $jam < 10) {
    $waktu = "Pagi Hari";
} 
elseif ($jam >= 10 && $jam < 15) {
    $waktu = "Siang Hari";
} 
elseif ($jam >= 15 && $jam < 18) {
    $waktu = "Sore";
} 
elseif ($jam >= 18 && $jam <= 23) {
    $waktu = "Malam Hari";
} 
else {
    $waktu = "Waktu Tidak Valid";
}

echo "$jam:00 - $waktu";
?>