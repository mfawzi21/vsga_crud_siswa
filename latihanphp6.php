<?php

$nama_server = "127.0.0.1";
$username_mysql = "root";
$password_mysql = "";
$database_mysql = "latihan";

$db = mysqli_connect($nama_server, $username_mysql, $password_mysql, $database_mysql);

var_dump ($db);

if(!$db) {
    echo "Ehhh Error" . mysqli_connect_error ();
}
else {
    echo "Berhasil Terhubung";
}

$nama = $_GET ['nama'];
$nis = $_GET ['nis'];
$tanggal_lahir = $_GET ['tanggal_lahir'];
$alamat = $_GET ['alamat'];


/* bisa apapun di database */

/* insert data ke tabel siswa */

$query = "INSERT INTO siswa(nama,nis,tanggal_lahir,alamat) VALUES ('Fajri Nur Kholiq', 131049, '2019-06-05', 'Pasar Sapi, Demangan, Yogyakarta')";

/* tutup koneksi */

mysqli_query ($db, $query);

/* tutup koneksi */

mysqli_close ($db);

?>
