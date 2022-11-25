"use strict";

// active class toggle

function activeClassToggle(id1, id2) {
    const removeClassElement = document.getElementById(id1);
    const addClassElement = document.getElementById(id2);
    removeClassElement.classList.remove("active");
    addClassElement.classList.add("active");
}

function menuToggle(id) {
    const idArray = [
        "toggle_menu_bookings",
        "toggle_menu",
        "toggle_menu_my_ques",
    ];
    const filterId = idArray.filter((item) => item !== id);
    for (let i = 0; i < filterId.length; i++) {
        const element = document.getElementById(filterId[i]);
        element.classList.remove("active");
    }
    const menu = document.getElementById(id);
    menu.classList.toggle("active");
}

function chatToggle(id, id1) {
    const chatBox = document.getElementById(id);
    const chatIcon = document.getElementById(id1);
    chatBox.classList.toggle("active");
    if (chatIcon.classList.contains("fa-comment")) {
        chatIcon.classList.remove("fa-comment");
        chatIcon.classList.add("fa-times");
    } else {
        chatIcon.classList.remove("fa-times");
        chatIcon.classList.add("fa-comment");
    }
}

function expandVisaDoc(id) {
    $(document).ready(function () {
        $(`#${id}`).slideToggle();
    });
}

function renderVisaMenu(id, id2) {
    spinner();
    const navIdArray = ["visitNav", "businessNav", "touristNav", "allNav"];
    const arrayOfId = [
        "businessVisaDoc",
        "visitVisaDoc",
        "touristVisaDoc",
        "allDoc",
    ];
    for (let i = 0; i < navIdArray.length; i++) {
        const itemId = document.getElementById(navIdArray[i]);
        itemId.classList.remove("active");
    }
    for (let i = 0; i < arrayOfId.length; i++) {
        const itemId = document.getElementById(arrayOfId[i]);
        if (id === "allDoc") {
            itemId.classList.add("active");
            // console.log('active this');
        } else {
            itemId.classList.remove("active");
        }
    }
    const activeItem2 = document.getElementById(id2);
    activeItem2.classList.add("active");
    const activeItem = document.getElementById(id);
    activeItem.classList.add("active");
}

function spinner() {
    const id = document.getElementById("spinner");
    id.classList.add("active");
    setTimeout(() => {
        id.classList.remove("active");
    }, 500);
}
