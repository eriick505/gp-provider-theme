// MENU MOBILE
const buttonMenuMobileEl = document.querySelector('[data-js="menuMobile"]');
const navMenuEl = document.querySelector('[data-js="navMenu"]');

if (buttonMenuMobileEl && navMenuEl) {
  buttonMenuMobileEl.addEventListener("click", () => {
    const mobileActive = "mobileActive";

    buttonMenuMobileEl.classList.toggle(mobileActive);
    navMenuEl.classList.toggle(mobileActive);
  });
}

window.addEventListener("load", () => {
  const isMobile = window.innerWidth <= 1024;

  if (isMobile && navMenuEl) {
    navMenuEl.classList.add("mobileNavbar");
  }
});

// COLLAPSE
const collapseListEl = document.querySelector('[data-js="collapseList"]');

collapseListEl.addEventListener("click", (event) => {
  event.preventDefault();

  const target = event.target;
  const dataTarget = "data-target";

  if (target.hasAttribute(dataTarget)) {
    const dataValue = target.getAttribute(dataTarget);
    const collapseContentEl = document.querySelector(dataValue);
    const btnIconEl = target.querySelector(".icon");

    if (collapseContentEl) {
      collapseContentEl.classList.toggle("active");
    }

    if (btnIconEl) {
      btnIconEl.classList.toggle("active");
    }
  }
});
