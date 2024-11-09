<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Hitung Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="row w-75">
            <h1 class="text-center mb-5">Program Menghitung Nilai Mata Kuliah</h1>

            <form action="khsjson.php" class="bg-body-secondary py-3" method="post">
                <div class="row">

                    <label for="npm" class="col-sm-3 col-form-label mb-3">NPM : </label>
                    <div class="col-sm-9">
                        <input type="text" name="npm" class="form-control" id="npm" value="">
                    </div>

                    <label for="nama" class="col-sm-3 col-form-label mb-3">Nama : </label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control" id="nama" value="">
                    </div>

                    <label for="jenis-kelamin" class="col-sm-3 col-form-label mb-3">Jenis Kelamin : </label>
                    <div class="col-sm-9">
                        <input type="radio" name="jenis-kelamin" value="Laki-Laki" id="jenis-kelamin"> Laki-Laki <br>

                        <input type="radio" class="my-3" name="jenis-kelamin" value="Perempuan" id="jenis-kelamin"> Perempuan
                    </div>

                    <label for="jurusan" class="col-sm-3 col-form-label mb-3">Masukkan Input Jurusan : </label>
                    <div class="col-sm-9">
                        <select id="jurusan" class="form-select" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="DKV">DKV</option>
                        </select>
                    </div>

                    <label for="ttugas" class="col-sm-3 col-form-label mb-3">Masukkan Input Tugas : </label>
                    <div class="col-sm-9">
                        <input type="text" name="ttugas" class="form-control" id="ttugas" value="">
                    </div>

                    <label for="tuts" class="col-sm-3 col-form-label mb-3">Masukkan Input UTS : </label>
                    <div class="col-sm-9">
                        <input type="text" name="tuts" class="form-control" id="tuts" value="">
                    </div>

                    <label for="tuas" class="col-sm-3 col-form-label mb-3">Masukkan Input UAS : </label>
                    <div class="col-sm-9">
                        <input type="text" name="tuas" class="form-control" id="tuas" value="">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="OK" name="bok" />
                <input class="btn btn-secondary" type="reset" value="Batal" />
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

