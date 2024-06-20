<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>

    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bmi.php">BMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="bangun_segitiga.php">Segitiga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bangun_persegi-panjang.php">Persegi Panjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bangun_lingkaran.php">Lingkaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bangun_persegi.php">Persegi</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <form action="hasil_segitiga.php" method="POST">
        <div>
            <label for="tinggi">Masukan tinggi (cm)</label>
            <input type="number" name="tinggi">
        </div>

        <div>
            <label for="alas">Masukan alas (cm)</label>
            <input type="number" name="alas">
        </div>

        <div>
            <label for="sisi1">Masukan sisi 1 (cm)</label>
            <input type="number" name="sisi1">
        </div>

        <div>
            <label for="sisi2">Masukan sisi 2 (cm) </label>
            <input type="number" name="sisi2">
        </div>


        <input type="submit" value="Kirim">
    </form>
    
</body>
</html>