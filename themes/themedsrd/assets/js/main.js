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
      on();
    }
    else {
      navigation.classList.remove(activeClass)
      off();
    }
  });
}

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

function openSubmenu(){
 
  const menuButtons = document.querySelectorAll('.menu-item');
  const menuButtonsArray = Array.from(menuButtons);
  console.log(menuButtons);
  menuButtonsArray.forEach(button => {
    
    const subMenu = button.querySelector('.sub-menu-wrap');
    if (!subMenu){
      return;
    }
    button.addEventListener('click', () => {
      subMenu.classList.toggle('activated');

    })
  })
}

window.addEventListener("DOMContentLoaded", (e) => {
  toggleNavigation();
  openSubmenu();
});

