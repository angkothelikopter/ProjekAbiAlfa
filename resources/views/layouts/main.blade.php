<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjekAbiAlfa2025</title>
    <!-- Bootstrap CSS (offline) -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('MU.jpg') }}">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        
        :root {
            --primary: #4e73df;
            --primary-dark: #3a56c4;
            --secondary: #6f42c1;
            --success: #1cc88a;
            --light: #f8f9fc;
            --dark: #2e3a59;
            --accent: #36b9cc;
            --gradient-start: #667eea;
            --gradient-end: #764ba2;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #444;
            background: linear-gradient(135deg, #f5f7fb 0%, #e8ecf1 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .navbar {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
            background: linear-gradient(120deg, var(--gradient-start), var(--gradient-end)) !important;
            padding: 0.6rem 0;
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: white !important;
            display: flex;
            align-items: center;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        .navbar-brand::before {
            content: "";
            display: inline-block;
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            margin-right: 12px;
            transform: rotate(45deg);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .nav-link {
            font-weight: 600;
            padding: 0.6rem 1.2rem !important;
            margin: 0 0.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: rgba(255, 255, 255, 0.9) !important;
            position: relative;
            letter-spacing: 0.3px;
        }
        
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255, 255, 255, 0.18);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 70%;
        }
        
        .container.my-4 {
            flex: 1;
        }
        
        .main-content {
            background: white;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            padding: 2.5rem;
            margin-bottom: 2.5rem;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .main-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .main-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(to right, var(--primary), var(--accent), var(--secondary));
            border-radius: 8px 8px 0 0;
        }
        
        footer {
            background: linear-gradient(120deg, var(--dark), var(--primary)) !important;
            margin-top: auto;
            position: relative;
            overflow: hidden;
        }
        
        footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, var(--accent), var(--secondary));
        }
        
        footer p {
            margin: 0;
            padding: 0;
            font-size: 0.95rem;
            opacity: 0.9;
            font-weight: 500;
        }
        
        .social-icons {
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            background-color: rgba(255, 255, 255, 0.12);
            border-radius: 50%;
            text-align: center;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 18px;
        }
        
        .social-icons a:hover {
            background-color: white;
            color: var(--primary);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        /* Decorative elements */
        .divider {
            height: 4px;
            width: 80px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            margin: 1.8rem 0;
            border-radius: 4px;
        }
        
        /* Animation for page transitions */
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Custom button styles */
        .btn-primary {
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            border: none;
            border-radius: 8px;
            padding: 0.7rem 1.8rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(78, 115, 223, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.4);
            background: linear-gradient(to right, var(--primary-dark), var(--primary));
        }
        
        /* Card enhancements */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        
        .card-title {
            font-weight: 700;
            color: var(--dark);
        }
        
        /* Custom background shapes */
        .bg-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .shape-1 {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(78, 115, 223, 0.1), rgba(54, 185, 204, 0.1));
        }
        
        .shape-2 {
            position: absolute;
            bottom: -70px;
            left: -70px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(111, 66, 193, 0.1), rgba(78, 115, 223, 0.1));
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            z-index: 1000;
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Image container improvements */
        .image-container {
            width: 250px;
            height: 334px;
            overflow: hidden;
            border-bottom: 1px solid #eee;
            margin: 0 auto;
            border-radius: 8px 8px 0 0;
            position: relative;
        }

        .image-container img {
            width: 100%;        
            height: 100%;
            object-fit: cover;  
            transition: transform 0.5s ease;
        }
        
        .card:hover .image-container img {
            transform: scale(1.05);
        }
        
        .card-custom {
            width: 250px;   
            margin: 15px auto;
            border-radius: 12px;
            overflow: hidden;
        }
        
        /* Text selection color */
        ::selection {
            background-color: rgba(78, 115, 223, 0.2);
            color: var(--dark);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, var(--primary-dark), var(--secondary));
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .nav-link {
                padding: 0.5rem 1rem !important;
            }
            
            .main-content {
                padding: 1.5rem;
            }
        }
        
        .contact-card {
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            background: linear-gradient(145deg, #ffffff, #f8f9fc);
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
        }
        
        .profile-img-container {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            border: 5px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover .profile-img-container {
            border-color: var(--primary);
            transform: scale(1.05);
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .contact-info {
            text-align: left;
            margin-top: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px 15px;
            background-color: rgba(78, 115, 223, 0.05);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            background-color: rgba(78, 115, 223, 0.1);
            transform: translateX(5px);
        }
        
        .contact-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            flex-shrink: 0;
        }
        
        .contact-text {
            font-size: 1.05rem;
            color: #495057;
        }
        
        .card-title {
            color: var(--dark);
            position: relative;
            padding-bottom: 15px;
        }
        
        .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 3px;
        }
        
        @media (max-width: 768px) {
            .profile-img-container {
                width: 150px;
                height: 150px;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                padding: 15px 10px;
            }
            
            .contact-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
                .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .divider {
            height: 3px;
            width: 60px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            margin: 1.5rem 0;
            border-radius: 3px;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 12px;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
        }
        
    </style>
</head>
<body>
    <!-- Background shapes -->
    <div class="bg-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">ChampionZone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('articles') ? 'active' : '' }}" href="{{ route('articles') }}">
                            <i class="fas fa-newspaper me-1"></i>Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-4">
        <div class="main-content fade-in">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-2">&copy; 2025 MyOnlySite. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    
    <!-- Back to top button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS Offline -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Add animation to cards on scroll
        const cards = document.querySelectorAll('.card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        cards.forEach(card => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>