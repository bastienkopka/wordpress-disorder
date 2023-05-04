/**
 * Allows you to open or close the mobile menu.
 */
function toggleNavigation() {
  const activeClass = 'open-menu';
  const toggleButton = document.querySelector('.header__toggle');
  const navigation = document.querySelector('.header__navigation');
  if (!toggleButton && !navigation) {
    return;
  }

  toggleButton.addEventListener('click', () => {
    if (!navigation.classList.contains(activeClass)) {
      navigation.classList.add(activeClass);
    }
    else {
      navigation.classList.remove(activeClass)
    }
  });
}

window.addEventListener("DOMContentLoaded", (e) => {
  toggleNavigation();
});