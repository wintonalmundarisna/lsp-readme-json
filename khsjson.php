<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Hitung Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <?php
    // Tangkap variabel dari form
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis-kelamin"];
    $jurusan = $_POST["jurusan"];
    $tugas = $_POST["ttugas"];
    $uts = $_POST["tuts"];
    $uas = $_POST["tuas"];
    $nilai = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);
    $grade = "";
    $lulus = "";
    $warna = "";
    ?>

    <div class="container mt-5">
        <div class="card bg-dark text-white mb-3">
            <div class="card-body">
                <table class="gap-5">
                    <tr>
                        <th>NPM</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $npm ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $nama ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $jenis_kelamin ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $jurusan ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th>Tugas</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $tugas ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th>UTS</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $uts ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th>UAS</th>
                        <td class="px-5">:</td>
                        <th>
                            <p class="card-title"><?php echo $uas ?></p>
                        </th>
                    </tr>

                    <?php
                    if ($nilai >= 90) {
                        $grade = "A";
                        $lulus = "LULUS";
                        $warna = "primary";
                    ?>
                        <tr>
                            <th>Nilai</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $nilai ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $grade ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title text-<?php echo $warna ?>"><?php echo $lulus ?></p>
                            </th>
                        </tr>
                    <?php
                    } elseif ($nilai >= 80 && $nilai < 90) {
                        $grade = "B";
                        $lulus = "LULUS";
                        $warna = "primary";
                    ?>
                        <tr>
                            <th>Nilai</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $nilai ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $grade ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title text-<?php echo $warna ?>"><?php echo $lulus ?></p>
                            </th>
                        </tr>
                    <?php
                    } elseif ($nilai >= 60 && $nilai < 80) {
                        $grade = "C";
                        $lulus = "LULUS";
                        $warna = "primary";
                    ?>
                        <tr>
                            <th>Nilai</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $nilai ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $grade ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title text-<?php echo $warna ?>"><?php echo $lulus ?></p>
                            </th>
                        </tr>
                    <?php
                    } else {
                        $grade = "D";
                        $lulus = "TIDAK LULUS";
                        $warna = "danger";
                    ?>
                        <tr>
                            <th>Nilai</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $nilai ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title"><?php echo $grade ?></p>
                            </th>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td class="px-5">:</td>
                            <th>
                                <p class="card-title text-<?php echo $warna ?>"><?php echo $lulus ?></p>
                            </th>
                        </tr>
                </table>
            <?php
                    }
            ?>

            </div>
        </div>
    </div>


    <?php
    // File json yang akan dibaca
    $file = "json/krs2.json";

    // Mendapatkan file json
    $anggota = file_get_contents($file);

    // Mendecode anggota.json
    $data = json_decode($anggota, true);

    // Data array baru
    $data[] = array(

        'npm' => "$npm",
        'nama' => "$nama",
        'jenis-kelamin' => "$jenis_kelamin",
        'jurusan' => "$jurusan",
        'tugas' => "$tugas",
        'uts' => "$uts",
        'uas' => "$uas",
        'nilai' => "$nilai",
        'grade' => "$grade",
        'keterangan' => "$lulus",
        'warna' => "$warna",
    );

    $konten = json_encode($data, JSON_PRETTY_PRINT);

    //menyimpan konten di file
    file_put_contents($file, $konten);

    ?>

    <!-- menampilkan data -->
    <div class="row">
        <table class="table mt-5 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $no = 1;
                foreach ($data as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $value["npm"] ?></td>
                        <td><?php echo $value["nama"] ?></td>
                        <td><?php echo $value["jenis-kelamin"] ?></td>
                        <td><?php echo $value["jurusan"] ?></td>
                        <td><?php echo $value["tugas"] ?></td>
                        <td><?php echo $value["uts"] ?></td>
                        <td><?php echo $value["uas"] ?></td>
                        <td><?php echo $value["nilai"] ?></td>
                        <td><?php echo $value["grade"] ?></td>
                        <td class="text-<?php echo $value["warna"] ?>"><?php echo $value["keterangan"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>