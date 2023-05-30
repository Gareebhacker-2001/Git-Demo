<?php
include './DB/dbconn.php';

session_start()


?>

<?php

$userinfo = $_SESSION['email'];

if ($userinfo) {
} else {

  header('location: http://localhost/TAJ%20HOTEL/DB/sign%20in.php');
}


?>

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
  <title>TAJ HOTEL</title>
  <script type="text/javascript" src="index.js"></script>
</head>

<body>

  <!-- navbar section and log-section start -->
  <header class="header">
    <div class="header-section">

      <div id="logo">
        <!-- <span>TAJ</span>HOTEL</h2> -->
        <div class="pr-1"><span>TAJ |</span>HOTEL</div>

      </div>

      <nav class="navbar">
        <ul class="navbar-list">
          <li class="nav-links active"><a href="#">HOME</a></li>
          <li class="nav-links"><a href="#about">ABOUT</a></li>
          <li class="nav-links"><a href="#ourroom">OUR ROOM</a></li>
          <!-- <li class="nav-links"><a href="#blog">SERVICES</a></li> -->


          <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">SERVICES
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="./meetingroom.php" target="_blank">Meeting Rooms</a>
              <a href="./food Service.php" target="_blank">Food Service</a>
              <a href="#">Link 3</a>
            </div>
          </div>

          <li class="nav-links"><a href="#contactus">CONTACT US</a></li>

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
  <!-- navbar section and log-section end -->

  <!--  slider html css  start-->

  <div class="slider-section">
    <div class="myslide"></div>
  </div>
  <!-- slider html css  end -->


  <div class="book-button">
    <div class="buttons">
      <a href="./booking.php" class="buttons insta" target="_blank"><span class="grad"></span>BOOK NOW</a>

    </div>
  </div>

  <!-- <section class="form-sections">
    <div class="cf">
      <div class="container">
        <div class="form-section">
           <form action="#">
            <div class="form-info">
              <div class="form-container">
                <div class="inputes">
                  <span>Check In</span>
                  <input type="datetime-local" name="checkin" id="">
                </div>
                <div class="inputes">
                  <span>Check Out</span>
                  <input type="datetime-local" name="checkout" id="">
                </div>
                <div class="inputesa">
                  <span>Room</span>
                  <div>
                    <select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                    </select>
                  </div>
                </div>
                <div class="inputesa">
                  <span>Adult</span>
                  <div>
                    <select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                    </select>
                  </div>
                </div>
                <div class="inputesa">
                  <span>Children</span>
                  <div>
                    <select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                    </select>
                  </div>
                </div>
                <div class="inputes">
                  <button class="form-button">Check Availability</button>
                </div>
              </div>
            </div>
          </form>
         
      </div>
    </div>


  </section> -->


  <div class="am" id="about">
    <div class="titlepage" style="text-align: center;
    margin-top: 5rem;">
      <h2>About Us</h2>
    </div>
    <section class="text-gray-600 body-font">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">TAJ HOTEL
            <br class="hidden lg:inline-block">
          </h1>
          <p class="mb-8 leading-relaxed text-lg text-4xl">Since 2004, Taj Hotel has been revolutionizing the Hotel industry. Metasearch for travel? No one was doing
            it. Until we did.
            In over a decade, we've grown from a small office of 14 employees into a company of over 1,000 travel-loving
            teammates working across 7 international brands; Taj, SWOODOO, checkfelix, momondo, Cheapflights, Mundi and
            HotelsCombined. Together, we make it easier for everyone to experience the world.
            In 2022, we were acquired by Booking Holdings, the world leader in online travel.</p>
          <div class="flex justify-center">
            <button class="inline-flex text-white bg-indigo-500 border-0 py-4 px-4 focus:outline-none hover:bg-indigo-600 rounded text-lg text-3xl">Read More</button>

          </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
          <img class="object-cover object-center rounded" alt="hero" src="./img/about img.png">
        </div>
      </div>
    </section>
  </div>
  <!-- about section end -->

  <!-- room section start -->
  <div id="ourroom" class="div-room1">
    <div class="div-room2">
      <div class="div-room3">
        <h2>our room</h2>
        <p>Book your stay with us, and you’ll be happy to come back</p>
      </div>

      <div class="div-room4">
        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/room1.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>STANDARD ROOM</h2>
            <p>₹999.00 / per night</p>
          </div>
        </div>



        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/room2.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>SINGLE ROOM</h2>
            <p>₹700.00 / per night</p>
          </div>
        </div>


        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/room4.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>FAMILY ROOM</h2>
            <p>₹2500.00 / per night</p>
          </div>

        </div>



        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/home-office-types-of-rooms-in-a-house-1024x576.webp" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>LIBRARY ROOM</h2>
            <p>₹800.00 / per night</p>
          </div>

        </div>

      </div>

      <div class="div-room4">
        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/room3.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>SINGLE ROOM</h2>
            <p>₹700.00 / per night</p>
          </div>
        </div>


        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/room5.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>DELUXE ROOM</h2>
            <p>₹3000.00 / per night</p>
          </div>
        </div>


        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/room6.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>LUXURY ROOM</h2>
            <p> ₹3500.00 / per night</p>
          </div>
        </div>



        <div class="room-containers1" style="
    box-shadow: 0px 9px 30px rgba(255, 149, 5, 0.3);">
          <fegure>
            <img src="./img/large_March-White.jpg" alt="" id="img-set">
          </fegure>
          <div class="room">
            <h2>MASTER BEDROOM</h2>
            <p> ₹4000.00 / per night</p>
          </div>
        </div>
      </div>
    </div>
    <!-- room section end -->



    <!-- gallery-section start -->
    <div class="gallery-container">
      <div class="gallery">
        <div class="gallery-section">
          <div class="gallary-head">

            <div class="pr">GALLERY</div>
          </div>
          <div class="img-container">
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary1.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary2.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary3.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-imges p-1" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/hotel-hall-way-motel.jpg" alt="">
              </figure>
            </div>

          </div>
          <div class="img-container">
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary5.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary6.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary7.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-imges" style="
    box-shadow: 0 4px 15px 0 rgb(61 191 195 / 75%);
