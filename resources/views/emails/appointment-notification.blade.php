<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #3B82F6, #7C3AED);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            padding: 30px;
        }
        .info-section {
            background: #f8f9fa;
            border-left: 4px solid #3B82F6;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .info-row {
            margin: 10px 0;
        }
        .info-label {
            font-weight: bold;
            color: #3B82F6;
            display: inline-block;
            min-width: 150px;
        }
        .info-value {
            color: #333;
        }
        .message-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 12px;
            border-top: 1px solid #e0e0e0;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            background: #10B981;
            color: white;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔔 New Appointment Request</h1>
            <p style="margin: 5px 0 0 0; opacity: 0.9;">Top-Cool Aluminium & Glass</p>
        </div>
        
        <div class="content">
            <p style="font-size: 16px; color: #333;">
                You have received a new appointment request. Here are the details:
            </p>
            
            <div class="info-section">
                <h3 style="margin-top: 0; color: #3B82F6;">Customer Information</h3>
                
                <div class="info-row">
                    <span class="info-label">Name:</span>
                    <span class="info-value">{{ $appointmentData['name'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Phone:</span>
                    <span class="info-value">
                        <a href="tel:{{ $appointmentData['phone'] }}" style="color: #3B82F6; text-decoration: none;">
                            {{ $appointmentData['phone'] }}
                        </a>
                    </span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value">
                        <a href="mailto:{{ $appointmentData['email'] }}" style="color: #3B82F6; text-decoration: none;">
                            {{ $appointmentData['email'] ?? 'Not provided' }}
                        </a>
                    </span>
                </div>
            </div>
            
            <div class="info-section">
                <h3 style="margin-top: 0; color: #3B82F6;">Service Details</h3>
                
                <div class="info-row">
                    <span class="info-label">Service Type:</span>
                    <span class="info-value">
                        <span class="badge">{{ ucwords(str_replace('-', ' ', $appointmentData['service'])) }}</span>
                    </span>
                </div>
                
                @if($appointmentData['preferred_date'])
                <div class="info-row">
                    <span class="info-label">Preferred Date:</span>
                    <span class="info-value">{{ \Carbon\Carbon::parse($appointmentData['preferred_date'])->format('l, F j, Y') }}</span>
                </div>
                @endif
                
                @if($appointmentData['preferred_time'])
                <div class="info-row">
                    <span class="info-label">Preferred Time:</span>
                    <span class="info-value">{{ $appointmentData['preferred_time'] }}</span>
                </div>
                @endif
            </div>
            
            @if($appointmentData['message'])
            <div class="info-section">
                <h3 style="margin-top: 0; color: #3B82F6;">Project Details</h3>
                <div class="message-box">
                    {{ $appointmentData['message'] }}
                </div>
            </div>
            @endif
            
            <div style="margin-top: 30px; padding: 20px; background: #EFF6FF; border-radius: 5px; text-align: center;">
                <p style="margin: 0; color: #1E40AF; font-weight: bold;">
                    📧 You can reply directly to this email to contact the customer
                </p>
            </div>
        </div>
        
        <div class="footer">
            <p style="margin: 5px 0;">
                This email was sent from your website booking form
            </p>
            <p style="margin: 5px 0;">
                <strong>Top-Cool Aluminium & Glass</strong>
            </p>
        </div>
    </div>
</body>
</html>
