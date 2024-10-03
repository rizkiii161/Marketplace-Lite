<?php
if (!isset($_POST['submit'])) {
    header("Location: gagal.html");
    exit();
} else {
    $nama = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $addres = $_POST["addres"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];


    $detail = array(
        array("nameProduct" => "Knit Sweater", "price" => 369500),
        array("nameProduct" => "Plaid Dress", "price" => 124200),
        array("nameProduct" => "Polo shirt", "price" => 89000),
        array("nameProduct" => "Highwaist", "price" => 105600),
        array("nameProduct" => "Casual sneakers", "price" => 259900),
        array("nameProduct" => "Bucker Hat", "price" => 199800)
    );

    // Mencari harga produk yang dipilih
    $product_price = 0;
    foreach ($detail as $item) {
        if ($item["nameProduct"] === $product) {
            $product_price = $item["price"];
            break; // Stop loop setelah menemukan produk
        }
    }

    $subtotal= $product_price * $quantity;
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
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
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



    <div class="container mt-5">
        <h2 class="text-center mb-5">Confirm Payment</h2>
        <div class="row justify-content-center">

            <div class="col-md-6 mb-5">
                <div class="card h-100 card-small">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="background-color:lightgray ;">Recipt Information</h5>
                        <p class="card-text">Name :<?=$nama?></p>
                        <p class="card-text">Email Addres :<?=$email?></p>
                        <p class="card-text">Addres :<?=$addres?></p>
                        <h5 class="card-title text-center" style="background-color:lightgray;">Order Details</h5>
                        <p class="card-text">Product :<?=$product?></p>
                        <p class="card-text">Price :<?=$product_price?></p>
                        <p class="card-text">Quantity :<?=$quantity?></p>
                        <div class="card-title text-center p-2" style="background-color:lightgray;">
                            <h5>Total Price</h5>
                            <h4>Rp. <?=$subtotal?></h4>
                        </div>
                        <form action="kembalian.php" method="post">

                            <div class="mb-3">
                                <label for="bayar" class="form-label">
                                    <h6>Payment</h6>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="bayar" name="bayar" aria-describedby="basic-addon3 basic-addon4" placeholder="Rp" required>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 mb-4"">

                            <input type="hidden" name="price" value="<?=$subtotal?>">
                            <button type="submit" class="btn btn-primary" name="submitto">Confirm</button>
                            <button type="submit" class="btn btn-danger" name ="submittto">Cancel</button>
                            
                        </div>
                    </form>


                    </div>

                </div>
            </div>
        </div>


    </div>










    <footer
        class="text-center text-lg-start text-white"
        style="background-color: #3e4551">
        <!-- Grid container -->
        <div class="container p-4 pb-0">

            <!-- Section: Social media -->
            <section class="mb-4 text-center">
                <!-- Facebook -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Ardhika Rizki</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>