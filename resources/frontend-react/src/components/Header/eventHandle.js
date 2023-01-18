export const menuToggle = (indicator, setMenuToggle) => {
    if (indicator === "freeQuotation") {
        setMenuToggle({
            freeQuotation: true,
            myQuotations: false,
            myBookings: false,
        });
    } else if (indicator === "myQuotations") {
        setMenuToggle({
            freeQuotation: false,
            myQuotations: true,
            myBookings: false,
        });
    } else {
        setMenuToggle({
            freeQuotation: false,
            myQuotations: false,
            myBookings: true,
        });
    }
};
