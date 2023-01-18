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
    const navIdArray = ["visitNav", "businessNav", "touristNav", "allNav", "workNav"];
    const arrayOfId = [
        "businessVisaDoc",
        "visitVisaDoc",
        "touristVisaDoc",
        "allDoc",
        "workVisaDoc"
    ];
    for (let i = 0; i < navIdArray.length; i++) {
        const itemId = document.getElementById(navIdArray[i]);
        if(itemId === undefined || itemId === null && navIdArray[i] === 'workNav'){
            console.log('')
        }else{
            itemId.classList.remove("active");
        }
    }
    for (let i = 0; i < arrayOfId.length; i++) {
        const itemId = document.getElementById(arrayOfId[i]);
        if(itemId === undefined || itemId === null){
            console.log('');
            // throw new Error('Error Is created by developer')
        } else if (id === "allDoc") {
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

function handleActiveClassToggle(id) {
    const element = document.getElementById(id);
    element.classList.toggle("active");
}

document.onclick = function (e) {
    if (
        e.target.id !== "popupFormBox" &&
        e.target.id !== "popupFormBtn" &&
        e.target.parentNode.parentNode.parentNode.id !== "popupFormBox" &&
        e.target.parentNode.id !== "popupFormBox"
    ) {
        document.getElementById("popupForm").classList.remove("active");
    }

    if (
        e.target.parentNode.id !== "freeQuotation" &&
        e.target.parentNode.id !== "myQuotation" &&
        e.target.parentNode.id !== "myBookings"
    ) {
        const idArray = [
            "toggle_menu_bookings",
            "toggle_menu",
            "toggle_menu_my_ques",
        ];
        for (let i = 0; i < idArray.length; i++) {
            const element = document.getElementById(idArray[i]);
            element.classList.remove("active");
        }
    }
    if (
        e.target.id !== "chatIcon" &&
        e.target.id !== "chat" &&
        e.target.parentNode.id !== "chat" &&
        e.target.parentNode.parentNode.id !== "chat" &&
        e.target.parentNode.parentNode.parentNode.id !== "chat" &&
        e.target.id !== "chat_input" &&
        e.target.parentNode.id !== "chat_input" &&
        e.target.parentNode.parentNode.id !== "chat_input"
    ) {
        const chatBox = document.getElementById("chat");
        const chatIcon = document.getElementById("chatIcon");
        chatBox.classList.remove("active");
        chatIcon.classList.remove("fa-times");
        chatIcon.classList.add("fa-comment");
    }
};


// navigate Visa page to single visa documents

function navigateVisaPage(e){
    const selectValue = document.getElementById('selectCountry').value;
    console.log(selectValue)
    switch(selectValue){
        case 'CA' :
            window.location.href = '/canadaVisa'
            break;
        case 'SG' :
            window.location.href = '/singaporeVisa'
            break;
        case 'TH' :
            window.location.href = '/thailandVisa'
            break;
        case 'US' :
            window.location.href = '/USAVisa'
            break;
        default:
            alert('This Visa page is Not ready yet !')
    }
}
