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
    // File json yang akan dibaca (full path file)
    $file = "json/anggota.json";

    // Mendapatkan file json
    $anggota = file_get_contents($file);

    // Mendecode anggota.json
    $data = json_decode($anggota, true);

    // Membaca data array menggunakan foreach
    ?>

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
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            foreach ($data as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $value["no"] ?></td>
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
                    <td><?php echo $value["alamat"] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>