document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | Elements
    |--------------------------------------------------------------------------
    */

    const menuToggle =
        document.getElementById('menuToggle');

    const mobileMenu =
        document.getElementById('mobileMenu');

    const siteHeader =
        document.getElementById('siteHeader');

    const heroSection =
        document.querySelector('.hero-reference');

    const heroImage =
        document.querySelector('.hero-reference-bg img');

    const revealElements =
        document.querySelectorAll('.reveal-on-scroll');


    /*
    |--------------------------------------------------------------------------
    | MOBILE MENU
    |--------------------------------------------------------------------------
    */

    if (menuToggle && mobileMenu) {

        menuToggle.addEventListener(
            'click',
            function () {

                const isOpen =
                    mobileMenu.classList.toggle('open');

                menuToggle.classList.toggle(
                    'active',
                    isOpen
                );

                menuToggle.setAttribute(
                    'aria-expanded',
                    isOpen ? 'true' : 'false'
                );

            }
        );


        /*
        |--------------------------------------------------------------------------
        | Close menu after click
        |--------------------------------------------------------------------------
        */

        mobileMenu
            .querySelectorAll('a')
            .forEach(function (link) {

                link.addEventListener(
                    'click',
                    function () {

                        mobileMenu
                            .classList
                            .remove('open');

                        menuToggle
                            .classList
                            .remove('active');

                        menuToggle
                            .setAttribute(
                                'aria-expanded',
                                'false'
                            );

                    }
                );

            });


        /*
        |--------------------------------------------------------------------------
        | Outside click
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'click',
            function (event) {

                if (
                    mobileMenu.classList.contains('open') &&
                    !mobileMenu.contains(event.target) &&
                    !menuToggle.contains(event.target)
                ) {

                    mobileMenu
                        .classList
                        .remove('open');

                    menuToggle
                        .classList
                        .remove('active');

                    menuToggle
                        .setAttribute(
                            'aria-expanded',
                            'false'
                        );

                }

            }
        );


        /*
        |--------------------------------------------------------------------------
        | Escape key
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'keydown',
            function (event) {

                if (
                    event.key === 'Escape' &&
                    mobileMenu.classList.contains('open')
                ) {

                    mobileMenu
                        .classList
                        .remove('open');

                    menuToggle
                        .classList
                        .remove('active');

                    menuToggle
                        .setAttribute(
                            'aria-expanded',
                            'false'
                        );

                }

            }
        );

    }


    /*
    |--------------------------------------------------------------------------
    | STICKY HEADER
    |--------------------------------------------------------------------------
    */

    function headerScrollEffect() {

        if (!siteHeader) {
            return;
        }


        if (window.scrollY > 80) {

            siteHeader
                .classList
                .add('scrolled');

        } else {

            siteHeader
                .classList
                .remove('scrolled');

        }

    }


    window.addEventListener(
        'scroll',
        headerScrollEffect,
        {
            passive: true
        }
    );


    headerScrollEffect();


    /*
    |--------------------------------------------------------------------------
    | SMOOTH ANCHOR SCROLLING
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach(function (link) {

            link.addEventListener(
                'click',
                function (event) {

                    const targetId =
                        link.getAttribute('href');


                    if (
                        !targetId ||
                        targetId === '#'
                    ) {
                        return;
                    }


                    const target =
                        document.querySelector(
                            targetId
                        );


                    if (!target) {
                        return;
                    }


                    event.preventDefault();


                    const headerHeight =
                        siteHeader
                            ? siteHeader.offsetHeight
                            : 0;


                    const targetPosition =
                        target
                            .getBoundingClientRect()
                            .top
                        +
                        window.scrollY
                        -
                        headerHeight;


                    window.scrollTo({

                        top:
                            targetPosition,

                        behavior:
                            'smooth'

                    });

                }
            );

        });


    /*
    |--------------------------------------------------------------------------
    | HERO PARALLAX
    |--------------------------------------------------------------------------
    */

    let ticking = false;


    function heroParallax() {

        if (
            !heroSection ||
            !heroImage
        ) {
            return;
        }


        const heroRect =
            heroSection
                .getBoundingClientRect();


        const visible =
            heroRect.bottom > 0 &&
            heroRect.top < window.innerHeight;


        if (!visible) {
            return;
        }


        const scrolled =
            Math.max(
                0,
                -heroRect.top
            );


        const move =
            Math.min(
                scrolled * 0.035,
                16
            );


        heroImage.style.transform =
            `scale(1.045) translate3d(0, ${move}px, 0)`;

    }


    function requestHeroParallax() {

        if (ticking) {
            return;
        }


        window.requestAnimationFrame(
            function () {

                heroParallax();

                ticking = false;

            }
        );


        ticking = true;

    }


    if (
        heroSection &&
        heroImage
    ) {

        window.addEventListener(
            'scroll',
            requestHeroParallax,
            {
                passive: true
            }
        );


        heroParallax();

    }


    /*
    |--------------------------------------------------------------------------
    | SCROLL REVEAL
    |--------------------------------------------------------------------------
    */

    if (revealElements.length) {

        if (
            'IntersectionObserver'
            in window
        ) {

            const revealObserver =
                new IntersectionObserver(

                    function (
                        entries,
                        observer
                    ) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    entry.isIntersecting
                                ) {

                                    entry
                                        .target
                                        .classList
                                        .add(
                                            'is-visible'
                                        );


                                    observer
                                        .unobserve(
                                            entry.target
                                        );

                                }

                            }
                        );

                    },

                    {
                        threshold: 0.14,

                        rootMargin:
                            '0px 0px -40px 0px'
                    }

                );


            revealElements
                .forEach(
                    function (
                        element,
                        index
                    ) {

                        element
                            .style
                            .transitionDelay =
                                `${index * 70}ms`;


                        revealObserver
                            .observe(
                                element
                            );

                    }
                );

        } else {

            revealElements
                .forEach(
                    function (element) {

                        element
                            .classList
                            .add(
                                'is-visible'
                            );

                    }
                );

        }

    }


    /*
    |--------------------------------------------------------------------------
    | ACTIVE NAV LINK
    |--------------------------------------------------------------------------
    */

    const navLinks =
        document.querySelectorAll(
            '.desktop-nav .nav-link[href^="#"]'
        );


    const sections = [];


    navLinks.forEach(
        function (link) {

            const id =
                link.getAttribute('href');


            if (
                !id ||
                id === '#'
            ) {
                return;
            }


            const section =
                document.querySelector(id);


            if (section) {

                sections.push({

                    link:
                        link,

                    section:
                        section

                });

            }

        }
    );


    function updateActiveMenu() {

        if (!sections.length) {
            return;
        }


        const position =
            window.scrollY + 150;


        let current = null;


        sections.forEach(
            function (item) {

                if (
                    item
                        .section
                        .offsetTop
                    <=
                    position
                ) {

                    current = item;

                }

            }
        );


        if (!current) {
            return;
        }


        navLinks.forEach(
            function (link) {

                link
                    .classList
                    .remove('active');

            }
        );


        current
            .link
            .classList
            .add('active');

    }


    window.addEventListener(
        'scroll',
        updateActiveMenu,
        {
            passive: true
        }
    );


    updateActiveMenu();


    /*
    |--------------------------------------------------------------------------
    | RESIZE RESET
    |--------------------------------------------------------------------------
    */

    let resizeTimer;


    window.addEventListener(
        'resize',
        function () {

            clearTimeout(
                resizeTimer
            );


            resizeTimer =
                setTimeout(
                    function () {

                        if (
                            window.innerWidth > 1050 &&
                            mobileMenu &&
                            menuToggle
                        ) {

                            mobileMenu
                                .classList
                                .remove('open');

                            menuToggle
                                .classList
                                .remove('active');

                            menuToggle
                                .setAttribute(
                                    'aria-expanded',
                                    'false'
                                );

                        }


                        heroParallax();

                    },
                    120
                );

        }
    );

});