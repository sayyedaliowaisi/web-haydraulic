@extends('layouts.app')


@section(
    'title',
    'Web Hydraulic | Hydraulic Solutions'
)


@section(
    'meta_description',
    'Reliable hydraulic products, systems and industrial solutions.'
)


@section('content')


{{-- =====================================================
     HERO
===================================================== --}}

<section
    class="hero-reference"
    id="home"
>

    <div class="hero-reference-bg">

        <img
            src="{{ asset('images/hero/hero-hydraulic.jpg') }}"
            alt="Hydraulic Systems"
        >

        <div class="hero-reference-overlay"></div>

    </div>


    <div class="hero-reference-inner">

        <div class="hero-reference-content">


            <div class="hero-small-title hero-reveal">

                <span></span>

                HYDRAULIC SOLUTIONS FOR A STRONGER TOMORROW

            </div>


            <h1
                class="
                    hero-reference-title
                    hero-reveal
                    hero-delay-1
                "
            >

                High-Performance

                <strong>
                    Hydraulic Systems
                </strong>

                <span>
                    for Every Industry
                </span>

            </h1>


            <p
                class="
                    hero-reference-text
                    hero-reveal
                    hero-delay-2
                "
            >

                We provide reliable hydraulic pumps, motors, valves,
                and spare parts with expert support and repair services
                to keep your machines running at their best.

            </p>


            <div
                class="
                    hero-reference-actions
                    hero-reveal
                    hero-delay-3
                "
            >

                <a
                    href="#products"
                    class="hero-yellow-btn"
                >

                    Explore Products

                    <span>
                        →
                    </span>

                </a>


                <a
                    href="#contact"
                    class="hero-dark-btn"
                >

                    Get a Quote

                </a>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     FEATURE STRIP
===================================================== --}}

<section class="reference-features">

    <div class="reference-features-inner">


        {{-- FEATURE 1 --}}
        <div
            class="
                reference-feature-item
                reveal-on-scroll
            "
        >

            <div class="reference-feature-icon">

                <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >

                    <path
                        d="M12 3L19 6V11C19 15.5 16.2 19.4 12 21C7.8 19.4 5 15.5 5 11V6L12 3Z"
                    ></path>

                    <path
                        d="M9 12L11 14L15 10"
                    ></path>

                </svg>

            </div>


            <div>

                <h3>
                    Quality Assured
                </h3>

                <p>
                    Only genuine & tested products
                </p>

            </div>

        </div>


        {{-- FEATURE 2 --}}
        <div
            class="
                reference-feature-item
                reveal-on-scroll
            "
        >

            <div class="reference-feature-icon">

                <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >

                    <circle
                        cx="12"
                        cy="12"
                        r="3"
                    ></circle>

                    <path
                        d="M19 12A7 7 0 0 0 18.8 10.4L21 8.8L19 5.4L16.5 6.5A7 7 0 0 0 14 5L13.7 2H10.3L10 5A7 7 0 0 0 7.5 6.5L5 5.4L3 8.8L5.2 10.4A7 7 0 0 0 5 12A7 7 0 0 0 5.2 13.6L3 15.2L5 18.6L7.5 17.5A7 7 0 0 0 10 19L10.3 22H13.7L14 19A7 7 0 0 0 16.5 17.5L19 18.6L21 15.2L18.8 13.6A7 7 0 0 0 19 12Z"
                    ></path>

                </svg>

            </div>


            <div>

                <h3>
                    Technical Expertise
                </h3>

                <p>
                    Skilled team with industry experience
                </p>

            </div>

        </div>


        {{-- FEATURE 3 --}}
        <div
            class="
                reference-feature-item
                reveal-on-scroll
            "
        >

            <div class="reference-feature-icon">

                <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >

                    <circle
                        cx="12"
                        cy="12"
                        r="8"
                    ></circle>

                    <path
                        d="M12 8V12L15 14"
                    ></path>

                </svg>

            </div>


            <div>

                <h3>
                    Fast Turnaround
                </h3>

                <p>
                    Minimize downtime, maximize productivity
                </p>

            </div>

        </div>


        {{-- FEATURE 4 --}}
        <div
            class="
                reference-feature-item
                reveal-on-scroll
            "
        >

            <div class="reference-feature-icon">

                <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >

                    <path
                        d="M7 11V8A5 5 0 0 1 17 8V11"
                    ></path>

                    <path
                        d="M5 11H8V17H5C4 17 3 16 3 15V13C3 12 4 11 5 11Z"
                    ></path>

                    <path
                        d="M19 11H16V17H18C18 19 16.5 20 14 20H12"
                    ></path>

                </svg>

            </div>


            <div>

                <h3>
                    Customer Support
                </h3>

                <p>
                    Dedicated support for your needs
                </p>

            </div>

        </div>


    </div>

