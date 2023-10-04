function toggleMenu() {
    var menuList = document.querySelector('.header_menu_list');
    var overlay = document.getElementById('overlay');
    var body = document.body;

    if (menuList.style.display === 'block') {
        menuList.style.display = 'none';
        overlay.style.display = 'none';
        body.classList.remove('locked');
    } else {
        menuList.style.display = 'block';
        overlay.style.display = 'block';
        body.classList.add('locked');
    }
}

document.addEventListener("DOMContentLoaded", function() {
  var menuBtn = document.querySelector('.menu-btn');
  var overlay = document.getElementById('overlay');

  menuBtn.addEventListener('click', toggleMenu);
  overlay.addEventListener('click', closeMenu);

  function closeMenu() {
    var menuList = document.querySelector('.header_menu_list');
    var overlay = document.getElementById('overlay');
    var body = document.body;

    menuList.style.display = 'none';
    overlay.style.display = 'none';
    body.classList.remove('locked');
}
});


document.addEventListener("DOMContentLoaded", function() {
  var menuBtn = document.querySelector('.menu-btn');
  menuBtn.addEventListener('click', toggleMenu);

  function toggleMenu() {
    var menuBtn = document.querySelector('.menu-btn');
    var menuList = document.querySelector('.header_menu_list');
    var overlay = document.getElementById('overlay');
    var body = document.body;

    if (menuBtn.classList.contains('active')) {
        menuBtn.classList.remove('active');
        menuList.style.display = 'none';
        overlay.style.display = 'none';
        body.classList.remove('locked');
    } else {
        menuBtn.classList.add('active');
        menuList.style.display = 'block';
        overlay.style.display = 'block';
        body.classList.add('locked');
    }
  }
});


var logo = document.querySelector(".attachment-full");
var header = document.querySelector("header");

function updateLogoSize() {
  if (window.innerWidth <= 425) {
    if (window.scrollY > 0) {
      logo.style.width = "56px";
      logo.style.height = "56px";
      header.style.borderBottom = "2px solid #E5E5E5";
      header.style.background = "#FFF";
    } else {
      logo.style.width = "86px";
      logo.style.height = "86px";
    }
  } else {
    if (window.scrollY > 0) {
      logo.style.width = "72px";
      logo.style.height = "74px";
      header.style.borderBottom = "2px solid #E5E5E5";
      header.style.background = "#FFF";
    } else {
      logo.style.width = "104px";
      logo.style.height = "104px";
    }
  }
}

window.addEventListener("load", updateLogoSize);
window.addEventListener("scroll", updateLogoSize);
window.addEventListener("resize", updateLogoSize);

