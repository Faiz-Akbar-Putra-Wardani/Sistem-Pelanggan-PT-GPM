# 🚀 GPM (Giga Patra Multimedia)

Project ini adalah sistem pelanggan PT Giga Patra Multimedia.  
Memiliki role **Owner**, **Marketing**, dan **Teknisi** dengan fitur CRUD sesuai hak akses masing-masing.

## ⚙️ Instalasi

1. **Clone Repository**
   ```bash
   https://github.com/Faiz-Akbar-Putra-Wardani/Sistem-Pelanggan-PT-GPM.git
   cd Sistem-Pelanggan-PT-GPM
   
   **Install Dependency PHP**
   composer install
   
   **Install Dependency Frontend**
   npm install

   **Buat file .env**
   cp .env.example .env
   
   **Generate Key Aplikasi**
   php artisan key:generate

   **Migrasi & Seeder Database**
   php artisan migrate --seed

   **Build Asset Frontend**
   npm run dev
   
   **Jalankan server Laravel**
   php artisan serve