</section>



{{-- =====================================================
     HYDRAULIC PRODUCTS
===================================================== --}}

<section class="products-section" id="products">

    <div class="products-container">


        {{-- TOP ROW --}}
        <div class="products-top">

            <div class="products-title-block reveal-on-scroll">

    <div class="products-kicker-row">

        <span class="products-kicker">
            OUR PRODUCTS
        </span>

        <span class="products-kicker-line"></span>

    </div>

    <h2>
        Hydraulic Products
    </h2>

</div>


            <div class="products-intro reveal-on-scroll">

                <p>
                    Discover our wide range of high-quality hydraulic
                    products designed to deliver reliable performance,
                    durability, and efficiency across industries.
                </p>

            </div>


            <div class="products-action reveal-on-scroll">

                <a href="#" class="products-view-all">

                    View All Products

                    <span>→</span>

                </a>

            </div>

        </div>


        {{-- PRODUCT ROW --}}
        <div class="products-row">


            {{-- PRODUCT 1 --}}
            <article class="product-card reveal-on-scroll">

                <div class="product-image">

                    <img
                        src="{{ asset('images/products/hydraulic-pumps.jpg') }}"
                        alt="Hydraulic Pumps"
                    >

                </div>

                <div class="product-card-bottom">

                    <h3>
                        Hydraulic Pumps
                    </h3>

                    <a
                        href="#"
                        class="product-arrow"
                        aria-label="Hydraulic Pumps"
                    >
                        →
                    </a>

                </div>

            </article>


            {{-- PRODUCT 2 --}}
            <article class="product-card reveal-on-scroll">

                <div class="product-image">

                    <img
                        src="{{ asset('images/products/hydraulic-motors.jpg') }}"
                        alt="Hydraulic Motors"
                    >

                </div>

                <div class="product-card-bottom">

                    <h3>
                        Hydraulic Motors
                    </h3>

                    <a
                        href="#"
                        class="product-arrow"
                        aria-label="Hydraulic Motors"
                    >
                        →
                    </a>

                </div>

            </article>


            {{-- PRODUCT 3 --}}
            <article class="product-card reveal-on-scroll">

                <div class="product-image">

                    <img
                        src="{{ asset('images/products/hydraulic-valves.jpg') }}"
                        alt="Hydraulic Valves"
                    >

                </div>

                <div class="product-card-bottom">

                    <h3>
                        Hydraulic Valves
                    </h3>

                    <a
                        href="#"
                        class="product-arrow"
                        aria-label="Hydraulic Valves"
                    >
                        →
                    </a>

                </div>

            </article>


            {{-- PRODUCT 4 --}}
            <article class="product-card reveal-on-scroll">

                <div class="product-image">

                    <img
                        src="{{ asset('images/products/hydraulic-cylinders.jpg') }}"
                        alt="Hydraulic Cylinders"
                    >

                </div>

                <div class="product-card-bottom">

                    <h3>
                        Hydraulic Cylinders
                    </h3>

                    <a
                        href="#"
                        class="product-arrow"
                        aria-label="Hydraulic Cylinders"
                    >
                        →
                    </a>

                </div>

            </article>


            {{-- PRODUCT 5 --}}
            <article class="product-card reveal-on-scroll">

                <div class="product-image">

                    <img
                        src="{{ asset('images/products/hydraulic-hoses.jpg') }}"
                        alt="Hydraulic Hoses"
                    >

                </div>

                <div class="product-card-bottom">

                    <h3>
                        Hydraulic Hoses
                    </h3>

                    <a
                        href="#"
                        class="product-arrow"
                        aria-label="Hydraulic Hoses"
                    >
                        →
                    </a>

                </div>

            </article>


            {{-- PRODUCT 6 --}}
            <article class="product-card reveal-on-scroll">

                <div class="product-image">

                    <img
                        src="{{ asset('images/products/spare-parts.jpg') }}"
                        alt="Spare Parts"
                    >

                </div>

                <div class="product-card-bottom">

                    <h3>
                        Spare Parts
                    </h3>

                    <a
                        href="#"
                        class="product-arrow"
                        aria-label="Spare Parts"
                    >
                        →
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>

