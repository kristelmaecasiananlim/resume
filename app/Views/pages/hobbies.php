<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Hobbies - Kristel Mae C. Lim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="icon" type="image/jpeg" href="<?= base_url('images/kmllogo.jpg') ?>">
    
    <style>
        html { 
            scroll-behavior: smooth; 
        }

        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; 
            color: #2d3436; 
            padding-top: 60px;
            cursor: none;
            background: linear-gradient(135deg, #e8f5e9 0%, #f1f8f4 100%);
            min-height: 100vh;
        }

        /* Custom Cursor */
        .cursor {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 2px solid #66bb6a;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transition: all 0.1s ease;
            transform: translate(-50%, -50%);
        }

        .cursor-dot {
            position: fixed;
            width: 8px;
            height: 8px;
            background-color: #2e7d32;
            border-radius: 50%;
            pointer-events: none;
            z-index: 10000;
            transition: all 0.05s ease;
            transform: translate(-50%, -50%);
        }

        .cursor.hover {
            width: 60px;
            height: 60px;
            background-color: rgba(102, 187, 106, 0.1);
        }

        /* Header & Navigation */
        header { 
            background-color: #ffffff; 
            padding: 60px 0 0;
        }

        .menu { 
            padding: .4rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            background-color: #e8f5e9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header ul { 
            border-bottom: 1px solid #17621a; 
            list-style: none; 
            margin: 0; 
            padding: 0; 
            text-align: right; 
        }

        header li { 
            display: inline-block; 
        }

        header li a { 
            color: #2e7d32; 
            display: block; 
            height: 44px; 
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 18px;
        }

        header li.menu-item a { 
            margin: 5px 0; 
            height: 38px; 
            line-height: 36px; 
            padding: .4rem .65rem; 
        }

        header li.menu-item a:hover { 
            background-color: #66bb6a; 
            color: white; 
        }

        .logo { 
            float: left; 
            height: 44px; 
            padding: .4rem .5rem; 
            font-weight: bold; 
            color: #2e7d32; 
            font-size: 24px;
        }

        .menu-toggle { 
            display: none; 
            float: right; 
        }

        .menu-toggle button { 
            background-color: #3a793c; 
            border: none; 
            border-radius: 3px; 
            color: white; 
            cursor: pointer; 
            font-size: 1.3rem; 
            height: 36px; 
            width: 40px; 
            margin: 11px 0; 
        }

        .menu-toggle button:hover { 
            background-color: #66bb6a; 
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #2e7d32 0%, #66bb6a 100%);
            color: white;
            padding: 4rem 0 3rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-image: 
                url('data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="0" width="4" height="40" fill="%23ffffff" opacity="0.1"/><rect x="0" y="18" width="40" height="4" fill="%23ffffff" opacity="0.1"/></svg>'),
                url('data:image/svg+xml;utf8,<svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg"><rect x="12" y="0" width="4" height="28" fill="%23ffffff" opacity="0.08"/><rect x="0" y="12" width="28" height="4" fill="%23ffffff" opacity="0.08"/></svg>'),
                url('data:image/svg+xml;utf8,<svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><rect x="9" y="0" width="4" height="22" fill="%23ffffff" opacity="0.06"/><rect x="0" y="9" width="22" height="4" fill="%23ffffff" opacity="0.06"/></svg>');
            background-repeat: no-repeat;
            background-position: 10% 30%, 85% 20%, 50% 60%, 20% 70%, 70% 40%;
            background-size: 40px 40px, 28px 28px, 22px 22px;
            pointer-events: none;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(20px, -20px); }
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .page-header p {
            font-size: 1.3rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        /* Main Content */
        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1.75rem;
        }

        /* Hobby Cards */
        .hobbies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .hobby-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(46, 125, 50, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            border-left: 6px solid #66bb6a;
        }

        .hobby-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(46, 125, 50, 0.2);
            border-left-color: #2e7d32;
        }

        .hobby-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #66bb6a 0%, #81c784 50%, #66bb6a 100%);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .hobby-card:hover::before {
            opacity: 1;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .hobby-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .hobby-card:hover .hobby-image {
            transform: scale(1.08);
        }

        .hobby-image-wrapper {
            overflow: hidden;
            position: relative;
        }

        .hobby-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .hobby-card:hover .hobby-icon {
            transform: rotate(360deg) scale(1.1);
        }

        .hobby-content {
            padding: 1.75rem;
        }

        .hobby-title {
            color: #2e7d32;
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
            position: relative;
            display: inline-block;
        }

        .hobby-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #66bb6a, #81c784);
            transition: width 0.4s ease;
        }

        .hobby-card:hover .hobby-title::after {
            width: 100%;
        }

        .hobby-description {
            color: #555;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1.25rem;
        }

        .hobby-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .hobby-tag {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 0.4rem 0.9rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid #c8e6c9;
            transition: all 0.3s ease;
        }

        .hobby-tag:hover {
            background-color: #2e7d32;
            color: white;
            border-color: #2e7d32;
            transform: translateY(-2px);
        }

        /* Quote Section */
        .quote-section {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            margin: 3rem 0;
            box-shadow: 0 4px 20px rgba(46, 125, 50, 0.1);
            border-left: 6px solid #66bb6a;
            position: relative;
        }

        .quote-section::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 6rem;
            color: #e8f5e9;
            font-family: Georgia, serif;
            line-height: 1;
        }

        .quote-text {
            font-size: 1.5rem;
            color: #2e7d32;
            font-style: italic;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .quote-author {
            text-align: center;
            margin-top: 1rem;
            color: #66bb6a;
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Footer */
        footer { 
            background-color: #66bb6a; 
            color: white; 
            text-align: center; 
            padding: 2rem;
            margin-top: 3rem;
        }

        footer a {
            color: white;
            text-decoration: underline;
        }

        footer a:hover {
            color: #e8f5e9;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Stagger delays */
        .hobby-card:nth-child(1) { animation-delay: 0s; }
        .hobby-card:nth-child(2) { animation-delay: 0.1s; }
        .hobby-card:nth-child(3) { animation-delay: 0.2s; }
        .hobby-card:nth-child(4) { animation-delay: 0.3s; }
        .hobby-card:nth-child(5) { animation-delay: 0.4s; }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1.1rem;
            }

            .hobbies-grid {
                grid-template-columns: 1fr;
            }

            .quote-section {
                padding: 1.5rem;
            }

            .quote-text {
                font-size: 1.2rem;
            }

            .menu-toggle { 
                display: block; 
                padding: 0 1rem; 
            }

            .menu-item { 
                background-color: #e8f5e9; 
                border-top: 1px solid #c8e6c9; 
                margin: 0 15px; 
                width: calc(100% - 30px); 
            }

            .menu-item.hidden { 
                display: none; 
            }
        }
    </style>
</head>
<body>
    <div class="cursor"></div>
    <div class="cursor-dot"></div>

    <!-- Navigation -->
    <header>
        <div class="menu">
            <ul>
                <li class="logo">KML</li>
                <li class="menu-toggle"><button id="menuToggle">&#9776;</button></li>
                <li class="menu-item hidden"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('/#skills') ?>">Skills</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('/#projects') ?>">Projects</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('/#awards') ?>">Awards</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('/#experience') ?>">Experience</a></li>
                <li class="menu-item hidden"><a href="<?= base_url('/#contact') ?>">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Page Header -->
    <div class="page-header">
        <h1>My Hobbies & Passions</h1>
        <p>Exploring life beyond the code</p>
    </div>

    <!-- Main Content -->
    <div class="content-wrapper">
        <!-- Hobby Cards Grid -->
        <div class="hobbies-grid">
            <!-- Running -->
            <div class="hobby-card fade-in">
                <div class="hobby-image-wrapper">
                    <img src="<?= base_url('images/hobbies/running.jpg') ?>" alt="Running" class="hobby-image">
                    <div class="hobby-icon">🏃‍♀️</div>
                </div>
                <div class="hobby-content">
                    <h2 class="hobby-title">Running</h2>
                    <p class="hobby-description">
                        Running is my meditation in motion. Whether it's early morning trail runs or evening jogs, 
                        I find clarity and strength with every stride. It's not just about fitness—it's about 
                        pushing boundaries and discovering what I'm truly capable of.
                    </p>
                    <div class="hobby-tags">
                        <span class="hobby-tag">Endurance</span>
                        <span class="hobby-tag">Trail Running</span>
                        <span class="hobby-tag">5K - 10K</span>
                        <span class="hobby-tag">Mental Clarity</span>
                    </div>
                </div>
            </div>

            <!-- Boxing -->
            <div class="hobby-card fade-in">
                <div class="hobby-image-wrapper">
                    <img src="<?= base_url('images/hobbies/boxing.jpg') ?>" alt="Boxing" class="hobby-image">
                    <div class="hobby-icon">🥊</div>
                </div>
                <div class="hobby-content">
                    <h2 class="hobby-title">Boxing</h2>
                    <p class="hobby-description">
                        Boxing teaches me discipline, focus, and resilience. Every training session is a lesson 
                        in perseverance—learning to take hits, stay on my feet, and come back stronger. 
                        It's empowering both physically and mentally.
                    </p>
                    <div class="hobby-tags">
                        <span class="hobby-tag">Strength Training</span>
                        <span class="hobby-tag">Self-Defense</span>
                        <span class="hobby-tag">Discipline</span>
                        <span class="hobby-tag">Cardio</span>
                    </div>
                </div>
            </div>

            <!-- Free Diving -->
            <div class="hobby-card fade-in">
                <div class="hobby-image-wrapper">
                    <img src="<?= base_url('images/hobbies/freediving.jpg') ?>" alt="Free Diving" class="hobby-image">
                    <div class="hobby-icon">🤿</div>
                </div>
                <div class="hobby-content">
                    <h2 class="hobby-title">Free Diving</h2>
                    <p class="hobby-description">
                        Descending into the depths on a single breath is the ultimate form of meditation. 
                        Free diving has taught me breath control, mental calmness, and respect for the ocean. 
                        It's where I feel most connected to nature and myself.
                    </p>
                    <div class="hobby-tags">
                        <span class="hobby-tag">Breath Control</span>
                        <span class="hobby-tag">Ocean Exploration</span>
                        <span class="hobby-tag">Mindfulness</span>
                        <span class="hobby-tag">Adventure</span>
                    </div>
                </div>
            </div>

            <!-- Drawing -->
            <div class="hobby-card fade-in">
                <div class="hobby-image-wrapper">
                    <img src="<?= base_url('images/hobbies/drawing.jpg') ?>" alt="Drawing" class="hobby-image">
                    <div class="hobby-icon">🎨</div>
                </div>
                <div class="hobby-content">
                    <h2 class="hobby-title">Drawing</h2>
                    <p class="hobby-description">
                        From digital illustrations to traditional sketches, drawing is my creative outlet. 
                        It allows me to express ideas that words can't capture and brings my imagination to life. 
                        Every piece tells a story, and every stroke is a form of expression.
                    </p>
                    <div class="hobby-tags">
                        <span class="hobby-tag">Digital Art</span>
                        <span class="hobby-tag">Illustration</span>
                        <span class="hobby-tag">Creative Expression</span>
                        <span class="hobby-tag">Design</span>
                    </div>
                </div>
            </div>

            <!-- Flute Recorder -->
            <div class="hobby-card fade-in">
                <div class="hobby-image-wrapper">
                    <img src="<?= base_url('images/hobbies/flute.jpg') ?>" alt="Flute Recorder" class="hobby-image">
                    <div class="hobby-icon">🎵</div>
                </div>
                <div class="hobby-content">
                    <h2 class="hobby-title">Flute Recorder</h2>
                    <p class="hobby-description">
                        Playing the flute recorder brings harmony to my life—literally. Music is a universal 
                        language, and through melodies, I find peace and joy. It's my way of creating beauty 
                        and sharing emotions through sound.
                    </p>
                    <div class="hobby-tags">
                        <span class="hobby-tag">Music</span>
                        <span class="hobby-tag">Melodies</span>
                        <span class="hobby-tag">Relaxation</span>
                        <span class="hobby-tag">Performance</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quote Section -->
        <div class="quote-section fade-in">
            <p class="quote-text">
                Life is not meant to be lived in a single dimension. My hobbies remind me to stay curious, 
                stay active, and never stop exploring.
            </p>
            <p class="quote-author">— Kristel Mae C. Lim</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Kristel Mae C. Lim. All rights reserved. | <a href="<?= base_url('/') ?>">Back to Portfolio</a></p>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Custom cursor functionality
            const cursor = document.querySelector('.cursor');
            const cursorDot = document.querySelector('.cursor-dot');
            
            document.addEventListener('mousemove', (e) => {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
                cursorDot.style.left = e.clientX + 'px';
                cursorDot.style.top = e.clientY + 'px';
            });
            
            document.querySelectorAll('a, button, .hobby-card').forEach(el => {
                el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
                el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
            });
            
            // Mobile menu toggle
            const menuToggle = document.getElementById("menuToggle");
            if (menuToggle) {
                menuToggle.onclick = function() {
                    document.querySelectorAll('.menu-item').forEach(item => {
                        item.classList.toggle("hidden");
                    });
                };
            }

            // Scroll animations
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>