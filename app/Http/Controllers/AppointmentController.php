<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Mail\AppointmentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Show appointment creation form
     */
    public function create()
    {
        // Allow anyone to access the booking form (no authentication required)
        return view('appointments.create');
    }

    /**
     * Store a new appointment booking
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'service' => 'required|string|max:255',
            'preferred_date' => 'nullable|date|after:today',
            'preferred_time' => 'nullable|string',
            'message' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120' // 5MB max
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('appointments', 'public');
        }

        $appointment = Appointment::create([
            'user_id' => Auth::check() ? Auth::id() : null, // Make user_id optional
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'service' => $request->service,
            'preferred_date' => $request->preferred_date,
            'preferred_time' => $request->preferred_time,
            'message' => $request->message,
            'image_path' => $imagePath,
            'status' => 'pending'
        ]);

        // Send email notification to website owner
        try {
            $appointmentData = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email ?? 'noreply@topcool.com',
                'service' => $request->service,
                'preferred_date' => $request->preferred_date,
                'preferred_time' => $request->preferred_time,
                'message' => $request->message,
            ];

            // Get owner email from environment variable
            $ownerEmail = env('OWNER_EMAIL', 'owner@topcool.com');
            
            Mail::to($ownerEmail)->send(new AppointmentNotification($appointmentData));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Failed to send appointment notification email: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your appointment request has been submitted. We will contact you shortly to confirm the details.',
            'appointment_id' => $appointment->id,
            'redirect_url' => route('home')
        ]);
    }
}