{{-- =====================================================
     SERVICES SECTION
===================================================== --}}

<section class="services-section" id="services">

    <div class="services-bg">

        <img
            src="{{ asset('images/services/service-haydraulic.jpg') }}"
            alt="Hydraulic Services"
        >

        <div class="services-overlay"></div>

    </div>


    <div class="services-container">

        {{-- LEFT CONTENT --}}
        <div class="services-copy reveal-on-scroll">

            <div class="services-kicker-row">

                <span class="services-kicker-line"></span>

                <span class="services-kicker">
                    OUR SERVICES
                </span>

            </div>


            <h2>
                Complete Hydraulic
                <span>Support Under One Roof</span>
            </h2>


            <p>
                From repair and testing to field service – we provide end-to-end
                solutions to keep your hydraulic systems running smoothly.
            </p>


            <a href="#" class="services-main-btn">

                Our Services

                <span>→</span>

            </a>

        </div>


        {{-- MIDDLE SERVICES GRID --}}
        <div class="services-grid">

            {{-- 1 --}}
            <div class="service-item reveal-on-scroll">

                <div class="service-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M14.7 6.3a4 4 0 0 0-5 5L3 18l3 3 6.7-6.7a4 4 0 0 0 5-5l-3 3-3-3 3-3z"></path>
                    </svg>

                </div>


                <div class="service-text">

                    <h3>
                        Repair &amp; Rebuild
                    </h3>

                    <p>
                        Restore performance
                        &amp; reliability
                    </p>

                </div>

            </div>


            {{-- PLUS --}}
            <div class="service-plus service-plus-top">
                +
            </div>


            {{-- 2 --}}
            <div class="service-item reveal-on-scroll">

                <div class="service-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="8"></circle>
                        <path d="M12 8v4l2.5 2.5"></path>
                    </svg>

                </div>


                <div class="service-text">

                    <h3>
                        Testing &amp; Calibration
                    </h3>

                    <p>
                        Ensure precision
                        &amp; quality
                    </p>

                </div>

            </div>


            {{-- 3 --}}
            <div class="service-item reveal-on-scroll">

                <div class="service-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M3 7h11v10H3z"></path>
                        <path d="M14 10h4l3 3v4h-7z"></path>
                        <circle cx="7" cy="18" r="2"></circle>
                        <circle cx="18" cy="18" r="2"></circle>
                    </svg>

                </div>


                <div class="service-text">

                    <h3>
                        Field Service
                    </h3>

                    <p>
                        On-site support
                        when you need it
                    </p>

                </div>

            </div>


            {{-- PLUS --}}
            <div class="service-plus service-plus-bottom">
                +
            </div>


            {{-- 4 --}}
            <div class="service-item reveal-on-scroll">

                <div class="service-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M19 12a7 7 0 0 0-.2-1.6L21 8.8l-2-3.4-2.5 1.1A7 7 0 0 0 14 5l-.3-3h-3.4L10 5a7 7 0 0 0-2.5 1.5L5 5.4 3 8.8l2.2 1.6A7 7 0 0 0 5 12a7 7 0 0 0 .2 1.6L3 15.2l2 3.4 2.5-1.1A7 7 0 0 0 10 19l.3 3h3.4l.3-3a7 7 0 0 0 2.5-1.5l2.5 1.1 2-3.4-2.2-1.6A7 7 0 0 0 19 12z"></path>
                    </svg>

                </div>


                <div class="service-text">

                    <h3>
                        Spare Parts Supply
                    </h3>

                    <p>
                        Genuine &amp; compatible
                        parts
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =====================================================
     OUR BRANDS
