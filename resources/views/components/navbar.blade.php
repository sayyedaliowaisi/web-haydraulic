<header class="site-header" id="siteHeader">

    {{-- =====================================================
         TOP CONTACT BAR
    ====================================================== --}}

    <div class="top-bar">

        <div class="top-bar-inner">

            <div class="top-bar-left">

                <span>
                    Premium Hydraulic Solutions
                </span>

            </div>


            <div class="top-bar-right">

                <a href="mailto:info@webhydraulic.com">

                    <span>✉</span>

                    info@webhydraulic.com

                </a>


                <a href="tel:+919876543210">

                    <span>☎</span>

                    +91 98765 43210

                </a>

            </div>

        </div>

    </div>


    {{-- =====================================================
         MAIN NAVBAR
    ====================================================== --}}

    <div class="main-navbar">

        <div class="navbar-shell">

            {{-- LOGO --}}
            <a
                href="{{ route('home') }}"
                class="brand"
            >

                <div class="brand-logo">

                    <img
                        src="{{ asset('images/logo/logo.png') }}"
                        alt="Web Hydraulic Logo"
                    >

                </div>


                <span class="brand-name">
                    WEB HYDRAULIC
                </span>

            </a>


            {{-- DESKTOP MENU --}}
            <nav class="desktop-nav">

                <a
                    href="#home"
                    class="nav-link active"
                >
                    Home
                </a>


                <a
                    href="#products"
                    class="nav-link nav-dropdown"
                >

                    Products

                    <span class="chevron">
                        ⌄
                    </span>

                </a>


                <a
                    href="#services"
                    class="nav-link nav-dropdown"
                >

                    Services

                    <span class="chevron">
                        ⌄
                    </span>

                </a>


                <a
                    href="#industries"
                    class="nav-link nav-dropdown"
                >

                    Industries

                    <span class="chevron">
                        ⌄
                    </span>

                </a>


                <a
                    href="#about"
                    class="nav-link"
                >
                    About Us
                </a>


                <a
                    href="#contact"
                    class="nav-link"
                >
                    Contact
                </a>

            </nav>


            {{-- RIGHT SIDE --}}
            <div class="navbar-right">

                <button
                    class="search-btn"
                    type="button"
                    aria-label="Search"
                >

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                        ></circle>

                        <line
                            x1="16.2"
                            y1="16.2"
                            x2="21"
                            y2="21"
                        ></line>

                    </svg>

                </button>


                <a
                    href="#contact"
                    class="quote-btn"
                >

                    Get a Quote

                    <span class="quote-arrow">
                        →
                    </span>

                </a>

            </div>


            {{-- MOBILE MENU BUTTON --}}
            <button
                id="menuToggle"
                class="menu-toggle"
                type="button"
                aria-label="Open Menu"
                aria-expanded="false"
            >

                <span></span>
                <span></span>
                <span></span>

            </button>

        </div>

    </div>


    {{-- =====================================================
         MOBILE MENU
    ====================================================== --}}

    <div
        class="mobile-menu"
        id="mobileMenu"
    >

        <a href="#home">
            Home
        </a>

        <a href="#products">
            Products
        </a>

        <a href="#services">
            Services
        </a>

        <a href="#industries">
            Industries
        </a>

        <a href="#about">
            About Us
        </a>

        <a href="#contact">
            Contact
        </a>


        <a
            href="#contact"
            class="mobile-quote"
        >
            Get a Quote →
        </a>

    </div>

</header>