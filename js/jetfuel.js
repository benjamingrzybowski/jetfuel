document.addEventListener("DOMContentLoaded", function () {

    //navigation script
//gathering elements to be worked with
    var navIcon = document.getElementById('nav-icon');
    var navMenu = document.getElementById('mobile-menu');
//on click event to trigger icon animation and menu item animations
    navIcon.onclick = function() {
        if (navIcon.classList.contains('open') != true) {
            navIcon.classList.add('open');
            navMenu.classList.add('open-mobile-menu');

            var x = 0;
//reset everything on close
        } else {
            navIcon.classList.remove('open');
            navMenu.classList.remove('open-mobile-menu');

        }

    }

//slide menu script
//gathering elements to be worked with
    var slideMenuIcon = document.getElementById('slide-menu-icon');
    var slideMenu = document.getElementById('slide-menu');
//on click event to trigger icon animation and menu item animations
    slideMenuIcon.onclick = function() {
        if (slideMenuIcon.classList.contains('open-left') != true) {
            slideMenuIcon.classList.add('open-left');
            slideMenu.classList.add('open-slide-menu');

            var slideMenuItems = slideMenu.children;
            for (var i = 0; i < slideMenuItems.length; i++) {
                var tableChild = slideMenuItems[i];
                tableChild.classList.add('visible');

            }
//reset everything on close
        } else {
            slideMenuIcon.classList.remove('open-left');
            slideMenu.classList.remove('open-slide-menu');
            var slideMenuItems = slideMenu.children;
            for (var i = 0; i < slideMenuItems.length; i++) {
                var tableChild = slideMenuItems[i];
                tableChild.classList.remove('visible');
            }
        }
    }
});
    