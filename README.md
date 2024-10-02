## About Laravel

## Project Overview

This PHP server is part of a larger application that handles various functionalities related to managing clothing items. The server provides a backend API that supports CRUD operations for clothing items, which can be used in conjunction with a frontend interface built in Vue.js or Nuxt.js. The backend server interacts with a MySQL database, ensuring persistent storage of clothing data such as name, brand, material, category, color, size, and price.

## Features

    Create: Allows the creation of new clothing items.
    Read: Fetches clothing items based on filtering by name, brand, or material.
    Update: Supports the modification of clothing item attributes.
    Delete: Enables the deletion of specific clothing items by ID.

## Technologies Used

    PHP: Core language for the server-side logic.
    MySQL: Relational database for persistent data storage.
    Laravel: PHP framework for routing, API handling, and database migrations.
    Vuetify: Used for styling and frontend component library (in Vue.js frontend).

## Prerequisites

Before running the project, ensure you have the following installed:

    PHP 7.4+
    Composer
    MySQL
    Laravel (installed via Composer)

## Installation Guide

    Clone the Repository

```bash

git clone https://github.com/your-username/your-repo.git
cd your-repo
```

Install Dependencies Run the following command to install PHP and Laravel dependencies:

```bash

composer install
```

Set Up Environment Variables Rename the .env.example file to .env, and set the appropriate values for database configuration:

```bash

cp .env.example .env
```

### Update your .env file to match your database credentials:

```makefile

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Generate Application Key Ensure Laravel uses a secure encryption key by running:

```bash

php artisan key:generate
```

### Run Migrations Set up the database schema by running the following command:

```bash

php artisan migrate
```

### Run the Server Start the development server using the built-in Laravel command:

```bash

php artisan serve

```

### The API will be available at http://127.0.0.1:8000.
