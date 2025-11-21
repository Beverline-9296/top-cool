// Enhanced Interactions for Top-Cool - Modern UI/UX Features

// ======================
// Dark/Light Mode Theme Switcher (Must load first)
// ======================
// Check for saved theme preference or default to light mode
const currentTheme = localStorage.getItem('theme') || 'light';
if (currentTheme === 'dark') {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

document.addEventListener('DOMContentLoaded', function() {
    
    // ======================
    // Theme Toggle Functionality
    // ======================
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    
    function toggleTheme() {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }
    
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', toggleTheme);
    }
    
    if (themeToggleMobile) {
        themeToggleMobile.addEventListener('click', toggleTheme);
    }
    
    // ======================
    // Counter Animation
    // ======================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start).toLocaleString();
            }
        }, 16);
    }

    // Trigger counters when in viewport
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                const target = parseInt(entry.target.getAttribute('data-target'));
                animateCounter(entry.target, target);
                entry.target.classList.add('counted');
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-counter]').forEach(counter => {
        counterObserver.observe(counter);
    });

    // ======================
    // Scroll Reveal Animation
    // ======================
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                entry.target.style.opacity = '1';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('[data-reveal]').forEach(element => {
        element.style.opacity = '0';
        revealObserver.observe(element);
    });

    // ======================
    // Parallax Effect on Hero
    // ======================
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        
        parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-parallax') || 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // ======================
    // Smooth Scroll with Offset
    // ======================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ======================
    // FAQ Accordion
    // ======================
    const faqItems = document.querySelectorAll('[data-faq-item]');
    faqItems.forEach(item => {
        const question = item.querySelector('[data-faq-question]');
        const answer = item.querySelector('[data-faq-answer]');
        const icon = item.querySelector('[data-faq-icon]');
        
        question.addEventListener('click', () => {
            const isOpen = item.classList.contains('active');
            
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('[data-faq-answer]').style.maxHeight = '0';
                    otherItem.querySelector('[data-faq-icon]').style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current item
            if (isOpen) {
                item.classList.remove('active');
                answer.style.maxHeight = '0';
                icon.style.transform = 'rotate(0deg)';
            } else {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // ======================
    // Form Progress Indicator
    // ======================
    const formInputs = document.querySelectorAll('.appointment-form input, .appointment-form select, .appointment-form textarea');
    const progressBar = document.querySelector('[data-form-progress]');
    
    if (formInputs.length && progressBar) {
        function updateProgress() {
            let filledFields = 0;
            formInputs.forEach(input => {
                if (input.value.trim() !== '') {
                    filledFields++;
                }
            });
            const progress = (filledFields / formInputs.length) * 100;
            progressBar.style.width = progress + '%';
        }
        
        formInputs.forEach(input => {
            input.addEventListener('input', updateProgress);
            input.addEventListener('change', updateProgress);
        });
    }

    // ======================
    // Image Lazy Loading with Fade In
    // ======================
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('fade-in');
                imageObserver.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });

    // ======================
    // Tooltip
    // ======================
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    tooltipElements.forEach(element => {
        element.classList.add('tooltip');
    });

    // ======================
    // Service Card 3D Tilt Effect
    // ======================
    const cards = document.querySelectorAll('.card-3d');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });

    // ======================
    // Loading State Handler
    // ======================
    window.showLoading = function(button) {
        const originalText = button.textContent;
        button.disabled = true;
        button.innerHTML = '<span class="spinner inline-block mr-2"></span>Processing...';
        button.dataset.originalText = originalText;
    };

    window.hideLoading = function(button) {
        button.disabled = false;
        button.innerHTML = button.dataset.originalText;
    };

    // ======================
    // Success Animation
    // ======================
    window.showSuccessAnimation = function(message) {
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 zoom-in';
        modal.innerHTML = `
            <div class="bg-white rounded-3xl p-8 max-w-md mx-4 text-center scale-in">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-green-500" viewBox="0 0 24 24">
                        <path class="checkmark" fill="none" stroke="currentColor" stroke-width="2" 
                              d="M6 12l4 4L18 8"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Success!</h3>
                <p class="text-gray-600">${message}</p>
            </div>
        `;
        document.body.appendChild(modal);
        
        setTimeout(() => {
            modal.classList.add('fade-out');
            setTimeout(() => modal.remove(), 300);
        }, 3000);
    };

    // ======================
    // Navbar Scroll Effect
    // ======================
    const navbar = document.querySelector('nav');
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        // Add shadow when scrolling for depth effect
        if (currentScroll > 100) {
            navbar.classList.add('shadow-lg');
        } else {
            navbar.classList.remove('shadow-lg');
        }
        
        // Navbar stays fixed at top (no hide/show behavior)
    });

    // ======================
    // Mobile Menu Animation
    // ======================
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            const isOpen = !mobileMenu.classList.contains('hidden');
            
            if (isOpen) {
                mobileMenu.style.animation = 'slideOutUp 0.3s ease-out';
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.style.animation = '';
                }, 300);
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.animation = 'slideInDown 0.3s ease-out';
            }
            
            // Animate hamburger icon
            const svg = this.querySelector('svg');
            if (isOpen) {
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            } else {
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
            }
        });
        
        // Close mobile menu when clicking on links
        const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                const svg = mobileMenuBtn.querySelector('svg');
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            });
        });
    }

    // ======================
    // Back to Top Button
    // ======================
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 500) {
                backToTopBtn.classList.remove('hidden');
                backToTopBtn.classList.add('fade-in');
            } else {
                backToTopBtn.classList.add('hidden');
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ======================
    // Testimonial Slider
    // ======================
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('[data-testimonial]');
    const testimonialDots = document.querySelectorAll('[data-testimonial-dot]');
    
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            if (i === index) {
                testimonial.classList.remove('hidden');
                testimonial.classList.add('fade-in');
            } else {
                testimonial.classList.add('hidden');
            }
        });
        
        testimonialDots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-primary');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-primary');
                dot.classList.add('bg-gray-300');
            }
        });
    }
    
    if (testimonials.length > 0) {
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
        
        testimonialDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentTestimonial = index;
                showTestimonial(index);
            });
        });
    }

    // ======================
    // Console Art (Easter Egg)
    // ======================
    console.log('%c🏢 Top-Cool Aluminium & Glass', 'font-size: 20px; font-weight: bold; color: #2563eb;');
    console.log('%cBuilt with ❤️ using Laravel & TailwindCSS', 'font-size: 12px; color: #666;');

});

// ======================
// Add slide animations to CSS
// ======================
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideOutUp {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-20px);
        }
    }
    
    @keyframes fade-out {
        from { opacity: 1; }
        to { opacity: 0; }
    }
    
    .fade-out {
        animation: fade-out 0.3s ease-out;
    }
`;
document.head.appendChild(style);
