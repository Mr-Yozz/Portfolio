@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<style>
    
</style>
@endsection

@section('content')


<div id="blue-orb"></div>

<div class="hero-section">
    <div class="intro-text">Hi I'm Yogesh</div>
    <div class="name-wrapper">
        <div class="line line-left"></div>
        <div class="line line-right"></div>
        <h1 class="reveal-text">DEVELOPER</h1>
        <div class="hook-text">Crafting Digital Elegance</div>
    </div>

    <div class="scroll-indicator">
        <div class="mouse"></div>
        <span>Scroll to Explore</span>
    </div>

</div>



<section id="about">
    <h2 class="section-title">WHO I AM</h2>

    <div class="about-grid">
        <div class="glass-card">
            <span class="about-sub">MY PHILOSOPHY</span>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); line-height: 1.6;">
                I don't just write code; I architect <strong>experiences</strong>. By blending technical precision with creative motion, I build digital products that feel intuitive and alive.
            </p>
        </div>

        <div class="glass-card">
            <span class="about-sub">CORE STACK</span>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                <span style="background: rgba(43, 0, 254, 0.2); padding: 5px 12px; border-radius: 50px; font-size: 0.7rem; font-weight: bold;">Python</span>
                <span style="background: rgba(43, 0, 254, 0.2); padding: 5px 12px; border-radius: 50px; font-size: 0.7rem; font-weight: bold;">Django</span>
                <span style="background: rgba(43, 0, 254, 0.2); padding: 5px 12px; border-radius: 50px; font-size: 0.7rem; font-weight: bold;">PHP</span>
                <span style="background: rgba(43, 0, 254, 0.2); padding: 5px 12px; border-radius: 50px; font-size: 0.7rem; font-weight: bold;">Laravel</span>
            </div>
        </div>

        <div class="glass-card">
            <span class="about-sub">EXPERIENCE</span>
            <div style="display: flex; gap: 40px;">
                <div>
                    <span class="stat-number">{{$displayYears}}</span>
                    <p style="font-size: 0.7rem; color: #888; margin:0;">YEARS EXP.</p>
                </div>
                <div>
                    <span class="stat-number">10+</span>
                    <p style="font-size: 0.7rem; color: #888; margin:0;">PROJECTS</p>
                </div>
            </div>
        </div>

        <div class="glass-card" style="background: linear-gradient(135deg, rgba(43, 0, 254, 0.1), rgba(255,255,255,0.03));">
            <span class="about-sub">CURRENT FOCUS</span>
            <p style="font-size: 0.9rem; font-style: italic; color: rgba(255,255,255,0.6); margin:0;">
                "Building the next generation AI Automations."
            </p>
        </div>
    </div>
</section>

<section id="work" style="padding: 100px 10%; position: relative; z-index: 2;">
    <h2 class="section-title">SELECTED WORK</h2>

    <div class="work-container">
        <div class="sticky-card">
            <div class="project-glass project-card">
                <div class="tag-row">
                    <span class="project-tag" style="color: #2b00fe;">Active</span>
                    <span class="project-tag">Three.js</span>
                </div>
                <span class="about-sub">WEB APPLICATION</span>
                <h3 style="font-size: 2.5rem; margin: 0; font-family: 'Arial Black', sans-serif;">Aetheris Dashboard</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.6); max-width: 500px;">
                    A real-time data visualization platform built with HTML, CSS, JS, and Three.js for interactive 3D charts.
                </p>
                <div style="margin-top: 20px; font-size: 0.8rem; color: #2b00fe; font-weight: bold; letter-spacing: 2px; cursor: pointer;">
                    EXPLORE INFRASTRUCTURE ↗
                </div>
            </div>
        </div>

        <div class="sticky-card">
            <div class="project-glass project-card">
                <div class="tag-row">
                    <span class="project-tag" style="color: #00ff88;">Live</span>
                    <span class="project-tag">Entertainment</span>
                </div>
                <span class="about-sub">MOBILE APPLICATION</span>
                <h3 style="font-size: 2.5rem; margin: 0; font-family: 'Arial Black', sans-serif;">Mei Alai</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.6); max-width: 500px;">
                    Dive into a world of curated digital content. Explore more entertainment in a fluid, motion-first app environment.
                </p>
                <div style="margin-top: 20px; font-size: 0.8rem; color: #2b00fe; font-weight: bold; letter-spacing: 2px; cursor: pointer;">
                    VIEW APP INTERFACE ↗
                </div>
            </div>
        </div>

        <div class="sticky-card">
            <div class="project-glass project-card">
                <div class="tag-row">
                    <span class="project-tag" style="color: #00d1ff;">System</span>
                    <span class="project-tag">QR Integration</span>
                </div>
                <span class="about-sub">DESKTOP SOFTWARE</span>
                <h3 style="font-size: 2.5rem; margin: 0; font-family: 'Arial Black', sans-serif;">Krishna Jewelleries</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.6); max-width: 500px;">
                    Advanced inventory management handling Gold & Silver details via a custom QR integration system.
                </p>
                <div style="margin-top: 20px; font-size: 0.8rem; color: #2b00fe; font-weight: bold; letter-spacing: 2px; cursor: pointer;">
                    SYSTEM ARCHITECTURE ↗
                </div>
            </div>
        </div>
    </div>
</section>

@endsection