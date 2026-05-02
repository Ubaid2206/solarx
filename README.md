# ☀️ Solar-X — Solar Energy Consultation System

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"/>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-red?style=flat-square&logo=laravel" />
  <img src="https://img.shields.io/badge/PHP-8.1+-blue?style=flat-square&logo=php" />
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" />
  <img src="https://img.shields.io/badge/Status-Active-brightgreen?style=flat-square" />
</p>

---

## 📖 Project Overview

**Solar-X** ek Laravel-based web application hai jo users ko unke ghar ya office ke liye zaruri solar panels aur batteries calculate karne mein madad karta hai. Yeh system ek complete solar consultation platform provide karta hai — appliance-based load calculation se lekar product shopping aur PDF report generation tak.

---

## ✨ Features

- 🔐 **User Authentication** — Register, Login, Logout (Laravel UI)
- 🧮 **Solar Calculator** — Appliances (fan, light, AC, fridge etc.) ke mutabiq panel aur battery calculate karta hai
- 📄 **PDF Report Generation** — Consultation results ko downloadable PDF mein export karta hai (DomPDF)
- 🛍️ **Product Shop** — Solar products browse aur search karne ki facility
- 📬 **Contact Us** — Users apna message ya query submit kar sakte hain
- 🔑 **Admin Dashboard** — Admin ke liye alag panel jisme:
  - User management (view, delete)
  - Product management (add, edit, delete)
  - Contact queries management
- 📧 **Email Notification** — Analysis results email ke zariye bhi bheje ja sakte hain
- 🔍 **Live Search** — Products, users, aur contacts real-time search support ke saath

---

## 🛠️ Tech Stack

| Category        | Technology                        |
|-----------------|-----------------------------------|
| Backend         | Laravel 10, PHP 8.1+              |
| Frontend        | Blade Templates, Bootstrap 5      |
| Authentication  | Laravel UI                        |
| PDF Generation  | barryvdh/laravel-dompdf           |
| Database        | MySQL                             |
| Build Tool      | Vite                              |
| HTTP Client     | Guzzle HTTP                       |
| API Auth        | Laravel Sanctum                   |

---

## 📁 Project Structure

```
Solar-X/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # All controllers (Auth, Shop, Dashboard, Consult, etc.)
│   │   └── Middleware/         # isadmin, auth middleware
│   └── Models/                 # User, Products, ContactUs
├── database/
│   ├── migrations/             # users, products, contact_us tables
│   └── seeders/
├── resources/
│   └── views/
│       ├── auth/               # Login, Register views
│       ├── Consult/            # Consult form + Analysis result
│       ├── Dashboard/          # Admin panel views
│       ├── Shop/               # Product shop views
│       └── Layouts/            # Shared layout files
├── routes/
│   └── web.php                 # All web routes
└── public/
    └── assets/                 # CSS, JS, Images
```

---

## ⚙️ Installation & Setup

### 1. Requirements

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM

### 2. Clone / Extract Project

```bash
# Agar git use kar rahe hain
git clone https://github.com/your-username/Solar-X.git
cd Solar-X
```

### 3. Dependencies Install Karein

```bash
composer install
npm install
```

### 4. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

`.env` file mein apna database configure karein:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=solar_x
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Database Migrate Karein

```bash
php artisan migrate
```

### 6. Storage Link Banayein

```bash
php artisan storage:link
```

### 7. Frontend Build Karein

```bash
npm run dev
# Ya production ke liye:
npm run build
```

### 8. Server Chalayein

```bash
php artisan serve
```

App ab `http://127.0.0.1:8000` par available hogi.

---

## 🔑 Admin Access

Admin panel use karne ke liye user ko `isadmin` middleware pass karna hoga. Database mein user ka `role` ya relevant field admin ke liye manually set karein ya seeder use karein.

Admin routes:

| Route              | Description                  |
|--------------------|------------------------------|
| `/dashboard`       | Admin Dashboard              |
| `/contact-details` | Contact queries management   |
| `/Insert-Product`  | Naya product add karna       |
| `/manage-product`  | Products manage karna        |
| `/user-update`     | User profile update          |

---

## ☀️ Solar Consultation Feature

`/consult` route par user apne ghar ke appliances ki information fill karta hai:

| Appliance     | Wattage Used |
|---------------|-------------|
| Fan           | 75W         |
| Light         | 60W         |
| Refrigerator  | 350W        |
| TV            | 150W        |
| AC            | 1500W       |
| Washing Machine | 500W      |

System automatically calculate karta hai:
- **Required Solar Panels** (550W panel ke hisaab se)
- **Required Batteries** (3360W battery ke hisaab se)
- **Required Roof Area** (square yards mein)

Results ko **PDF download** ya **Email** bhi kiya ja sakta hai.

---

## 📸 Key Pages

- `/` — Home page
- `/about` — About Solar-X
- `/contact` — Contact form
- `/shop` — Solar products
- `/consult` — Solar load calculator *(login required)*
- `/analyze` — Calculation results

---

## 🤝 Contributing

Pull requests welcome hain. Koi bhi bada change karne se pehle pehle ek issue open karein discussion ke liye.

---

## 📄 License

Yeh project [MIT License](https://opensource.org/licenses/MIT) ke under hai.

---

## 👨‍💻 Developer

Developed with ❤️ using **Laravel 10** — Solar-X Team
