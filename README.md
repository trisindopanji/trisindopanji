# PHP Project Template

A professional starter template for PHP projects with a clean folder structure and best practices.

## 📋 Table of Contents

- [About](#about)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## 🎯 About

This is a modern PHP project template designed to help you quickly start new PHP applications with a clean, organized structure following industry best practices.

## ✨ Features

- Clean and organized folder structure
- PSR-4 autoloading ready
- Environment configuration support
- Ready for Composer dependencies
- PHPUnit testing setup
- Comprehensive .gitignore

## 📦 Requirements

- PHP 7.4 or higher
- Composer
- Web server (Apache/Nginx) or PHP built-in server

## 🚀 Installation

1. Clone the repository:
```bash
git clone https://github.com/trisindopanji/trisindopanji.git
cd trisindopanji
```

2. Install dependencies:
```bash
composer install
```

3. Configure your environment:
```bash
cp .env.example .env
# Edit .env with your configuration
```

4. Start the development server:
```bash
php -S localhost:8000 -t public
```

## 💻 Usage

Access your application at `http://localhost:8000`

### Basic Example

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

// Your code here
```

## 📁 Project Structure

```
.
├── config/          # Configuration files
├── public/          # Public web root
│   └── index.php    # Application entry point
├── src/             # Source code
│   └── App.php      # Main application class
├── tests/           # Test files
├── vendor/          # Composer dependencies (auto-generated)
├── .env.example     # Environment variables template
├── .gitignore       # Git ignore rules
├── composer.json    # Composer dependencies
└── README.md        # This file
```

## 🧪 Testing

Run tests using PHPUnit:

```bash
composer test
# or
./vendor/bin/phpunit
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👤 Author

**trisindopanji**

- GitHub: [@trisindopanji](https://github.com/trisindopanji)

---

⭐️ If you find this project useful, please consider giving it a star!
