# Top-Cool Aluminium & Glass - Appointment Booking System

A modern Laravel application for aluminum and glass installation business. Features a professional landing page with appointment booking functionality and email notifications.

## 🎯 Features

### 🏢 Professional Landing Page
- Modern gradient design with smooth animations
- Fully responsive mobile-first layout
- Services showcase section
- Portfolio gallery
- About section
- Contact information
- SEO-optimized structure
- TailwindCSS styling

### 📋 Appointment Booking System
- **Public Access** - No login required
- Real-time form validation
- Image upload support (JPEG, PNG, GIF, WebP)
- Service selection dropdown
- Preferred date/time scheduling
- Project details text area
- Professional notification system
- Rate limiting (5 requests per minute)

### 📧 Email Notifications
- Automated email to business owner
- Professional HTML email template
- Customer information included
- Service details and preferences
- Click-to-call and email links
- Reply-to customer email
- Error handling and logging

### 🔒 Security Features
- CSRF protection
- Rate limiting to prevent spam
- Input validation and sanitization
- File type validation
- SQL injection protection (Laravel ORM)
- XSS protection (Blade templating)

## 📁 Project Structure

```
Top-Cool/
├── app/
│   ├── Http/Controllers/
│   │   └── AppointmentController.php    # Handles booking logic
│   ├── Mail/
│   │   └── AppointmentNotification.php  # Email template class
│   └── Models/
│       ├── Appointment.php              # Appointment model
│       └── User.php                     # User model
├── database/
│   └── migrations/                      # Database schema
├── public/
│   ├── script.js                        # Frontend JavaScript
│   └── styles.css                       # Additional styles
├── resources/views/
│   ├── appointments/
│   │   └── create.blade.php             # Booking form page
│   ├── emails/
│   │   └── appointment-notification.blade.php  # Email template
│   └── welcome.blade.php                # Landing page
├── routes/
│   └── web.php                          # Route definitions
├── .env                                 # Environment configuration
└── SYSTEM_ANALYSIS.md                   # Detailed system documentation
```

## 🚀 Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- MySQL or SQLite
- Node.js & NPM (optional, for asset compilation)

### Quick Start

1. **Clone or download the project**
   ```bash
   cd Top-Cool
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database** (edit `.env`)
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=topcool
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Configure email** (edit `.env`)
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your-email@gmail.com
   MAIL_PASSWORD=your-app-password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS="your-email@gmail.com"
   MAIL_FROM_NAME="Top Cool Services"
   OWNER_EMAIL=your-email@gmail.com
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Link storage** (for image uploads)
   ```bash
   php artisan storage:link
   ```

8. **Start development server**
   ```bash
   php artisan serve
   ```

9. **Visit** `http://127.0.0.1:8000`

## ⚙️ Configuration

### Email Setup
To receive appointment notifications, configure Gmail SMTP:

1. Enable 2-Factor Authentication in your Google Account
2. Generate an App Password: [Google App Passwords](https://support.google.com/accounts/answer/185833)
3. Update `.env` with your credentials
4. Set `OWNER_EMAIL` to where you want to receive notifications

### Customization

**Business Information** (edit `resources/views/welcome.blade.php`):
- Company name and branding
- Services offered
- Contact information
- Portfolio images
- About section

**Email Template** (edit `resources/views/emails/appointment-notification.blade.php`):
- Email styling
- Information displayed
- Branding elements

**Form Fields** (edit `AppointmentController.php` validation rules):
- Required/optional fields
- Validation rules
- File upload limits

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🚀 Deployment

### Production Checklist

Before deploying to production:

1. **Environment Configuration**
   ```bash
   # Set production environment
   APP_ENV=production
   APP_DEBUG=false
   
   # Generate new app key
   php artisan key:generate
   ```

2. **Security**
   - Set strong `APP_KEY`
   - Configure proper file permissions (755 for directories, 644 for files)
   - Disable debug mode (`APP_DEBUG=false`)
   - Setup HTTPS/SSL certificate
   - Configure firewall rules

3. **Performance**
   ```bash
   # Cache configuration
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   
   # Optimize autoloader
   composer install --optimize-autoloader --no-dev
   ```

4. **Storage**
   ```bash
   # Link storage directory
   php artisan storage:link
   
   # Set proper permissions
   chmod -R 755 storage bootstrap/cache
   ```

### Hosting Options

**Shared Hosting:**
- Upload files via FTP
- Point domain to `/public` directory
- Configure `.htaccess` if needed

**VPS/Cloud (Recommended):**
- DigitalOcean App Platform
- AWS Elastic Beanstalk
- Heroku
- Laravel Forge
- Cloudways

## 📊 Database Management

### View Appointments

Since there's no admin interface, access appointments via database:

**Using Tinker:**
```bash
php artisan tinker
Appointment::latest()->get();
```

**Using MySQL:**
```sql
SELECT * FROM appointments ORDER BY created_at DESC;
```

### Export Appointments

```bash
php artisan tinker
Appointment::all()->toJson();
```

## 🔧 Maintenance

### Daily Tasks
- Monitor error logs: `storage/logs/laravel.log`
- Check for new appointments in database
- Respond to booking requests

### Weekly Tasks
- Backup database
- Clear old log files
- Update appointment statuses

### Monthly Tasks
- Update dependencies: `composer update`
- Review storage usage
- Security audit

## 🐛 Troubleshooting

### Common Issues

**Emails not sending:**
- Check `.env` mail configuration
- Verify SMTP credentials
- Check spam folder
- Review logs: `storage/logs/laravel.log`

**Images not displaying:**
- Run `php artisan storage:link`
- Check storage permissions
- Verify uploads in `storage/app/public/appointments`

**Form submission errors:**
- Check CSRF token in page source
- Verify route exists: `php artisan route:list`
- Check browser console for JavaScript errors

**Database errors:**
- Verify database credentials in `.env`
- Run migrations: `php artisan migrate`
- Check database connection: `php artisan tinker` → `DB::connection()->getPdo()`

## 📈 Future Enhancements

### Recommended Additions
- Admin dashboard for appointment management
- Customer testimonials section
- Before/after project gallery
- Google Maps integration
- SMS notifications (Twilio)
- Calendar integration
- Appointment reminders
- Multiple service locations
- Team member profiles

### SEO Improvements
- Blog section for content marketing
- Schema.org structured data
- XML sitemap
- Meta tags optimization
- Social media Open Graph tags

## 📞 Support

For issues or questions:
1. Check `SYSTEM_ANALYSIS.md` for detailed documentation
2. Review Laravel documentation: https://laravel.com/docs
3. Check error logs in `storage/logs/`

## 📄 License

This application is open-sourced software licensed under the MIT license.

---

## 🎉 System Status

**Current Version:** 1.0.0 (Simplified)  
**Status:** Production Ready  
**Last Updated:** November 3, 2025  
**Architecture:** Streamlined (Unused code removed)

### What's Working ✅
- Public landing page
- Appointment booking form
- Email notifications
- Image uploads
- Rate limiting
- CSRF protection

### System Metrics
- **Total Routes:** 3
- **Controllers:** 1 active
- **Models:** 2
- **Views:** 2 public pages + 1 email template
- **Lines of Code:** ~500 (active)
- **Database Tables:** 2 (users, appointments)

**Ready for production!** 🚀