===================================================== --}}

<section class="brands-section" id="brands">

    <div class="brands-container">

        {{-- LEFT CONTENT --}}
        <div class="brands-content reveal-on-scroll">

            <div class="brands-kicker-row">

                <span class="brands-kicker-line"></span>

                <span class="brands-kicker">
                    OUR BRANDS
                </span>

            </div>

            <h2>
                Trusted Brands
                <span>We Work With</span>
            </h2>

            <p>
                We deal with leading international and domestic
                brands to ensure the best quality and compatibility
                for your hydraulic systems.
            </p>

            <a href="#" class="brands-btn">

                View All Brands

                <span>→</span>

            </a>

        </div>


        {{-- RIGHT BRAND GRID --}}
        <div class="brands-grid">

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/rexroth.png') }}"
                    alt="Rexroth Bosch Group"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/parker.png') }}"
                    alt="Parker"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/eaton.png') }}"
                    alt="Eaton"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/danfoss.png') }}"
                    alt="Danfoss"
                >
            </div>


            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/kawasaki.png') }}"
                    alt="Kawasaki"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/liebherr.png') }}"
                    alt="Liebherr"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/nachi.png') }}"
                    alt="Nachi"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/hydac.png') }}"
                    alt="Hydac"
                >
            </div>


            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/volvo.png') }}"
                    alt="Volvo"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/atos.png') }}"
                    alt="Atos"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/yuken.png') }}"
                    alt="Yuken"
                >
            </div>

            <div class="brand-card reveal-on-scroll">
                <img
                    src="{{ asset('images/brands/sun.png') }}"
                    alt="Sun Hydraulics"
                >
            </div>

        </div>

    </div>

</section>

{{-- =====================================================
     INDUSTRIES WE SERVE
===================================================== --}}

<section class="industries-section" id="industries">

    <div class="industries-bg">
        <img
            src="{{ asset('images/industries/industries-bg.jpg') }}"
            alt=""
        >
        <div class="industries-bg-overlay"></div>
    </div>

    <div class="industries-container">

        {{-- LEFT CONTENT --}}
        <div class="industries-content reveal-on-scroll">

            <div class="industries-kicker-row">
                <span class="industries-kicker-line"></span>

                <span class="industries-kicker">
                    INDUSTRIES WE SERVE
                </span>
            </div>

            <h2>
                Powering Diverse
                <span>Industries</span>
            </h2>

            <p>
                Our hydraulic solutions are trusted across a wide range of
                industries, from heavy machinery to advanced manufacturing.
            </p>

            <a href="#" class="industries-btn">
                Explore Industries
                <span>→</span>
            </a>

        </div>


        {{-- RIGHT IMAGE ROW --}}
        <div class="industries-row">

            <article class="industry-tile reveal-on-scroll">

                <div class="industry-tile-image">
                    <img
                        src="{{ asset('images/industries/construction.jpg') }}"
                        alt="Construction"
                    >
                </div>

                <h3>
                    Construction
                </h3>

            </article>


            <article class="industry-tile reveal-on-scroll">

                <div class="industry-tile-image">
                    <img
                        src="{{ asset('images/industries/mining.jpg') }}"
                        alt="Mining"
                    >
                </div>

                <h3>
                    Mining
                </h3>

            </article>


            <article class="industry-tile reveal-on-scroll">

                <div class="industry-tile-image">
                    <img
                        src="{{ asset('images/industries/manufacturing.jpg') }}"
                        alt="Manufacturing"
                    >
                </div>

                <h3>
                    Manufacturing
                </h3>

            </article>


            <article class="industry-tile reveal-on-scroll">

                <div class="industry-tile-image">
                    <img
                        src="{{ asset('images/industries/material-handling.jpg') }}"
                        alt="Material Handling"
                    >
                </div>

                <h3>
                    Material Handling
                </h3>

            </article>


            <article class="industry-tile reveal-on-scroll">

                <div class="industry-tile-image">
                    <img
                        src="{{ asset('images/industries/agriculture.jpg') }}"
                        alt="Agriculture"
                    >
                </div>

                <h3>
                    Agriculture
                </h3>

            </article>


            <article class="industry-tile reveal-on-scroll">

                <div class="industry-tile-image">
                    <img
                        src="{{ asset('images/industries/marine.jpg') }}"
                        alt="Marine"
                    >
                </div>

                <h3>
                    Marine
                </h3>

            </article>

        </div>

    </div>

