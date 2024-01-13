<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

#### Installation

01. Clone the **Hotel Booking** repository to your local machine using the following command:
```bash
git clone https://github.com/Dks0097/do_an.git
```

02. Navigate to the project directory:
```bash
cd do_an
```

03. Install the required `PHP` dependencies using Composer:
```bash
composer install
```

04. Install `Node.js` dependencies
###### Using npm:
```bash
npm install
```
or,
###### using Yarn:
```bash
yarn
```

05. Generate `Vite` serve manifest:
###### Using npm:
```bash
npm run build
```
or,
###### using Yarn:
```bash
yarn build
```

06. Create a new MySQL database for Employee Management System and update the `.env` file with your database credentials:
```bash
cp .env.example .env
```

07. Generate a unique application key:
```bash
php artisan key:generate
```

08. Run the database migrations and seed the database with initial data:
```bash
php artisan migrate --seed
```

09. Start the development server:
```bash
php artisan serve
```

Congratulations! Employee Management System should now be up and running at `http://localhost:8000`.
