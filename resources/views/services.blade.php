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
            <h2>Corporate Travel</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card_view text-center">
                        <p class="title">Reduce Travel Costs</p>
                        <p class="text">We offer special discounted promo and corporate fares in flights. Special B2B pre-purchased hotel deals help corporates reduce travel costs.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card_view border_both text-center">
                        <p class="title">Store traveler profiles</p>
                        <p class="text">Our technology driven portal help you save traveler profiles along with loyalty memberships and traveler preferences helps increased efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card_view text-center">
                        <p class="title">Unparalleled Support</p>
                        <p class="text">We've got unparalleled customer support at your service. Our customer service team's response time helps you travel easy and smooth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <div class="head_title">
                <h2>Personalized Travel</h2>
            </div>
            <div class="row">
                <div class="col-md-4  mb-3">
                    <div class="card_view text-center">
                        <p class="title">Unique life experiences</p>
                        <p class="text">We specialize in offering once in a lifetime experiences that will create lasting memories.</p>
                    </div>
                </div>
                <div class="col-md-4  mb-3">
                    <div class="card_view border_both text-center">
                        <p class="title">Personalized trips</p>
                        <p class="text">Travel is different for everyone. We want to make sure that you are getting the most from your trip by crafting the dream vacation that is perfect for you.</p>
                    </div>
                </div>
                <div class="col-md-4  mb-3">
                    <div class="card_view text-center">
                        <p class="title">Incredible detail and service</p>
                        <p class="text">We've got your back. In the event something does come up. Our team is here to help make sure your trip is not interrupted.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- reviews -->

    <section class="reviews py-5">
      <div class="container">
        <div class="head_title">
          <h2>Reviews</h2>
        </div>

        <div class="ratting">
            <div class="d-flex align-items-center justify-content-center">
              <div class="number_ratting mx-2">
                <p class="d-flex align-items-center"><span><svg viewBox="0 0 24 24" fill="currentColor" width="48" height="48" data-ux="Icon" class="x-el x-el-svg c2-1 c2-2 c2-11 c2-r c2-s c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><circle cx="10" cy="10" r="9.5" fill="#F3F3F3" stroke="#CCC"></circle><g transform="translate(5.556 5.5)"><path fill="#4285F4" d="M8.494 4.375c0-.303-.028-.595-.079-.875H4.334v1.655h2.332c-.1.535-.406.988-.865 1.291V7.52h1.4c.82-.744 1.293-1.841 1.293-3.144z"></path><path fill="#34A853" d="M4.334 8.556c1.17 0 2.15-.383 2.868-1.037l-1.4-1.073c-.389.257-.885.408-1.468.408-1.129 0-2.084-.752-2.425-1.763H.46v1.108a4.338 4.338 0 0 0 3.873 2.357z"></path><path fill="#FBBC05" d="M1.909 5.09a2.542 2.542 0 0 1-.136-.812c0-.282.05-.556.136-.813V2.357H.46a4.231 4.231 0 0 0 0 3.842l1.448-1.108z"></path><path fill="#EA4335" d="M4.334 1.701c.636 0 1.207.216 1.656.64l1.243-1.227C6.483.424 5.502 0 4.333 0 2.64 0 1.175.959.462 2.357l1.448 1.108c.34-1.011 1.296-1.764 2.425-1.764z"></path></g></g></svg></span><span class="rate">4.3</span></p>
              </div>
              <div class="ratting_title mx-2">
                <h3>travel freeby</h3>
                <div class="d-flex">
                  <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg>

                <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg>
                <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg>
                <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg>
                <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-4"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="29.999999999999982%" stop-color="#FBCF1E"></stop><stop offset="29.999999999999982%" stop-color="rgb(224,224,224)"></stop><stop offset="100%" stop-color="rgb(224,224,224)"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-4)"></path></svg>
                </div>
                <p>3 reviews</p>
              </div>
            </div>
        </div>
        <div class="review_card">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-3 mb-4">
              <div class="card_view text-center">
                <img src="assetsh/img/welcome_img/user1.png" alt="">
                <div class="d-flex justify-content-center mb-3">
                  <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg>
                </div>
                <p class="review_text">
                  "Great discounts and