</section>

{{-- =====================================================
     ABOUT SECTION
===================================================== --}}

<section class="about-section" id="about">

    <div class="about-container">

        {{-- LEFT IMAGE --}}
        <div class="about-image-wrap reveal-on-scroll">

            <img
                src="{{ asset('images/about/about-hydraulic.jpg') }}"
                alt="Hydraulic Solutions"
            >

        </div>


        {{-- MIDDLE CONTENT --}}
        <div class="about-content reveal-on-scroll">

            <div class="about-kicker-row">

                <span class="about-kicker-line"></span>

                <span class="about-kicker">
                    ABOUT US
                </span>

            </div>


            <h2>
                Built on Trust.
                <span>Driven by Performance.</span>
            </h2>


            <p>
                With years of expertise in hydraulic systems, we deliver
                quality products, dependable service, and complete solutions
                to keep your operations running efficiently.
            </p>


            <a href="#" class="about-btn">

                Know More About Us

                <span>→</span>

            </a>

        </div>


        {{-- RIGHT STATS --}}
        <div class="about-stats reveal-on-scroll">

            {{-- STAT 1 --}}
            <div class="about-stat">

                <div class="about-stat-icon">

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="8" r="4"></circle>
                        <path d="M4 21v-2a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v2"></path>
                    </svg>

                </div>

                <div class="about-stat-text">

                    <strong>
                        15+
                    </strong>

                    <span>
                        Years of Experience
                    </span>

                </div>

            </div>


            {{-- STAT 2 --}}
            <div class="about-stat">

                <div class="about-stat-icon">

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 11V8a5 5 0 0 1 10 0v3"></path>
                        <path d="M5 11h3v6H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2z"></path>
                        <path d="M19 11h-3v6h2c0 2-1.5 3-4 3h-2"></path>
                    </svg>

                </div>

                <div class="about-stat-text">

                    <strong>
                        500+
                    </strong>

                    <span>
                        Satisfied Customers
                    </span>

                </div>

            </div>


            {{-- STAT 3 --}}
            <div class="about-stat">

                <div class="about-stat-icon">

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 21h18"></path>
                        <path d="M6 21V10h4v11"></path>
                        <path d="M14 21V4h4v17"></path>
                    </svg>

                </div>

                <div class="about-stat-text">

                    <strong>
                        1000+
                    </strong>

                    <span>
                        Products Delivered
                    </span>

                </div>

            </div>


            {{-- STAT 4 --}}
            <div class="about-stat">

                <div class="about-stat-icon">

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="8"></circle>
                        <path d="M12 8v4l3 2"></path>
                    </svg>

                </div>

                <div class="about-stat-text">

                    <strong>
                        24/7
                    </strong>

                    <span>
                        Customer Support
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =====================================================
     FEATURED PRODUCTS
===================================================== --}}

