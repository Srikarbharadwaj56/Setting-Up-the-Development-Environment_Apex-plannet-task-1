My PHP App

A basic PHP application set up for local development using XAMPP (or WAMP/MAMP), Git, and GitHub.

## 🧰 Features

- Lightweight PHP starter project
- Local development with Apache & MySQL
- Git-based version control
- Easily extendable with database and CRUD features

## 🚀 Getting Started

### Requirements

- XAMPP / WAMP / MAMP (for Apache and MySQL)
- PHP (preinstalled with XAMPP)
- Git
- Code editor (e.g., VS Code)

### Setup Instructions

1. **Clone the repository** or download the ZIP:
   ```bash
   git clone https://github.com/yourusername/my-php-app.git

2. Move the project folder into your server's root directory:

For XAMPP: C:\xampp\htdocs\

For MAMP: /Applications/MAMP/htdocs/



3. Start Apache and MySQL using XAMPP/WAMP/MAMP.


4. Open your browser and visit:

http://localhost/my-php-app



You should see: Hello, World!

🔧 Configuration (Optional)

If you plan to use a MySQL database:

1. Update config.php with your database credentials.


2. Create a database named my_database or change it in config.php.



$host = "localhost";
$user = "root";
$password = "";
$database = "my_database";

📁 Project Structure

my-php-app/
├── index.php      
├── config.php       
├── .gitignore      
└── README.md       

📌 License

This project is for educational and learning purposes.
