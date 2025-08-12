

# 📤 PHP File Upload System with MySQL Integration

This project demonstrates how to upload files (images) using **PHP** and store their filenames in a **MySQL database**, along with displaying the uploaded images.

---

## 📦 Features

- Upload images via HTML form.
- Save image names to MySQL database.
- Move uploaded files to `uploads/` folder.
- Display all uploaded images after submission.

---

## 🧱 Technologies Used

- PHP
- MySQL (XAMPP)
- HTML5

---

## 🛠️ Setup Instructions

### ✅ 1. Database Setup

1. Open **phpMyAdmin** (via XAMPP).
2. Create a database named `files`.
3. Create a table `images` using this SQL:

```sql
CREATE TABLE images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  image VARCHAR(255) NOT NULL
);
```

---

### ✅ 2. Folder Structure

```plaintext
project/
│
├── index.php         # Main PHP file (your code)
├── uploads/          # Folder to store uploaded files
└── README.md         # Project documentation
```

> Make sure the `uploads/` folder has write permissions.

---

## 💻 Code Explanation

### 🔹 Database Connection

```php
$conn = mysqli_connect("localhost", "root", "", "files");
```
- Connects to the local MySQL database with no password and selects the `files` database.

---

### 🔹 File Upload Handling

```php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $folder = 'uploads/' . $file_name;

    // Store file name in DB
    $query = "INSERT INTO images (image) VALUES ('$file_name')";
    mysqli_query($conn, $query);

    // Move file to uploads folder
    move_uploaded_file($temp, $folder);
}
```
- Retrieves file info using `$_FILES`.
- Moves file to the `uploads/` folder.
- Saves filename in the database.

---

### 🔹 Display Uploaded Images

```php
$res = mysqli_query($conn, "SELECT * FROM images");
while ($row = mysqli_fetch_assoc($res)) {
    echo "<img src='uploads/{$row['image']}' />";
}
```
- Fetches and displays all image records from the `images` table.

---

## 📸 Output Example

After uploading:
```html
<img src="uploads/photo.jpg" />
```

---

## 📝 Notes

- Ensure `file_uploads` is enabled in your `php.ini`.
- Always validate and sanitize uploads in production.

---

## 👨‍💻 Author

**Mayank Garg**  
Basic File Uploading with PHP and MySQL for beginners.

```
