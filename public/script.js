document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle for Tailwind navigation
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
      
      // Animate hamburger icon
      const svg = this.querySelector('svg');
      if (mobileMenu.classList.contains('hidden')) {
        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
      } else {
        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
      }
    });
  }
  
  // Close mobile menu when clicking on links
  const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
  mobileNavLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (mobileMenu && mobileMenuBtn) {
        mobileMenu.classList.add('hidden');
        const svg = mobileMenuBtn.querySelector('svg');
        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
      }
    });
  });
  
  // Smooth scrolling for all anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        const headerOffset = 80;
        const elementPosition = targetElement.offsetTop;
        const offsetPosition = elementPosition - headerOffset;
        
        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Enhanced navbar scroll effect
  let lastScrollY = window.scrollY;
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('nav');
    const currentScrollY = window.scrollY;
    
    if (navbar) {
      if (currentScrollY > 50) {
        navbar.classList.add('shadow-lg');
        navbar.classList.remove('border-b');
      } else {
        navbar.classList.remove('shadow-lg');
        navbar.classList.add('border-b');
      }
      
      // Hide/show navbar on scroll
      if (currentScrollY > lastScrollY && currentScrollY > 100) {
        navbar.style.transform = 'translateY(-100%)';
      } else {
        navbar.style.transform = 'translateY(0)';
      }
    }
    
    lastScrollY = currentScrollY;
  });

  // Intersection Observer for animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in');
        
        // Stagger animation for service cards
        if (entry.target.classList.contains('group')) {
          const cards = document.querySelectorAll('.group');
          const index = Array.from(cards).indexOf(entry.target);
          entry.target.style.animationDelay = `${index * 100}ms`;
        }
      }
    });
  }, observerOptions);

  // Observe service cards and other elements
  document.querySelectorAll('.group, .gallery-item').forEach(el => {
    observer.observe(el);
  });

  // Image upload functionality
  const imageInput = document.getElementById('image');
  const imageUploadArea = document.getElementById('imageUploadArea');
  const uploadContent = document.getElementById('uploadContent');
  const imagePreview = document.getElementById('imagePreview');
  const previewImg = document.getElementById('previewImg');
  const fileName = document.getElementById('fileName');
  const removeImageBtn = document.getElementById('removeImage');

  if (imageUploadArea && imageInput) {
    // Click to upload
    imageUploadArea.addEventListener('click', () => {
      imageInput.click();
    });

    // Drag and drop functionality
    imageUploadArea.addEventListener('dragover', (e) => {
      e.preventDefault();
      imageUploadArea.classList.add('border-primary', 'bg-primary/10');
    });

    imageUploadArea.addEventListener('dragleave', (e) => {
      e.preventDefault();
      imageUploadArea.classList.remove('border-primary', 'bg-primary/10');
    });

    imageUploadArea.addEventListener('drop', (e) => {
      e.preventDefault();
      imageUploadArea.classList.remove('border-primary', 'bg-primary/10');
      
      const files = e.dataTransfer.files;
      if (files.length > 0) {
        handleImageFile(files[0]);
      }
    });

    // File input change
    imageInput.addEventListener('change', (e) => {
      if (e.target.files.length > 0) {
        handleImageFile(e.target.files[0]);
      }
    });

    // Remove image
    if (removeImageBtn) {
      removeImageBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        clearImagePreview();
      });
    }

    function handleImageFile(file) {
      // Validate file type
      if (!file.type.startsWith('image/')) {
        showNotification('Please select a valid image file.', 'error');
        return;
      }

      // Validate file size (5MB)
      if (file.size > 5 * 1024 * 1024) {
        showNotification('Image size must be less than 5MB.', 'error');
        return;
      }

      // Create file reader
      const reader = new FileReader();
      reader.onload = (e) => {
        previewImg.src = e.target.result;
        fileName.textContent = file.name;
        uploadContent.classList.add('hidden');
        imagePreview.classList.remove('hidden');
      };
      reader.readAsDataURL(file);

      // Set the file to input
      const dataTransfer = new DataTransfer();
      dataTransfer.items.add(file);
      imageInput.files = dataTransfer.files;
    }

    function clearImagePreview() {
      uploadContent.classList.remove('hidden');
      imagePreview.classList.add('hidden');
      previewImg.src = '';
      fileName.textContent = '';
      imageInput.value = '';
    }
  }
  
  // Form submission with enhanced UX
  const appointmentForm = document.getElementById('appointmentForm');
  if (appointmentForm) {
    appointmentForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const submitBtn = this.querySelector('button[type="submit"]');
      const originalText = submitBtn.textContent;
      
      // Basic form validation
      const name = document.getElementById('name')?.value.trim();
      const phone = document.getElementById('phone')?.value.trim();
      const service = document.getElementById('service')?.value;
      
      if (!name || !phone || !service) {
        showNotification('Please fill in all required fields.', 'error');
        return;
      }
      
      // Show loading state
      submitBtn.textContent = 'Sending...';
      submitBtn.disabled = true;
      
      // Collect form data
      const formData = new FormData(this);
      
      // Submit to backend
      fetch('/appointments', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
          'Accept': 'application/json'
        }
      })
      .then(response => {
        if (!response.ok) {
          return response.text().then(text => {
            throw new Error(`Server error: ${response.status} - ${text.substring(0, 100)}`);
          });
        }
        return response.json();
      })
      .then(data => {
        if (data.success) {
          showNotification(data.message, 'success');
          this.reset();
          // Redirect to appointment details after 2 seconds
          setTimeout(() => {
            window.location.href = data.redirect_url;
          }, 2000);
        } else {
          showNotification(data.message || 'Something went wrong. Please try again.', 'error');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showNotification(error.message || 'Something went wrong. Please try again.', 'error');
      })
      .finally(() => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
      });
    });
  }
  
  // Enhanced notification system
  function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 ${
      type === 'success' ? 'bg-green-500 text-white' :
      type === 'error' ? 'bg-red-500 text-white' :
      'bg-blue-500 text-white'
    }`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    // Slide in
    setTimeout(() => {
      notification.classList.remove('translate-x-full');
    }, 100);
    
    // Slide out and remove
    setTimeout(() => {
      notification.classList.add('translate-x-full');
      setTimeout(() => {
        document.body.removeChild(notification);
      }, 300);
    }, 3000);
  }
  
  // Parallax effect for hero section
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroSection = document.querySelector('#home');
    
    if (heroSection) {
      const rate = scrolled * -0.5;
      heroSection.style.transform = `translateY(${rate}px)`;
    }
  });
  
  // Respect prefers-reduced-motion
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.querySelectorAll('*').forEach(el => {
      el.style.animationDuration = '0.01ms !important';
      el.style.animationIterationCount = '1 !important';
      el.style.transitionDuration = '0.01ms !important';
    });
  }
});
