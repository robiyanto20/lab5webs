<?php
include 'koneksi.php';

require_once 'database.php';

if (isset($_POST['merk']) && isset($_POST['warna']) && isset($_POST['harga'])) {
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    $db = new Database();
    $db->insert('mobil', ['merk' => $merk, 'warna' => $warna, 'harga' => $harga]);

    header('Location: index.php');
}
