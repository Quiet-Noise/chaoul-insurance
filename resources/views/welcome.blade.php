<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaoul Insurance Brokerage - Your Trusted Insurance Partner</title>
    <meta name="description"
        content="Chaoul Insurance Brokerage - Exceptional service. Transparent policies. Lasting relationships. 11+ years of expertise serving 3,000+ clients in Lebanon.">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            height: 50px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #0066cc;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #0066cc 0%, #004c99 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: #0066cc;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        /* Stats Section */
        .stats {
            background: #f8f9fa;
            padding: 60px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3rem;
            color: #0066cc;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
            color: #666;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #0066cc;
        }

        .service-card p {
            color: #666;
        }

        /* Values Section */
        .values {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .value-item {
            text-align: center;
            padding: 20px;
        }

        .value-item h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .value-item p {
            color: #666;
        }

        /* Testimonial Section */
        .testimonial {
            padding: 80px 0;
            background: white;
        }

        .testimonial-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .testimonial-text {
            font-size: 1.5rem;
            font-style: italic;
            color: #333;
            margin-bottom: 2rem;
        }

        .testimonial-author {
            font-weight: 600;
            color: #0066cc;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(135deg, #0066cc 0%, #004c99 100%);
            color: white;
            padding: 80px 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .contact-item {
            text-align: center;
        }

        .contact-item h3 {
            margin-bottom: 1rem;
        }

        .contact-item a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .contact-item a:hover {
            opacity: 0.8;
        }

        /* Footer */
        footer {
            background: #1a1a1a;
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        footer p {
            margin-bottom: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <img src="{{ asset('logo-jm-insurance.svg') }}" alt="Chaoul Insurance" class="logo">
            <ul class="nav-links">
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Chaoul Insurance Brokerage</h1>
            <p>Exceptional service. Transparent policies. Lasting relationships.</p>
            <a href="#contact" class="cta-button">Get a Quote</a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>3,000+</h3>
                    <p>Satisfied Clients</p>
                </div>
                <div class="stat-item">
                    <h3>11+</h3>
                    <p>Years of Experience</p>
                </div>
                <div class="stat-item">
                    <h3>12</h3>
                    <p>Team Members</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">Our Insurance Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Car Insurance</h3>
                    <p>Comprehensive coverage for your vehicle with flexible plans tailored to your needs.</p>
                </div>
                <div class="service-card">
                    <h3>Personal & Family Coverage</h3>
                    <p>Protect what matters most with life, health, and accident insurance solutions.</p>
                </div>
                <div class="service-card">
                    <h3>Business Insurance</h3>
                    <p>Safeguard your business with customized commercial insurance packages.</p>
                </div>
                <div class="service-card">
                    <h3>Property Insurance</h3>
                    <p>Secure your home and assets against unforeseen damages and losses.</p>
                </div>
                <div class="service-card">
                    <h3>Expatriate Insurance</h3>
                    <p>Specialized coverage for expatriates living and working abroad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values" id="about">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Local Market Expertise</h3>
                    <p>Deep understanding of the Lebanese insurance market and regulatory landscape.</p>
                </div>
                <div class="value-item">
                    <h3>Customized Solutions</h3>
                    <p>Tailored insurance policies that match your unique requirements and budget.</p>
                </div>
                <div class="value-item">
                    <h3>Claims Advocacy</h3>
                    <p>Dedicated support throughout the claims process to ensure fair settlements.</p>
                </div>
                <div class="value-item">
                    <h3>Impartial Guidance</h3>
                    <p>Independent professional advice focused solely on your best interests.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="testimonial-content">
                <p class="testimonial-text">"No insurance is like crossing a bridge blindfolded."</p>
                <p class="testimonial-author">Yammine Yammine - CTO of Quiet Noise</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title" style="color: white;">Get In Touch</h2>
            <div class="contact-grid">
                <div class="contact-item">
                    <h3>Phone</h3>
                    <p><a href="tel:+96170260064">+961 70 260 064</a></p>
                </div>
                <div class="contact-item">
                    <h3>Email</h3>
                    <p><a href="mailto:info@chaoul-insurance.com">info@chaoul-insurance.com</a></p>
                </div>
                <div class="contact-item">
                    <h3>Location</h3>
                    <p>Baabda, Lebanon</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p><strong>Chaoul Insurance Brokerage</strong></p>
            <p>Founded by Jean Marc Chaoul</p>
            <p>Commercial Register No. 2078496 | Ministry Permit No. 351/Decision No. 399</p>
            <p>&copy; {{ date('Y') }} Chaoul Insurance Brokerage. All rights reserved.</p>
        </div>
    </footer>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L49PM76P2K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
    
        gtag('config', 'G-L49PM76P2K');
    </script>
</body>
</html>
