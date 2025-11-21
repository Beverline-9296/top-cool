<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Top-Cool Aluminium & Glass | Premium Windows & Doors Installation</title>
    <meta name="description" content="Top-Cool Aluminium & Glass - Expert aluminum windows, doors, frames, and glass installation services. Quality craftsmanship for residential and commercial projects in your area.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Suppress Tailwind CDN warning in development
        tailwind.config = {
            darkMode: 'class', // Enable class-based dark mode
            corePlugins: {
                preflight: true,
            },
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#f59e0b',
                        accent: '#10b981'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#2563eb">
    
    <!-- Enhanced Styles -->
    <link rel="stylesheet" href="{{ asset('enhanced-styles.css') }}">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .float { animation: float 3s ease-in-out infinite; }
        .gradient-text {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Animated gradient background */
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gradient {
            animation: gradient 6s ease infinite;
        }
    </style>
<body class="transition-colors duration-300 bg-white dark:bg-gray-900">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-building text-white text-lg"></i>
                    </div>
                    <span class="text-xl lg:text-2xl font-bold gradient-text">Top-Cool</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200 font-medium">Home</a>
                    <a href="#services" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200 font-medium">Services</a>
                    <a href="#portfolio" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200 font-medium">Portfolio</a>
                    <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200 font-medium">About</a>
                    <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200 font-medium">Contact</a>
                    
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200" aria-label="Toggle theme">
                        <i class="fas fa-sun text-xl text-gray-700 dark:text-gray-300 hidden dark:inline-block"></i>
                        <i class="fas fa-moon text-xl text-gray-700 dark:text-gray-300 inline-block dark:hidden"></i>
                    </button>
                    
                    <a href="{{ route('appointments.create') }}" class="bg-gradient-to-r from-primary to-purple-600 text-white px-6 py-2.5 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition-all duration-200">
                        Book Appointment
                    </a>
                </div>
                
                <!-- Mobile menu button & Theme toggle -->
                <div class="lg:hidden flex items-center space-x-2">
                    <!-- Mobile Theme Toggle -->
                    <button id="theme-toggle-mobile" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200" aria-label="Toggle theme">
                        <i class="fas fa-sun text-xl text-gray-700 dark:text-gray-300 hidden dark:inline-block"></i>
                        <i class="fas fa-moon text-xl text-gray-700 dark:text-gray-300 inline-block dark:hidden"></i>
                    </button>
                    
                    <button class="p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-primary focus:outline-none" id="mobile-menu-btn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div class="lg:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800">
                    <a href="#home" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200">Home</a>
                    <a href="#services" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200">Services</a>
                    <a href="#portfolio" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200">Portfolio</a>
                    <a href="#about" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200">About</a>
                    <a href="#contact" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors duration-200">Contact</a>
                    <a href="{{ route('appointments.create') }}" class="block mx-3 mt-4 bg-gradient-to-r from-primary to-purple-600 text-white px-4 py-2 rounded-full font-semibold text-center">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 overflow-hidden pt-16 transition-colors duration-300">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Hero Content -->
                <div class="space-y-8">
                    
                    
                    <!-- Main Heading -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight text-gray-900 dark:text-white transition-colors duration-300">
                        Transform Your Space with 
                        <span class="gradient-text">Premium Aluminum & Glass</span> 
                        Solutions
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="text-lg lg:text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-2xl transition-colors duration-300">
                        Expert installation of energy-efficient windows, doors, and glass structures that combine modern design with superior performance for both residential and commercial properties.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('appointments.create') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary to-purple-600 text-white font-semibold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-300">
                            <span>Get Free Quote</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-8 py-4 border-2 border-primary text-primary font-semibold rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fas fa-th-large mr-2"></i>
                            <span>Our Services</span>
                        </a>
                    </div>
                    
                    <!-- Features -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-accent text-sm"></i>
                            </div>
                            <span class="font-medium text-gray-700">15+ Years Experience</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-accent text-sm"></i>
                            </div>
                            <span class="font-medium text-gray-700">Free Consultation</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-accent text-sm"></i>
                            </div>
                            <span class="font-medium text-gray-700">Lifetime Warranty</span>
                        </div>
                    </div>
                </div>
                
                <!-- Hero Image -->
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-white p-2">
                        <img src="{{ asset('images/hero-background.jpg') }}" 
                             alt="Modern glass windows installation" 
                             class="w-full h-[500px] lg:h-[600px] object-cover rounded-2xl"
                             loading="eager">
                        
                        <!-- Floating Cards -->
                        <div class="absolute top-8 left-8 bg-white rounded-2xl p-4 shadow-lg float">
                            <div class="text-center">
                                <div class="text-3xl font-bold gradient-text">15+</div>
                                <div class="text-sm text-gray-600">Years Experience</div>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-8 right-8 bg-white rounded-2xl p-4 shadow-lg float" style="animation-delay: 1s;">
                            <div class="text-center">
                                <div class="text-3xl font-bold gradient-text">1200+</div>
                                <div class="text-sm text-gray-600">Projects Completed</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-primary/20 to-purple-600/20 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-full blur-xl"></div>
                </div>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-20 text-white" fill="currentColor" viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path d="M0,64L48,69.3C96,75,192,85,288,90.7C384,96,480,96,576,85.3C672,75,768,53,864,48C960,43,1056,53,1152,64C1248,75,1344,85,1392,90.7L1440,96L1440,100L0,100Z"></path>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">
                    Our Professional Services
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto transition-colors duration-300">
                    Complete aluminum and glass solutions with guaranteed quality workmanship for residential and commercial projects
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group card-3d bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-primary/20 dark:hover:border-primary/30" data-reveal>
                    <div class="w-16 h-16 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-window-maximize text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Aluminum Windows</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">Premium aluminum window installation with energy-efficient double glazing. Custom designs to match your architectural needs.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Double & triple glazed options
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Custom sizes & designs
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Energy efficient ratings
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Weather sealing
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Security features
                        </li>
                    </ul>
                </div>

                <!-- Service Card 2 -->
                <div class="group card-3d bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-primary/20 dark:hover:border-primary/30" data-reveal>
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-door-open text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Aluminum Doors & Frames</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">Bespoke aluminum door and frame solutions including sliding doors, bi-fold doors, and entrance systems.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Sliding patio doors
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Bi-fold systems
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Entrance doors
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Custom frames
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Powder coating options
                        </li>
                    </ul>
                </div>

                <!-- Service Card 3 -->
                <div class="group card-3d bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-primary/20 dark:hover:border-primary/30" data-reveal>
                    <div class="w-16 h-16 bg-gradient-to-br from-accent/10 to-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-tools text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Glass Partitions & Balustrades</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">Modern glass partition systems and safety balustrades for both interior and exterior applications.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Office partitions
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Shower screens
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Glass balustrades
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Pool fencing
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Safety glass options
                        </li>
                    </ul>
                </div>

                <!-- Service Card 4 -->
                <div class="group card-3d bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-primary/20 dark:hover:border-primary/30" data-reveal>
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-600/10 to-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-building text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Commercial Projects</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">Complete commercial glazing solutions for offices, retail spaces, and industrial buildings with project management.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Shopfront systems
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Curtain walling
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Office glazing
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Project management
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Commercial warranties
                        </li>
                    </ul>
                </div>

                <!-- Service Card 5 -->
                <div class="group card-3d bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-primary/20 dark:hover:border-primary/30" data-reveal>
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500/10 to-secondary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shield-alt text-2xl text-red-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Repair & Maintenance</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">Professional repair and maintenance services for all aluminum and glass installations with emergency callout available.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Window repairs
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Glass replacement
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Hardware servicing
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Emergency repairs
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Maintenance contracts
                        </li>
                    </ul>
                </div>

                <!-- Service Card 6 -->
                <div class="group card-3d bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-primary/20 dark:hover:border-primary/30" data-reveal>
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500/10 to-purple-600/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-ruler-combined text-2xl text-indigo-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Custom Fabrication</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">Bespoke aluminum and glass solutions designed and manufactured to your exact specifications and requirements.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Design consultation
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            CAD drawings
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Custom fabrication
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Unique specifications
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-3"></i>
                            Architectural glazing
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-purple-600 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute transform rotate-45 -right-32 -top-32 w-96 h-96 bg-white rounded-full"></div>
            <div class="absolute transform -rotate-45 -left-32 -bottom-32 w-96 h-96 bg-white rounded-full"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8" data-reveal>
                <!-- Stat 1 -->
                <div class="text-center group">
                    <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-award text-5xl text-white/90"></i>
                    </div>
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2" data-counter data-target="15">0</div>
                    <div class="text-white/90 text-lg font-medium">Years Experience</div>
                </div>
                
                <!-- Stat 2 -->
                <div class="text-center group">
                    <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-users text-5xl text-white/90"></i>
                    </div>
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2" data-counter data-target="1200">0</div>
                    <div class="text-white/90 text-lg font-medium">Happy Clients</div>
                </div>
                
                <!-- Stat 3 -->
                <div class="text-center group">
                    <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-project-diagram text-5xl text-white/90"></i>
                    </div>
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2" data-counter data-target="2500">0</div>
                    <div class="text-white/90 text-lg font-medium">Projects Done</div>
                </div>
                
                <!-- Stat 4 -->
                <div class="text-center group">
                    <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-star text-5xl text-white/90"></i>
                    </div>
                    <div class="text-5xl lg:text-6xl font-bold text-white mb-2" data-counter data-target="98">0</div>
                    <div class="text-white/90 text-lg font-medium">% Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-reveal>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">
                    How We Work
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto transition-colors duration-300">
                    Our simple 4-step process ensures quality results and complete customer satisfaction
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative group" data-reveal>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <span class="text-3xl font-bold gradient-text">1</span>
                        </div>
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone-alt text-2xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Contact Us</h3>
                        <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Reach out via phone, WhatsApp, or our booking form for a free consultation</p>
                    </div>
                    <!-- Arrow -->
                    <div class="hidden lg:block absolute top-10 -right-4 text-gray-300">
                        <i class="fas fa-arrow-right text-3xl"></i>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative group" data-reveal>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <span class="text-3xl font-bold gradient-text">2</span>
                        </div>
                        <div class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clipboard-check text-2xl text-secondary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Site Visit</h3>
                        <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Our experts visit your location to assess requirements and take measurements</p>
                    </div>
                    <!-- Arrow -->
                    <div class="hidden lg:block absolute top-10 -right-4 text-gray-300">
                        <i class="fas fa-arrow-right text-3xl"></i>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative group" data-reveal>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <span class="text-3xl font-bold gradient-text">3</span>
                        </div>
                        <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-file-invoice-dollar text-2xl text-accent"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Get Quote</h3>
                        <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Receive a detailed quotation with transparent pricing and timeline</p>
                    </div>
                    <!-- Arrow -->
                    <div class="hidden lg:block absolute top-10 -right-4 text-gray-300">
                        <i class="fas fa-arrow-right text-3xl"></i>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="group" data-reveal>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <span class="text-3xl font-bold gradient-text">4</span>
                        </div>
                        <div class="w-16 h-16 bg-purple-600/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-hammer text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Installation</h3>
                        <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Professional installation by our certified team with quality guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-reveal>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">
                    What Our Clients Say
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto transition-colors duration-300">
                    Don't just take our word for it - hear from our satisfied customers across Kenya
                </p>
            </div>
            
            <div class="relative max-w-4xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-3xl p-8 lg:p-12 transition-colors duration-300" data-testimonial data-reveal>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-purple-600 flex items-center justify-center text-white font-bold text-2xl mr-4">
                            JK
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white transition-colors duration-300">John Kamau</h4>
                            <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Residential Client, Nairobi</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed italic transition-colors duration-300">
                        "Excellent service from start to finish! The team was professional, punctual, and the quality of the aluminum windows they installed exceeded my expectations. My home looks amazing and the energy savings are noticeable. Highly recommend Top-Cool!"
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-3xl p-8 lg:p-12 hidden transition-colors duration-300" data-testimonial>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-secondary to-accent flex items-center justify-center text-white font-bold text-2xl mr-4">
                            SM
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white transition-colors duration-300">Sarah Mwangi</h4>
                            <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Business Owner, Mombasa</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed italic transition-colors duration-300">
                        "We needed glass partitions for our office and Top-Cool delivered beyond expectations. The modern design transformed our workspace, and their team worked efficiently without disrupting our operations. Great workmanship and fair pricing!"
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-3xl p-8 lg:p-12 hidden transition-colors duration-300" data-testimonial>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent to-primary flex items-center justify-center text-white font-bold text-2xl mr-4">
                            DO
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white transition-colors duration-300">David Omondi</h4>
                            <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Homeowner, Kisumu</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed italic transition-colors duration-300">
                        "Top-Cool installed sliding doors in my home, and I couldn't be happier! The quality is outstanding, and the doors operate smoothly. Their attention to detail and customer service is second to none. Will definitely use them again for future projects."
                    </p>
                </div>
                
                <!-- Slider Navigation -->
                <div class="flex justify-center mt-8 space-x-3">
                    <button class="w-3 h-3 rounded-full bg-primary transition-all duration-300" data-testimonial-dot></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary transition-all duration-300" data-testimonial-dot></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary transition-all duration-300" data-testimonial-dot></button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-reveal>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 transition-colors duration-300">
                    Got questions? We've got answers!
                </p>
            </div>
            
            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-2xl overflow-hidden transition-colors duration-300" data-faq-item data-reveal>
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200" data-faq-question>
                        <span class="text-lg font-semibold text-gray-900 dark:text-white pr-8 transition-colors duration-300">How long does a typical installation take?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300" data-faq-icon></i>
                    </button>
                    <div class="overflow-hidden transition-all duration-300" style="max-height: 0;" data-faq-answer>
                        <div class="p-6 pt-0 text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                            Most residential installations are completed within 1-3 days depending on the scope. For windows, we typically finish in 1-2 days. Doors and larger commercial projects may take 3-5 days. We provide a detailed timeline during the quotation phase.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ 2 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-2xl overflow-hidden transition-colors duration-300" data-faq-item data-reveal>
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200" data-faq-question>
                        <span class="text-lg font-semibold text-gray-900 dark:text-white pr-8 transition-colors duration-300">Do you offer warranties on your work?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300" data-faq-icon></i>
                    </button>
                    <div class="overflow-hidden transition-all duration-300" style="max-height: 0;" data-faq-answer>
                        <div class="p-6 pt-0 text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                            Yes! We offer a comprehensive 10-year warranty on all aluminum and glass installations. This covers manufacturing defects and workmanship. We also provide a lifetime warranty on hardware and moving parts.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ 3 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-2xl overflow-hidden transition-colors duration-300" data-faq-item data-reveal>
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200" data-faq-question>
                        <span class="text-lg font-semibold text-gray-900 dark:text-white pr-8 transition-colors duration-300">What areas do you serve?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300" data-faq-icon></i>
                    </button>
                    <div class="overflow-hidden transition-all duration-300" style="max-height: 0;" data-faq-answer>
                        <div class="p-6 pt-0 text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                            We serve all major cities in Kenya including Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, and surrounding areas. For projects outside these regions, please contact us to discuss availability. We're happy to travel for larger commercial projects.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ 4 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-2xl overflow-hidden transition-colors duration-300" data-faq-item data-reveal>
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200" data-faq-question>
                        <span class="text-lg font-semibold text-gray-900 dark:text-white pr-8 transition-colors duration-300">Can I customize the color and design?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300" data-faq-icon></i>
                    </button>
                    <div class="overflow-hidden transition-all duration-300" style="max-height: 0;" data-faq-answer>
                        <div class="p-6 pt-0 text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                            Absolutely! We offer powder coating in over 200 RAL colors, as well as wood grain finishes. You can also choose from various glass options including tinted, frosted, and energy-efficient glazing. Our design team will work with you to create the perfect look for your space.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ 5 -->
                <div class="glass-card bg-white dark:bg-gray-800 rounded-2xl overflow-hidden transition-colors duration-300" data-faq-item data-reveal>
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200" data-faq-question>
                        <span class="text-lg font-semibold text-gray-900 dark:text-white pr-8 transition-colors duration-300">Do you provide free quotations?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300" data-faq-icon></i>
                    </button>
                    <div class="overflow-hidden transition-all duration-300" style="max-height: 0;" data-faq-answer>
                        <div class="p-6 pt-0 text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                            Yes! We offer free, no-obligation quotations. Simply contact us or fill out our booking form, and we'll schedule a site visit at your convenience. We'll assess your needs, take measurements, and provide a detailed written quotation within 24-48 hours.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary via-purple-600 to-primary bg-[length:200%_100%] animate-gradient relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-reveal>
            <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">
                Ready to Transform Your Space?
            </h2>
            <p class="text-xl text-white/90 mb-10 leading-relaxed">
                Get a free consultation and quote today. Our experts are ready to bring your vision to life with premium aluminum and glass solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('appointments.create') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-primary font-bold rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    <i class="fas fa-calendar-check mr-2 group-hover:rotate-12 transition-transform duration-300"></i>
                    <span>Book Free Consultation</span>
                </a>
                <a href="tel:+254727900292" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-primary transition-all duration-300">
                    <i class="fas fa-phone-alt mr-2"></i>
                    <span>Call Now: 0727 900 292</span>
                </a>
            </div>
            
            <!-- Trust Badges -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-16">
                <div class="flex flex-col items-center">
                    <i class="fas fa-shield-alt text-4xl text-white/90 mb-2"></i>
                    <span class="text-white/90 text-sm">10-Year Warranty</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-certificate text-4xl text-white/90 mb-2"></i>
                    <span class="text-white/90 text-sm">Certified Team</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-clock text-4xl text-white/90 mb-2"></i>
                    <span class="text-white/90 text-sm">On-Time Delivery</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-thumbs-up text-4xl text-white/90 mb-2"></i>
                    <span class="text-white/90 text-sm">100% Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gradient-to-br from-slate-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">
                    Our Work
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto transition-colors duration-300">
                    Recent projects showcasing our expertise and quality craftsmanship across Kenya
                </p>
            </div>
            
            <!-- Portfolio Categories -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500/10 to-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-home text-xl text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Residential Windows</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 transition-colors duration-300">Modern aluminum windows with double glazing</p>
                    <div class="space-y-1">
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Energy efficient
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Custom sizes
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            10-year warranty
                        </div>
                    </div>
                </div>
                
                <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-store text-xl text-secondary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Commercial Storefront</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 transition-colors duration-300">Large-scale commercial glass installation</p>
                    <div class="space-y-1">
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Security glass
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Weather resistant
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Professional finish
                        </div>
                    </div>
                </div>
                
                <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500/10 to-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-building text-xl text-purple-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Office Building</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 transition-colors duration-300">Complete aluminum frame system</p>
                    <div class="space-y-1">
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Curtain walling
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Fire rated
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Acoustic performance
                        </div>
                    </div>
                </div>
                
                <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500/10 to-purple-600/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-door-open text-xl text-indigo-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Custom Doors</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 transition-colors duration-300">Bespoke aluminum door solutions</p>
                    <div class="space-y-1">
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Sliding systems
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Bi-fold options
                        </div>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 transition-colors duration-300">
                            <i class="fas fa-check text-accent mr-2"></i>
                            Powder coated
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Projects Gallery -->
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Featured Projects</h3>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-primary/10 to-purple-600/10">
                        <div class="flex items-center justify-center h-64">
                            <div class="text-center">
                                <i class="fas fa-building text-4xl text-primary mb-4"></i>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Nairobi Office Complex</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Nairobi Office Complex</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm transition-colors duration-300">Complete glazing solution with modern aluminum frames</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-secondary/10 to-accent/10">
                        <div class="flex items-center justify-center h-64">
                            <div class="text-center">
                                <i class="fas fa-home text-4xl text-secondary mb-4"></i>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Residential Home</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Residential Home</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm transition-colors duration-300">Premium window installation with energy efficiency</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-accent/10 to-primary/10">
                        <div class="flex items-center justify-center h-64">
                            <div class="text-center">
                                <i class="fas fa-store text-4xl text-accent mb-4"></i>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Shopping Center</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Shopping Center</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm transition-colors duration-300">Commercial storefront with security features</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-purple-500/10 to-indigo-500/10">
                        <div class="flex items-center justify-center h-64">
                            <div class="text-center">
                                <i class="fas fa-door-open text-4xl text-purple-500 mb-4"></i>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Modern Villa</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Modern Villa</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm transition-colors duration-300">Bi-fold door systems with premium finishes</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-indigo-500/10 to-purple-600/10">
                        <div class="flex items-center justify-center h-64">
                            <div class="text-center">
                                <i class="fas fa-building text-4xl text-indigo-500 mb-4"></i>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Corporate HQ</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Corporate Headquarters</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm transition-colors duration-300">Curtain wall installation with modern design</p>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-blue-500/10 to-primary/10">
                        <div class="flex items-center justify-center h-64">
                            <div class="text-center">
                                <i class="fas fa-city text-4xl text-blue-500 mb-4"></i>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Luxury Apartment</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Luxury Apartment</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm transition-colors duration-300">Floor-to-ceiling windows with panoramic views</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- About Content -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">
                            About Top-Cool Aluminium & Glass
                        </h2>
                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                            Established in 2008, Top-Cool has been serving Kenya for over 15 years with premium aluminum and glass solutions. We pride ourselves on exceptional craftsmanship, reliable service, and competitive pricing for both residential and commercial projects.
                        </p>
                    </div>
                    
                    <!-- Features -->
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-primary/10 to-purple-600/10 rounded-xl flex items-center justify-center">
                                <i class="fas fa-award text-xl text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">15+ Years Experience</h4>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Established expertise in aluminum and glass installations with certified tradespeople across Kenya</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-xl flex items-center justify-center">
                                <i class="fas fa-clock text-xl text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Local & Reliable</h4>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Kenyan business committed to punctual service and meeting all project deadlines</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-accent/10 to-primary/10 rounded-xl flex items-center justify-center">
                                <i class="fas fa-handshake text-xl text-accent"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Quality Guarantee</h4>
                                <p class="text-gray-600 dark:text-gray-400 transition-colors duration-300">All work comes with comprehensive warranties and 100% satisfaction guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- About Image -->
                <div class="relative">
                    <div class="relative bg-gradient-to-br from-primary/5 to-purple-600/5 rounded-3xl p-8 lg:p-12">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-primary to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-user-tie text-3xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Professional Team</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-8 transition-colors duration-300">Our certified professionals are dedicated to delivering exceptional results on every project.</p>
                            
                            <!-- Stats -->
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center">
                                    <div class="text-2xl font-bold gradient-text mb-1">1200+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold gradient-text mb-1">100%</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-gradient-to-br from-primary/20 to-purple-600/20 rounded-full blur-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section id="appointment" class="py-20 bg-gradient-to-br from-primary/5 to-purple-600/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Book Your Appointment
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Get a free consultation and quote for your project. Our experts will contact you within 24 hours.
                </p>
            </div>
            
            <!-- Book Appointment Call to Action -->
            <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl p-8 lg:p-12 text-center">
                <div class="max-w-md mx-auto">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-calendar-check text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Ready to Get Started?</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-8">
                        Book your free consultation now. Our experts will contact you within 24 hours to discuss your project and provide a detailed quote.
                    </p>
                    <div class="space-y-4">
                        <a href="{{ route('appointments.create') }}" 
                           class="block w-full bg-gradient-to-r from-primary to-purple-600 text-white py-3 px-6 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300">
                            <i class="fas fa-calendar-plus mr-2"></i>
                            Book Your Appointment Now
                        </a>
                    </div>
                    <p class="text-sm text-gray-500 mt-6">
                        No registration required. Get your free quote today!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">
                    Get In Touch
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto transition-colors duration-300">
                    Ready to transform your space? Contact us today for expert consultation and premium aluminum & glass solutions.
                </p>
            </div>
            
            <!-- Contact Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Phone -->
                <div class="group text-center bg-gradient-to-br from-primary/5 to-purple-600/5 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-phone text-xl text-white"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Phone</h4>
                    <p class="text-gray-600 dark:text-gray-400 font-medium">+254 727900292</p>
                    <a href="tel:+254727900292" class="inline-block mt-3 text-primary hover:text-purple-600 font-medium text-sm transition-colors duration-200">
                        Call Now
                    </a>
                </div>
                
                <!-- Email -->
                <div class="group text-center bg-gradient-to-br from-secondary/5 to-accent/5 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-accent rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-envelope text-xl text-white"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Email</h4>
                    <p class="text-gray-600 dark:text-gray-400 font-medium">info@topcool.co.ke</p>
                    <a href="mailto:info@topcool.co.ke" class="inline-block mt-3 text-secondary hover:text-accent font-medium text-sm transition-colors duration-200">
                        Send Email
                    </a>
                </div>
                
                <!-- Address -->
                <div class="group text-center bg-gradient-to-br from-accent/5 to-primary/5 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-map-marker-alt text-xl text-white"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Address</h4>
                    <p class="text-gray-600 dark:text-gray-400 font-medium">GreenSpan Mall<br>Nairobi, Kenya</p>
                    <a href="https://maps.google.com/?q=GreenSpan+Mall+Nairobi" target="_blank" class="inline-block mt-3 text-accent hover:text-primary font-medium text-sm transition-colors duration-200">
                        Get Directions
                    </a>
                </div>
                
                <!-- Business Hours -->
                <div class="group text-center bg-gradient-to-br from-purple-500/5 to-indigo-500/5 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clock text-xl text-white"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Business Hours</h4>
                    <div class="text-gray-600 dark:text-gray-400 text-sm space-y-1">
                        <p>Mon-Fri: 7:30 AM - 5:00 PM</p>
                        <p>Sat: 8:00 AM - 2:00 PM</p>
                        <p>Sun: Emergency calls only</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-white pt-16 pb-8 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Footer Content -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary to-purple-600 rounded-xl flex items-center justify-center mr-3">
                            <i class="fas fa-building text-white text-lg"></i>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-primary to-purple-600 bg-clip-text text-transparent">
                            Top-Cool Aluminium & Glass
                        </span>
                    </div>
                    <p class="text-gray-300 mb-6 max-w-md leading-relaxed">
                        Your trusted partner for premium aluminum and glass solutions since 2008. Quality workmanship guaranteed with professional installation and excellent customer service.
                    </p>
                    <!-- Social Links -->
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/churchil.omondi.167232" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="https://www.instagram.com/topcool_aluminium_glass/" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#services" class="text-gray-300 hover:text-primary transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                            Window Installation
                        </a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-primary transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                            Aluminum Frames
                        </a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-primary transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                            Repair & Maintenance
                        </a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-primary transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                            Commercial Projects
                        </a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-primary transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                            Security Glass
                        </a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3 mt-0.5">
                                <i class="fas fa-phone text-primary text-sm"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">+254 727900292</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3 mt-0.5">
                                <i class="fas fa-envelope text-primary text-sm"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">info@topcool.co.ke</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3 mt-0.5">
                                <i class="fas fa-map-marker-alt text-primary text-sm"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">GreenSpan Mall<br>Nairobi, Kenya</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        &copy; 2025 Top-Cool Aluminium & Glass. All rights reserved. | Est. 2008
                    </p>
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Warranty</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/254727900292" class="fixed bottom-6 right-24 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl hover:scale-110 transition-all duration-300 z-50 pulse" target="_blank" aria-label="Chat on WhatsApp" data-tooltip="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp text-white text-xl"></i>
    </a>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="hidden fixed bottom-6 right-6 w-14 h-14 bg-gradient-to-r from-primary to-purple-600 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl hover:scale-110 transition-all duration-300 z-50 glow" aria-label="Back to top">
        <i class="fas fa-arrow-up text-white text-xl"></i>
    </button>

    <script src="{{ asset('script.js') }}"></script>
    <script src="{{ asset('enhanced-interactions.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
