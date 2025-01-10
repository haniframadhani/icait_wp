// Navigation toggle
window.addEventListener("load", function () {
  let main_navigation = document.querySelector("#primary-menu");
  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
  let isVisible = true;
  let lastScrollY = 0;

  // Ambil elemen <header> dari HTML
  const header = document.querySelector("header");

  if (!header) {
    console.error("Elemen <header> tidak ditemukan di halaman.");
    return;
  }

  const controlNavbar = () => {
    if (window.scrollY > lastScrollY) {
      isVisible = false;
    } else {
      isVisible = true;
    }
    lastScrollY = window.scrollY;

    // Update visibility dengan toggle kelas CSS
    header.classList.toggle("translate-y-0", isVisible);
    header.classList.toggle("-translate-y-full", !isVisible);
  };

  window.addEventListener("scroll", controlNavbar);
});
