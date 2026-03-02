<nav class="main-nav">
    <div class="nav-container">
        <div class="nav-logo">
            <span class="logo-text">Yozz<span class="dot">.</span></span>
        </div>

        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <ul class="nav-links">
            <li><a href="/" class="nav-item {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="nav-item {{ Request::is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="/service" class="nav-item {{ Request::is('service') ? 'active' : '' }}">Services</a></li>
            <li><a href="/project" class="nav-item {{ Request::is('project') ? 'active' : '' }}">Projects</a></li>
            <li><a href="/contact" class="nav-item {{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>

        <div class="nav-cta">
            <a href="tel:+918270839696" class="cta-button">Contact Me</a>
        </div>
    </div>
</nav>