document.addEventListener("DOMContentLoaded", function () {

    const cartButton = document.getElementById("cart-toggle");

    const miniCart = document.getElementById("mini-cart");

    const overlay = document.querySelector(".mini-cart-overlay");

    const closeButton = document.querySelector(".mini-cart-close");

    if (!cartButton || !miniCart || !overlay || !closeButton) {
        return;
    }

    /* ===============================
       Open Mini Cart
    =============================== */

    cartButton.addEventListener("click", function (e) {

        e.preventDefault();

        miniCart.classList.add("open");

        overlay.classList.add("show");

        document.body.style.overflow = "hidden";

    });

    /* ===============================
       Close Button
    =============================== */

    closeButton.addEventListener("click", closeMiniCart);

    /* ===============================
       Overlay Click
    =============================== */

    overlay.addEventListener("click", closeMiniCart);

    /* ===============================
       ESC Key
    =============================== */

    document.addEventListener("keydown", function (e) {

        if (e.key === "Escape") {

            closeMiniCart();

        }

    });

    /* ===============================
       Close Function
    =============================== */

    function closeMiniCart() {

        miniCart.classList.remove("open");

        overlay.classList.remove("show");

        document.body.style.overflow = "";

    }

});