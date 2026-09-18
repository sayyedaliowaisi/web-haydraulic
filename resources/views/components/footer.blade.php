<footer class="site-footer" id="contact">

    <div class="footer-main">

        <div class="footer-container">

            {{-- BRAND / ABOUT --}}
            <div class="footer-col footer-brand">

                <a href="{{ route('home') }}" class="footer-logo-wrap">
                    <img
                        src="{{ asset('images/logo/logo.png') }}"
                        alt="Web Hydraulic"
                        class="footer-logo"
                    >

                    <span>WEB HYDRAULIC</span>
                </a>

                <p>
                    Your trusted source for quality hydraulic products,
                    reliable solutions and professional support.
                </p>

                <div class="footer-socials">

                    <a href="#" aria-label="Facebook">
                        <svg viewBox="0 0 24 24">
                            <path d="M14 8h3V4h-3c-3 0-5 2-5 5v3H6v4h3v5h4v-5h3l1-4h-4V9c0-.7.3-1 1-1z"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                            <circle cx="12" cy="12" r="4"></circle>
                            <circle cx="17.5" cy="6.5" r="1"></circle>
                        </svg>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 9v10"></path>
                            <path d="M5 5v.01"></path>
                            <path d="M9 19v-6a4 4 0 0 1 8 0v6"></path>
                            <path d="M9 9v10"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="YouTube">
                        <svg viewBox="0 0 24 24">
                            <path d="M22 12s0-4-1-6c-.5-1-1.5-1.5-2.5-1.7C16.8 4 12 4 12 4s-4.8 0-6.5.3C4.5 4.5 3.5 5 3 6c-1 2-1 6-1 6s0 4 1 6c.5 1 1.5 1.5 2.5 1.7C7.2 20 12 20 12 20s4.8 0 6.5-.3c1-.2 2-.7 2.5-1.7 1-2 1-6 1-6z"></path>
                            <path d="M10 9l5 3-5 3z"></path>
                        </svg>
                    </a>

                </div>

            </div>


            {{-- QUICK LINKS --}}
            <div class="footer-col">

                <h3>Quick Links</h3>

                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#industries">Industries</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>

            </div>


            {{-- PRODUCTS --}}
            <div class="footer-col">

                <h3>Our Products</h3>

                <ul class="footer-links">
                    <li><a href="#">Hydraulic Pumps</a></li>
                    <li><a href="#">Hydraulic Motors</a></li>
                    <li><a href="#">Hydraulic Valves</a></li>
                    <li><a href="#">Hydraulic Cylinders</a></li>
                    <li><a href="#">Hydraulic Hoses</a></li>
                    <li><a href="#">Spare Parts</a></li>
                </ul>

            </div>


            {{-- SERVICES --}}
            <div class="footer-col">

                <h3>Our Services</h3>

                <ul class="footer-links">
                    <li><a href="#">Repair &amp; Rebuild</a></li>
                    <li><a href="#">Testing &amp; Calibration</a></li>
                    <li><a href="#">Field Service</a></li>
                    <li><a href="#">Spare Parts Supply</a></li>
                </ul>

            </div>


            {{-- CONTACT --}}
            <div class="footer-col footer-contact">

                <h3>Contact Us</h3>

                <div class="footer-contact-item">

                    <span class="footer-contact-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s7-5 7-12a7 7 0 1 0-14 0c0 7 7 12 7 12z"></path>
                            <circle cx="12" cy="9" r="2.5"></circle>
                        </svg>
                    </span>

                    <p>
                        New Delhi, India
                    </p>

                </div>


                <div class="footer-contact-item">

                    <span class="footer-contact-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 4h4l2 5-3 2a15 15 0 0 0 5 5l2-3 5 2v4c0 1.1-.9 2-2 2C9.7 21 3 14.3 3 6c0-1.1.9-2 2-2z"></path>
                        </svg>
                    </span>

                    <a href="tel:+919876543210">
                        +91 98765 43210
                    </a>

                </div>


                <div class="footer-contact-item">

                    <span class="footer-contact-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <path d="M3 7l9 6 9-6"></path>
                        </svg>
                    </span>

                    <a href="mailto:info@webhydraulic.com">
                        info@webhydraulic.com
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- BOTTOM BAR --}}
    <div class="footer-bottom">

        <div class="footer-bottom-container">

            <p>
                © {{ date('Y') }} Web Hydraulic. All Rights Reserved.
            </p>

            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms &amp; Conditions</a>
            </div>

        </div>

    </div>

</footer>