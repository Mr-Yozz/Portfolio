@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
<div id="blue-orb"></div>
<div class="container contact-page-wrapper">
    <header class="contact-header">
        <span class="batch-tag">GET IN TOUCH</span>
        <section id="contact-top" style="padding: 100px 10% 50px; text-align: center;">
            <span class="sub" style="display: inline-block; font-family: 'Righteous'; color: rgba(255,255,255,0.5); letter-spacing: 2px;">
                WANT TO COLLABORATE?
            </span>
            <h2 class="typing-trigger" style="font-size: clamp(2rem, 8vw, 5rem); letter-spacing: -2px; font-family: 'Righteous', sans-serif; color: white; margin-top: 20px;">
                Let’s build something <span id="typewriter" style="color: #2b00fe;"></span><span class="cursor">|</span>
            </h2>
        </section>
    </header>

    <div class="contact-grid">
        <div class="contact-info glass-card">
            <div class="info-item">
                <span class="about-sub">LOCATION</span>
                <p>Dindigul, Tamil Nadu, India</p>
            </div>
            <div class="info-item">
                <span class="about-sub">EMAIL</span>
                <p><a href="mailto:yogeshwaran03042002@gmail.com" class="email-text">yogeshwaran03042002@gmail.com</a></p>
            </div>
            <div class="social-links-large">
                <a href="https://www.linkedin.com/in/yogeshwaran-s-64a94529b" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/Mr-Yozz" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/yozz_._x/" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="contact-form-container glass-card">
            <form action="/send-message" method="POST" id="contact-form">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="John Doe" required>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="john@example.com" required>
                </div>

                <div class="form-group">
                    <label>Number</label>
                    <input type="number" name="number" placeholder="91+8270839696" required>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <select name="subject">
                        <option>Web Development</option>
                        <option>App Development</option>
                        <option>Other Collaboration</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="5" placeholder="Tell me about your project..."></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    SEND MESSAGE <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection