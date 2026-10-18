@extends('layouts.app')

@section('title', 'Berlan CahDewa — Portfolio')

@section('content')
@php
    $email = 'YOUR_EMAIL';
    $hasPortrait = file_exists(public_path('images/foto-berlan.jpg'));
    $hasCv = file_exists(public_path('files/cv-berlan.pdf'));
@endphp

<header class="site-header" id="top">
    <div class="container header-inner">
        <a class="wordmark" href="#top" aria-label="Berlan, kembali ke atas">BERLAN CAH DEWA<span></span></a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Buka menu navigasi">
            <span></span><span></span>
        </button>
        <nav class="primary-nav" id="primary-navigation" aria-label="Navigasi utama">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
            @if ($hasCv)
                <a class="button button-small button-outline" href="{{ asset('files/cv-berlan.pdf') }}" download>Download CV <span aria-hidden="true">↗</span></a>
            @else
                <a class="button button-small button-outline" href="#contact" title="Tambahkan CV di public/files/cv-berlan.pdf">Download CV <span aria-hidden="true">↗</span></a>
            @endif
        </nav>
    </div>
</header>

<main>
    <section class="hero section-shell" aria-labelledby="hero-title">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span> PORTFOLIO <span class="eyebrow-year">— 2026</span></p>
                <h1 id="hero-title">Building Digital<br><span>Experiences.</span></h1>
                <p class="hero-name">Hai I'm <strong>Berlan Cah Dewa</strong></p>
                <p class="hero-description">I am currently studying at the Bina Sarana Informatika Institute

I am majoring in Information Systems. I am looking for an internship related to my major. I am very interested in web development, information technology, and databases. During my studies, I was able to work in problem solving roles for both teams and individuals.

I am very passionate about studying information systems, including web development, databases, and software engineering. My goal is to apply the skills I have learned to companies in the real world and contribute to becoming a professional in the field of Information Systems.

