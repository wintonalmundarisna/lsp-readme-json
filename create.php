<?php
// Data 1
$data[] = array(
    'no' => 1,
    'npm' => '202143500065',
    'nama' => 'Rudi',
    'jenis-kelamin' => 'Laki-Laki',
    'jurusan' => 'Teknik Mesin',
    'tugas' => '80',
    'uts' => '70',
    'uas' => '90',
    'nilai' => '90',
    'grade' => 'A',
    'keterangan' => 'Lulus',
    'warna' => 'primary',
    'alamat' => 'Nganjuk'
);

// Data 2
$data[] = array(
    'no' => 2,
    'npm' => '202143500066',
    'nama' => 'Gilang',
    'jenis-kelamin' => 'Laki-Laki',
    'jurusan' => 'Teknik Informatika',
    'tugas' => '70',
    'uts' => '70',
    'uas' => '90',
    'nilai' => '90',
    'grade' => 'A',
    'keterangan' => 'Lulus',
    'warna' => 'primary',
    'alamat' => 'UNSIKA'
);

// Data 3
$data[] = array(
    'no' => 3,
    'npm' => '202143500068',
    'nama' => 'Lukman',
    'jenis-kelamin' => 'Laki-Laki',
    'jurusan' => 'Teknik Sipil',
    'tugas' => '10',
    'uts' => '20',
    'uas' => '10',
    'nilai' => '40',
    'grade' => 'D',
    'keterangan' => 'Tidak Lulus',
    'warna' => 'danger',
    'alamat' => 'Jakarta'
);


// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
file_put_contents('json/anggota.json', $jsonfile);