# Yii2 Crash Course Blog App

This is a Yii2-based blog application.  
Follow these steps to set up and run the app locally using XAMPP.

---

## Requirements

- **PHP 7.4+** (recommended: use XAMPP)
- **Composer**
- **MySQL/MariaDB**
- **XAMPP** (installed at `D:/xamp`)

---

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/MachineKe/blogpost.git d:/xamp/htdocs/blogpost
   cd d:/xamp/htdocs/blogpost
   ```

2. **Install dependencies**

   ```bash
   composer install
   ```

3. **Configure your database**

   Edit `config/db.php` and set your database connection parameters.

4. **Run database migrations**

   ```bash
   php yii migrate
   ```

---

## Access the Application

- Start **Apache** and **MySQL** from the XAMPP Control Panel.
- Open your browser and go to:  
  [http://localhost/blogpost/web](http://localhost/blogpost/web)

---

## Default Route

- The default route is the **article list**.
- Only authenticated users can create, update, or delete articles.
- Users can only update or delete their own articles.

---

## Troubleshooting

- If you see a 404 error, ensure Apache is running and you are using the correct URL.
- For database errors, check your `config/db.php` settings and run migrations.

---

## License

MIT
