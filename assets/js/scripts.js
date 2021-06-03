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
  const buttonsOpenModal = document.querySelectorAll('[data-openModal]');

  buttonsOpenModal.forEach(button => {
    const attrBtn = button.getAttribute('data-openModal');

    button.addEventListener('click', event => {
      event.preventDefault();
      const modal = document.querySelector(`[data-modal=${attrBtn}]`);

      function toggleModal() {
        modal.classList.toggle('active');
      }
      toggleModal();

      function closeModal(event) {
        if (event.target === this) {
          toggleModal();
          this.removeEventListener('click', closeModal);

          return;
        }

        const isElementEqualBtn = event.target.tagName === 'BUTTON' || null;
        const containsCloseAttr = event.target.hasAttribute('data-close');

        if (isElementEqualBtn && containsCloseAttr) {
          toggleModal();
          this.removeEventListener('click', closeModal);

          return;
        }
      }

      modal.addEventListener('click', closeModal);
    });
  });
}

initModal();

(() => {
  if (!localStorage.acceptCookiesTerms) {
    document.querySelector('.box-cookies').classList.remove('hide');
  }

  const acceptCookies = () => {
    document.querySelector('.box-cookies').classList.add('hide');
    localStorage.setItem('acceptCookiesTerms', 'accept');
  };

  const btnCookies = document.querySelector('.btn-cookies');

  btnCookies.addEventListener('click', acceptCookies);
})();
