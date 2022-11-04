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
    <section class="content mb-5">
        <div class="head_title">
            <h2>FREQUENTLY ASKED QUESTIONS</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card_view text-center">
                        <p class="title">Why should we use a travel company?</p>
                        <p class="text">Even in the age of online booking, travel companies are a great source of information and discounts. We help you Create spend limits and restrict class of travel for greater budget control, Access corporate deals on flights, hotels and car hire (international and domestic).</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card_view border_both  text-center">
                        <p class="title">Will I pay more if I book through a travel company?</p>
                        <p class="text">Our fees are transparent. In many cases, you save more than you spend. We can work within your budget, and we always focus on making sure that you get a solid value in return for our fees. </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card_view text-center">
                        <p class="title">Do you book group travel?</p>
                        <p class="text">Yes! Do you have an upcoming conference for your business or a student trip? We can handle the details and ensure that you have access to group seating, entrances, and discounts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-5">
        <div class="container text-center">
            <h2 class="text-uppercase mb-5">CONTACT Us</h2>
            <h3>We'd love to hear from you!</h3>
            <p> Unit - 224, JMD Megapolis, Sohna Road, Sec - 48 Gurgaon  Haryana, India 122001</p>
            <p> Phone:- (0124) 4384563 Mobile - +91-9999360524  Email - <a href="mailto:info@travelfreeby.com">info@travelfreeby.com</a>  </p>
            <p class="whatsapp mt-4">
                <a style="display:inline-block;" href="https://wa.me/919999360524"
                  ><span
                    data-ux="Element"
                    class="x-el x-el-span c1-d0 c1-d1 c1-4p c1-d2 c1-63 c1-d3 c1-d4 c1-d5 c1-d6 c1-ci c1-c"
                    ><svg
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="24px"
                      height="24px"
                      data-ux="Icon"
                      class="x-el x-el-svg c1-34 c1-1e c1-2c c1-ci c1-c"
                    >
                      <svg
                      viewBox="0 0 496 497">
                        <defs>
                          <linearGradient
                            id="a"
                            x1="247.32"
                            x2="247.32"
                            y1="446.09"
                            y2="39.9"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop offset="0" stop-color="#20b038"></stop>
                            <stop offset="1" stop-color="#60d66a"></stop>
                          </linearGradient>
                          <linearGradient
                            id="b"
                            x1="247.32"
                            x2="247.32"
                            y1="453.37"
                            y2="32.61"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop offset="0" stop-color="#f9f9f9"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                          </linearGradient>
                        </defs>
                        <path
                          d="M37.88 453.37l29.59-108A208 208 0 0 1 39.63 241.1c0-115 93.6-208.49 208.56-208.49a208.57 208.57 0 0 1 208.57 208.66c-.05 115-93.62 208.49-208.57 208.49h-.08a208.41 208.41 0 0 1-99.67-25.38zm115.68-66.73l6.34 3.75a173.18 173.18 0 0 0 88.23 24.16h.06c95.55 0 173.31-77.75 173.35-173.3A173.34 173.34 0 0 0 248.26 67.83c-95.62 0-173.38 77.73-173.42 173.28a172.94 172.94 0 0 0 26.5 92.23l4.13 6.55L88 403.84z"
                        ></path>
                        <path
                          fill="url(#a)"
                          d="M45.13 446.09l28.57-104.3a200.82 200.82 0 0 1-26.88-100.62c0-111 90.36-201.27 201.34-201.27A201.35 201.35 0 0 1 449.5 241.32c0 111-90.37 201.28-201.33 201.28h-.09a201.31 201.31 0 0 1-96.21-24.49z"
                        ></path>
                        <path
                          fill="url(#b)"
                          d="M37.88 453.37l29.59-108A208 208 0 0 1 39.63 241.1c0-115 93.6-208.49 208.56-208.49a208.57 208.57 0 0 1 208.57 208.66c-.05 115-93.62 208.49-208.57 208.49h-.08a208.41 208.41 0 0 1-99.67-25.38zm115.68-66.73l6.34 3.75a173.18 173.18 0 0 0 88.23 24.16h.06c95.55 0 173.31-77.75 173.35-173.3A173.34 173.34 0 0 0 248.26 67.83c-95.62 0-173.38 77.73-173.42 173.28a172.94 172.94 0 0 0 26.5 92.23l4.13 6.55L88 403.84z"
                        ></path>
                        <path
                          fill="#fff"
                          d="M196.07 153.94c-3.91-8.68-8-8.85-11.73-9-3-.14-6.51-.13-10-.13a19.15 19.15 0 0 0-13.89 6.52c-4.78 5.22-18.24 17.82-18.24 43.46s18.67 50.42 21.28 53.9 36.05 57.77 89 78.66c44 17.36 53 13.91 62.53 13s30.83-12.61 35.18-24.78 4.34-22.59 3-24.77-4.78-3.48-10-6.08-30.83-15.22-35.61-16.95-8.25-2.61-11.73 2.61-13.45 16.94-16.5 20.42-6.08 3.92-11.29 1.31-22-8.11-41.9-25.86c-15.5-13.82-26-30.87-29-36.09s-.32-8 2.29-10.63c2.34-2.34 5.21-6.09 7.82-9.13s3.47-5.21 5.21-8.69.87-6.52-.44-9.13-11.35-28.34-15.98-38.64z"></path>
                      </svg></svg></span>
                  Message us on WhatsApp</a>
              </p>
              <p>JMD Megapolis, Sohna Road, Sector 48, Gurugram, Haryana, India</p>
        </div>
    </section>

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14001.011120287369!2d76.95720127897992!3d28.682084118370252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0f292e529ee1%3A0x4e037bd923885447!2sTikri%20Kalan%2C%20Bahadurgarh%2C%20Delhi%2C%20India!5e0!3m2!1sen!2sbd!4v1650977905683!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
