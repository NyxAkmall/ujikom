<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TechNova - Modern and Interactive Website">
    <title>TechNova</title>
    <!-- Favicon untuk logo di tab browser -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos/logo.png') }}" type="image/x-icon">
    <!-- Link ke stylesheet untuk halaman ini -->
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
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
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section (Bagian Banner Utama) -->
    <header class="hero">
        <div class="container hero-content">
            <h1>Welcome to <span>TechNova</span></h1>
            <!-- Tombol untuk mengarahkan pengguna ke bagian layanan -->
            <a href="#services" class="btn-primary">Explore Services</a>
        </div>
    </header>

    <!-- Services Section (Bagian Layanan) -->
    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-cards">
                <!-- Setiap layanan ditampilkan dalam kartu -->
                <div class="card">
                    <h3>Creative Design</h3>
                    <p>Lorem ipsum</p>
                </div>
                <div class="card">
                    <h3>Web Development</h3>
                    <p>Lorem ipsum</p>
                </div>
                <div class="card">
                    <h3>Digital Marketing</h3>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (Bagian Testimoni) -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <!-- Slider untuk menampilkan testimoni -->
            <div class="testimonial-slider">
                <div class="testimonial">
                    <p>"TechNova transformed our online presence with a sleek and functional website."</p>
                    <h4>– Jane Doe, CEO of InnovateCo</h4>
                </div>
                <div class="testimonial">
                    <p>"Their team exceeded our expectations in delivering a powerful marketing strategy."</p>
                    <h4>– John Smith, Marketing Head at MarketX</h4>
                </div>
                <div class="testimonial">
                    <p>"From design to execution, TechNova nailed every aspect of our project."</p>
                    <h4>– Sarah Johnson, Founder of StartUpSpark</h4>
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
    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>

</html>
