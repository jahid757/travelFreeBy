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

        <link rel="stylesheet" href="assetsh/css/welcome_css_.css" />
        <script
            src="https://kit.fontawesome.com/4b5d72e539.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <header>
            <nav class="fixed_menu">
                <div class="container">
                    <div
                        class="nav-wrapper d-flex align-items-center justify-content-between"
                    >
                        <a href="/" class="brand-logo">
                            <img
                                src="assetsh/img/welcome_img/logo.webp"
                                alt=""
                            />
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li
                                onclick="menuToggle('toggle_menu')"
                                class="position-relative toggle_link"
                            >
                                <a
                                    class="active d-inline-block"
                                    href="javascript:void(0)"
                                    >Free Quotation
                                </a>
                                <button class="toggle_btn d-inline-block">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu"
                                    class="toggle_menu position-absolute"
                                >
                                    <li>
                                        <a href="/leadsFlightOut">flights</a>
                                    </li>
                                    <li><a href="/leadsHotelOut">hotels</a></li>
                                    <li>
                                        <a href="/leadsPackagesOut">packages</a>
                                    </li>
                                </ul>
                            </li>

                            <li
                                onclick="menuToggle('toggle_menu_my_ques')"
                                class="position-relative toggle_link"
                            >
                                <a
                                    class="active d-inline-block"
                                    href="javascript:void(0)"
                                    >my Quotations
                                </a>
                                <button class="toggle_btn d-inline-block">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu_my_ques"
                                    class="toggle_menu position-absolute"
                                >
                                    <li>
                                        <a href="/myQuotationFlight">flights</a>
                                    </li>
                                    <li>
                                        <a href="/myQuotationHotel">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/myQuotationPackages"
                                            >packages</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li
                                onclick="menuToggle('toggle_menu_bookings')"
                                class="position-relative toggle_link"
                            >
                                <a
                                    class="active d-inline-block"
                                    href="javascript:void(0)"
                                    >my bookings
                                </a>
                                <button class="toggle_btn d-inline-block">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu_bookings"
                                    class="toggle_menu position-absolute"
                                >
                                    <li>
                                        <a href="/myBookingflight">flights</a>
                                    </li>
                                    <li>
                                        <a href="/myBookinghotel">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/myBookingPackages"
                                            >packages</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="/customerLogin">Log In</a>
                            </li>
                            <li class="">
                                <a href="/customerRegister">Sign Up</a>
                            </li>
                        </ul>
                        <i
                            onclick="menuToggle('nav-mobile')"
                            class="fa fa-bars"
                        ></i>
                    </div>
                </div>
            </nav>
        </header>
        <!-- hero section end -->

        <div class="content"></div>
        <div class="container">
            <div class="visa_docs">
                <div class="top_navigation_menu">
                    <button
                        id="allNav"
                        onclick="renderVisaMenu('allDoc','allNav')"
                    >
                        All
                    </button>
                    <button
                        id="touristNav"
                        onclick="renderVisaMenu('touristVisaDoc','touristNav')"
                        class="active"
                    >
                        Tourist Visa
                    </button>
                    <button
                        id="businessNav"
                        onclick="renderVisaMenu('businessVisaDoc','businessNav')"
                    >
                        Business Visa
                    </button>
                    <button
                        id="visitNav"
                        onclick="renderVisaMenu('visitVisaDoc','visitNav')"
                    >
                        Visit Visa
                    </button>
                </div>

                <div class="menu_content p-2">
                    {{--
                    <h2><i class="fa fa-camera"></i> item</h2>
                    <h2><i class="fa fa-ticket"></i> item</h2>
                    <h2><i class="fa fa-file-lines"></i> item</h2>
                    <h2><i class="fa fa-file-lines"></i> item</h2>
                    <h2><i class="fa fa-file-invoice"></i> item</h2>
                    --}}

                    <div id="allDoc" class="default-font visa-requirement">
                        {{-- <h3 class="red">doc File is not ready</h3> --}}
                    </div>

                    <div
                        id="touristVisaDoc"
                        class="default-font visa-requirement active"
                    >
                        <h5 class="heading">
                            Following is the list of documents required for
                            Singapore Tourist visa for Indians.
                        </h5>
                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('passportDoc')"
                                class="d-flex align-items-center border-bottom justify-content-between single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-passport"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Passport</h5>
                                        <p>
                                            A passport is an official travel
                                            document issued by a government that
                                            contains a person's identity. A
                                            person with a passport can travel to
                                            and from foreign countries more
                                            easily and access consular
                                            assistance.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="passportDoc" class="note">
                                <div class="text">
                                    <h5>NOTE</h5>
                                </div>
                                <ol type="i">
                                    <li>It must be original and genuine.</li>
                                    <li>
                                        It must not be torn, split, ripped or
                                        damaged.
                                    </li>
                                    <li>
                                        It should have minimum two blank pages
                                        for Visa stamp.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('photoDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex">
                                    <div class="icon me-2">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <div class="text">
                                        <h5>PHOTO</h5>
                                        <p>
                                            The photo is provided to the
                                            authority so that you can be
                                            identified based on the same.
                                        </p>
                                    </div>
                                </div>
                                <i
                                    class="fa fa-chevron-right justify-content-right"
                                ></i>
                            </div>
                            <div id="photoDoc" class="note">
                                <div class="text">
                                    <h5>NOTE</h5>
                                </div>
                                <ol type="i">
                                    <li>Two matt-finished photographs.</li>
                                    <li>
                                        Coloured photographs with white
                                        background.
                                    </li>
                                    <li>It should be 35mm x 45mm in size.</li>
                                    <li>
                                        The photograph should not be older than
                                        3 months.
                                    </li>
                                    <li>The ears must be visible clearly.</li>
                                    <li>
                                        Any kind of glasses must not be worn in
                                        the photograph.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('ticketDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-ticket"></i>
                                    </div>
                                    <div class="text">
                                        <h5>AIR TICKET</h5>
                                        <p>
                                            An airline ticket is a document or
                                            electronic record, issued by an
                                            airline or a travel agency that
                                            confirms that an individual is
                                            entitled to a seat on a flight on an
                                            aircraft.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="ticketDoc" class="note">
                                <ol>
                                    <li>
                                        It must be confirmed for the complete
                                        round trip.
                                    </li>
                                </ol>
                                <p class="important">
                                    An Air ticket shows your itinerary of travel
                                    and confirms your return to native country.
                                </p>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('hotelDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-file-invoice"></i>
                                    </div>
                                    <div class="text">
                                        <h5>HOTEL VOUCHER</h5>
                                        <p>
                                            A confirmation of room reservation
                                            in hotel.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="hotelDoc" class="note">
                                <ol>
                                    <li>
                                        It contains information such as the
                                        guest's name, arrival date, duration of
                                        stay and the room reserved. Others might
                                        include the accommodation package and
                                        the type of service booked.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                class="d-flex align-items-center justify-content-between border-bottom"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <div class="text">
                                        <h5>VACCINATION</h5>
                                        <p>
                                            A valid vaccination certificate with
                                            passport number on it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                class="d-flex align-items-center justify-content-between border-bottom"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-building-columns"></i>
                                    </div>
                                    <div class="text">
                                        <h5>BANK STATEMENT</h5>
                                        <p>
                                            Updated Bank Statement of the last 3
                                            months for first-time travellers. If
                                            the applicant has travelled to
                                            Europe/USA/UK/Australia/New Zealand
                                            on a valid passport, then a bank
                                            statement is not required.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_doc_item mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('coverLetter')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-file-lines"></i>
                                    </div>
                                    <div class="text">
                                        <h5>COVER LETTER</h5>
                                        <p>
                                            The Cover Letter is a necessary part
                                            of your visa application because it
                                            is a way to introduce yourself, the
                                            reason why you want to travel to
                                            that specific country, as well as to
                                            communicate with the visa officers
                                            who are handling your application.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="coverLetter" class="note">
                                <p>
                                    <span class="important"
                                        >Important Note:</span
                                    >
                                </p>
                                <p>
                                    Embassy/Consulate reserves the right to ask
                                    for additional documents or personal
                                    appearance for an interview in special
                                    cases. Submission of the above-mentioned
                                    documents does not guarantee that a visa is
                                    granted, so It's recommended to get the
                                    professional visa consultation. Submission
                                    of incomplete documentation or refusal to
                                    appear for a special visa interview may
                                    result in the rejection of visa application.
                                </p>
                                <p>
                                    Although the information on this website has
                                    been prepared with utmost care. However,
                                    regulations and requirements are subject to
                                    change.
                                </p>
                                <p>
                                    Your visa will be granted two days before
                                    your departure date as we are processing
                                    visa as per departure dates.
                                </p>
                                <p>
                                    Singapore visas will be process within 1
                                    month prior to your departure date.
                                </p>
                                <p>
                                    If you wish to travel another country before
                                    your Singapore trip then immateriality
                                    inform us so that we can handover your
                                    passport on time & process your Singapore
                                    visa accordingly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        id="businessVisaDoc"
                        class="default-font visa-requirement"
                    >
                        <h5 class="heading">
                            Following is the list of documents required for
                            Singapore Tourist visa for Indians.
                        </h5>
                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('b_passportDoc')"
                                class="d-flex align-items-center border-bottom justify-content-between single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-passport"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Passport</h5>
                                        <p>
                                            A passport is an official travel
                                            document issued by a government that
                                            contains a person's identity. A
                                            person with a passport can travel to
                                            and from foreign countries more
                                            easily and access consular
                                            assistance.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="b_passportDoc" class="note">
                                <div class="text">
                                    <h5>NOTE</h5>
                                </div>
                                <ol type="i">
                                    <li>It must be original and genuine.</li>
                                    <li>
                                        It must not be torn, split, ripped or
                                        damaged.
                                    </li>
                                    <li>
                                        It should have minimum two blank pages
                                        for Visa stamp.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('b_photoDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex">
                                    <div class="icon me-2">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <div class="text">
                                        <h5>PHOTO</h5>
                                        <p>
                                            The photo is provided to the
                                            authority so that you can be
                                            identified based on the same.
                                        </p>
                                    </div>
                                </div>
                                <i
                                    class="fa fa-chevron-right justify-content-right"
                                ></i>
                            </div>
                            <div id="b_photoDoc" class="note">
                                <div class="text">
                                    <h5>NOTE</h5>
                                </div>
                                <ol type="i">
                                    <li>Two matt-finished photographs.</li>
                                    <li>
                                        Coloured photographs with white
                                        background.
                                    </li>
                                    <li>It should be 35mm x 45mm in size.</li>
                                    <li>
                                        The photograph should not be older than
                                        3 months.
                                    </li>
                                    <li>The ears must be visible clearly.</li>
                                    <li>
                                        Any kind of glasses must not be worn in
                                        the photograph.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('b_ticketDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-ticket"></i>
                                    </div>
                                    <div class="text">
                                        <h5>AIR TICKET</h5>
                                        <p>
                                            An airline ticket is a document or
                                            electronic record, issued by an
                                            airline or a travel agency that
                                            confirms that an individual is
                                            entitled to a seat on a flight on an
                                            aircraft.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="b_ticketDoc" class="note">
                                <ol>
                                    <li>
                                        It must be confirmed for the complete
                                        round trip.
                                    </li>
                                </ol>
                                <p class="important">
                                    An Air ticket shows your itinerary of travel
                                    and confirms your return to native country.
                                </p>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('b_hotelDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-file-invoice"></i>
                                    </div>
                                    <div class="text">
                                        <h5>COVERING LETTER FROM COMPANY</h5>
                                        <p>
                                            A covering letter from company is
                                            provided in the name of the employee
                                            if they are travelling to another
                                            country on behalf of company for
                                            business.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="b_hotelDoc" class="note">
                                <ol>
                                    <li>
                                        It should be issued on letterhead of
                                        company with official stamp and
                                        signature of the company.
                                    </li>
                                    <li>
                                        It must be mentioning the details of the
                                        traveller’s stay in the country.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('b_bankDoc')"
                                class="d-flex align-items-center justify-content-between single_doc_head border-bottom"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-building-columns"></i>
                                    </div>
                                    <div class="text">
                                        <h5>BANK STATEMENT</h5>
                                        <p>
                                            Your business bank statements are
                                            extremely important for your
                                            application because they show
                                            additional evidence that the
                                            information you provided about your
                                            company is reliable and you are a
                                            trustworthy applicant.
                                        </p>
                                    </div>
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                            <div id="b_bankDoc" class="note">
                                <ol>
                                    <li>
                                        It must be indicating a balance of min.
                                        INR 30,000/- per person.
                                    </li>
                                    <li>
                                        It should have the Bank’s stamp and
                                        signature on every page.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('b_coverLetter')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-file-lines"></i>
                                    </div>
                                    <div class="text">
                                        <h5>INVITATION LETTER FROM COMPANY</h5>
                                        <p>
                                            A Business Invitation Letter is a
                                            formal way of reaching out to a
                                            company, a group of people, or an
                                            individual to attend an event or the
                                            meeting you are going to host.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="b_coverLetter" class="note">
                                <ol>
                                    <li>
                                        It must mention the contact details,
                                        motive of travel and other important
                                        document.
                                    </li>
                                    <li>
                                        It must contain the signature of the
                                        officials along with designations, stamp
                                        and name of the company.
                                    </li>
                                </ol>
                                <p>
                                    <span class="important"
                                        >Important Note:</span
                                    >
                                </p>
                                <p>
                                    Embassy/Consulate reserves the right to ask
                                    for additional documents or personal
                                    appearance for an interview in special
                                    cases. Submission of the above-mentioned
                                    documents does not guarantee that a visa is
                                    granted, so It's recommended to get the
                                    professional visa consultation. Submission
                                    of incomplete documentation or refusal to
                                    appear for a special visa interview may
                                    result in the rejection of visa application.
                                </p>
                                <p>
                                    Although the information on this website has
                                    been prepared with utmost care. However,
                                    regulations and requirements are subject to
                                    change.
                                </p>
                                <p>
                                    Your visa will be granted two days before
                                    your departure date as we are processing
                                    visa as per departure dates.
                                </p>
                                <p>
                                    Singapore visas will be process within 1
                                    month prior to your departure date.
                                </p>
                                <p>
                                    If you wish to travel another country before
                                    your Singapore trip then immateriality
                                    inform us so that we can handover your
                                    passport on time & process your Singapore
                                    visa accordingly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        id="visitVisaDoc"
                        class="default-font visa-requirement"
                    >
                        <h5 class="heading">
                            Following is the list of documents required for
                            Singapore Tourist visa for Indians.
                        </h5>
                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('v_passportDoc')"
                                class="d-flex align-items-center border-bottom justify-content-between single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-passport"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Passport</h5>
                                        <p>
                                            A passport is an official travel
                                            document issued by a government that
                                            contains a person's identity. A
                                            person with a passport can travel to
                                            and from foreign countries more
                                            easily and access consular
                                            assistance.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="v_passportDoc" class="note">
                                <div class="text">
                                    <h5>NOTE</h5>
                                </div>
                                <ol type="i">
                                    <li>It must be original and genuine.</li>
                                    <li>
                                        It must not be torn, split, ripped or
                                        damaged.
                                    </li>
                                    <li>
                                        It should have minimum two blank pages
                                        for Visa stamp.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('v_photoDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex">
                                    <div class="icon me-2">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <div class="text">
                                        <h5>PHOTO</h5>
                                        <p>
                                            The photo is provided to the
                                            authority so that you can be
                                            identified based on the same.
                                        </p>
                                    </div>
                                </div>
                                <i
                                    class="fa fa-chevron-right justify-content-right"
                                ></i>
                            </div>
                            <div id="v_photoDoc" class="note">
                                <div class="text">
                                    <h5>NOTE</h5>
                                </div>
                                <ol type="i">
                                    <li>Two matt-finished photographs.</li>
                                    <li>
                                        Coloured photographs with white
                                        background.
                                    </li>
                                    <li>It should be 35mm x 45mm in size.</li>
                                    <li>
                                        The photograph should not be older than
                                        3 months.
                                    </li>
                                    <li>The ears must be visible clearly.</li>
                                    <li>
                                        Any kind of glasses must not be worn in
                                        the photograph.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('v_ticketDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-ticket"></i>
                                    </div>
                                    <div class="text">
                                        <h5>AIR TICKET</h5>
                                        <p>
                                            An airline ticket is a document or
                                            electronic record, issued by an
                                            airline or a travel agency that
                                            confirms that an individual is
                                            entitled to a seat on a flight on an
                                            aircraft.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="v_ticketDoc" class="note">
                                <ol>
                                    <li>
                                        It must be confirmed for the complete
                                        round trip.
                                    </li>
                                </ol>
                                <p class="important">
                                    An Air ticket shows your itinerary of travel
                                    and confirms your return to native country.
                                </p>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-file-invoice"></i>
                                    </div>
                                    <div class="text">
                                        <h5>COVER LETTER FROM APPLICANT</h5>
                                        <p>
                                            The Cover Letter is a necessary part
                                            of your visa application because it
                                            is a way to introduce yourself, the
                                            reason why you want to travel to
                                            that specific country, as well as to
                                            communicate with the visa officers
                                            who are handling your application.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('v_bankDoc')"
                                class="d-flex align-items-center justify-content-between border-bottom"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-building-columns"></i>
                                    </div>
                                    <div class="text">
                                        <h5>BANK STATEMENT</h5>
                                        <p>
                                            You must submit 3 months of bank
                                            statements that clearly show your
                                            monthly salary and financial
                                            commitments.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="v_bankDoc" class="note">
                                <ol>
                                    <li>
                                        There must not be any large amount of
                                        deposit other than your salary.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="single_doc_item border-bottom mb-3 ms-2">
                            <div
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-share"></i>
                                    </div>
                                    <div class="text">
                                        <h5>
                                            INVITATION LETTER FROM FRIEND/FAMILY
                                        </h5>
                                        <p>
                                            An invitation letter from
                                            Family/Friend is a document that
                                            allows you travel to another country
                                            on an invitation from your
                                            familiarity (acquaintance).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_doc_item mb-3 ms-2">
                            <div
                                onclick="expandVisaDoc('v_coverLetter')"
                                class="d-flex align-items-center justify-content-between border-bottom single_doc_head"
                            >
                                <div class="d-flex me-2">
                                    <div class="icon">
                                        <i class="fa fa-file-lines"></i>
                                    </div>
                                    <div class="text">
                                        <h5>PASSPORT COPY OF INVITE</h5>
                                        <p>
                                            A passport is an official travel
                                            document issued by a government that
                                            contains a person's identity. A
                                            person with a passport can travel to
                                            and from foreign countries more
                                            easily and access consular
                                            assistance.
                                        </p>
                                    </div>
                                </div>
                                <i class="fa fa-chevron-right"></i>
                            </div>
                            <div id="v_coverLetter" class="note">
                                <ol>
                                    <li>It should be valid.</li>
                                    <li>
                                        It must be provide as identification
                                        proof of invitee.
                                    </li>
                                </ol>
                                <p>
                                    <span class="important"
                                        >Important Note:</span
                                    >
                                </p>
                                <p>
                                    Embassy/Consulate reserves the right to ask
                                    for additional documents or personal
                                    appearance for an interview in special
                                    cases. Submission of the above-mentioned
                                    documents does not guarantee that a visa is
                                    granted, so It's recommended to get the
                                    professional visa consultation. Submission
                                    of incomplete documentation or refusal to
                                    appear for a special visa interview may
                                    result in the rejection of visa application.
                                </p>
                                <p>
                                    Although the information on this website has
                                    been prepared with utmost care. However,
                                    regulations and requirements are subject to
                                    change.
                                </p>
                                <p>
                                    Your visa will be granted two days before
                                    your departure date as we are processing
                                    visa as per departure dates.
                                </p>
                                <p>
                                    Singapore visas will be process within 1
                                    month prior to your departure date.
                                </p>
                                <p>
                                    If you wish to travel another country before
                                    your Singapore trip then immateriality
                                    inform us so that we can handover your
                                    passport on time & process your Singapore
                                    visa accordingly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section start -->

        <footer>
            <div class="container">
                <div class="row bottom_part">
                    <div class="col-md-5">
                        <img
                            src="assetsh/img/welcome_img/logo.png"
                            alt="logo"
                        />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Adipisci, cupiditate.
                        </p>
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
                            <li>
                                <a href="mailto:travelfreeby@gmail.com"
                                    >travelfreeby@gmail.com</a
                                >
                            </li>
                            <li class="social">
                                <a href="https://facebook.com"
                                    ><i class="fa fa-facebook"></i
                                ></a>
                                <a href="https://twitter.com"
                                    ><i class="fa fa-twitter"></i
                                ></a>
                                <a href="https://linkedin.com"
                                    ><i class="fa fa-linkedin"></i
                                ></a>
                                <a href="https://instagram.com"
                                    ><i class="fa fa-instagram"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr style="background: #fff" />
            <div class="text-center copyright">
                <p class="mb-0">
                    Copyright © 2022 Travel Freeby - A Product of EBMV LLP - All
                    Rights Reserved.
                </p>
            </div>
        </footer>

        <div id="spinner" class="spinner">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="assetsh/js/welcome.js"></script>
    </body>
</html>
