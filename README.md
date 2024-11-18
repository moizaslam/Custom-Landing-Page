# Landing Page with Contact Form Functionality

## Overview
This project is a responsive **Landing Page** created using **HTML**, **CSS**, **JavaScript**, and **PHP**. It features a contact form with **AJAX** functionality for seamless user interaction and uses **PHPMailer** to handle email submissions securely.

---

## Features
- **Responsive Design**: Optimized for mobile, tablet, and desktop viewing.
- **Navigation Menu**: A user-friendly navigation bar for smooth browsing on mobile devices.
- **Dynamic Contact Form**: 
  - Collects user input from the form.
  - Sends data securely to the server.
  - Delivers the form content directly to the client’s email using PHPMailer.
- **AJAX Form Submission**: Ensures a smooth, no-page-refresh form submission experience.

---

## Project Structure
- **index.html**: Main HTML file for the landing page structure.
- **style.css**: CSS file for page styling and responsiveness.
- **script.js**: JavaScript file for menu navigation and form handling (AJAX).
- **process-form.php**: PHP script to handle form submissions and integrate PHPMailer.
- **phpmailer/**: Contains necessary files to implement the PHPMailer library.
  - `PHPMailer.php`
  - `SMTP.php`
  - `Exception.php`
- **images/**: Folder with images used in the landing page.

---

## How to Use
1. Clone or download the repository.
2. Extract the ZIP files (e.g., `phpmailer.zip` and `images.zip`) into your project directory.
3. Ensure you have a web server running (e.g., **XAMPP**, **WAMP**, or similar).
4. Configure your SMTP settings in the `process-form.php` file to enable email functionality.
5. Open `index.html` in your browser to view the landing page.

---

## Tools and Technologies
- **HTML5**: For the structure.
- **CSS3**: For styling and responsiveness.
- **JavaScript**: For interactive elements and AJAX form submission.
- **PHP**: For backend form handling and email integration.
- **PHPMailer**: For secure email delivery.

---

## Why PHPMailer?
PHPMailer is a widely-used PHP library for sending emails safely and efficiently. It simplifies email integration by supporting SMTP and advanced options, ensuring reliable delivery.
