//hamburger function
// opens the mobile menu
const icon = document.getElementsByClassName('icon');
const menuOpen = document.getElementById('mobile-menu-open');
for (let i = 0; i < icon.length; i++){
    icon[i].addEventListener('click', function () {
        icon[i].classList.toggle("active");
        if (menuOpen.style.opacity == "1") {
            menuOpen.style.opacity = '0';
            menuOpen.style.pointerEvents = 'none';
        } else {
            menuOpen.style.opacity = "1";
            menuOpen.style.pointerEvents = "auto";
        }
    });
};
 

