<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id desc ");

// jika tombol cari ditekan
if( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

// var_dump($result);
// if(!$result){
//     echo mysqli_error($db);
// }
// Ambil data mahasiswa (fetch)
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array assosiatif
// mysqli_fetch_array() // mengembalikan arrat dua2 nya
// mysqli_fetch_object() //menampilkan object dengan tanda ->

// while ($mhs = mysqli_fetch_assoc($result)){;
// var_dump($mhs);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utama</title>
</head>
<body>
    <h1 >Data Mahasiswa Tugas1</h1>
    <a href="tambah.php" >tambah data mahasiswa</a>
  
    </form>
    <table border="1" cellspacing="0" cellpadding="10" >
        <tr>
            <th>no.</th>
            <th>nim</th>
            <th>Aksi</th>
            <th>nama</th>
            <th>kode_prodi</th>
            <th>status_aktivitas</th>
            
           
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row):
        ?>
         
        <tr> 
            <td><?= $i;?></td>
            <td><?= $row ["nim"];?></td>
            <td><a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('apakah anda yakin?');">hapus</a></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["kode_prodi"];?></td>
            <td><?= $row["status_aktivitas"];?></td>

        </tr>
        <?php $i++;?>
        <?php endforeach;?>
        <br><br><br>
       
    </table>
    
</body>
</html>