I am willing to do an internship at a relevant company that aligns with my vision and mission and my skills.
</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#projects">My Projects <span aria-hidden="true"></span></a>
                    <a class="button button-quiet" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to={{ $email }}" target="_blank" rel="noopener noreferrer">Email Me <span aria-hidden="true">↗</span></a>
                </div>
                <p class="availability"><span class="availability-dot" aria-hidden="true"></span> Open to opportunities and collaboration</p>
            </div>
            <div class="hero-visual">
                <div class="portrait-frame">
                    @if ($hasPortrait)
                        <img class="portrait-image" src="{{ asset('images/foto-berlan.jpg') }}" alt="Foto Berlan CahDewa" fetchpriority="high">
                    @else
                        <div class="portrait-fallback" role="img" aria-label="Tempat foto Berlan CahDewa">
                            <span class="portrait-initials">BC</span>
                            <span class="portrait-caption">YOUR PHOTO<br><small>public/images/foto-berlan.jpg</small></span>
                        </div>
                    @endif
                    <span class="portrait-corner" aria-hidden="true"></span>
                </div>
                <div class="floating-card floating-card-top"><span class="card-icon">✳</span><span>Curious mind<br><strong>Always learning</strong></span></div>
                <div class="floating-card floating-card-bottom"><span class="card-icon card-icon-code">&lt;/&gt;</span><span>Programming &amp;<br><strong>building for web & App</strong></span></div>
                <span class="hero-orbit" aria-hidden="true"></span>
            </div>
        </div>
        <div class="container hero-bottom"><span>SCROLL TO EXPLORE</span><span class="scroll-line"></span><span>01 / 04</span></div>
    </section>

    <section class="section section-about" id="about" aria-labelledby="about-title">
        <div class="container about-grid">
            <div class="section-heading"><p class="eyebrow">01 — ABOUT</p><h2 id="about-title">A little about<br><span>who I am.</span></h2></div>
            <div class="about-copy">
                <p class="lead">Halo, saya Berlan Cah Dewa.</p>
                <p>I am an Information Systems student looking to develop my technical and analytical skills through real world projects. I am passionate about combining technology with problem solving to create useful applications and websites.</p>
                <p>I want to gain practical experience in a professional environment so that I can transform the knowledge I’ve acquired into something meaningful something that can bring joy to those around me, whether through my sense of humor or by entertaining others while I stream myself playing games.</p>
                <div class="about-facts"><div><span>01</span><p>Information Systems<br><strong>Student</strong></p></div><div><span>02</span><p>Area of interest<br><strong>Web &amp; App Development</strong></p></div></div>
            </div>
        </div>
    </section>

    <section class="section section-skills" id="skills" aria-labelledby="skills-title">
        <div class="container">
            <div class="section-heading heading-row"><div><p class="eyebrow">02 — SKILLS</p><h2 id="skills-title">Tools I work<br><span>with.</span></h2></div><p class="section-intro">this is a list of tools I have learned and worked with. So far, I am still learning and improving my skills in these areas to be good quality :)</p></div>
            <div class="skills-grid">
                <article class="skill-card"><span class="skill-number">01</span><span class="skill-mark">&lt;/&gt;</span><h3>HTML</h3><p>Semantic markup</p></article>
                <article class="skill-card"><span class="skill-number">02</span><span class="skill-mark">#</span><h3>CSS</h3><p>Responsive styling</p></article>
                <article class="skill-card"><span class="skill-number">03</span><span class="skill-mark">JS</span><h3>JavaScript</h3><p>Web interactions</p></article>
                <article class="skill-card"><span class="skill-number">04</span><span class="skill-mark skill-php">php</span><h3>PHP</h3><p>Server-side basics</p></article>
                <article class="skill-card"><span class="skill-number">05</span><span class="skill-mark skill-flutter">◈</span><h3>Flutter</h3><p>Mobile applications</p></article>
                <article class="skill-card"><span class="skill-number">06</span><span class="skill-mark">↔</span><h3>REST API</h3><p>API integration</p></article>
                <article class="skill-card"><span class="skill-number">07</span><span class="skill-mark">▤</span><h3>Databases</h3><p>Data management</p></article>
                <article class="skill-card"><span class="skill-number">08</span><span class="skill-mark">⌘</span><h3>Git / GitHub</h3><p>Version control</p></article>
            </div>
        </div>
    </section>

    <section class="section section-projects" id="projects" aria-labelledby="projects-title">
        <div class="container">
            <div class="section-heading heading-row"><div><p class="eyebrow">03 — SELECTED WORK</p><h2 id="projects-title">Projects in<br><span>focus.</span></h2></div><p class="section-intro">projects I have worked on</p></div>
            <div class="projects-grid">
                <article class="project-card project-card-featured">
                    <div class="project-art art-attendance" aria-hidden="true"><div class="browser-bar"><i></i><i></i><i></i><span>attendance / dashboard</span></div><div class="dashboard-art"><div class="dashboard-sidebar"></div><div class="dashboard-content"><b></b><div class="dashboard-cards"><i></i><i></i><i></i></div><div class="dashboard-table"><i></i><i></i><i></i><i></i></div></div></div><span class="art-label">WEB APP / 01</span></div>
                    <div class="project-meta"><div><span class="project-type">WEB APPLICATION</span><h3>Web Data Absensi Karyawan</h3><p>Project pengelolaan data absensi karyawan berbasis web.</p></div><span class="project-arrow" aria-hidden="true">↗</span></div>
                    <div class="project-tags"><span>HTML</span><span>CSS</span><span>PHP</span></div>
                </article>
                <article class="project-card">
                    <div class="project-art art-speed" aria-hidden="true"><div class="phone-art"><div class="phone-notch"></div><span class="phone-brand">SPEED<span>ID</span></span><div class="phone-map"><i></i><i></i><i></i></div><div class="phone-pill"></div><div class="phone-bottom"></div></div><span class="art-label">MOBILE / 02</span></div>
                    <div class="project-meta"><div><span class="project-type">MOBILE APPLICATION</span><h3>Speed ID</h3><p>Aplikasi Flutter dengan integrasi API.</p></div><span class="project-arrow" aria-hidden="true">↗</span></div>
                    <div class="project-tags"><span>Flutter</span><span>REST API</span></div>
                </article>
                <article class="project-card">
                    <div class="project-art art-byu" aria-hidden="true"><div class="byu-orb orb-one"></div><div class="byu-orb orb-two"></div><span class="byu-wordmark">by.U</span><span class="byu-caption">WEB PROJECT</span><span class="art-label">WEB / 03</span></div>
                    <div class="project-meta"><div><span class="project-type">WEB PROJECT</span><h3>By.U Web Project</h3><p>Project web bertema By.U.</p></div><span class="project-arrow" aria-hidden="true">↗</span></div>
                    <div class="project-tags"><span>Web</span><span>UI</span></div>
                </article>
            </div>
            
        </div>
    </section>

    <section class="section section-contact" id="contact" aria-labelledby="contact-title">
        <div class="container contact-panel">
            <div class="contact-orb" aria-hidden="true"></div>
            <div class="contact-content"><p class="eyebrow">04 — CONTACT</p><h2 id="contact-title">Have a project<br>in <span>mind?</span></h2><p>I am open to discussing projects, collaborations, or opportunities to learn together.</p><a class="button button-primary" href="https://mail.google.com/mail/berland.cd@gmail.com" target="_blank" rel="noopener noreferrer">Email me on Gmail <span aria-hidden="true">↗</span></a></div>
            <div class="contact-details"><span class="contact-label">GET IN TOUCH</span><a href="https://mail.google.com/mail/berland.cd@gmail.com" target="_blank" rel="noopener noreferrer"> My Gmail<span aria-hidden="true">↗</span></a><div class="social-links"><a href="https://github.com/Alberlaan" target="_blank" rel="noopener noreferrer" aria-label="GitHub placeholder, replace YOUR_USERNAME">GitHub <span>↗</span></a><a href="https://www.linkedin.com/in/berlan-cah-dewa-203931420" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn placeholder, replace YOUR_USERNAME">LinkedIn <span>↗</span></a></div><p class="placeholder-note"> +62 851-7226-5794</p></div>
        </div>
    </section>
</main>

<footer class="site-footer"><div class="container footer-inner"><a class="wordmark" href="#top">BERLAN Cah DEWA<span>.</span></a><p>Designed &amp; built with care.</p><p>© {{ now()->year }} Berlan CahDewa</p></div></footer>
@endsection
