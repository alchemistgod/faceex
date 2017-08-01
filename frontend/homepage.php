<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to FaceEX</title>
    <link rel="stylesheet" type="text/css" href="homepage.css" />
    <script src="https://use.fontawesome.com/29dce5faae.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Custom styles for carousel template -->
    <link href="carousel.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Navigation -->
    <div class="main_navigation">
        <header id="logo">
            <div id="logo">
                <a href="homepage.php">FaceEX</a>
            </div>
        </header>

        <div id="links">
            <nav id="navigation_links">
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Log In</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Container that holds main and side divs -->
    <div class="container">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="pictures/carousel/carousel_image1.jpg" alt="Carousel image 1">
                    <div class="carousel-caption">
                        <h1 id="carousel_text1">Welcome to FaceEX!</h1>
                        <p id="carousel_text2">The official social media HUB for every VeEX Inc. product</p>
                    </div>
                </div>
                <div class="item">
                <img src="pictures/carousel/carousel_image2.jpg" alt="Carousel image 2">
                    <div class="carousel-caption">
                        <h1 id="carousel_text1">Discover Products</h1>
                        <p id="carousel_text2">With every VeEX Inc. product available on FaceEX, you can learn more about what we have to offer</p>
                    </div>
                </div>
                <div class="item">
                <img src="pictures/carousel/carousel_image3.jpg" alt="Carousel image 3">
                    <div class="carousel-caption">
                        <h1 id="carousel_text1">Connect with coworkers</h1>
                        <p id="carousel_text2">FaceEX offers features for VeEX coworkers to socialize and interact with each other</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- Carousel end -->

        <a href="#">Register Today</a>
        
        <!-- Latest products -->
        <div id="latest_products">
            <h1>Latest Products</h1>
            <ul>
                <li>
                    <div id="productImage"><a href="#""><img src="pictures/latest_products/latest_product1.jpg"></a></div>
                    <div id="productName"><a href="#">Product 1</a></div>
                    <div id="productDescription">This is a product</div>
                    <div id="productLink"><a href="#">View Product</a></div>                
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2017 VeEX Inc. All Rights Reserved.</p>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
        <a href="#">Disclaimer</a>
        <a href="#">Help</a>
        <a href="#">Contact Us</a>
        <a href="#">About Us</a>
    </footer>

</body>
</html>