unbelievable prices :)"
                </p>
                <div class="date">
                  <div class="d-flex justify-content-center align-items-center">
                    <svg viewBox="0 0 24 24" fill="currentColor" width="28" height="28" data-ux="Icon" class="x-el x-el-svg c2-1 c2-2 c2-1d c2-r c2-s c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><circle cx="10" cy="10" r="9.5" fill="#F3F3F3" stroke="#CCC"></circle><g transform="translate(5.556 5.5)"><path fill="#4285F4" d="M8.494 4.375c0-.303-.028-.595-.079-.875H4.334v1.655h2.332c-.1.535-.406.988-.865 1.291V7.52h1.4c.82-.744 1.293-1.841 1.293-3.144z"></path><path fill="#34A853" d="M4.334 8.556c1.17 0 2.15-.383 2.868-1.037l-1.4-1.073c-.389.257-.885.408-1.468.408-1.129 0-2.084-.752-2.425-1.763H.46v1.108a4.338 4.338 0 0 0 3.873 2.357z"></path><path fill="#FBBC05" d="M1.909 5.09a2.542 2.542 0 0 1-.136-.812c0-.282.05-.556.136-.813V2.357H.46a4.231 4.231 0 0 0 0 3.842l1.448-1.108z"></path><path fill="#EA4335" d="M4.334 1.701c.636 0 1.207.216 1.656.64l1.243-1.227C6.483.424 5.502 0 4.333 0 2.64 0 1.175.959.462 2.357l1.448 1.108c.34-1.011 1.296-1.764 2.425-1.764z"></path></g></g></svg>
                    <p class="ms-3 mb-0"><strong>Vineet S -</strong> <span> 29/6/2016</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card_view  text-center">
                <img src="assetsh/img/welcome_img/user2.png" alt="">
                <div class="d-flex justify-content-center mb-3">
                  <svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating1-star-2"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="100%" stop-color="#FBCF1E"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating1-star-2)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating3-star-3"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="0%" stop-color="rgb(224,224,224)"></stop><stop offset="100%" stop-color="rgb(224,224,224)"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating3-star-3)"></path></svg><svg data-ux="SVG" viewBox="0 0 50 50" class="x-el x-el-svg c2-1 c2-2 c2-k c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><defs><linearGradient id="fillStyle-rating3-star-3"><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="0%" stop-color="#FBCF1E"></stop><stop offset="0%" stop-color="rgb(224,224,224)"></stop><stop offset="100%" stop-color="rgb(224,224,224)"></stop></linearGradient></defs><path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" fill="url(#fillStyle-rating3-star-3)"></path></svg>
                </div>
                <p class="review_text">
                  "(Translated by Google)
God (Original) Gud"
                </p>
                <div class="date">
                  <div class="d-flex justify-content-center align-items-center">
                    <svg viewBox="0 0 24 24" fill="currentColor" width="28" height="28" data-ux="Icon" class="x-el x-el-svg c2-1 c2-2 c2-1d c2-r c2-s c2-3 c2-4 c2-5 c2-6 c2-7 c2-8"><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><circle cx="10" cy="10" r="9.5" fill="#F3F3F3" stroke="#CCC"></circle><g transform="translate(5.556 5.5)"><path fill="#4285F4" d="M8.494 4.375c0-.303-.028-.595-.079-.875H4.334v1.655h2.332c-.1.535-.406.988-.865 1.291V7.52h1.4c.82-.744 1.293-1.841 1.293-3.144z"></path><path fill="#34A853" d="M4.334 8.556c1.17 0 2.15-.383 2.868-1.037l-1.4-1.073c-.389.257-.885.408-1.468.408-1.129 0-2.084-.752-2.425-1.763H.46v1.108a4.338 4.338 0 0 0 3.873 2.357z"></path><path fill="#FBBC05" d="M1.909 5.09a2.542 2.542 0 0 1-.136-.812c0-.282.05-.556.136-.813V2.357H.46a4.231 4.231 0 0 0 0 3.842l1.448-1.108z"></path><path fill="#EA4335" d="M4.334 1.701c.636 0 1.207.216 1.656.64l1.243-1.227C6.483.424 5.502 0 4.333 0 2.64 0 1.175.959.462 2.357l1.448 1.108c.34-1.011 1.296-1.764 2.425-1.764z"></path></g></g></svg>
                    <p class="ms-3 mb-0"><strong>rav inder -</strong> <span>20/1/2018</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
