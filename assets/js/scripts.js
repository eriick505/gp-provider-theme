// MENU MOBILE
const buttonMenuMobileEl = document.querySelector('[data-js="menuMobile"]');
const navMenuEl = document.querySelector('#navMenu');

if (buttonMenuMobileEl && navMenuEl) {
  buttonMenuMobileEl.addEventListener('click', () => {
    const mobileActive = 'mobileActive';

    buttonMenuMobileEl.classList.toggle(mobileActive);
    navMenuEl.classList.toggle(mobileActive);
  });
}

window.addEventListener('load', () => {
  const isMobile = window.innerWidth <= 1024;

  if (isMobile && navMenuEl) {
    navMenuEl.classList.add('mobileNavbar');
  }
});

// COLLAPSE
const collapseListEl = document.querySelectorAll('[data-js="collapseList"]');

if (collapseListEl.length) {
  collapseListEl.forEach(list => {
    list.addEventListener('click', event => {
      event.preventDefault();

      const target = event.target;
      const dataTarget = 'data-target';

      if (target.hasAttribute(dataTarget)) {
        const dataValue = target.getAttribute(dataTarget);
        const collapseContentEl = document.querySelector(dataValue);
        const btnIconEl = target.querySelector('.icon');

        if (collapseContentEl) {
          collapseContentEl.classList.toggle('active');
        }

        if (btnIconEl) {
          btnIconEl.classList.toggle('active');
        }
      }
    });
  });
}

function initModal() {
  const botaoAbrir = document.querySelector('[data-openModal="premios"]');
  const botaoFechar = document.querySelector('[data-modal="fechar"]');
  const containerModal = document.querySelector('[data-modal="premios"]');

  console.log(botaoAbrir);

  if (botaoAbrir && botaoFechar && containerModal) {
    function toggleModal(event) {
      event.preventDefault();
      containerModal.classList.toggle('active');
    }
    function cliqueForaModal(event) {
      if (event.target === this) {
        toggleModal(event);
      }
    }

    botaoAbrir.addEventListener('click', toggleModal);
    botaoFechar.addEventListener('click', toggleModal);
    containerModal.addEventListener('click', cliqueForaModal);
  }
}

initModal();
