<?php
// File json yang akan dibaca
$file = "json/anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru
$data[] = array(
    'no' => 4,
    'npm' => "202143500099",
    'nama' => 'Ahmad',
    'jenis-kelamin' => 'Laki-Laki',
    'jurusan' => 'DKV',
    'tugas' => '70',
    'uts' => '70',
    'uas' => '70',
    'nilai' => '60',
    'grade' => 'C',
    'keterangan' => 'Lulus',
    'warna' => 'primary',
    'alamat' => 'Depok'
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
$anggota = file_put_contents($file, $jsonfile);