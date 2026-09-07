<div align="center">

# 🛒 Laravel Commerce API

A simple RESTful e-commerce API built with Laravel.

[![PHP Version](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat-square\&logo=php\&logoColor=white)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=flat-square\&logo=laravel\&logoColor=white)](https://laravel.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?style=flat-square\&logo=mysql\&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/license-MIT-green?style=flat-square)](LICENSE)

</div>

---

## 📖 About

**Laravel Commerce API** is a simple RESTful e-commerce API built with Laravel.

The project focuses on implementing a clean and structured approach to managing products and categories using Laravel's built-in API features.

It's currently focused on the core product and category functionality and is being developed incrementally.

---

## ✨ Features

* Category CRUD operations
* Product CRUD operations
* Request validation using Form Requests
* API response transformation using API Resources
* Eloquent relationships between products and categories
* RESTful API structure

---

## 🛠️ Tech Stack

* **PHP 8.3+**
* **Laravel 13**
* **MySQL 8.0+**
* **Eloquent ORM**
* **Laravel API Resources**
* **Laravel Form Requests**

---

## 📦 Requirements

Before installing the project, make sure you have the following installed:

* PHP `^8.3`
* Laravel `13.x`
* Composer
* MySQL `8.0+`

---

## 🧱 Project Structure

```text
app/
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   │       ├── CategoryController.php
│   │       └── ProductController.php
│   │
│   ├── Requests/
│   │   ├── CategoryRequest.php
│   │   └── ProductRequest.php
│   │
│   └── Resources/
│       ├── CategoryResource.php
│       └── ProductResource.php
│
├── Models/
│   ├── Category.php
│   ├── Product.php
│   └── User.php
│
└── Providers/
    └── AppServiceProvider.php
```

---

## 🔌 API Endpoints

### Categories

| Method      | Endpoint                     | Description             |
| ----------- | ---------------------------- | ----------------------- |
| `GET`       | `/api/categories`            | Get all categories      |
| `POST`      | `/api/categories`            | Create a category       |
| `GET`       | `/api/categories/{category}` | Get a specific category |
| `PUT/PATCH` | `/api/categories/{category}` | Update a category       |
| `DELETE`    | `/api/categories/{category}` | Delete a category       |

### Products

| Method      | Endpoint                  | Description            |
| ----------- | ------------------------- | ---------------------- |
| `GET`       | `/api/products`           | Get all products       |
| `POST`      | `/api/products`           | Create a product       |
| `GET`       | `/api/products/{product}` | Get a specific product |
| `PUT/PATCH` | `/api/products/{product}` | Update a product       |
| `DELETE`    | `/api/products/{product}` | Delete a product       |

---

## 🚀 Installation

Clone the repository:

```bash
git clone https://github.com/yasinsvr/laravel-commerce-api.git
cd laravel-commerce-api
```

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database in `.env`:

```env
DB_DATABASE=laravel_commerce
DB_USERNAME=root
DB_PASSWORD=
```

Run the database migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

The API will be available at:

```text
http://127.0.0.1:8000
```

---

## ✅ Validation

The project uses Laravel Form Requests to keep request validation separate from controller logic.

Examples:

```text
app/Http/Requests/CategoryRequest.php
app/Http/Requests/ProductRequest.php
```

---

## 📦 API Resources

API Resources are used to control and standardize the structure of API responses.

Examples:

```text
app/Http/Resources/CategoryResource.php
app/Http/Resources/ProductResource.php
```

---

## 🗺️ Roadmap

The project is currently focused on the basic product and category API.

Future improvements may include:

* [ ] Authentication
* [ ] Authorization
* [ ] Product search
* [ ] Product filtering
* [ ] Pagination
* [ ] Shopping cart
* [ ] Orders
* [ ] API tests
* [ ] API documentation

---

## 🤝 Contributing

Suggestions, bug reports and improvements are welcome.

If you find an issue or have an idea for improving the project, feel free to open an issue or submit a pull request.

---

## 📄 License

This project is open-sourced software licensed under the **MIT License**.

---

<div align="center">

Made with ❤️ by **Yasin Zolfaghari**

</div>
