<?php
$jam = "19:40";
$tugas = true;
$aktivitas = "";

if ($jam >= "15:30" && $jam <= "15:44") {
    $aktivitas = "Andi sedang perjalanan pulang";
}
elseif ($jam >= "15:45" && $jam <= "15:59") {
    if ($tugas) {
        $aktivitas = "Andi sedang mandi setelah tiba di rumah";
    } else {
        $aktivitas = "Andi beristirahat setelah tiba di rumah";
    }
}
elseif ($jam >= "16:00" && $jam <= "16:30") {
    $aktivitas = "Andi sedang mengaji";
}
elseif ($jam >= "16:30" && $jam <= "16:45") {
    $aktivitas = "Andi pergi membeli bumbu masakan";
}
elseif ($jam >= "16:45" && $jam <= "17:15") {
    if ($tugas) {
        $aktivitas = "Andi sedang menghafal dialog untuk festival";
    } else {
        $aktivitas = "Andi sedang istirahat";
    }
}
elseif ($jam >= "17:15" && $jam <= "17:45") {
    if ($tugas) {
        $aktivitas = "Andi sedang chat dengan Raya membahas festival";
    } else {
        $aktivitas = "Andi sedang chat dengan Raya membahas hal lain";
    }
}
elseif ($jam >= "17:45" && $jam <= "17:55") {
    $aktivitas = "Andi sedang istirahat 10 menit";
}
elseif ($jam >= "17:55" && $jam <= "18:05") {
    $aktivitas = "Andi sedang sholat maghrib";
}
elseif ($jam >= "18:05" && $jam <= "18:25") {
    if ($tugas) {
        $aktivitas = "Andi sedang makan malam bersama keluarga";
    } else {
        $aktivitas = "Andi sedang makan malam sendiri";
    }
}
elseif ($jam >= "18:25" && $jam <= "20:25") {
    if ($tugas) {
        $aktivitas = "Andi sedang mengerjakan tugas sekolah";
    } else {
        $aktivitas = "Andi sedang belajar materi sekolah";
    }
}
elseif ($jam >= "20:25" && $jam <= "20:35") {
    $aktivitas = "Andi sedang sholat isya";
}
elseif ($jam >= "20:35" && $jam <= "21:05") {
    if ($tugas) {
        $aktivitas = "Andi sedang mengobrol dengan keluarga";
    } else {
        $aktivitas = "Andi sedang beristirahat dengan keluarga";
    }
}
elseif ($jam >= "21:05" && $jam <= "22:00") {
    $aktivitas = "Andi memiliki waktu bebas sebelum tidur";
}
elseif ($jam >= "22:00" || $jam < "04:00") {
    $aktivitas = "Andi sedang tidur";
}
elseif ($jam == "04:00") {
    $aktivitas = "Andi bangun pagi";
}
else {
    $aktivitas = "Tidak ada aktivitas terjadwal";
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Harian Andi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f8ff;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #FF007F;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4169e1;
            color: white;
        }
        .footer {
            margin-top: 20px;
            padding: 15px;
            background-color: #4169e1;
            color: white;
            border-radius: 5px;
        }
        h2 {
            color: #4169e1;
            border-bottom: 2px solid #4169e1;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Status Aktivitas Saat Ini:</h2>
        <table>
            <tr>
                <th>Waktu</th>
                <th>Aktivitas</th>
            </tr>
            <tr>
                <td><?php echo $jam; ?></td>
                <td><?php echo $aktivitas;""?></td>
            </tr>
        </table>

        <h2>Daftar Lengkap Jadwal Harian:</h2>
        <table>
            <tr>
                <th>Waktu</th>
                <th>Aktivitas</th>
            </tr>
            <tr><td>15:30 - 15:44</td><td>Perjalanan Pulang</td></tr>
            <tr><td>15:45</td><td>Tiba di Rumah</td></tr>
            <tr><td>15:45 - 15:59</td><td>Mandi</td></tr>
            <tr><td>16:00 - 16:30</td><td>Mengaji</td></tr>
            <tr><td>16:30 - 16:45</td><td>Membeli Bumbu Masakan</td></tr>
            <tr><td>16:45 - 17:15</td><td>Menghafal Dialog Festival</td></tr>
            <tr><td>17:15 - 17:45</td><td>Chat dengan Raya</td></tr>
            <tr><td>17:45 - 17:55</td><td>Istirahat</td></tr>
            <tr><td>17:55 - 18:05</td><td>Sholat Maghrib</td></tr>
            <tr><td>18:05 - 18:25</td><td>Makan Malam</td></tr>
            <tr><td>18:25 - 20:25</td><td>Mengerjakan Tugas Sekolah</td></tr>
            <tr><td>20:25 - 20:35</td><td>Sholat Isya</td></tr>
            <tr><td>20:35 - 21:05</td><td>Mengobrol dengan Keluarga</td></tr>
            <tr><td>21:05 - 22:00</td><td>Waktu Bebas</td></tr>
            <tr><td>22:00 - 04:00</td><td>Tidur</td></tr>
            <tr><td>04:00</td><td>Bangun Pagi</td></tr>
        </table>

        <div class="footer">
            <h3>DiKERJAKAN BERSAMA oleh:</h3>
            <p>Nama: Revano Fachrezi</p>
            <p>Teman Diskusi: Fadly Setyo Purnomo</p>
        </div>
    </div>
</body>
</html>