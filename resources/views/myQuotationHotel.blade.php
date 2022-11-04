<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travel Freeby</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assetsh/css/welcome_css_.css" />
  </head>
  <body>
    <header>
        <nav class="fixed_menu">
            <div class="container">
              <div
                class="nav-wrapper d-flex align-items-center justify-content-between"
              >
                <a href="/" class="brand-logo">
                  <img src="assetsh/img/welcome_img/logo.webp" alt="" />
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a  href="/">Home</a></li>
                  <li onclick="menuToggle('toggle_menu')"  class="position-relative toggle_link"><a class="active d-inline-block"href="javascript:void(0)">take free quetation </a>
                    <button class="toggle_btn d-inline-block"><i class="fa fa-caret-down"></i></button>
                    <ul id="toggle_menu" class="toggle_menu position-absolute">
                        <li><a href="/user/leads/flights/create">flights</a></li>
                        <li><a href="/user/leads/hotels/create">hotels</a></li>
                        <li><a href="/user/leads/packages/create">packages</a></li>
                    </ul>
                    </li>

                    <li onclick="menuToggle('toggle_menu_my_ques')" class="position-relative toggle_link"><a class="active d-inline-block" href="javascript:void(0)">my quetation </a>
                        <button class="toggle_btn d-inline-block"><i class="fa fa-caret-down"></i></button>
                        <ul id="toggle_menu_my_ques" class="toggle_menu position-absolute">
                            <li><a href="/user/quetation/flights/create">flights</a></li>
                            <li><a href="/user/quetation/hotels/create">hotels</a></li>
                            <li><a href="/user/quetation/packages/create">packages</a></li>
                        </ul>
                        </li>
                    <li onclick="menuToggle('toggle_menu_bookings')" class="position-relative toggle_link"><a class="active d-inline-block"href="javascript:void(0)">my bookings </a>
                        <button class="toggle_btn d-inline-block"><i class="fa fa-caret-down"></i></button>
                        <ul id="toggle_menu_bookings" class="toggle_menu position-absolute">
                            <li><a href="/user/bookings/flights/create">flights</a></li>
                            <li><a href="/user/bookings/hotels/create">hotels</a></li>
                            <li><a href="/user/bookings/packages/create">packages</a></li>
                        </ul>
                        </li>
                  <li class=""><a href="/login">Log In</a></li>
                  <li class=""><a href="/register">Sign Up</a></li>
                </ul>
                <i onclick="menuToggle('nav-mobile')" class="fa fa-bars"></i>
              </div>
            </div>
          </nav>
      </header>

    <!-- travel section -->

    <section class="content container">
        <div class="search_form">
            <h2 class="heading_text"><strong>Quetation </strong> Flight Information</h2>

            <form action="" method="post">
                <label for="id">ID</label>
                <input id="id" type="text" placeholder="ID">
                <label for="lastName">Last Name</label>
                <input id="lastName" type="text" placeholder="Last Name">
                <button class="main_btn">Search</button>
            </form>
        </div>

        <div class="result mb-5">
            <h2 class="heading_text"><strong>Result </strong> Information</h2>

            <div class="result_info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit atque omnis cumque laboriosam laudantium quae accusantium velit laborum explicabo ex.</p>
            </div>
        </div>

    </section>



    <footer>

        <div class="container">
          <div class="row bottom_part">
            <div class="col-md-5">
              <img src="assetsh/img/welcome_img/logo.png" alt="logo">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, cupiditate.</p>
            </div>
            <div class="col-md-2">
              <ul>
                <li><a href="/services">Service</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/visa">Visa</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul>
                <li><a href="/terms">Teams and Conditions</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/cookie">Cookie Policy</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul>
                <li><a href="mailto:travelfreeby@gmail.com">travelfreeby@gmail.com</a></li>
                <li class="social">
                  <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                  <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr style="background: #fff;">
      <div class="text-center  copyright">
        <p class="mb-0">Copyright © 2022 Travel Freeby - A Product of EBMV LLP - All Rights Reserved.</p>
      </div>
      </footer>
     <!-- external section -->
     <div id="chat"  class="fixed_message">
      <div class="chat_container">
        <div class="chat_header">
          <h2>Travel Freeby</h2>
        </div>
        <div id="chat_input">
          <form action="" method="get">
            <input type="text" name="" id="" placeholder="Name">
            <input type="email" name="" id="" placeholder="Email">
            <textarea name="" id="" placeholder="How can we help?*"></textarea>
            <div class="text-center">
              <button type="submit">SEND</button>
            </div>
          </form>
          <p class="text-center">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
        </div>
      </div>
      <div class="chat_icon">
        <i id="chatIcon" onclick="chatToggle('chat','chatIcon')" class="fa fa-comment"></i>
      </div>
    </div>

    <script src="assetsh/js/welcome.js"></script>
  </body>
</html>