<section class="featured-products-section">

    <div class="featured-products-container">

        {{-- HEADER --}}
        <div class="featured-products-head">

            <div class="featured-products-title reveal-on-scroll">

                <div class="featured-products-kicker-row">
                    <span class="featured-products-line"></span>

                    <span class="featured-products-kicker">
                        FEATURED PRODUCTS
                    </span>
                </div>

                <h2>Popular Products</h2>

            </div>


            <a href="#" class="featured-products-more reveal-on-scroll">
                View More Products
                <span>→</span>
            </a>

        </div>


        {{-- PRODUCTS ROW --}}
        <div class="featured-products-row">

            {{-- 01 --}}
            <article class="featured-product-card reveal-on-scroll">

                <div class="featured-product-image">
                    <img
                        src="{{ asset('images/featured-products/hydraulic-pump.png') }}"
                        alt="Hydraulic Pump"
                    >
                </div>

                <div class="featured-product-info">

                    <h3>Hydraulic Pump</h3>

                    <p>(Variable Displacement)</p>

                </div>

            </article>


            {{-- 02 --}}
            <article class="featured-product-card reveal-on-scroll">

                <div class="featured-product-image">
                    <img
                        src="{{ asset('images/featured-products/hydraulic-motor.png') }}"
                        alt="Hydraulic Motor"
                    >
                </div>

                <div class="featured-product-info">

                    <h3>Hydraulic Motor</h3>

                    <p>(Orbital Type)</p>

                </div>

            </article>


            {{-- 03 --}}
            <article class="featured-product-card reveal-on-scroll">

                <div class="featured-product-image">
                    <img
                        src="{{ asset('images/featured-products/control-valve.png') }}"
                        alt="Control Valve"
                    >
                </div>

                <div class="featured-product-info">

                    <h3>Control Valve</h3>

                    <p>(4/3 Way)</p>

                </div>

            </article>


            {{-- 04 --}}
            <article class="featured-product-card reveal-on-scroll">

                <div class="featured-product-image">
                    <img
                        src="{{ asset('images/featured-products/hydraulic-gear-pump.png') }}"
                        alt="Hydraulic Gear Pump"
                    >
                </div>

                <div class="featured-product-info">

                    <h3>Hydraulic Gear Pump</h3>

                    <p>(External)</p>

                </div>

            </article>


            {{-- 05 --}}
            <article class="featured-product-card reveal-on-scroll">

                <div class="featured-product-image">
                    <img
                        src="{{ asset('images/featured-products/hydraulic-cylinder.png') }}"
                        alt="Hydraulic Cylinder"
                    >
                </div>

                <div class="featured-product-info">

                    <h3>Hydraulic Cylinder</h3>

                    <p>(Double Acting)</p>

                </div>

            </article>

        </div>

    </div>

</section>

{{-- =====================================================
     CTA SECTION
===================================================== --}}

<section class="cta-section">

    {{-- BACKGROUND IMAGE --}}
    <div class="cta-background">

        <img
            src="{{ asset('images/cta/cta-bg.jpg') }}"
            alt=""
        >

        <div class="cta-background-overlay"></div>

    </div>


    <div class="cta-container">

        {{-- LEFT CONTENT --}}
        <div class="cta-content reveal-on-scroll">

            <h2>
                Looking for Reliable
                <span>Hydraulic Solutions?</span>
            </h2>

            <p>
                Share your requirements with us and our experts will help
                you find the right hydraulic products and solutions for
                your application.
            </p>

        </div>


        {{-- RIGHT SIDE --}}
        <div class="cta-right reveal-on-scroll">

            <a href="#contact" class="cta-requirement-btn">

                Send Your Requirement

                <span>→</span>

            </a>


            {{-- FEATURES --}}
            <div class="cta-features">

                {{-- QUICK RESPONSE --}}
                <div class="cta-feature">

                    <div class="cta-feature-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">

                            <path d="M13 2L4 14h7l-1 8 9-12h-7l1-8z"></path>

                        </svg>

                    </div>

                    <span>
                        Quick Response
                    </span>

                </div>


                {{-- EXPERT GUIDANCE --}}
                <div class="cta-feature">

                    <div class="cta-feature-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">

                            <circle cx="12" cy="8" r="4"></circle>

                            <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>

                        </svg>

                    </div>

                    <span>
                        Expert Guidance
                    </span>

                </div>


                {{-- BEST PRICES --}}
                <div class="cta-feature">

                    <div class="cta-feature-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">

                            <path d="M20 12l-8 8-9-9V4h7z"></path>

                            <circle cx="7.5" cy="8.5" r="1"></circle>

                        </svg>

                    </div>

                    <span>
                        Best Prices
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection