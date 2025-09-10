<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Simple Web</title>
    <!-- Bootstrap CSS (offline) -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        :root {
            --primary: #4e73df;
            --secondary: #6f42c1;
            --success: #1cc88a;
            --light: #f8f9fc;
            --dark: #2e3a59;
            --accent: #36b9cc;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #444;
            background-color: #f5f7fb;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(120deg, var(--dark), var(--primary)) !important;
            padding: 0.8rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand::before {
            content: "";
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: white;
            border-radius: 8px;
            margin-right: 10px;
            transform: rotate(45deg);
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            color: rgba(255, 255, 255, 0.85) !important;
        }
        
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white !important;
            transform: translateY(-2px);
        }
        
        .container.my-4 {
            flex: 1;
        }
        
        .main-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .main-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary), var(--accent));
        }
        
        footer {
            background: linear-gradient(120deg, var(--dark), var(--primary)) !important;
            margin-top: auto;
        }
        
        footer p {
            margin: 0;
            padding: 0;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .social-icons {
            margin-top: 0.5rem;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-icons span {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-icons span:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }
        
        /* Decorative elements */
        .divider {
            height: 3px;
            width: 60px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            margin: 1.5rem 0;
            border-radius: 3px;
        }
        
        /* Animation for page transitions */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Custom icons using CSS */
        .icon-home::before {
            content: "⌂";
            margin-right: 5px;
            font-size: 1.2em;
        }
        
        .icon-articles::before {
            content: "📰";
            margin-right: 5px;
        }
        
        .icon-contact::before {
            content: "✉";
            margin-right: 5px;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">MyLaravelSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <span class="icon-home"></span>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('articles') ? 'active' : '' }}" href="{{ route('articles') }}">
                            <span class="icon-articles"></span>Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <span class="icon-contact"></span>Contact
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
            <p class="mb-2">&copy; 2025 MyLaravelSite. All rights reserved.</p>
            <div class="social-icons">
                <span>f</span>
                <span>t</span>
                <span>in</span>
                <span>ig</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Offline -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
