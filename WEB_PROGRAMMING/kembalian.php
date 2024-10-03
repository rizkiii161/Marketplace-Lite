<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submitto"])) {
        $bayar = $_POST["bayar"];
        $harga = $_POST["price"];
        $kembalian = $bayar - $harga;

        // Jika kembalian kurang dari 0, redirect ke halaman lain
        if ($kembalian < 0) {
            header("Location:kurang.html");
            exit();
        }

        $pecahan = [
            100000 => 0,
            50000 => 0,
            20000 => 0,
            10000 => 0,
            5000 => 0,
            2000 => 0,
            1000 => 0,
            500 => 0,
            200 => 0,
            100 => 0    
        ];

        foreach ($pecahan as $nilai => $jumlah) {
            while ($kembalian >= $nilai) {
                $kembalian -= $nilai;
                $pecahan[$nilai]++;
            }
        }
    } else if (isset($_POST["submittto"])) {
        header("Location:order.php");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="src/img/marketplace.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="src/img/1.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Navbar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="payment.php">Payment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-danger">Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($kembalian)): ?>
                            
                            <tr>
                                <th colspan="2">Change Breakdown</th>
                            </tr>
                            <?php foreach ($pecahan as $nilai => $jumlah): ?>
                                <?php if ($jumlah > 0): ?>
                                    <tr>
                                        <td>Rp. <?= number_format($nilai, 0, ',', '.') ?></td>
                                        <td><?= $jumlah ?> notes</td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
        <div class="container p-4 pb-0">
            <section class="mb-4 text-center">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Ardhika Rizki</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
