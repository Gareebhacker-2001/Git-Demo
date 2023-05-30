<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- googlefonts -->

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:wght@700&family=Nunito+Sans&family=Roboto:wght@400;900&display=swap" rel="stylesheet">

    <!-- external css link -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mobile.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./index.js"></script>

    <title>TAJ HOTEL</title>
</head>
<style>
    html {
        /* 1rem =10px  62.5 ka matlab divde kiya tha */
        font-size: 62.5%;
        overflow-x: hidden;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        top: 0;
        bottom: 0;
    }

    .pp {
        width: 100%;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5rem;
    }

    .temp h2 {
        font-size: 3.5rem;

    }

    .temp p {
        font-size: 1.5rem;

    }

    /* html {
        font-size: 62.5%;
    } */

    .info_box {
        margin-top: 9rem;
        margin-left: 22rem;
    }

    .info_box h2 {
        font-size: 2rem;
    }

    .info_box p {
        font-size: 24px;
    }

    .f-p {
        display: flex;
        justify-content: center;
    }

    .sub-module {
        display: flex;
        flex-direction: column;

    }

    .info_box {
        display: flex;
        flex-direction: column;
        margin-top: 2rem;
    }

    .module {
        padding-bottom: 88px;
        display: flex;

        padding-left: 5rem;
        padding-right: -18rem;
        margin-left: 41rem;
        margin-right: 54rem;

    }

    .sub-module {
        display: inline-grid;
        font-size: 2rem;
        background-color: white;
        /* box-shadow: rgb(17 12 46 / 15%) 0px 48px 100px 0px; */
        box-shadow: rgb(17 17 26 / 10%) 0px 4px 16px, rgb(17 17 26 / 10%) 0px 8px 24px, rgb(17 17 26 / 10%) 0px 16px 56px;
        padding: 3rem 6rem;
        padding-bottom: 4rem;
        margin-top: 3rem;
    }

    .sub-module h2 {
        font-size: 3rem;
    }

    .myinput {
        font-size: 1.8rem;
        color: black;
        width: 30rem;
        height: 3rem;
        margin: 0.8rem 0;
        border: 2px solid #edf4fa;

    }

    .input-field::placeholder {
        opacity: 1;
        /* color: hsl(213, 73%, 50%); */
        color: #555;

    }

    .myinput[type=text]:focus {
        border-color: #66afe9;
        outline: none;

    }

    .myinput[type=date]:focus {
        border-color: #66afe9;
        outline: none;

    }


    .myinput[type=time]:focus {
        border-color: #66afe9;
        outline: none;
    }



    .info_box h1 {
        font-size: 3.5rem;

    }

    .info_box h2 {
        font-size: 3rem;
        font-weight: 20;
    }

    .info_box p {
        font-size: 2rem;
        font-weight: 20;
    }


    .submit {
        margin-top: 2rem;
        padding: 1rem;
        font-size: 2rem;
        background-color: #06c2cd;
        color: #fff;
        font-weight: 700;
        border: none;
        cursor: pointer;
    }

    .template {
        margin-top:12rem;
    }



    @media(max-width:1158px) {


        .template {
            display: flex;
            flex-wrap: wrap;
            width: 100;
        }

    }

    @media(max-width:1167px) {

        .f-p {
            display: flex;
            /* flex-direction: column; */
            flex-wrap: wrap;

        }

        .info_box {
            margin-top: 9rem;

            margin: 0 28rem;

        }

        .sub-module {
            margin: 2rem 22rem;
        }
    }
</style>

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
    <div class="form-sections">
        <div class="template">
            <form action="#" class="f-p" method="post">

                <div class="sub-module">
                    <h2 class="f-h">Book Meeting Rooms</h2>

                    <input type="text" class="myinput input-field" name="name" placeholder="Name">

                    <input type="text" class="myinput input-field" name="company_name" placeholder="Company Name">

                    <input type="date" class="myinput input-field" name="date" id="dateDefault">

                    <input type="time" class="myinput input-field" name="time">

                    <button type="button" name="submit" class="submit">BOOK NOW</button>

                </div>

                <div class="info_box">
                    <h1>Meeting@ meetingrooms is<br> even easier.</h2>
                        <p>Planning a successful meeting at meeting roms is easier than<br> ever when you use our online
                            meeting event solution.</p>
                        <p>Find a hotel with the guest rooms or event space you need, <br>then submit a pricing request
                            for detailed information.</p>
                        <h2>For more information, book online now<br> or call 1.800.123.4567</h2>
                </div>

            </form>
        </div>
    </div>



    <section class="text-gray-600 body-font mt-40">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font text-5xl mb-4 font-medium text-gray-900">Overview Meetings & Conference

                </h1>
                <p class="mb-8 leading-relaxed  py-6 text-4xl">We believe that working together is more genuine - real people, in real time, in a real place. And together is how we can create, inspire and solve virtually anything. Find a hotel with the guest rooms or event space you need, then submit a pricing request for detailed information.</p>

                <div class="pp">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap -m-4 text-center pp">
                                <div class="p-4 sm:w-1/4 w-1/2" style=' border:2px solid lightblue; margin:10px;'>
                                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">290</h2>
                                    <p class="leading-relaxed"> Guest Rooms</p>
                                </div>
                                <div class="p-4 sm:w-1/4 w-1/2" style=' border:2px solid lightblue; margin:8px;'>
                                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2240</h2>
                                    <p class="leading-relaxed"> Space sq. ft.</p>
                                </div>
                                <div class="p-4 sm:w-1/4 w-1/2" style=' border:2px solid lightblue; margin:8px;'>
                                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4.5★</h2>
                                    <p class="leading-relaxed">Customer Rating</p>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 ">
                <img class="object-cover object-center rounded" alt="hero" src="./img/meeting.jpg" style='width:100%; height:40vh;'>
            </div>
        </div>
    </section>



    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-6xl text-4xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4 ">Meeting Overview</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base"></p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/meeting-room-1.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/meeting-room-2.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="./img/meeting-room-3.jpg">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="./img/meeting-room-4.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/meeting-room-5.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/meeting-room-6.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>


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

<script>
    function setInputDate(_id) {
        var _dat = document.querySelector(_id);
        var hoy = new Date(),
            d = hoy.getDate(),
            m = hoy.getMonth() + 1,
            y = hoy.getFullYear(),
            data;

        if (d < 10) {
            d = "0" + d;
        };
        if (m < 10) {
            m = "0" + m;
        };

        data = y + "-" + m + "-" + d;
        console.log(data);
        _dat.value = data;
    };

    setInputDate("#dateDefault");

    const mobile_nav = document.querySelector(".mobile-navbar-btn"); /*parameter mai maine class add krene jisko toggel krna hai*/
    const nav_header = document.querySelector(".header") /*es parameter mai oh class aayegi jismai hamra navbar hai*/

    const toggleNavbar = () => {
      // alert("thanks")

      nav_header.classList.toggle('active');
    };


    mobile_nav.addEventListener('click', () => toggleNavbar());

</script>

</html