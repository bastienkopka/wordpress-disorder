/**
 * Allows you to open or close the mobile menu.
 */
function toggleNavigation() {
  const activeClass = 'active';
  const buttonMenu = document.querySelector('.header__toggle');
  const navigationClass = document.querySelector('.header__navigation');
  if (!buttonMenu && !navigationClass) {
    return;
  }

  buttonMenu.addEventListener('click', () => {
    if (!navigationClass.classList.contains(activeClass)) {
      navigationClass.classList.add(activeClass);
    }
    else {
      navigationClass.classList.remove(activeClass)
    }
  });
}

window.addEventListener("DOMContentLoaded", (e) => {
  toggleNavigation();
});