

<?php
$nilai = 89;

if ($nilai >= 90 && $nilai <= 100) {
    echo "$nilai = A (Apik)";
}
else if ($nilai >= 80 && $nilai < 90) {
    echo "$nilai = B (Baik)";
}
else if ($nilai >= 70 && $nilai < 80) {
    echo "$nilai = C (Cukup)";
}
else if ($nilai >= 0 && $nilai < 70) {
    echo "$nilai = D (Kurang)";
}
else {
    echo "Nilai wajib di atas 0";
}
?>