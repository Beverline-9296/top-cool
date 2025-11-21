<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Top-Cool Aluminium & Glass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
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
<body class="bg-gray-50 font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-gradient-to-br from-primary to-purple-600 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-building text-white text-sm"></i>
                    </div>
                    <span class="text-lg font-bold bg-gradient-to-r from-primary to-purple-600 bg-clip-text text-transparent">
                        Top-Cool Dashboard
                    </span>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, {{ Auth::user()->name }}!</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span class="text-green-700 font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- Dashboard Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Dashboard</h1>
            <p class="text-gray-600">Manage your Top-Cool account and services</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Profile Card -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Profile</h3>
                        <p class="text-sm text-gray-600">Account Settings</p>
                    </div>
                </div>
            </div>

            <!-- Appointments Card -->
            <a href="{{ route('appointments.index') }}" class="block bg-white rounded-2xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-secondary to-accent rounded-xl flex items-center justify-center">
                        <i class="fas fa-calendar text-white"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">My Appointments</h3>
                        <p class="text-sm text-gray-600">{{ Auth::user()->appointments->count() }} Total</p>
                    </div>
                </div>
            </a>

            <!-- Projects Card -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-accent to-orange-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-project-diagram text-white"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Projects</h3>
                        <p class="text-sm text-gray-600">0 Active</p>
                    </div>
                </div>
            </div>

            <!-- Support Card -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-headset text-white"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Support</h3>
                        <p class="text-sm text-gray-600">Get Help</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Dashboard Content -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- User Profile Section -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Customer Account Information</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary to-purple-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-lg">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold text-gray-900">{{ Auth::user()->name }}</h3>
                                <p class="text-gray-600">{{ Auth::user()->email }}</p>
                                <p class="text-sm text-gray-500">Member since {{ Auth::user()->created_at->format('M Y') }}</p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="p-4 bg-blue-50 rounded-xl">
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-blue-500 mr-3"></i>
                                    <div>
                                        <p class="text-sm text-gray-600">Email Status</p>
                                        <p class="font-semibold text-gray-900">
                                            @if(Auth::user()->email_verified_at)
                                                <span class="text-green-600">Verified</span>
                                            @else
                                                <span class="text-red-600">Not Verified</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 bg-green-50 rounded-xl">
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-green-500 mr-3"></i>
                                    <div>
                                        <p class="text-sm text-gray-600">Account Status</p>
                                        <p class="font-semibold text-green-600">Active</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="space-y-6">
                <!-- Quick Actions Card -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('appointments.create') }}" class="block w-full bg-gradient-to-r from-primary to-purple-600 text-white text-center py-3 px-4 rounded-xl hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-calendar-plus mr-2"></i>
                            Book Appointment
                        </a>
                        <a href="{{ route('appointments.index') }}" class="block w-full border-2 border-secondary text-secondary text-center py-3 px-4 rounded-xl hover:bg-secondary hover:text-white transition-all duration-300">
                            <i class="fas fa-calendar mr-2"></i>
                            My Appointments
                        </a>
                        <a href="{{ route('home') }}#contact" class="block w-full border-2 border-primary text-primary text-center py-3 px-4 rounded-xl hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fas fa-phone mr-2"></i>
                            Contact Support
                        </a>
                        <a href="{{ route('home') }}" class="block w-full bg-gray-100 text-gray-700 text-center py-3 px-4 rounded-xl hover:bg-gray-200 transition-all duration-300">
                            <i class="fas fa-home mr-2"></i>
                            Back to Homepage
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Activity</h3>
                    <div class="space-y-3">
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-xs"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Account Created</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        
                        @php
                            $recentAppointments = Auth::user()->appointments()->latest()->take(3)->get();
                        @endphp
                        
                        @forelse($recentAppointments as $appointment)
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="w-8 h-8 bg-{{ $appointment->status_color }}-100 rounded-full flex items-center justify-center">
                                @if($appointment->status == 'pending')
                                    <i class="fas fa-clock text-{{ $appointment->status_color }}-600 text-xs"></i>
                                @elseif($appointment->status == 'confirmed')
                                    <i class="fas fa-check-circle text-{{ $appointment->status_color }}-600 text-xs"></i>
                                @elseif($appointment->status == 'completed')
                                    <i class="fas fa-check-double text-{{ $appointment->status_color }}-600 text-xs"></i>
                                @elseif($appointment->status == 'cancelled')
                                    <i class="fas fa-times-circle text-{{ $appointment->status_color }}-600 text-xs"></i>
                                @endif
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-900">{{ $appointment->service }}</p>
                                <p class="text-xs text-gray-500">{{ ucfirst($appointment->status) }} • {{ $appointment->updated_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('appointments.show', $appointment) }}" class="text-primary hover:text-blue-600 text-xs">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        @empty
                        <div class="text-center py-4">
                            <p class="text-gray-500 text-sm">No recent appointments</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
