# Modern Company Profile Website

A professional company profile website built with Laravel and TailwindCSS, featuring a modern design and comprehensive functionality.

![Website Preview](public/images/preview.png)

## Features

### 🎯 Core Features

-   Modern and responsive design
-   Dynamic content management
-   SEO optimized with meta tags and Schema.org markup
-   Fast loading with lazy loading images
-   Smooth animations and transitions

### 📱 User Interface

-   Sticky navigation with scroll effects
-   Animated statistics counters
-   Technology showcase with hover effects
-   Client logo showcase with grayscale effects
-   Responsive testimonials grid
-   Mobile-friendly design

### 🛠 Technical Features

-   Built with Laravel 11
-   TailwindCSS for styling
-   Alpine.js for interactive components
-   AOS (Animate On Scroll) integration
-   Schema.org markup for SEO
-   Optimized meta tags
-   Lazy loading images
-   Intersection Observer API usage

### 📑 Content Sections

-   Dynamic Services showcase
-   Project portfolio with filtering
-   Team member profiles
-   Client testimonials
-   Technology stack display
-   FAQ section
-   Blog functionality
-   Contact form

## Requirements

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   MySQL or PostgreSQL
-   Git

## Installation

1. Clone the repository

```bash
git clone https://github.com/yourusername/company-profile.git
cd company-profile
```

2. Install PHP dependencies

```bash
composer install
```

3. Install NPM dependencies

```bash
npm install
```

4. Create environment file

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Configure your database in .env file

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations and seeders

```bash
php artisan migrate --seed
```

8. Build assets

```bash
npm run build
```

9. Start the development server

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Configuration

### Environment Variables

-   `APP_NAME`: Your company name
-   `APP_URL`: Your website URL
-   `MAIL_*`: Mail configuration for contact form
-   `DB_*`: Database configuration

### Custom Configuration

-   Update company information in `config/company.php`
-   Modify SEO meta tags in views
-   Customize color scheme in `tailwind.config.js`

## Customization

### Styling

-   Primary colors can be modified in `tailwind.config.js`
-   Component styles are in `resources/css/app.css`
-   Individual component styling in respective blade files

### Content

-   Update company info in seeders
-   Modify static content in blade templates
-   Add new sections by creating blade components

## Deployment

1. Set up your production environment
2. Configure environment variables
3. Install dependencies

```bash
composer install --optimize-autoloader --no-dev
npm install
npm run build
```

4. Run migrations

```bash
php artisan migrate --force
```

5. Cache configuration

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Security

-   CSRF protection enabled
-   XSS protection
-   SQL injection prevention
-   Secure headers configured
-   Input validation
-   File upload validation

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Credits

-   [Laravel](https://laravel.com)
-   [TailwindCSS](https://tailwindcss.com)
-   [Alpine.js](https://alpinejs.dev)
-   [AOS](https://michalsnik.github.io/aos/)

## Support

For support, email support@yourcompany.com or create an issue in this repository.

## Authors

-   Your Name - [GitHub Profile](https://github.com/yourusername)

## Acknowledgments

-   Laravel Community
-   TailwindCSS Team
-   All contributors
