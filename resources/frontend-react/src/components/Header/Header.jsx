import React, { useRef, useState } from "react";
import { Link } from "react-router-dom";
import { menuToggle } from "./eventHandle";

const Header = () => {
    // target dropdown menu
    const freeQuotationRef = useRef();
    const myQuotationsRef = useRef();
    const myBookingsRef = useRef();

    const [toggleMenu, setMenuToggle] = useState({
        freeQuotation: false,
        myQuotations: false,
        myBookings: false,
    });

    //
    window.addEventListener("click", (e) => {
        // if (
        //     e.target !== freeQuotationRef.current ||
        //     e.target !== myQuotationsRef.current ||
        //     e.target !== myBookingsRef.current
        // ) {
        //     setMenuToggle({
        //         freeQuotation: false,
        //         myQuotations: false,
        //         myBookings: false,
        //     });
        // }
        console.log(
            e.target === freeQuotationRef.current ||
          e.target === myQuotationsRef.current ||
          e.target === myBookingsRef.current
        );
    });

    return (
        <header>
            <nav className="fixed_menu">
                <div className="container">
                    <div className="nav-wrapper d-flex align-items-center justify-content-between">
                        <a href="/" className="brand-logo">
                            <img
                                src="assetsh/img/welcome_img/logo.webp"
                                alt=""
                            />
                        </a>
                        <ul
                            id="nav-mobile"
                            className="right hide-on-med-and-down"
                        >
                            <li
                                ref={freeQuotationRef}
                                onClick={() =>
                                    menuToggle(
                                        "freeQuotation",
                                        setMenuToggle,
                                        toggleMenu
                                    )
                                }
                                className="position-relative toggle_link"
                            >
                                <Link
                                    className="active d-inline-block"
                                    href="javascript:void(0)"
                                >
                                    Free Quotation
                                </Link>
                                <button className="toggle_btn d-inline-block">
                                    <i className="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu"
                                    className={`${
                                        toggleMenu.freeQuotation ? "active" : ""
                                    } toggle_menu position-absolute`}
                                >
                                    <li>
                                        <a href="/leadsFlightOut">flights</a>
                                    </li>
                                    <li>
                                        <a href="/leadsHotelOut">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/leadsPackagesOut">packages</a>
                                    </li>
                                </ul>
                            </li>

                            <li
                                    ref={myQuotationsRef}
                                onClick={() =>
                                    menuToggle(
                                        "myQuotations",
                                        setMenuToggle,
                                        toggleMenu
                                    )
                                }
                                className="position-relative toggle_link"
                            >
                                <Link
                                    className="active d-inline-block"
                                    href="javascript:void(0)"
                                >
                                    my Quotations
                                </Link>
                                <button className="toggle_btn d-inline-block">
                                    <i className="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu_my_ques"
                                    className={`${
                                        toggleMenu.myQuotations ? "active" : ""
                                    } toggle_menu position-absolute`}
                                >
                                    <li>
                                        <a href="/myQuotationFlight">flights</a>
                                    </li>
                                    <li>
                                        <a href="/myQuotationHotel">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/myQuotationPackages">
                                            packages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                    ref={myBookingsRef}
                                onClick={() =>
                                    menuToggle(
                                        "myBookings",
                                        setMenuToggle,
                                        toggleMenu
                                    )
                                }
                                className="position-relative toggle_link"
                            >
                                <Link
                                    className="active d-inline-block"
                                    href="javascript:void(0)"
                                >
                                    my bookings
                                </Link>
                                <button className="toggle_btn d-inline-block">
                                    <i className="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu_bookings"
                                    className={`${
                                        toggleMenu.myBookings ? "active" : ""
                                    } toggle_menu position-absolute`}
                                >
                                    <li>
                                        <a href="/myBookingflight">flights</a>
                                    </li>
                                    <li>
                                        <a href="/myBookinghotel">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/myBookingPackages">
                                            packages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li className="">
                                <a href="/customerLogin">Log In</a>
                            </li>
                            <li className="">
                                <a href="/customerRegister">Sign Up</a>
                            </li>
                        </ul>
                        <i
                            onClick={() => menuToggle("nav-mobile")}
                            className="fa fa-bars"
                        ></i>
                    </div>
                </div>
            </nav>
        </header>
    );
};

export default Header;
