<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details - Top-Cool Aluminium & Glass</title>
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
                        Top-Cool
                    </span>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                    </a>
                    <span class="text-gray-700">{{ Auth::user()->name }}</span>
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
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Success Message (only show when redirected from form submission) -->
        @if(request('submitted'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
                <div>
                    <h3 class="text-green-800 font-semibold">Appointment Successfully Submitted!</h3>
                    <p class="text-green-700">We will contact you shortly to confirm the details.</p>
                </div>
            </div>
        </div>
        @endif

        <!-- Appointment Details -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-primary to-purple-600 px-6 py-4">
                <h1 class="text-2xl font-bold text-white">Appointment Details</h1>
                <p class="text-blue-100">Reference ID: #{{ $appointment->id }}</p>
            </div>

            <!-- Content -->
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Client Information -->
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Client Information</h2>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-user text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-900 font-medium">{{ $appointment->name }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-700">{{ $appointment->phone }}</span>
                            </div>
                            @if($appointment->email)
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-700">{{ $appointment->email }}</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Appointment Information -->
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Appointment Information</h2>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-wrench text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-900 font-medium">{{ $appointment->service }}</span>
                            </div>
                            @if($appointment->preferred_date)
                            <div class="flex items-center">
                                <i class="fas fa-calendar text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-700">{{ $appointment->formatted_date }}</span>
                            </div>
                            @endif
                            @if($appointment->preferred_time)
                            <div class="flex items-center">
                                <i class="fas fa-clock text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-700">{{ $appointment->preferred_time }}</span>
                            </div>
                            @endif
                            <div class="flex items-center">
                                <i class="fas fa-info-circle text-gray-400 w-5 mr-3"></i>
                                <span class="text-gray-700">{!! $appointment->status_badge !!}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Update Section -->
                <div class="mt-8">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Status Update</h2>
                    <div class="bg-{{ $appointment->status_color }}-50 border border-{{ $appointment->status_color }}-200 rounded-xl p-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                @if($appointment->status == 'pending')
                                    <i class="fas fa-clock text-{{ $appointment->status_color }}-500 text-xl"></i>
                                @elseif($appointment->status == 'confirmed')
                                    <i class="fas fa-check-circle text-{{ $appointment->status_color }}-500 text-xl"></i>
                                @elseif($appointment->status == 'completed')
                                    <i class="fas fa-check-double text-{{ $appointment->status_color }}-500 text-xl"></i>
                                @elseif($appointment->status == 'cancelled')
                                    <i class="fas fa-times-circle text-{{ $appointment->status_color }}-500 text-xl"></i>
                                @endif
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-{{ $appointment->status_color }}-800 mb-2">
                                    {{ ucfirst($appointment->status) }} Appointment
                                </h3>
                                <p class="text-{{ $appointment->status_color }}-700 leading-relaxed">
                                    {{ $appointment->status_message }}
                                </p>
                                <div class="mt-3 text-sm text-{{ $appointment->status_color }}-600">
                                    <i class="fas fa-clock mr-1"></i>
                                    Last updated: {{ $appointment->updated_at->format('F j, Y \a\t g:i A') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Details -->
                @if($appointment->message)
                <div class="mt-8">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Project Details</h2>
                    <div class="bg-gray-50 rounded-xl p-4">
                        <p class="text-gray-700 leading-relaxed">{{ $appointment->message }}</p>
                    </div>
                </div>
                @endif

                <!-- Project Image -->
                @if($appointment->image_path)
                <div class="mt-8">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Project Image</h2>
                    <div class="bg-gray-50 rounded-xl p-4">
                        <img src="{{ $appointment->image_url }}" 
                             alt="Project Image" 
                             class="max-w-full h-auto rounded-lg shadow-sm cursor-pointer hover:shadow-md transition-shadow"
                             onclick="openImageModal('{{ $appointment->image_url }}')">
                    </div>
                </div>
                @endif

                <!-- Submission Info -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Submitted on {{ $appointment->created_at->format('F j, Y \a\t g:i A') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex flex-wrap gap-4">
            <a href="{{ route('dashboard') }}" class="bg-primary hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-colors duration-200">
                <i class="fas fa-tachometer-alt mr-2"></i>
                Back to Dashboard
            </a>
            <a href="{{ route('appointments.create') }}" class="border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-3 rounded-xl transition-all duration-200">
                <i class="fas fa-plus mr-2"></i>
                Book Another Appointment
            </a>
            <a href="{{ route('home') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-xl transition-colors duration-200">
                <i class="fas fa-home mr-2"></i>
                Back to Homepage
            </a>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="max-w-4xl max-h-full p-4">
            <img id="modalImage" src="" alt="Project Image" class="max-w-full max-h-full rounded-lg">
            <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white text-2xl hover:text-gray-300">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <script>
        function openImageModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    </script>
</body>
</html>
