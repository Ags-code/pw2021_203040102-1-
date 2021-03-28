<?php
// array assosiaive
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita bua sendiri

$mahasiswa = [
    [
        "nama" => "Agung Septiana",
        "nrp" => "203040102",
        "email" => "agungseptiana02@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ell.jpg"
    ],
    [
        "nama" => "Yukinoshita Yukino",
        "nrp" => "203040103",
        "email" => "yukinoshitayukino02@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "yukino.png"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3</title>
    <style>
        img {
            max-width: 120px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>