<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>plaNest</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navBar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " id="navBar">
        <div class="container-fluid">
            <div class="nav-content-all">
                <div class="logos">
                    <h1>plaNest</h1>
                </div>
                <div class="my-navbar">
                    <ul class="my-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#aboutus">About Us</a></li>
                        <li><a href="plans.php">Pricing</a></li>
                        <li class="cnt"><a href="index.php#contactus">Contact Us</a></li>
                        <li><a href="thelog.php">Login</a></li>
                        <li class="sign-now"><a href="newsign.php">Sign Up</a></li>
                    </ul>
                </div>

            </div>
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">plaNest</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#aboutus">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#contactus">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="thelog.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="newsign.php">Sign up</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </nav>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/navBar.js"></script>
</body>

</html>