<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'service',
        'preferred_date',
        'preferred_time',
        'message',
        'image_path',
        'status',
        'admin_notes'
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'preferred_time' => 'datetime',
    ];

    public function getStatusBadgeAttribute()
    {
        $statuses = [
            'pending' => ['color' => 'bg-yellow-100 text-yellow-800', 'icon' => 'fas fa-clock', 'message' => 'Awaiting confirmation'],
            'confirmed' => ['color' => 'bg-blue-100 text-blue-800', 'icon' => 'fas fa-check-circle', 'message' => 'Appointment confirmed'],
            'completed' => ['color' => 'bg-green-100 text-green-800', 'icon' => 'fas fa-check-double', 'message' => 'Service completed'],
            'cancelled' => ['color' => 'bg-red-100 text-red-800', 'icon' => 'fas fa-times-circle', 'message' => 'Appointment cancelled']
        ];

        $status = $statuses[$this->status] ?? ['color' => 'bg-gray-100 text-gray-800', 'icon' => 'fas fa-question', 'message' => 'Unknown status'];
        
        return '<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ' . $status['color'] . '">' . 
               '<i class="' . $status['icon'] . ' mr-1"></i>' . ucfirst($this->status) . '</span>';
    }

    public function getStatusMessageAttribute()
    {
        $messages = [
            'pending' => 'Your appointment request is being reviewed. We will contact you shortly to confirm the details.',
            'confirmed' => 'Your appointment has been confirmed! We will see you on the scheduled date and time.',
            'completed' => 'Thank you! Your service has been completed. We hope you are satisfied with our work.',
            'cancelled' => 'This appointment has been cancelled. Please contact us if you need to reschedule.'
        ];

        return $messages[$this->status] ?? 'Status update available.';
    }

    public function getStatusColorAttribute()
    {
        $colors = [
            'pending' => 'yellow',
            'confirmed' => 'blue', 
            'completed' => 'green',
            'cancelled' => 'red'
        ];

        return $colors[$this->status] ?? 'gray';
    }

    public function getFormattedDateAttribute()
    {
        return $this->preferred_date ? $this->preferred_date->format('M d, Y') : 'Not specified';
    }

    public function getFormattedTimeAttribute()
    {
        return $this->preferred_time ? $this->preferred_time->format('g:i A') : 'Not specified';
    }

    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset('storage/' . $this->image_path) : null;
    }

    public function hasImage()
    {
        return !empty($this->image_path) && file_exists(storage_path('app/public/' . $this->image_path));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
