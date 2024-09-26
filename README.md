<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Auth Project

This is a simple authentication project built with Laravel 11. It includes user registration, login, and logout functionality. The project demonstrates how to build a basic authentication system using Laravel's built-in authentication capabilities.

## Features

-   User registration
-   User login/logout
-   Form validation with Bootstrap styling
-   Alert messages for success and error handling
-   Protected dashboard accessible only after login

## Prerequisites

Before running this project, make sure you have the following installed on your system:

-   PHP 8.1 or higher
-   Composer
-   MySQL or any database supported by Laravel
-   Node.js and npm (for Laravel Mix and frontend build tools)
-   Laravel 11

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/laravel-auth-project.git
cd laravel-auth-project
```

### 2. Install Dependencies

Install the required PHP dependencies using Composer:

```bash
composer install
```

Install the required frontend dependencies (if applicable):

```bash
npm install
```

### 3. Configure the Environment

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the following lines in your `.env` file to match your database configuration:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_auth
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```

### 4. Generate the Application Key

Laravel requires an application key for encryption purposes. Generate the key using the following Artisan command:

```bash
php artisan key:generate
```

### 5. Create the Database

Create a new MySQL database named `laravel_auth` (or update the database name in the `.env` file as necessary):

```sql
CREATE DATABASE laravel_auth;
```

### 6. Run Migrations

Run the database migrations to set up the necessary tables:

```bash
php artisan migrate
```

### 7. Run the Development Server

Start the local development server using the Artisan CLI:

```bash
php artisan serve
```

You can now access the application at `http://127.0.0.1:8000`.

### 8. Optional: Compile Assets

If you modify any frontend assets (e.g., CSS or JavaScript), you can compile them using Laravel Mix:

```bash
npm run dev
```

To compile for production:

```bash
npm run prod
```

## How to Use

1. **Register a new user**: Visit `/register` and create a new account.
2. **Login**: Use the credentials from registration to log in via `/login`.
3. **Dashboard**: Once logged in, you will be redirected to the dashboard. This page is protected and only accessible to authenticated users.
4. **Logout**: Click the logout button in the dashboard to log out of your account.

## Project Structure

-   **Routes**: Defined in `routes/web.php`.
-   **Views**: Located in `resources/views` for templates like login, register, and dashboard.
-   **Controllers**: Auth-related logic is handled in `app/Http/Controllers/AuthController.php`.
-   **Middleware**: Route protection is managed via the `auth` middleware in `app/Http/Middleware`.

## Troubleshooting

-   If you encounter any issues with the environment variables, make sure your `.env` file is correctly configured.
-   Ensure that you have the proper database credentials in the `.env` file and that your MySQL server is running.

## License

This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).
