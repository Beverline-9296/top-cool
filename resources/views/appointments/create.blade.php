<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Book Appointment - Top-Cool Aluminium & Glass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#F59E0B'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 font-sans transition-colors duration-300">
    <!-- Customer Navigation -->
    <nav class="bg-white dark:bg-gray-900 shadow-sm border-b border-gray-200 dark:border-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-gradient-to-br from-primary to-purple-600 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-building text-white text-sm"></i>
                    </div>
                    <span class="text-lg font-bold bg-gradient-to-r from-primary to-purple-600 bg-clip-text text-transparent">
                        Top-Cool
                    </span>
                </div>

                <!-- Customer Menu -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-300 hover:text-primary transition-colors">
                        <i class="fas fa-home mr-2"></i>Back to Homepage
                    </a>
                </div>
            </div>
        </div>
    </nav>

<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white transition-colors duration-300">Book Your Appointment</h1>
                <p class="mt-2 text-gray-600 dark:text-gray-300 transition-colors duration-300">Get a free consultation and quote for your project. Our experts will contact you within 24 hours.</p>
            </div>
        </div>

        <!-- Appointment Form -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden transition-colors duration-300">
            <div class="p-8 lg:p-12">
                <form class="space-y-6" id="appointmentForm" method="POST" action="{{ route('appointments.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Name and Phone Row -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                                Full Name *
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-400 dark:placeholder-gray-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                placeholder="Enter your full name"
                            >
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                                Phone Number *
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-400 dark:placeholder-gray-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                placeholder="Enter your phone number"
                            >
                        </div>
                    </div>
                    
                    <!-- Email and Service Row -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                                Email Address
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-400 dark:placeholder-gray-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                placeholder="Enter your email address"
                            >
                        </div>
                        <div>
                            <label for="service" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                                Service Needed *
                            </label>
                            <select 
                                id="service" 
                                name="service" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            >
                                <option value="">Select a service</option>
                                <option value="window-installation">Window Installation</option>
                                <option value="aluminum-frames">Aluminum Frames</option>
                                <option value="repair-maintenance">Repair & Maintenance</option>
                                <option value="commercial-project">Commercial Project</option>
                                <option value="security-glass">Security Glass</option>
                                <option value="custom-solution">Custom Solution</option>
                            </select>
                        </div>
                    </div>

                    <!-- Date and Time Row -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="preferred_date" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                                Preferred Date
                            </label>
                            <input 
                                type="date" 
                                id="preferred_date" 
                                name="preferred_date"
                                min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            >
                        </div>
                        <div>
                            <label for="preferred_time" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                                Preferred Time
                            </label>
                            <select 
                                id="preferred_time" 
                                name="preferred_time"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            >
                                <option value="">Select preferred time</option>
                                <option value="09:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">1:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Project Details -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                            Project Details
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="4"
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-400 dark:placeholder-gray-500 resize-none bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            placeholder="Please describe your project requirements, timeline, and any specific needs..."
                        ></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label for="image" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">
                            Project Image <span class="text-gray-500 dark:text-gray-400 font-normal transition-colors duration-300">(Optional)</span>
                        </label>
                        <div class="relative">
                            <input 
                                type="file" 
                                id="image" 
                                name="image" 
                                accept="image/*"
                                class="hidden"
                            >
                            <div 
                                id="imageUploadArea" 
                                class="w-full border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-xl p-6 text-center cursor-pointer hover:border-primary dark:hover:border-primary hover:bg-primary/5 dark:hover:bg-primary/10 transition-all duration-200"
                            >
                                <div id="uploadContent">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 dark:text-gray-500 mb-3"></i>
                                    <p class="text-gray-600 dark:text-gray-300 font-medium mb-1 transition-colors duration-300">Click to upload project image</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 transition-colors duration-300">PNG, JPG, GIF up to 5MB</p>
                                </div>
                                <div id="imagePreview" class="hidden">
                                    <img id="previewImg" src="" alt="Preview" class="max-w-full max-h-48 mx-auto rounded-lg shadow-md">
                                    <p id="fileName" class="text-sm text-gray-600 dark:text-gray-300 mt-2 transition-colors duration-300"></p>
                                    <button type="button" id="removeImage" class="mt-2 text-red-500 hover:text-red-700 text-sm">
                                        <i class="fas fa-times mr-1"></i>Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center pt-4">
                        <button 
                            type="submit" 
                            class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary to-purple-600 text-white font-semibold rounded-full hover:shadow-xl hover:scale-105 transition-all duration-300 min-w-[200px]"
                        >
                            <span>Request Appointment</span>
                            <i class="fas fa-calendar-plus ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('script.js') }}"></script>

<!-- Dark Mode Script -->
<script>
    // Load theme preference from localStorage
    document.addEventListener('DOMContentLoaded', function() {
        const currentTheme = localStorage.getItem('theme') || 'light';
        if (currentTheme === 'dark') {
            document.documentElement.classList.add('dark');
        }
    });
</script>
</body>
</html>
