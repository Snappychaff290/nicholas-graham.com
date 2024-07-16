document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
    const headerLinks = document.querySelector(".header-links");

    mobileMenuToggle.addEventListener("click", function () {
        headerLinks.classList.toggle("active");
    });
});
