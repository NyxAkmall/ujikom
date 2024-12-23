<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About TechNova - Learn More About Us">
    <title>About | TechNova</title>
    <!-- Favicon untuk logo di tab browser -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos/logo.png') }}" type="image/x-icon">
    <!-- Link ke stylesheet untuk halaman ini -->
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container navbar-container">
            <!-- Logo yang mengarah ke halaman home -->
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/img/logos/logo.png') }}" alt="TechNova Logo">
            </a>
            <!-- Menu Navigasi -->
            <ul class="nav-links">
                <li><a href="{{ route('about') }}" class="active">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- About Section (Bagian Tentang Kami) -->
    <header class="hero">
        <div class="container hero-content">
            <h1>About <span>TechNova</span></h1>
            <p>Lorem ipsum</p>
        </div>
    </header>

    <!-- Who We Are Section (Siapa Kami) -->
    <section id="about" class="about">
        <div class="container">
            <h2>Who We Are</h2>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
        </div>
    </section>

    <!-- Our Values Section (Bagian Nilai Kami) -->
    <section id="values" class="values">
        <div class="container">
            <h2>Our Core Values</h2>
            <div class="value-cards">
                <div class="card">
                    <h3>Innovation</h3>
                    <p>Lorem ipsum</p>
                </div>
                <div class="card">
                    <h3>Excellence</h3>
                    <p>Lorem ipsum</p>
                </div>
                <div class="card">
                    <h3>Collaboration</h3>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Team Section (Temui Tim Kami) -->
    <section id="team" class="team">
        <div class="container">
            <h2>Meet Our Team</h2>
            <div class="team-members">
                <div class="member">
                    <img src="{{ asset('assets/img/team/1.jpg') }}" alt="Team Member 1">
                    <h3>Jane Doe</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="member">
                    <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Team Member 2">
                    <h3>John Smith</h3>
                    <p>Lead Developer</p>
                </div>
                <div class="member">
                    <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Team Member 3">
                    <h3>Sarah Johnson</h3>
                    <p>Marketing Specialist</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section (Bagian Footer) -->
    <footer class="footer">
        <div class="container footer-container">
            <p>&copy; 2024 TechNova. All rights reserved.</p>
            <!-- Link sosial media -->
            <div class="social-links">
                <a href="#"><img src="{{ asset('assets/img/logos/facebook.svg') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('assets/img/logos/google.svg') }}" alt="Google"></a>
                <a href="#"><img src="{{ asset('assets/img/logos/ibm.svg') }}" alt="IBM"></a>
            </div>
        </div>
    </footer>

    <!-- Skrip JavaScript untuk interaktivitas -->
    <script src="{{ asset('assets/js/about.js') }}"></script>
</body>

</html>
