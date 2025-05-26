# README - Deployment Guide for PHP Web App with SQL Backend

## Prerequisites
- PHP installed on your system
- MySQL/MariaDB server installed and running

## Deployment Steps

### 1. Start PHP Built-in Server
Run the following command to start the PHP development server:

```bash
php -S localhost:8000
```

The web application will be accessible at:
```
http://localhost:8000
```

### 2. Database Setup
First, ensure your MySQL server is running. Then execute these commands:

```bash
mysql -u root -p
```

When prompted, enter your MySQL root password (empty by default in this configuration).

Then run these SQL commands in the MySQL shell:

```sql
CREATE DATABASE latsitardanus_db;
USE latsitardanus_db;

CREATE TABLE file_rahasia (
  id INT PRIMARY KEY,
  nama_file VARCHAR(100),
  isi TEXT
);

INSERT INTO file_rahasia VALUES
(1, 'latsitardanus45.txt', 
'🔥 [INFORMASI RAHASIA] 🔥

----Latsitardanus XLV----
Kontingen : Poltek SSN XX
Lokasi    : Banten
Status    : COMING SOON

Be Ready !!!
');
```

### 3. Access the Application
After starting the PHP server and setting up the database, you can access the application by:
1. Opening a web browser
2. Navigating to `http://localhost:8000`
3. To view the secret data, append `?id=1` to the URL (e.g., `http://localhost:8000?id=1`)

## Security Note
⚠️ **Important Security Warning** ⚠️
This application is for demonstration purposes only and contains serious security vulnerabilities:
- No input sanitization (SQL injection risk)
- Using default/empty MySQL credentials
- No proper authentication/authorization

<<<<<<< Updated upstream
Do not use this configuration in production environments.
=======
Do not use this configuration in production environments.
>>>>>>> Stashed changes
