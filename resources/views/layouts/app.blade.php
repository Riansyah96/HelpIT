<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'HelpIT ID') - Solusi IT Cepat, Mudah, dan Terpercaya</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#0EA5E9',
                        background: '#0F172A',
                        surface: '#1E293B',
                        accent: '#F59E0B',
                        text: '#E2E8F0',
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Framer Motion -->
    <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.umd.js"></script>
    
    <style>
        html, body { 
            transition: background-color .3s, color .3s; 
            margin: 0;
            padding: 0;
            background-color: #0F172A;
            color: #E2E8F0;
        }
        .pt-safe { 
            padding-top: 5rem; 
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-background text-text min-h-screen">
    <!-- Navigation -->
    @include('layouts.partials.navbar')
    
    <!-- Main Content -->
    <main class="pt-safe">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('layouts.partials.footer')
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // Dark Mode Toggle (disesuaikan dengan palet gelap)
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        
        function initDarkMode() {
            // Selalu gunakan tema gelap
            document.documentElement.classList.add('dark');
            updateThemeIcon(true);
        }
        
        function updateThemeIcon(isDark) {
            if (themeIcon) {
                themeIcon.classList.toggle('fa-sun', !isDark);
                themeIcon.classList.toggle('fa-moon', isDark);
            }
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            initDarkMode();
            
            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    const isDark = document.documentElement.classList.toggle('dark');
                    localStorage.setItem('theme', isDark ? 'dark' : 'light');
                    updateThemeIcon(isDark);
                });
            }
            
            // Initialize animations (sama seperti semula)
            if (window.FramerMotion) {
                const { animate } = window.FramerMotion;
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const element = entry.target;
                            const animation = element.getAttribute('data-aos') || 'fade';
                            const delay = parseInt(element.getAttribute('data-aos-delay')) || 0;
                            
                            let initial = {};
                            let target = {};
                            
                            switch(animation) {
                                case 'fade-up': initial = { y: 50, opacity: 0 }; target = { y: 0, opacity: 1 }; break;
                                case 'fade-down': initial = { y: -50, opacity: 0 }; target = { y: 0, opacity: 1 }; break;
                                case 'fade-left': initial = { x: -50, opacity: 0 }; target = { x: 0, opacity: 1 }; break;
                                case 'fade-right': initial = { x: 50, opacity: 0 }; target = { x: 0, opacity: 1 }; break;
                                case 'zoom-in': initial = { scale: 0.8, opacity: 0 }; target = { scale: 1, opacity: 1 }; break;
                                default: initial = { opacity: 0 }; target = { opacity: 1 }; break;
                            }
                            
                            Object.assign(element.style, initial);
                            
                            setTimeout(() => {
                                animate(element, target, { 
                                    duration: 0.6, 
                                    delay: delay / 1000,
                                    ease: [0.17, 0.55, 0.55, 1]
                                });
                            }, 10);
                            
                            observer.unobserve(element);
                        }
                    });
                }, { threshold: 0.1 });
                
                document.querySelectorAll('[data-aos]').forEach(el => observer.observe(el));
            }
        });
        
        // Initialize Alpine.js
        document.addEventListener('alpine:init', () => {
            Alpine.data('dropdown', () => ({
                open: false,
                toggle() { this.open = !this.open; },
                close() { this.open = false; }
            }));
        });
    </script>
    
    @stack('scripts')
</body>
</html>