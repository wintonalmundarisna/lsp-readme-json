<?php
// File json yang akan dibaca
$file = "json/anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Perbarui data kedua
    if ($d['no'] === 4) {
        $data[$key]['nama'] = 'Badu';
    }
}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
$anggota = file_put_contents($file, $jsonfile);