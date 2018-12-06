

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 content">
                <h5 class="text-center">Hitung ISBN</h5>
                <form action="" method="POST">
                    <input type="text" maxlength="1" name="num1" class="form-input">
                    <input type="text" maxlength="1" name="num2" class="form-input">
                    <input type="text" maxlength="1" name="num3" class="form-input">
                    <input type="text" maxlength="1" name="num4" class="form-input">
                    <input type="text" maxlength="1" name="num5" class="form-input">
                    <input type="text" maxlength="1" name="num6" class="form-input">
                    <input type="text" maxlength="1" name="num7" class="form-input">
                    <input type="text" maxlength="1" name="num8" class="form-input">
                    <input type="text" maxlength="1" name="num9" class="form-input">
                    <input type="text" maxlength="1" name="num10" class="form-input">
                    <input type="text" maxlength="1" name="num11" class="form-input">
                    <input type="text" maxlength="1" name="num12" class="form-input">
                    <input type="text" maxlength="1" name="num13" class="form-input" disabled>
                    <br>
                    <input type="submit" name="hitung" class="btn btn-sm btn-primary btn-block" value="Hitung" >
                </form>
                <?php 
                    if (isset($_POST['hitung'])) :
                        $angka1 = $_POST['num1'];
                        $angka2 = $_POST['num2'];
                        $angka3 = $_POST['num3'];
                        $angka4 = $_POST['num4'];
                        $angka5 = $_POST['num5'];
                        $angka6 = $_POST['num6'];
                        $angka7 = $_POST['num7'];
                        $angka8 = $_POST['num8'];
                        $angka9 = $_POST['num9'];
                        $angka10 = $_POST['num10'];
                        $angka11 = $_POST['num11'];
                        $angka12 = $_POST['num12'];
                        $jumlah = $angka1*1 + $angka2*3 + $angka3*1 +
                                $angka4*3 + $angka5*1 + $angka6*3 +
                                $angka7*1 + $angka8*3 + $angka9*1 +
                                $angka10*3 + $angka11*1 + $angka12*3;
                        $angka13 = 10 - ($jumlah%10);
                        $hasil = $angka13;
                ?>
                <div class="hasil">
                    <h5 class="text-center primary"><?= $hasil ?>
                        <?php if ($hasil == '7'): ?>
                            <h5 class="text-center">Valid</h5>
                        <?php else: ?>
                            <h5 class="text-center">Tidak Valid</h5>        
                        <?php endif ?>
                    </h5>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>