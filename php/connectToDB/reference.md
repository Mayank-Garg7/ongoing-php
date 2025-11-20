# README — connectToDB

> Simple step-by-step guide to run the PHP + MySQL files using XAMPP.

---

# Pre-requirements

* XAMPP is installed on your machine.
* Basic PHP and MySQL knowledge (helpful but not required).

---

# Step-by-step setup and run

## Before Running Any File — Follow These Steps

1. **Create a Folder for Your Project**

   * Choose any location temporarily, or directly create it inside XAMPP. Name it: `connectToDB`.

2. **Find Your XAMPP Installation Folder**
   Most common installation paths:

   * **Windows:** `C:\\xampp` or `C:\\Program Files\\xampp`
   * **macOS (XAMPP-VM):** `/Applications/XAMPP`
   * **Linux:** `/opt/lampp`

3. **Open the `htdocs` Folder**

   * Inside the XAMPP main folder, open **htdocs**.
   * Path example (Windows): `C:\\xampp\\htdocs`

4. **Create a New Folder Named `connectToDB`**

   * Paste or create all your project files (PHP files) inside this folder.

   **Example Folder Structure:**

   ```
   htdocs
   └── connectToDB
       ├── 001_connectToDB.php
       ├── 002_createDB.php
       ├── 003_createTable.php
       ├── 004_insertData.php
       ├── 005_updateData.php
       └── 006_deleteRow.php
   ```

5. **Start Apache and MySQL in XAMPP Control Panel**

   * Open XAMPP Control Panel.
   * Click **Start** for both **Apache** and **MySQL**.
   * They must turn **green**.

<img width="786" height="462" alt="xampp" src="https://github.com/user-attachments/assets/d5db78a2-9e37-426e-beb5-3bdee4335f6c" />

6. **Open phpMyAdmin (MySQL Admin Panel)**

   * Click the **Admin** button next to MySQL in XAMPP.
   * It will open: `http://localhost/phpmyadmin`

<img width="1238" height="599" alt="database" src="https://github.com/user-attachments/assets/83b8eb82-55e7-4802-83b3-b7986ef026ca" />

7. **Now Run Your PHP Files in Order (Using Browser)**

   * After each file execution, check your MySQL database in phpMyAdmin.
   * Typical order:

     1. `http://localhost/connectToDB/001_connectToDB.php` → Creates database
     2. `http://localhost/connectToDB/002_createDB.php` → Creates tables
     3. `http://localhost/connectToDB/003_createTable.php` → Inserts data
     4. `http://localhost/connectToDB/004_insertData.php` → Shows data
     5. `http://localhost/connectToDB/005_updateData.php` → Updates data
     6. `http://localhost/connectToDB/006_deleteRow.php` → Deletes

8. **Stop any running web servers** (optional but recommended):

   * If Apache or MySQL is running from another installation, stop them.

9. **Copy your project to XAMPP's `htdocs`**:

   * Locate your XAMPP installation folder. Common paths:

     * Windows: `C:\xampp` or `C:\Program Files\xampp`
     * macOS (XAMPP-VM): `/Applications/XAMPP`
     * Linux: `/opt/lampp`
   * Inside the XAMPP folder, open `htdocs`.
   * Create a new folder named `connectToDB` (or paste your existing folder there).
   * Example final path (Windows): `C:\xampp\htdocs\connectToDB`

<img width="787" height="244" alt="lagao" src="https://github.com/user-attachments/assets/fea4851f-79b1-4669-afeb-cd828e78f073" />

  
