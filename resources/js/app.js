import { DateTime } from "luxon";

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

document.addEventListener("DOMContentLoaded", () => {
  const targetTime = DateTime.fromISO("2025-09-10").setZone("Asia/Jakarta");

  const countdownElements = document.querySelectorAll(".countdown");

  const daysElements = document.querySelectorAll(".day");
  const hoursElements = document.querySelectorAll(".hour");
  const minutesElements = document.querySelectorAll(".minute");
  const secondsElements = document.querySelectorAll(".second");

  if (!daysElements || !hoursElements || !minutesElements || !secondsElements) {
    console.error("Elemen countdown tidak ditemukan di DOM.");
    return;
  }

  const updateCountdown = () => {
    const currentTime = DateTime.now().setZone("Asia/Jakarta");
    const diff = targetTime.toUnixInteger() - currentTime.toUnixInteger();

    const days = Math.floor(diff / 86400);
    const hours = Math.floor((diff % 86400) / 3600);
    const minutes = Math.floor((diff % 3600) / 60);
    const seconds = Math.floor(diff % 60);

    daysElements.forEach(
      (element) => (element.textContent = days < 10 ? "0" + days : days)
    );
    hoursElements.forEach(
      (element) => (element.textContent = hours < 10 ? "0" + hours : hours)
    );
    minutesElements.forEach(
      (element) =>
        (element.textContent = minutes < 10 ? "0" + minutes : minutes)
    );
    secondsElements.forEach(
      (element) =>
        (element.textContent = seconds < 10 ? "0" + seconds : seconds)
    );
  };
  const updateAllCountdowns = () => {
    countdownElements.forEach((countdown) => updateCountdown(countdown));
  };

  updateAllCountdowns();
  const interval = setInterval(updateAllCountdowns, 1000);

  window.addEventListener("beforeunload", () => clearInterval(interval));
});

document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector("#nav-button");
  const navMobile = document.querySelector("#nav-mobile");
  const anchor = document.querySelectorAll(".nav-mobile");

  if (!button || !navMobile) {
    console.error("Button not found");
    return;
  }
  button.addEventListener("click", () => {
    const isVisible = navMobile.classList.contains("top-[4.5rem]");
    if (isVisible) {
      navMobile.classList.remove("top-[4.5rem]");
      navMobile.classList.add("-top-[20rem]");
    } else {
      navMobile.classList.remove("-top-[20rem]");
      navMobile.classList.add("top-[4.5rem]");
    }
  });
  anchor.forEach((a) =>
    a.addEventListener("click", () => {
      navMobile.classList.remove("top-[4.5rem]");
      navMobile.classList.add("-top-[20rem]");
    })
  );
});
