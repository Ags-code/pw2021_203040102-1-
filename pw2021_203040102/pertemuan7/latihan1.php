<?php
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"] ; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>