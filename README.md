# Fathima Building Materials Trading Co. LLC

Official website and content management system for **Fathima Building Materials Trading Co. LLC** — a leading supplier of Hardware, Building Materials & Safety items based in Fujairah, UAE.

---

## About

Fathima BMT has been proudly serving the construction and industrial sector across the UAE and GCC since 1986. This repository contains the full-stack web application powering the company's website, built with a modern PHP stack and a bilingual (English / Arabic) interface.

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| Admin Panel | Filament v5 |
| Language | PHP 8.2 |
| Database | MySQL |
| Frontend | Bootstrap 5, Owl Carousel, WOW.js |
| Live Chat | Crisp |

---

## Features

- Bilingual support — English & Arabic with RTL layout
- Filament v5 admin panel with:
  - Products & Categories management
  - Brands management
  - Gallery management
  - Enquiries inbox (read-only with solved/unsolved toggle)
  - Live Translation editor (grouped, no raw key-value editing)
  - Stats overview dashboard
- Public frontend pages: Home, About, Products, Gallery, Enquiry
- Enquiry form with Google Maps integration
- WhatsApp floating button

---

## Requirements

- PHP >= 8.2
- Composer
- MySQL
- Node.js & NPM

---

## Installation

```bash
git clone https://github.com/hxarahman/fathimabmt.git
cd fathimabmt
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

---

## License & Copyright

Copyright &copy; 2024 Fathima Building Materials Trading Co. LLC. All rights reserved.

This repository is **public for viewing purposes only.**

- You may **view** the source code
- You may **not** copy, use, modify, distribute, or reproduce any part of this code, design, or content — in whole or in part — for any purpose without explicit written permission from the owner

> Unauthorized use of this codebase or design is strictly prohibited.
