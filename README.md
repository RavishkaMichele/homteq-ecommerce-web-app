# 🏠 Homteq – Smart Home Technology Store

Homteq is a PHP and MySQL-based web application designed as an online store for smart home technology products. The platform allows users to browse available products, view detailed information, and manage a shopping basket.

---

## 🚀 Features

- 🛍️ Product listing from database
- 🔍 Product detail view
- 🧺 Session-based shopping basket
- 🏷️ Dynamic content using PHP
- 🎨 Responsive UI with custom CSS
- 🧩 Modular structure using reusable header & footer
- 🗄️ MySQL database integration

---

## 🛠️ Technologies Used

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (XAMPP / WAMP recommended)

---

```## 📂 Project Structure
homteq/
│── index.php # Home page (product listing)
│── prodbuy.php # Product details page
│── basket.php # Shopping cart functionality
│── aboutus.php # About page
│── template.php # Template page
│── db.php # Database connection
│── headfile.html # Header & navigation
│── footfile.html # Footer
│── mystylesheet.css # Styling
│── images/ # Product images
```

---

## ⚙️ Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/homteq-smart-home-ecommerce.git
2. Move the project to your server directory:
  - XAMPP → htdocs/
  - WAMP → www/
3. Create a MySQL database:
  - Database name: homteq
4. Import your product table into the database
5. Update database connection in:

```
db.php
```
```
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'homteq';
Start Apache and MySQL
```

Open in browser:

http://localhost/homteq/index.php
---

🧠 How It Works
The homepage (index.php) fetches products from the database and displays them dynamically
Clicking a product redirects to prodbuy.php, where full details are shown and users can select quantity
The selected product is stored in a session-based basket (basket.php)
Database connectivity is handled through db.php using MySQLi
Layout is modular using reusable header and footer files

--- 

📸 UI Overview
Clean navigation bar with links (Home, About, Login, Basket)
Product grid layout
Interactive hover effects
Fixed navigation header

---

📌 Future Improvements
User authentication system
Payment gateway integration
Admin dashboard for product management
Search and filtering functionality
Mobile responsiveness improvements