">
              <figure><img src="./img/gallary8.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- gallery-section end -->



  <!-- Blog section start  -->

  <div id="blog" class="blog-content">
    <div class="pr">BLOG</div>
    <p>Come To Life. Come To Lifestyle.</p>
  </div>

  <div class="container">

    <div class="cards grid-row">
      <div class="card">
        <div class="card-top">
          <img src="./img/room6.jpg" alt="Blog Name">
        </div>
        <div class="card-info">
          <h2>Luxury Room</h2>
          <span class="date">$50.00 / per night</span>
          <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="card-bottom flex-row">
          <!-- <a href="#" class="read-more">Read Full Blog</a> -->
          <a href="#" class="button btn-yellow">Room</a>
        </div>
      </div>
      <div class="card">
        <div class="card-top">
          <img src="./img/room4.jpg" alt="Blog Name">
        </div>
        <div class="card-info">
          <h2>Family Room</h2>
          <span class="date">$70.00 / per night</span>
          <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="card-bottom flex-row">
          <!-- <a href="#" class="read-more">Read Full Blog</a> -->
          <a href="#" class="button btn-sky">Room</a>
        </div>
      </div>
      <div class="card">
        <div class="card-top">
          <img src="./img/room5.jpg" alt="Blog Name">
        </div>
        <div class="card-info">
          <h2>Deluxe Room</h2>
          <span class="date">$90.00 / per night</span>
          <p class="excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="card-bottom flex-row">
          <!-- <a href="#" class="read-more">Read Full Blog</a> -->
          <a href="#" class="button btn-dpink">Room</a>
        </div>
      </div>


    </div>
  </div>
  </div>


  <!-- Blog section end  -->


  <div class="spce"></div>

  <!-- contact section start  -->

  <div id="contactus" class="contact-container">
    <div class="contact-head">
      <h2>Contact Us</h2>
    </div>
  </div>
  <section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <h2 class="text-gray-900 text-lg mb-1 font-bold text-4xl larg title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600  text-3xl ">Write Your Problem We Here....</p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600 text-2xl font-bold ">Email</label>
          <input type="email" id="email" id="default-input" style="font-size:1.5rem;" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-large outline-none text-large py-4 px-3 leading-8 transition-colors duration-200 ease-in-out" name="email">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm  text-2xl font-bold ">Message</label>
          <textarea id="message" style="font-size:1.5rem;" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none  py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" name="message"></textarea>
        </div>
        <button type="button" name="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg text-4xl">Submit</button>

      </div>
    </div>
  </section>



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
          <li><a href="./admin_taj/index.php"> Admin</a></li>

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

</body>

</html>