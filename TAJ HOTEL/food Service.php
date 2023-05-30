<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:wght@700&family=Nunito+Sans&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;600&family=Lobster&family=Nunito:wght@200;300;400;600;700&family=Roboto:wght@300&display=swap" rel="stylesheet">


    <!-- external css link -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="./css/mobile.css">
    <script type="text/javascript" src="index.js"></script>
    <title>TAJ HOTEL</title>
</head>

<body>
    <header class="header">
        <div class="header-section">

            <div id="logo">
                <!-- <span>TAJ</span>HOTEL</h2> -->
                <div class="pr-1"><span>TAJ |</span>HOTEL</div>

            </div>

            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="nav-links active"><a href="./index.php" target="blank">HOME</a></li>
                    <li class="nav-links"><a href="./index.php">ABOUT</a></li>
                    <li class="nav-links"><a href="./index.php">OUR ROOM</a></li>
                    <!-- <li class="nav-links"><a href="#blog">SERVICES</a></li> -->


                    <div class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">SERVICES
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="./meetingroom.php">Meeting Rooms</a>
                            <a href="./food Service.php" target="_blank">Food Service</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>

                    <li class="nav-links"><a href="./index.php">CONTACT US</a></li>

                    <div class="button">
                        <a href="./DB/sign up.php" class="button instagram"><span class="gradient"></span>Sign Up</a>

                    </div>

                    <div class="button">
                        <a href="./DB/sign in.php" class="button instagram"><span class="gradient"></span>Sign In</a>

                    </div>
                </ul>
            </nav>
            <!--this will use when device is small like smartphones -->
            <div class="mobile-navbar-btn">
                <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
            </div>

        </div>
    </header>

    <div class="spa-container">
        <div class="bg-img">

        </div>
    </div>

    <div class="ourmenu">
        <h2>Our<span>Menu</span></h2>
    </div>


    <div class="menu_box">
        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/buger.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>Buger</h2>
                <p>
                    Zero oil cooking and yet it’s the perfect burger.
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/pasta.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>pasta</h2>
                <p>
                    Good life is all about good pasta.
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/sandwich.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>Sandwich</h2>
                <p>
                    Two breads with a mixture of magic.
                </p>

                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/chocolate_Drink.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>Drink</h2>
                <p>
                    When you are the best, drink the best
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/pizza.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>pizza</h2>
                <p>
                    When Better Comes to Pizza We Deliver More than Deliciousness.
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/Hot_dog.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>Hot Dog</h2>
                <p>
                    Hot dogs just got better.
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/juse.jpg">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>Juse</h2>
                <p>
                    Good Juice for Good Moments
                    The joy of Tasting Nature
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>

        </div>

        <div class="menu_card">

            <div class="menu_image">
                <img src="./img/biryani.webp">
            </div>

            <div class="small_card">
                <i class="fa-solid fa-heart"></i>
            </div>

            <div class="menu_info">
                <h2>Biryani</h2>
                <p>
                    Cooked at dum, tastes like heaven - Biryani.
                </p>
                <!-- <h3>$20.00</h3> -->
                <div class="menu_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <!-- <a href="#" class="menu_btn">Order Now</a> -->
            </div>
        </div>
    </div>


    <div class="ourmenu">
        <h2>Our<span>Gallary</span></h2>
    </div>

    <div class="gallary_image_box">
        <div class="gallary_image">
            <img src="./img/gallary_5.jpg">
        </div>

        <div class="gallary_image">
            <img src="./img/gallary_2.jpg">
        </div>

        <div class="gallary_image">
            <!-- <img src="./img/gallary_3.jpg"> -->
            <img src="./img/gallary__3.jpg">
        </div>

        <div class="gallary_image">
            <img src="./img/gallary__4.jpg">
        </div>

        <div class="gallary_image">
            <img src="./img/gallary_5.jpg">
        </div>

        <div class="gallary_image">
            <img src="./img/gallary_6.jpg">
        </div>

    </div>

    <footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <i class="fab fa-slack"></i>
                    <span class="logo_name">

                        <!-- <h2><span style="color: #FF0000;">TAJ</span>HOTEL</h2> -->
                        <div class="pr-1"><span>TAJ |</span>HOTEL</div>
                    </span>
                </div>
                <div class="media-icons">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"><img src="img/facebook.gif" alt="Something Went Wrong" class="set-f"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"><img src="img/twitter.gif" alt="Something Went Wrong" class="set-f"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"><img src="img/instagram.gif" alt="Something Went Wrong" class="set-f"></i></a>
                    <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"><img src="img/linkdin.gif" alt="Something Went Wrong" class="set-f"></i></a>
                    <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Company</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#ourroom">Rooms</a></li>
                    <li><a href="#blog">BLOG</a></li>
                    <li><a href="#contactus">Contact us</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name">Services</li>
                    <li><a href="#">24 x 7 Service</a></li>
                    <li><a href="#">Easy Payments</a></li>
                    <li><a href="#">Logo design</a></li>
                    <li><a href="#">Banner design</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Contact Info</li>
                    <li><a href="#"> +123-456-7890</a></li>
                    <li><a href="#"> +111-222-3333</a></li>
                    <li><a href="#">tajhotel@Gmail.Com</a></li>
                    <li><a href="#"> Mumbai, India - 400104</a></li>

                </ul>

                <ul class="box input-box">
                    <li class="link_name">Subscribe <span>For Latest Updates</span></li>
                    <li><input type="text" placeholder="Enter your email"></li>
                    <li><input type="button" value="Subscribe"></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright © 2022 <a href="#"></a>All rights reserved</span>
                <span class="policy_terms">
                    <a href="https://www.privacypolicytemplate.net/live.php?token=Ov4tuc0QJqbIrTOVDb97kUELbjxn40Bk">Privacy policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    const mobile_nav = document.querySelector(".mobile-navbar-btn"); /*parameter mai maine class add krene jisko toggel krna hai*/
    const nav_header = document.querySelector(".header") /*es parameter mai oh class aayegi jismai hamra navbar hai*/

    const toggleNavbar = () => {
        // alert("thanks")

        nav_header.classList.toggle('active');
    };
    mobile_nav.addEventListener('click', () => toggleNavbar());
</script>

</html>