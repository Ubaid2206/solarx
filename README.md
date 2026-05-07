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

# 📖 Project Overview

**Solar-X** is a Laravel-based web application that helps users calculate the required solar panels and batteries for their homes or offices. The system provides a complete solar consultation platform — from appliance-based load calculation to product shopping and PDF report generation.

---

# ✨ Features

* 🔐 **User Authentication** — Register, Login, Logout (Laravel UI)
* 🧮 **Solar Calculator** — Calculates solar panels and batteries based on appliances (fan, light, AC, fridge, etc.)
* 📄 **PDF Report Generation** — Export consultation results as downloadable PDFs (DomPDF)
* 🛍️ **Product Shop** — Browse and search solar products
* 📬 **Contact Us** — Users can submit messages or queries
* 🔑 **Admin Dashboard** — Separate admin panel including:

  * User management (view, delete)
  * Product management (add, edit, delete)
  * Contact queries management
* 📧 **Email Notification** — Analysis results can also be sent via email
* 🔍 **Live Search** — Real-time search support for products, users, and contacts

---

# 🛠️ Tech Stack

| Category       | Technology                   |
| -------------- | ---------------------------- |
| Backend        | Laravel 10, PHP 8.1+         |
| Frontend       | Blade Templates, Bootstrap 5 |
| Authentication | Laravel UI                   |
| PDF Generation | barryvdh/laravel-dompdf      |
| Database       | MySQL                        |
| Build Tool     | Vite                         |
| HTTP Client    | Guzzle HTTP                  |
| API Auth       | Laravel Sanctum              |

---

# 📁 Project Structure

```bash
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

# ⚙️ Installation & Setup

## 1. Requirements

* PHP >= 8.1
* Composer
* MySQL
* Node.js & NPM

## 2. Clone / Extract Project

```bash
# If using Git
git clone https://github.com/your-username/Solar-X.git
cd Solar-X
```

## 3. Install Dependencies

```bash
composer install
npm install
```

## 4. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Configure your database inside the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=solar_x
DB_USERNAME=root
DB_PASSWORD=your_password
```

## 5. Run Migrations

```bash
php artisan migrate
```

## 6. Create Storage Link

```bash
php artisan storage:link
```

## 7. Build Frontend Assets

```bash
npm run dev
# Or for production:
npm run build
```

## 8. Start the Server

```bash
php artisan serve
```

The application will now be available at:

```bash
http://127.0.0.1:8000
```

---

# 🔑 Admin Access

To access the admin panel, the user must pass the `isadmin` middleware. Set the user’s `role` or relevant field manually in the database or use a seeder.

### Admin Routes

| Route              | Description                |
| ------------------ | -------------------------- |
| `/dashboard`       | Admin Dashboard            |
| `/contact-details` | Contact queries management |
| `/Insert-Product`  | Add new product            |
| `/manage-product`  | Manage products            |
| `/user-update`     | Update user profile        |

---

# ☀️ Solar Consultation Feature

On the `/consult` route, users enter information about their household appliances:

| Appliance       | Wattage Used |
| --------------- | ------------ |
| Fan             | 75W          |
| Light           | 60W          |
| Refrigerator    | 350W         |
| TV              | 150W         |
| AC              | 1500W        |
| Washing Machine | 500W         |

The system automatically calculates:

* **Required Solar Panels** (based on 550W panels)
* **Required Batteries** (based on 3360W batteries)
* **Required Roof Area** (in square yards)

Results can also be:

* 📄 Downloaded as a PDF
* 📧 Sent via Email

---

# 📸 Key Pages

* `/` — Home Page
* `/about` — About Solar-X
* `/contact` — Contact Form
* `/shop` — Solar Products
* `/consult` — Solar Load Calculator *(login required)*
* `/analyze` — Calculation Results

---

# 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

---

# 📄 License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

# 👨‍💻 Developer

Developed with ❤️ using **Laravel 10** — Solar-X Team
