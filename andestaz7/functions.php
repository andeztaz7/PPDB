<?php
$conn = mysqli_connect("localhost", "root", "", "andesta7");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $warga= htmlspecialchars($data["warga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $asalsmp = htmlspecialchars($data["asalsmp"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);
    $penghasilanorangtua = htmlspecialchars($data["penghasilanorangtua"]);


    $query = "INSERT INTO andestaz7 VALUES ('', '$nama', '$tempat_lahir', '$tgl_lahir', '$warga', '$alamat', '$email', '$nohp', '$asalsmp', '$ayah', '$ibu', '$penghasilanorangtua')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM andestaz7 WHERE id = $Id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $warga= htmlspecialchars($data["warga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $asalsmp = htmlspecialchars($data["asalsmp"]);
    $ayah = htmlspecialchars($data["ayah"]);
    $ibu = htmlspecialchars($data["ibu"]);
    $penghasilanorangtua = htmlspecialchars($data["penghasilanorangtua"]);



    $query = "UPDATE andestaz7 SET 
                nama = '$nama', 
                tempat_lahir = '$tempat_lahir', 
                tgl_lahir = '$tgl_lahir', 
                warga = '$warga',
                alamat = '$alamat',
                email = '$email',
                nohp = '$nohp',
                asalsmp = '$asalsmp',
                ayah = '$ayah',
                ibu = '$ibu',
                penghasilanorangtua = '$penghasilanorangtua'
               
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}