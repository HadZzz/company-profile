# Modern Company Profile Website

Aplikasi company profile modern yang dibangun dengan Laravel dan TailwindCSS.

## Perubahan Terbaru

- Penambahan fitur "Featured Projects" di halaman utama
- Penambahan kolom `is_featured` pada tabel projects
- Penonaktifan sementara fitur blog
- Perbaikan tampilan team section dengan grid layout (4 kolom)
- Optimasi gambar dengan fallback ke UI Avatars (https://ui-avatars.com)
- Penambahan social media links untuk team members
- Perbaikan responsive design untuk mobile dan tablet
- Optimasi performa loading

## Teknologi yang Digunakan

- Laravel 10.x
- TailwindCSS 3.x
- Alpine.js
- MySQL/PostgreSQL
- PHP 8.1+

## Struktur File untuk Kustomisasi

Berikut lokasi file-file utama yang sering diubah:

1. **Halaman Utama**
   - `resources/views/home.blade.php` - Layout dan konten homepage
   - `app/Http/Controllers/HomeController.php` - Logic featured projects

2. **Halaman About & Team**
   - `resources/views/about.blade.php` - Layout dan konten about
   - `resources/views/components/team-member.blade.php` - Card component team

3. **Layout & Navigation**
   - `resources/views/layouts/navigation.blade.php` - Menu utama
   - `resources/views/layouts/footer.blade.php` - Footer
   - `resources/views/layouts/app.blade.php` - Layout wrapper

4. **Database & Model**
   - `database/migrations/*_create_projects_table.php` - Struktur tabel projects
   - `database/migrations/*_create_team_members_table.php` - Struktur tabel team
   - `app/Models/Project.php` - Model untuk projects
   - `app/Models/TeamMember.php` - Model untuk team members

5. **Assets & Images**
   - `public/images/` - Gambar statis
   - `storage/app/public/` - Upload gambar (perlu storage:link)
   - `resources/css/app.css` - Custom CSS
   - `tailwind.config.js` - Konfigurasi theme

## Struktur File Penting

```
company-profile/
├── app/
│   ├── Http/
│   │   ├── Controllers/          # Controller untuk setiap fitur
│   │   │   ├── HomeController.php
│   │   │   ├── AboutController.php
│   │   │   └── ...
│   │   └── Middleware/          # Middleware aplikasi
│   └── Models/                  # Model database
├── database/
│   ├── migrations/             # File migrasi database
│   └── seeders/               # Data seeder untuk testing
├── resources/
│   ├── views/
│   │   ├── layouts/           # Layout template
│   │   │   ├── app.blade.php
│   │   │   ├── navigation.blade.php
│   │   │   └── footer.blade.php
│   │   ├── about.blade.php    # Halaman About
│   │   ├── home.blade.php     # Halaman Home
│   │   └── ...               # View lainnya
│   ├── css/                  # File CSS
│   └── js/                   # File JavaScript
├── routes/
│   └── web.php              # Definisi route web
└── public/                  # Asset publik
    └── images/             # Gambar website
```

## Cara Instalasi

1. Clone repository
```bash
git clone <repository-url>
cd company-profile
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=company_profile
DB_USERNAME=root
DB_PASSWORD=
```

5. Migrasi dan seed database
```bash
php artisan migrate:fresh --seed
```

6. Buat link storage
```bash
php artisan storage:link
```

7. Compile asset
```bash
npm run dev
```

8. Jalankan aplikasi
```bash
php artisan serve
```

## Panduan Kustomisasi

### Mengubah Konten

1. **Teks dan Konten Statis**
   - Edit file di `resources/views/` sesuai halaman yang ingin diubah
   - Contoh: untuk mengubah halaman about, edit `resources/views/about.blade.php`

2. **Menu Navigasi**
   - Edit file `resources/views/layouts/navigation.blade.php`

3. **Footer**
   - Edit file `resources/views/layouts/footer.blade.php`

### Mengubah Tampilan

1. **Warna dan Tema**
   - Edit file `tailwind.config.js` untuk kustomisasi warna
   - Tema utama menggunakan variabel `primary` dan `secondary`

2. **Layout**
   - Layout utama ada di `resources/views/layouts/app.blade.php`
   - Setiap section menggunakan class TailwindCSS untuk styling

3. **CSS Kustom**
   - Tambahkan CSS kustom di `resources/css/app.css`

### Mengelola Data

1. **Team Members**
   - Data team ada di `database/seeders/TeamMemberSeeder.php`
   - Struktur tabel di `database/migrations/*_create_team_members_table.php`

2. **Projects**
   - Data project ada di `database/seeders/ProjectSeeder.php`
   - Untuk menambah project featured, set `is_featured = true`

3. **Services**
   - Data layanan ada di `database/seeders/ServiceSeeder.php`

## Fitur

- ✅ Responsive Design
- ✅ SEO Friendly
- ✅ Dynamic Content Management
- ✅ Featured Projects
- ✅ Team Showcase
- ✅ Service Showcase
- ✅ Contact Form
- ✅ Social Media Integration
- ✅ Image Optimization
- ❌ Blog (temporarily disabled)

## Troubleshooting

1. **Gambar tidak muncul**
   - Pastikan sudah menjalankan `php artisan storage:link`
   - Cek permission folder `storage/app/public`

2. **Error database**
   - Pastikan konfigurasi database di `.env` sudah benar
   - Jalankan `php artisan config:clear`
   - Jalankan ulang migrasi dengan `php artisan migrate:fresh --seed`

## Kontribusi

Silakan buat pull request untuk kontribusi. Untuk perubahan besar, buka issue terlebih dahulu.

## Lisensi

[MIT License](LICENSE.md)
