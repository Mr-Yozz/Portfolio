<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogeshwaran | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Righteous&display=swap" rel="stylesheet">
    <style>
        /* --- RESET & CORE --- */
        * {
            box-sizing: border-box;
        }

        :root {

            --primary-blue: #2b00fe;
            --glitch-green: #02ff17;
            --glass-white: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        body {
            margin: 0;
            background-color: #000;
            /* Changed from hidden to auto to allow scrolling */
            overflow-x: hidden;
            overflow-y: auto;
            /* font-family: 'Arial Black', sans-serif; */
            /* font-family: 'Righteous', sans-serif; */
            font-family: "Paytone One", sans-serif;
            color: white;
        }

        .sub {
            font-size: 0.75rem;
            color: var(--primary-blue);
            letter-spacing: 3px;
            margin-bottom: 15px;
            display: block;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* --- BACKGROUND ORB (Fixed) --- */
        #blue-orb {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 100vw;
            max-width: 800px;
            max-height: 800px;
            background: radial-gradient(circle, rgba(0, 45, 143, 0.76) 0%, rgba(0, 0, 0, 0) 70%);
            z-index: -1;
            /* Move behind everything */
            filter: blur(80px);
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        /* --- NAVIGATION STYLES --- */
        .main-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo Styling */
        .logo-text {
            font-family: 'Arial Black', sans-serif;
            font-size: 1.5rem;
            letter-spacing: 2px;
            color: #fff;
        }

        .logo-text .dot {
            color: var(--primary-blue);
            text-shadow: 0 0 10px var(--primary-blue);
        }

        /* Links */
        .nav-links {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        .nav-item {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: 0.3s ease;
            position: relative;
        }

        .nav-item:hover,
        .nav-item.active {
            color: #fff;
        }

        /* Hover Underline Animation */
        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: var(--primary-blue);
            transition: 0.3s ease;
            box-shadow: 0 0 10px var(--primary-blue);
        }

        .nav-item:hover::after,
        .nav-item.active::after {
            width: 100%;
        }

        /* CTA Button */
        .cta-button {
            padding: 10px 25px;
            border: 1px solid var(--primary-blue);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.4s;
            background: transparent;
        }

        .cta-button:hover {
            background: var(--primary-blue);
            box-shadow: 0 0 20px rgba(43, 0, 254, 0.5);
        }

        .nav-item.active {
            color: #fff;
        }

        .nav-item.active::after {
            content: '';
            position: absolute;
            width: 100%;
            /* Line is full width for active items */
            height: 2px;
            bottom: -5px;
            left: 0;
            background: var(--primary-blue);
            box-shadow: 0 0 10px var(--primary-blue);
        }

        .sub-card {

            transform: rotateX(5deg) rotateY(-10deg) rotateZ(1deg);
            transform-style: preserve-3d;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            will-change: transform, box-shadow;
        }

        .sub-card:hover {
            /* HOVER STATE: Straighten, lift up (translateY), and pop forward (translateZ) */
            transform: translateY(-30px) translateZ(50px) rotateX(0deg) rotateY(0deg) scale(1.05);

            /* Visual feedback */
            background: rgba(255, 255, 255, 0.1);
            border-color: #2b00fe;
            box-shadow:
                0 40px 80px rgba(0, 45, 143, 0.4),
                /* Outer blue glow */
                0 0 20px rgba(43, 0, 254, 0.2);
            /* Inner edge glow */
            z-index: 10;
            /* Ensure the hovered card is on top of others */
        }

        /* --- MOBILE NAVIGATION LOGIC --- */

        .menu-toggle {
            display: none;
            /* Hidden on Desktop */
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            z-index: 1001;
            position: relative;
        }

        .menu-toggle .bar {
            width: 25px;
            height: 3px;
            background-color: #fff;
            transition: 0.3s ease;
            border-radius: 2px;
        }

        /* --- SCROLL ANIMATION --- */
        .scroll-indicator {
            margin-bottom: -172px;
            padding: 135px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            opacity: 0.7;
        }

        .mouse {
            width: 25px;
            height: 40px;
            border: 2px solid #fff;
            border-radius: 20px;
            position: relative;
        }

        .mouse::before {
            content: '';
            width: 4px;
            height: 8px;
            background: var(--primary-blue);
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
            animation: scrollMove 2s infinite;
        }

        .typing-trigger {
            opacity: 1;
            /* Always visible */
            font-family: 'Righteous', sans-serif;
            transform: translateY(0);
            transition: all 0.8s ease-out;
        }

        #typewriter {
            color: #2b00fe;
            /* text-shadow: 0 0 15px rgba(43, 0, 254, 0.6); */
            /* min-height: 1.2em; */
            /* Prevents layout jump when word is empty */
            display: inline-block;
        }

        .cursor {
            color: #2b00fe;
            display: inline-block;
            margin-left: 5px;
            font-weight: 100;
            animation: blink 0.8s infinite;
        }

        /* Fix the Blue Link from your screenshot */
        .email-text,
        .footer-link {
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: #2b00fe !important;
            text-shadow: 0 0 10px rgba(43, 0, 254, 0.5);
        }

        /* Ensure Righteous font renders smoothly */
        .typing-trigger {
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        /* Cursor style */
        .cursor {
            color: #2b00fe;
            animation: blink 0.8s infinite;
            font-weight: 100;
        }

        /* Ensure Nav is always on top */
        .main-nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            /* This makes the black hole glow visible behind the nav but keeps text sharp */
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        /* Base for both videos */
        .video-bg-container {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        /* Galaxy Layer (Bottom) */
        .galaxy-layer {
            z-index: -3;
            top: 0;
        }

        /* Black Hole Layer (Middle - Top of Galaxy) */
        .blackhole-layer {
            z-index: -2;
            position: fixed;
            top: -8.5rem;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .blackhole-layer video {
            position: absolute;
            /* Center Horizontally */
            left: 50%;
            /* Push down from the top to avoid the header */
            top: 30%;
            /* The translate ensures the center of the VIDEO is at the center of the screen */
            transform: translate(-50%, -50%) scale(1.2);

            width: auto;
            min-width: 100%;
            height: auto;
            mix-blend-mode: screen;
            opacity: 0.9;
        }

        /* Mobile Adjustment */
        @media (max-width: 768px) {
            .blackhole-layer video {
                top: 25%;
                transform: translate(-50%, -50%) scale(0.8);
            }
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        @keyframes scrollMove {
            0% {
                transform: translate(-50%, 0);
                opacity: 1;
            }

            100% {
                transform: translate(-50%, 15px);
                opacity: 0;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
                /* Shown on Mobile */
            }

            .nav-links {
                /* Reset Desktop Styles */
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgba(0, 0, 0, 0.98);
                /* Solid dark for visibility */
                backdrop-filter: blur(20px);

                /* Layout */
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 30px;

                /* Hidden State */
                opacity: 0;
                visibility: hidden;
                transform: translateY(-20px);
                transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
                z-index: 1000;
            }

            /* Active State (When JS toggles class) */
            .nav-links.is-active {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .nav-cta {
                display: none;
                /* Hide button on mobile nav */
            }

            /* Hamburger to X Animation */
            #mobile-menu.is-active .bar:nth-child(1) {
                transform: translateY(9px) rotate(45deg);
            }

            #mobile-menu.is-active .bar:nth-child(2) {
                opacity: 0;
            }

            #mobile-menu.is-active .bar:nth-child(3) {
                transform: translateY(-9px) rotate(-45deg);
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @yield('styles')
</head>

<body>
    @include('layouts.header')
    <div>
        <nav class="main-nav">
        </nav>

        <div class="video-bg-container galaxy-layer">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('videos/galaxy.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="video-bg-container blackhole-layer">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('videos/blackhole.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="video-overlay"></div>

        @yield('content')
    </div>

    @include('layouts.footer')

    <script>
        (function() {
            const words = ["Extraordinary.", "Together.", "Future-Ready.", "Innovative."];
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            const typingSpeed = 150;
            const erasingSpeed = 100;
            const pauseBetweenWords = 2000; // How long to stay on the finished word

            function typeLoop() {
                const target = document.getElementById("typewriter");
                const currentWord = words[wordIndex];

                if (isDeleting) {
                    // Remove a character
                    target.innerHTML = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    // Add a character
                    target.innerHTML = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                }

                // Logic for switching states
                if (!isDeleting && charIndex === currentWord.length) {
                    // Word is finished typing
                    isDeleting = true;
                    setTimeout(typeLoop, pauseBetweenWords);
                } else if (isDeleting && charIndex === 0) {
                    // Word is fully erased
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length; // Move to next word
                    setTimeout(typeLoop, 500);
                } else {
                    // Continue typing or erasing
                    setTimeout(typeLoop, isDeleting ? erasingSpeed : typingSpeed);
                }
            }

            document.addEventListener('DOMContentLoaded', () => {
                setTimeout(typeLoop, 500);
            });
        })();
    </script>
    <script>
        window.addEventListener('scroll', () => {
            const orb = document.getElementById('blue-orb');
            const scrollValue = window.scrollY;
            // Moves the orb slightly while scrolling for a parallax effect
            orb.style.top = (50 - (scrollValue * 0.05)) + "%";
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menu = document.querySelector('#mobile-menu');
            const menuLinks = document.querySelector('.nav-links');

            if (menu) {
                menu.addEventListener('click', () => {
                    menu.classList.toggle('is-active');
                    menuLinks.classList.toggle('is-active');

                    // Debugging: This will show in your browser console (F12)
                    console.log("Menu Status:", menuLinks.classList.contains('is-active'));
                });
            }
        });
    </script>
    @yield('scripts')
</body>

</html>