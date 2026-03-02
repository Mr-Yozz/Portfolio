@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/about.css')}}">
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet"> -->
<style>
    /* --- FULL SCREEN VIDEO MASTER --- */
    .video-hero-container {
        position: relative;
        width: 100vw;
        height: 100vh;
        margin-left: calc(-50vw + 50%);
        /* Centers full-width div in a restricted container */
        margin-top: -80px;
        /* Pulls it up under the transparent nav */
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;

        z-index: 1;
    }

    /* --- OVERLAY TEXT STYLES --- */
    .about-hero-overlay {
        position: relative;
        z-index: 3;
        text-align: center;
        padding: 20px;
    }

    .hero-subtext {
        color: rgba(255, 255, 255, 0.8);
        max-width: 600px;
        margin: 20px auto;
        font-size: 1.2rem;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    /* Darkness at bottom of video to bleed into the content */
    .video-vignette {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40%;
        background: linear-gradient(to bottom, transparent, #000);
        z-index: 2;
    }

    .slider-container {
        width: 100%;
        overflow: hidden;
        position: relative;
        padding: 20px 0;
        /* Soft edges fade */
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .scroll-content {
        display: flex;
        width: max-content;
        gap: 30px;
        animation: scroll 25s linear infinite;
    }

    .tech-card {
        width: 110px;
        height: 110px;
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(12px);
        /* This creates the glass effect */
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        flex-shrink: 0;
    }

    .tech-card img {
        width: 55px;
        height: 55px;
        object-fit: contain;
        filter: grayscale(20%) brightness(0.9);
        /* Makes logos blend better */
        transition: all 0.3s ease;
    }

    .tech-card:hover {
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-8px) scale(1.05);
        border-color: rgba(0, 123, 255, 0.5);
        /* Glow effect on hover */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }

    .tech-card:hover img {
        filter: grayscale(0%) brightness(1.1);
        /* Pop color on hover */
    }

    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }
</style>
@endsection

@section('content')
<div id="blue-orb"></div>

<div class="container" id="about">

    <div class="video-hero-container">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="#" type="video/mp4">
        </video>

        <header class="about-hero-overlay">
            <!-- <div class="batch-tag">BE.CSE • 2024 Batch</div> -->
            <h1 class="section-title">B tech</h1>
            <p class="hero-subtext">
                Bridging the gap between design and high-performance software across all platforms.
            </p>
            <div class="scroll-indicator">
                <div class="mouse"></div>
                <span>Scroll to Explore</span>
            </div>
        </header>

        <div class="video-vignette"></div>
    </div>

    <div class="about-grid">

        <div class="glass-card">
            <span class="about-sub">CORE IDENTITY</span>
            <h2 style="color: var(--primary-blue); margin: 10px 0;">About Me</h2>
            <p>I am a 2024 Computer Science Graduate focused on delivering production-ready applications. Unlike traditional developers, I manage the entire lifecycle: from **Git** versioning and **Postman** API testing to final deployment on **Hostinger** and **Google Play Console**.</p>

            <div class="tag-row">
                <span class="project-tag">Full-Stack</span>
                <span class="project-tag">DevOps</span>
                <span class="project-tag">Architecture</span>
            </div>
        </div>

        <div class="glass-card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <span class="about-sub">DEPLOYMENTS</span>
            <span class="stat-number">08</span>
            <p style="font-size: 0.8rem; letter-spacing: 1px; color: rgba(255,255,255,0.5);">
                4 WEBSITES • 2 WEB APPS<br>1 MOBILE • 1 DESKTOP
            </p>
        </div>

        <div class="glass-card" style="grid-column: 1 / -1; padding: 40px 0;">
            <span class="about-sub" style="display: block; text-align: center; margin-bottom: 30px;">ENGINEERING STACK</span>

            <div class="slider-container">
                <div class="scroll-content">
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JS"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/electron/electron-original.svg" alt="Electron"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub"></div>

                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JS"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/electron/electron-original.svg" alt="Electron"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL"></div>
                    <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub"></div>
                </div>
            </div>
        </div>

        <div class="glass-card vision-card">
            <span class="about-sub" style="color: var(--primary-blue);">NEXT FRONTIER</span>
            <h3><i class="fas fa-microchip"></i> Future: AI Automation</h3>
            <p>Currently researching AI integration to automate complex workflows and build "Smart Apps" using Neural network logic and LLM integrations to redefine software autonomy.</p>
        </div>
    </div>
</div>
@endsection