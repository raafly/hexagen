<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "iceepee");

// ambil data dari database
// $result = mysqli_query($conn, "SELECT * FROM resep");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

function cari($keyword) {
    $query = "SELECT * FROM resep
                WHERE 
              judul LIKE '%$keyword%'
             ";
    return query($query);
} 
?>

