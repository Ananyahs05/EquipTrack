📦 EquipTrack — Equipment Rental & Inventory Management System

EquipTrack is a simple and user-friendly equipment rental and inventory tracking web application built using HTML, CSS, JavaScript, PHP, and MySQL.
This project demonstrates end-to-end integration of a frontend UI with backend server logic and database operations using XAMPP.

🚀 Features
🔹 Home Page

Provides an overview of the platform and navigation to all major pages.

🔹 About Page

A short description of the purpose and functionality of EquipTrack.

🔹 Services Page

Displays a table of available equipment with:

Equipment ID

Name

Category

Purchase Date

Condition

Availability Status

Rental Price

Direct “Order” button

🔹 User Registration

Users can create an account by entering:

First name

Last name

Gender

Date of birth

Email

Password & confirm password

Passwords are securely hashed before being stored in the database.

🔹 User Login

Registered users can sign in using:

Email

Password

Credentials are verified securely using PHP and MySQL.

🔹 Password Reset

Users can reset their password through a dedicated reset page.

🔹 Equipment Order System

Users fill a form with:

Name

Contact number

Email

Address

Equipment ID

Order date

On successful submission:
✔ Order is stored in the database
✔ User is redirected to a confirmation page

🔹 Consistent UI

All pages use:

Full-screen background images

A clean header + navigation bar

A matching footer

Light translucent forms for readability

🏗 Tech Stack
Frontend

HTML5

CSS3

JavaScript

Backend

PHP (Procedural)

Database

MySQL (via XAMPP)

Server

Apache server (XAMPP)

📁 Project Structure
EquipTrack/
│
├── index.html
├── about.html
├── services.html
├── signin.html
├── register.html
├── order.html
├── reset_password.html
├── register_confirmation.html
├── order_confirmation.html
├── password_reset_confirmation.html
│
├── styles.css
│
├── signin.php
├── register.php
├── order.php
├── reset_password.php
├── config.php
│
└── assets/
    ├── inventory.jpg
    ├── eqp.jpg
    └── other images...

⚙️ Installation & Setup Instructions

Follow these steps to run EquipTrack on your local machine:

📌 1. Install Requirements

Install XAMPP

Install VS Code (optional but recommended)

📌 2. Move Project Folder

Place the project inside:

C:\xampp\htdocs\EquipTrack\

📌 3. Start XAMPP

From XAMPP Control Panel, start:

✔ Apache
✔ MySQL

📌 4. Import the Database

Go to:

http://localhost/phpmyadmin


Create a new database:

equiptrack


Import your SQL tables (users, orders, equipment)

📌 5. Update Database Config

Inside config.php:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "equiptrack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

📌 6. Run the Project

Open browser and visit:

http://localhost/EquipTrack/index.html

🧪 Testing the Application
✔ Registration

→ Redirects to confirmation page
→ Entry appears in users table

✔ Login

→ Correct email + password redirects to home

✔ Order Submission

→ Order appears in orders table

✔ Password Reset

→ New hashed password saved
→ Redirects to confirmation page

🚨 Troubleshooting
❗ PHP code is visible instead of running

You opened the file directly:

file:///C:/users/...


✔ Instead, run through:

http://localhost/EquipTrack/

❗ Data not inserting

Check form action

Confirm config.php credentials

Enable error reporting:

error_reporting(E_ALL);
ini_set('display_errors', 1);

🌟 Future Enhancements

Admin dashboard

Add/edit/delete equipment

User roles (Admin / Customer)

Email notifications

Improved responsive UI

Online payment integration

👨‍💻 Author

Your Name
(Replace with your actual name)

📜 License

This project is open source.
You are free to use, modify, and improve it.