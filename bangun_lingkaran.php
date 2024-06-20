<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Lingkaran</title>

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
                        <a class="nav-link" aria-current="page" href="bangun_segitiga.php">Segitiga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bangun_persegi-panjang.php">Persegi Panjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="bangun_lingkaran.php">Lingkaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bangun_persegi.php">Persegi</a>
                    </li>
        
                </ul>
            </div>
        </div>
    </nav>

    <form action="hasil_lingkaran.php" method="POST">
        <div>
            <label for="jari2">Masukan jari-jari</label>
            <input type="number" name="jari2">
        </div>

        <input type="submit" value="Kirim">
    </form>
    
</body>
</html>