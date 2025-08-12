# 🧾 PHP Form Submission: POST vs GET Methods

This project demonstrates how to submit form data using **both `POST` and `GET` methods** by toggling between two action attributes in the form. It’s designed to help beginners understand the difference between `POST` and `GET` submissions.

---

## 🧱 Technologies Used

- HTML5
- PHP

---

## 📝 Description

The HTML file contains a form with:

- Text field for username
- Password field
- Submit button

You can test the form using two different methods:

### ✅ Option 1: `POST` method (Default)
```html
<form action="handlePost.php" method="post">
```
- Sends data securely in the request body.
- Data is **not visible** in the URL.

### 🔁 Option 2: `GET` method (Uncomment to use)
```html
<!-- <form action="handleGet.php" method="get"> -->
```
- Sends data as URL parameters.
- Useful for testing or bookmarkable links.
- Data is **visible** in the URL.

> 📝 **Tip**: Use only **one action line** at a time. Comment the other when testing.

---

## 📦 Folder Structure

```plaintext
project/
├── index.html             # The form file (you provided)
├── handlePost.php         # Script to handle POST data
└── handleGet.php          # Script to handle GET data
```

---

## 💡 Sample `handlePost.php` (Example Logic)

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user_name'];
    $pass = $_POST['password'];
    echo "Username: $name <br>";
    echo "Password: $pass";
}
?>
```

## 💡 Sample `handleGet.php` (Example Logic)

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['user_name'];
    $pass = $_GET['password'];
    echo "Username: $name <br>";
    echo "Password: $pass";
}
?>
```

---

## 📌 Notes

- Use the `GET` method only for non-sensitive data.
- Always validate and sanitize input in real-world apps.

---

## 👨‍💻 Author

**Mayank Garg**  
A simple demo to understand how HTML forms can interact with PHP using both `GET` and `POST` methods.

```
