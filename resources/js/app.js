document.addEventListener("DOMContentLoaded", () => {
  let isVisible = true;
  let lastScrollY = 0;

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

    header.classList.toggle("translate-y-0", isVisible);
    header.classList.toggle("-translate-y-full", !isVisible);
  };

  window.addEventListener("scroll", controlNavbar);
});
