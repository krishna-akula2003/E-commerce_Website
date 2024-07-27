<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles1.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Dancing+Script:wght@700&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <h1><span>S</span>HOPPIFY</h1>
            </div>
            <ul>
                <li><a href="mainpage.php">Home</a></li>
                <li><a href="womens.html">Women</a></li>
                <li><a href="mens.html">Men</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="contactus.html">Contact us</a></li>
                <li><a href="profile.php">My profile</a></li>
                <div id="trending">
                    <div id="cart-container" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </ul>
            <i id="bar" class="fa-solid fa-bars"></i>
        </nav>
        <div class="main">
            <img src="girl.png" alt="">
            <div class="mainText">
                <h1>Let's Go With Trend</h1>
                <p>At SHOPPIFY, we're more than just an online shopping destination.Enjoy the convenience of secure online shopping with fast shipping and hassle-free returns.</p>
                <p>Explore our curated collection of [product categories] featuring handpicked items that combine style, functionality, and affordability.</p>
                <button>Explore</button>
            </div>
        </div>

        <div id="women">
            <div class="head">
                <h1>Shop <Span>Now</Span></h1>
            </div>
            <div class="shop">
                <div class="card">
                <a href="mens.html"><img src="MENS_3.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="womens.html"><img src="WOMENS_1.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                   <a href="mens.html"><img src="MENS_1.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="mens.html"><img src="MENS_2.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="womens.html"><img src="WOMENS_1.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="womens.html"><img src="WOMENS_2.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>
                </div>
            </div>
        </div>

        <div id="men">
            <div class="head">
                <h1>Shop <Span>Now</Span></h1>
            </div>
            <div class="shop">
                <div class="card">
                <a href="mens.html"><img src="MENS_5.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="mens.html"><img src="MENS_8.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="womens.html"><img src="WOMENS_3.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="womens.html"><img src="WOMENS_4.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="mens.html"><img src="MENS_7.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>

                </div>
                <div class="card">
                <a href="mens.html"><img src="MENS_6.jpeg" alt=""></a>
                    <p>Trends At Offer </p>
                    <p>Upto 50% OFF</p>
                </div>
            </div>
        </div>

        <div id="trending">
            <div class="head">
                <h1>Treding Cloths</h1>
            </div>
            <div class="trending">
                <div class="trends">
                    <img src="t1.webp" alt="">
                    <img src="t2.webp" alt="">
                    <img src="wm2.webp" alt="">
 
                </div>
                <div class="trends">
                    <img src="M1.webp" alt="">
                    <img src="M2.webp" alt=""> 
                    <img src="M3.webp" alt=""> 

 
                </div>
                <div class="trends">
                    <img src="wm1.webp" alt="">
                    <img src="wm2.webp" alt="">
                    <img src="wm3.webp" alt=""> 
                </div>
            </div>
        </div>
        <div class="cardPage">
            <div class="cardImg">
                
            </div>
            <div class="cardText">
                <h1>Let Walk With Trend </h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="">Buy Now</a>
                <a href="">Add To Cart</a>

            </div>
            
        </div>
        <div class="footer">
            <div class="text">
                <h3>About Us</h3>
                <p>Since 1995</p>
                <p>Quality Fabrics</p>
                <p>Affordable</p>
                <p>Best Price</p>

            </div>
            <div class="text">
                <h3>Trends</h3>
                <p>New Era </p>
                <p>Trend setter</p>
                <p>men</p>
                <p>women</p>

            </div>
            <div class="text">
                <h3>Men's</h3>
                <p>Trending</p>
                <p>Jackets</p>
                <p>Kurta</p>
                <p>Affordable</p>

            </div>
            <div class="text">
                <h3>Women</h3>
                <p>Trending</p>
                <p>Tops</p>
                <p>Jeans</p>
                <p>Ljackets</p>

            </div>
        </div>
    </div>
    <script src="index.js"></script>
    <script>
        // Add event listener to the cart container
        document.getElementById('cart-container').addEventListener('click', function() {
            // Redirect to cart.html
            window.location.href = 'cart.html';
        });
    </script>
</body>
</html>