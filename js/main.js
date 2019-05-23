//hamburger function
const icon = document.getElementsByClassName('icon');
for (let i = 0; i < icon.length; i++){
    icon[i].addEventListener('click', function () {
        icon[i].classList.toggle("active");
    });
};
 
