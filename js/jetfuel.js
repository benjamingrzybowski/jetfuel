document.addEventListener("DOMContentLoaded", function () {

        var nav = document.getElementById('navigation');
        var content = document.getElementById('content');
        var navItems = nav.getElementsByTagName('a');
        var x = 0;

        nav.classList.add('white');     for(x = 0; x < navItems.length; x++) {
        navItems[x].style.color="black";
    }


        //vanilla JS helper function to determine element positions relative to viewport
        function offset(el) {
            var rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
        }

        window.addEventListener('scroll', function() {
            var navPos = offset(nav);
            var contentPos = offset(content);
            if (navPos.top > contentPos.top) {
                nav.classList.add('black');
                nav.classList.remove('white');
                for(x = 0; x < navItems.length; x++) {
                    navItems[x].style.color="white";
                }
            } else {
                nav.classList.add('white');
                nav.classList.remove('black');
                for(x = 0; x < navItems.length; x++) {
                    navItems[x].style.color="black";
                }
            }


        });


        //navigation script
//gathering elements to be worked with
        var navIcon = document.getElementById('nav-icon');
        var navMenu = document.getElementById('mobile-menu');
//on click event to trigger icon animation and menu item animations
        navIcon.onclick = function () {
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

    });
    