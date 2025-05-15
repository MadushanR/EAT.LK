# Food Delivery Platform (UberEats Clone)

A PHP-based web application for ordering meals online, styled with HTML and CSS, mimicking core features of UberEats.

## Table of Contents

* [Features](#features)
* [Tech Stack](#tech-stack)
* [Prerequisites](#prerequisites)
* [Getting Started](#getting-started)

  * [Clone the Repository](#clone-the-repository)
  * [Install Dependencies](#install-dependencies)
* [Configuration](#configuration)
* [Running the Application](#running-the-application)
* [Project Structure](#project-structure)
* [Contributing](#contributing

## Features

* **User Authentication**: Register, log in, and manage profiles
* **Restaurant Listings**: Browse restaurants by cuisine, rating, and distance
* **Menu Browsing**: View dishes with images, descriptions, and prices
* **Order Cart**: Add, update, and remove items in the cart
* **Checkout & Payment**: Simulated payment flow with order confirmation
* **Order Tracking**: Real-time status updates (received, preparing, out for delivery)
* **Responsive Design**: Mobile-first layouts with HTML5 and CSS3

## Tech Stack

* **Language**: PHP 7.4+
* **Markup & Styles**: HTML5, CSS3, Bootstrap (optional)
* **Database**: MySQL
* **Server**: Apache (XAMPP/LAMP)

## Prerequisites

* PHP 7.4 or higher
* Apache server (XAMPP, WAMP, or LAMP)
* MySQL 5.7+
* Composer (optional, for dependency management)

## Getting Started

### Clone the Repository

```bash
git clone https://github.com/MadushanR/EAT.LK.git
cd EAT.LK
```

### Install Dependencies

1. If you use Composer, install PHP packages:

   ```bash
   composer install
   ```
2. Ensure `vendor/` and `config/` directories exist (create if missing).

## Configuration

1. Copy `config/config.sample.php` to `config/config.php` and update database credentials:

   ```php
   <?php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'food_delivery');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```
2. (Optional) Adjust site URL in `config/config.php`:

   ```php
   define('BASE_URL', 'http://localhost/EAT.LK-php/');
   ```
3. Import the database schema:

   ```bash
   mysql -u <username> -p food_delivery < db/schema.sql
   ```

## Running the Application

1. Start Apache and MySQL via your local server (XAMPP/WAMP/LAMP).
2. Place the project directory in your web root (e.g., `htdocs` or `www`).
3. Navigate to `http://localhost/EAT.LK-php/` in your browser.
4. Register a new account and start ordering!

## Project Structure

```text
ubereats-clone-php/
├── config/                 # Configuration files
├── public/                 # Publicly accessible folder (index.php, assets)
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript (optional)
├── src/                    # PHP source files (controllers, models)
├── templates/              # HTML templates (header, footer, pages)
├── db/                     # Database schema and seed data
├── vendor/                 # Composer dependencies
└── README.md               # This file
```

## Contributing

1. ⭐️ Fork the repository
2. 🔀 Create a new branch (`git checkout -b feature/YourFeature`)
3. 🛠️ Implement your feature or bugfix
4. 📄 Commit your changes (`git commit -m "Add new feature"`)
5. 🚀 Push to your branch (`git push origin feature/YourFeature`)
6. 🔎 Open a Pull Request


---

> *Built with ❤️ using PHP, HTML, CSS & MySQL*
