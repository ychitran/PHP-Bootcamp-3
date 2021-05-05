<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="frontend/style/style.css">

    <!-- Google font -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <title>ArtDay - Creative Artist</title>

</head>

<body>
    <div class="navbar-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 col-1">
                    <img src="/frontend/img/logo/new_logo.png" alt="">
                </div>
                <div class="col-md-10 col-10">
                    <nav class="navbar navbar-expand ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">ABOUT</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SHOP
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Abstract Prints</a>
                                        <a class="dropdown-item" href="#">Greeting Card</a>
                                        <a class="dropdown-item" href="#">Journals</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PAGE
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">JOURNAL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">CONTACT</a>
                                </li>
                        </div>
                    </nav>
                </div>
                <div class="col-md-1">
                    <a href="#">CART(0)</a>
                </div>
            </div>
        </div>

    </div>


    @yield('main-content')

    <!-- FOOTER START -->
    <div class="footer-email">
        <div class="container text-center">
            <h3>Sign up for the newsletter</h3>
            <br>
            <input type="email" name="email" placeholder="ENTER YOUR EMAIL">
            <input type="submit" value="SUBSCRIBE" class="submit">
        </div>
    </div>

    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>ABOUT US</h3>
                    <p>We are a family of creators – close knit and a little crazy –
                        handcrafting goods at our workshop New York, USA. We make beautiful products from quality materials because believe each one is a representation of who we are close.</p>
                </div>
                <div class="col-md-2">
                    <h3>SUPPORT</h3>
                    <a href="#">SHIPPING & RETURN</a>
                    <br>
                    <a href="#">PRIVACY & POLICY</a><br>
                    <a href="#">FAQ</a>
                    <br>
                    <a href="#">CONTACT US</a>
                </div>
                <div class="col-md-2">
                    <h3>SOCIAL</h3>
                    <a href="#">FACEBOOK</a>
                    <br>
                    <a href="#">TWITTER</a><br>
                    <a href="#">INSTAGRAM</a>
                    <br>
                    <a href="#">PINTEREST</a>
                </div>
                <div class="col-md-2">
                    <h3>SHOP</h3>
                    <a href="#">ABSTRACT PRINTS</a>
                    <br>
                    <a href="#">GREETING CARDS</a><br>
                    <a href="#">ILLUSTRATED PRINTS</a>
                    <br>
                    <a href="#">JOURNALS</a>
                    <br>
                    <a href="#">NEW PRINTS</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-end">
        <div class="container">
            <p>Handcrafted with love © 2021 All rights reserved.</p>
        </div>

    </div>
    <!-- FOOTER END -->


</body>

</html>