<?php

//koneksi kedatabases
$db= mysqli_connect("localhost","root","fardanio19","web_sekolah");


function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    // ambil data tiap kolom
    global $db;
    $nama_Dosen = htmlspecialchars($data["nim"]);
    $jenis_Kelamin = htmlspecialchars($data["nama"]);
    $Kota = htmlspecialchars($data["status_aktivitas"]);

    $query = "INSERT INTO mahasiswa
            (nim, nama, status_aktivitas)
                VALUES
                ('$nama_Dosen', '$jenis_Kelamin', '$Kota')
                ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query( $db, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
}

function ubah($data){
    // ambil data tiap kolom
    global $db;
    $id = $data["id"];
    $nama_dosen = htmlspecialchars($data["nim"]);
    $jenis_kelamin = htmlspecialchars($data["nama"]);
    $kota = htmlspecialchars($data["status_aktivitas"]);
   

    $query = "UPDATE mahasiswa SET 
                nim = '$nama_dosen',
                nama = '$jenis_kelamin',
                status_aktivitas = '$kota'
                WHERE id = $id
                ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);

}

// function cari($keyword){
//     $query  = "SELECT *FROM terbaru
//                 WHERE 
//                 nama_dosen LIKE '%$keyword%'
//                 OR jenis_kelamin LIKE '%$keyword%'
//                 OR alamat LIKE '%$keyword%'
//                 OR kota LIKE '%$keyword%'
//                 OR gambar LIKE '%$keyword%'";
//     return query($query);
// }










?>