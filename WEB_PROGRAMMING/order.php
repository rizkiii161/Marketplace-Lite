<?php
if (isset($_GET['product'] ) && !empty($_GET['product']) ) {
    $selected_product = $_GET['product'];
}
else {
    $selected_product = "";
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
                        <a class="nav-link "  href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="order.php">Order</a>
                    </li>
                 
                        <li class="nav-item">
                            <a class="nav-link" href="payment.php">Payment</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5 d-flex justify-content-center align-items-center">

        <div class="col-md-8">


            <h2 class="text-center mb-5">Order Form</h2>
            <hr class="border border-secondary border-2 opacity-50">

            <form action="payment.php" method="post">
                <div class="mb-3">
                    <label for="fname" class="form-label">
                        <h6>Full Name</h6>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="basic-addon3 basic-addon4" placeholder="Full Name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <h6>Email Address</h6>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="basic-addon3 basic-addon4" placeholder="Name@example.com" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">
                        <h6>Phone Number</h6>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="basic-addon3 basic-addon4" placeholder="Ex : 08993106054"required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="addres" class="form-label">
                        <h6>Addres</h6>
                    </label>
                    <div class="input-group">
                        <textarea class="form-control" id="addres" name="addres" aria-describedby="basic-addon3 basic-addon4" placeholder="Street name, House name, District, City, Province, Postal Code" rows="2" required></textarea>
                    </div>
                </div>
                <br>
                <hr class="border border-secondary border-2 opacity-50">
                
                <div class="input-group mb-3">
                <label class="input-group" for="product"><h6> Options</h6></label>
                    <select class="form-select" id="product" name="product" required>
                        <option value="NULL"> -- Selected Product --</option>
                        <option value="Knit Sweater" <?php if($selected_product === "knit")echo 'selected'; ?> >Knit Sweater</option>
                        <option value="Plaid Dress" <?php if($selected_product === "dress")echo 'selected'; ?> >Plaid Dress</option>
                        <option value="Polo shirt" <?php if($selected_product === "polo")echo 'selected'; ?> >Polo shirt</option>
                        <option value="Highwaist" <?php if($selected_product === "highwaist")echo 'selected'; ?> >Highwaist</option>
                        <option value="Casual sneakers" <?php if($selected_product === "sneakers")echo 'selected'; ?> >Casual sneakers</option>
                        <option value="Bucker Hat" <?php if($selected_product === "hat")echo 'selected'; ?> >Bucker Hat</option>
                       
                    </select>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">
                        <h6>Quantity</h6>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="basic-addon3 basic-addon4" placeholder="Quantity" required>
                    </div>
                </div>
                <div class="d-grid gap-2 mb-4"">

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    
                </div>

            </form>

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