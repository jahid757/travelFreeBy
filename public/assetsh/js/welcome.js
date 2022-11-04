"use strict";

// active class toggle

function activeClassToggle(id1, id2) {
    const removeClassElement = document.getElementById(id1);
    const addClassElement = document.getElementById(id2);
    removeClassElement.classList.remove("active");
    addClassElement.classList.add("active");
}

function menuToggle(id) {
    const idArray = ['toggle_menu_bookings','toggle_menu','toggle_menu_my_ques'];
    const filterId = idArray.filter((item) => item !== id);
    for (let i = 0; i < filterId.length; i++) {
        const element = document.getElementById(filterId[i]);
        element.classList.remove('active')
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
