<?php 
$mahasiswa = [
    [
        "nik" => "432022611030",
        "nama" => "mohamad farhat",
        "kelas" => "bis AC",
        "jurusan" => "teknik Informatika"
    ],
    [
        "nik" => "76535454",
        "nama" => "adimas",
        "kelas" => "ekonomi",
        "jurusan" => "Elektro"
    ],
    [
        "nik" => "7654332",
        "nama" => "Dwiki",
        "kelas" => "Bisnis",
        "jurusan" => "Jaringan"
    ],
    [
        "nik" => "73131335454",
        "nama" => "Harris",
        "kelas" => "jaringan",
        "jurusan" => "IOT"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dokumen</title>
</head>
<body>
<h1>get</h1>
<?php foreach($mahasiswa as $mhs):?>
    <ul>
        <a href="get2.php?nama=<?= $mhs["nim"];?>&nik=<?=$mhs["nama"];?>&kelas=<?=$mhs["kode_prodi"];?>&jurusan=<?= $mhs["status_aktivitas"];?>"><?= $mhs["nim"];?></a>
    </ul>


<?php endforeach?>
    
</body>
</html>
