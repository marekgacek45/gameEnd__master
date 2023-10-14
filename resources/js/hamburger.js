const hamburgerBtn = document.querySelector('.hamburger');
const navDropdown = document.querySelector('#navbar-dropdown');

if (hamburgerBtn) {
  const navHandler = () => {
    console.log('ok');
    hamburgerBtn.classList.toggle('is-active');
    navDropdown.classList.toggle('nav-active');
    navDropdown.classList.toggle('hidden');
  }

  hamburgerBtn.addEventListener('click', navHandler);
}