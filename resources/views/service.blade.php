@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/service.css')}}">
@endsection

@section('content')
<div id="blue-orb"></div>

<div class="container" id="services">
    <header class="service-header" style="margin-top: 90px;">
        <div class="batch-tag">Expertise • Solutions</div>
        <h1 class="section-title">Professional Services</h1>
        <p class="service-subtitle">Turning complex logic into scalable, production-ready digital products.</p>
    </header>

    <div class="service-grid">

        <div class="service-card">
            <div class="service-icon"><i class="fas fa-layer-group"></i></div>
            <span class="about-sub">BACKEND & API</span>
            <h3>Web Architecture</h3>
            <p>Building robust server-side logic using <strong>Laravel</strong> and <strong>Django</strong>. I specialize in RESTful API design, database optimization (MySQL/Oracle), and secure payment gateway integrations.</p>
            <ul class="service-list">
                <li><i class="fas fa-check"></i> Custom API Development</li>
                <li><i class="fas fa-check"></i> Database Management</li>
                <li><i class="fas fa-check"></i> Third-party Integrations</li>
            </ul>
        </div>

        <div class="service-card highlighted">
            <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
            <span class="about-sub">MOBILE & DESKTOP</span>
            <h3>Platform Solutions</h3>
            <p>Developing high-performance applications that run everywhere. From <strong>React Native</strong> for mobile to <strong>Electron JS</strong> for desktop environments, ensuring a unified user experience.</p>
            <ul class="service-list">
                <li><i class="fas fa-check"></i> iOS & Android Apps</li>
                <li><i class="fas fa-check"></i> Cross-Platform Desktop</li>
                <li><i class="fas fa-check"></i> UI/UX Implementation</li>
            </ul>
        </div>

        <div class="service-card">
            <div class="service-icon"><i class="fas fa-rocket"></i></div>
            <span class="about-sub">GO-LIVE EXPERT</span>
            <h3>Production & Launch</h3>
            <p>I don't just write code; I launch products. I handle the technical hurdles of getting your app into the hands of users, from domain mapping to App Store publishing.</p>
            <ul class="service-list">
                <li><i class="fas fa-check"></i> Play Store / App Store Publishing</li>
                <li><i class="fas fa-check"></i> Hosting & Domain Configuration</li>
                <li><i class="fas fa-check"></i> API Testing & Live Debugging</li>
            </ul>
        </div>

        <div class="service-card">
            <div class="service-icon"><i class="fas fa-tools"></i></div>
            <span class="about-sub">LONG-TERM VALUE</span>
            <h3>Optimization & Support</h3>
            <p>Software requires constant care. I provide post-launch support to fix bugs, update dependencies (Laravel/Python), and optimize performance as your user base grows.</p>
            <ul class="service-list">
                <li><i class="fas fa-check"></i> Bug Fixing & Patching</li>
                <li><i class="fas fa-check"></i> Database Performance Tuning</li>
                <li><i class="fas fa-check"></i> Scaling Infrastructure</li>
            </ul>
        </div>

    </div>

    <div class="workflow-box glass-card">
        <span class="about-sub">THE PROCESS</span>
        <h3>From Concept to Production</h3>
        <div class="workflow-steps">
            <div class="step"><span>01</span> Planning</div>
            <div class="step"><span>02</span> Engineering</div>
            <div class="step"><span>03</span> QA Testing</div>
            <div class="step"><span>04</span> Deployment</div>
        </div>
    </div>

    <div class="ecosystem-section glass-card">
        <div class="eco-header">
            <span class="about-sub">PLATFORM SYNERGY</span>
            <h2>Integrated Ecosystem</h2>
        </div>

        <div class="eco-grid">
            <div class="eco-item">
                <i class="fab fa-laravel"></i>
                <i class="fab fa-python"></i>
                <h4>Backend Hub</h4>
                <p>Secure APIs & Data</p>
            </div>
            <div class="eco-connector"><i class="fas fa-link"></i></div>
            <div class="eco-item">
                <i class="fab fa-react"></i>
                <i class="fas fa-code"></i>
                <h4>Frontend Flow</h4>
                <p>Web & Mobile UI</p>
            </div>
            <div class="eco-connector"><i class="fas fa-link"></i></div>
            <div class="eco-item">
                <i class="fas fa-cloud"></i>
                <h4>Live Engine</h4>
                <p>Deployment & Cloud</p>
            </div>
        </div>
    </div>

    <div class="benefits-row">
        <div class="benefit-box">
            <i class="fas fa-shield-alt"></i>
            <h5>Secure Code</h5>
        </div>
        <div class="benefit-box">
            <i class="fas fa-bolt"></i>
            <h5>Fast Performance</h5>
        </div>
        <div class="benefit-box">
            <i class="fas fa-sync"></i>
            <h5>Agile Delivery</h5>
        </div>
        <div class="benefit-box">
            <i class="fas fa-headset"></i>
            <h5>24/7 Support</h5>
        </div>
    </div>

</div>
@endsection