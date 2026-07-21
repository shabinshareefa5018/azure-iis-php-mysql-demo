# Troubleshooting Guide

This document contains common issues encountered during the project and their solutions.

---

# 1. PHP Command Not Recognized

## Error

```
'php' is not recognized as an internal or external command
```

## Solution

- Verify PHP is extracted to:

```
C:\PHP
```

- Add `C:\PHP` to the Windows Environment Variables PATH.

Restart Command Prompt.

---

# 2. Missing VCRUNTIME140.dll

## Error

```
VCRUNTIME140.dll was not found
```

## Solution

Install:

Microsoft Visual C++ Redistributable (x64)

Restart the terminal and verify:

```
php -v
```

---

# 3. FastCGI Not Available

## Problem

FastCGI Settings are missing from IIS.

## Solution

Enable the CGI feature.

Server Manager

```
Add Roles and Features
        ↓
Web Server (IIS)
        ↓
Application Development
        ↓
CGI
```

Restart IIS.

```
iisreset
```

---

# 4. PHP Files Download Instead of Executing

## Cause

PHP Handler Mapping is missing.

## Solution

Configure Handler Mapping.

```
*.php
```

using

```
FastCgiModule
```

---

# 5. phpinfo() Not Working

Verify:

- PHP installed correctly
- Handler Mapping exists
- FastCGI configured
- php.ini available

Restart IIS.

---

# 6. MySQL Command Not Recognized

## Error

```
mysql is not recognized
```

## Solution

Navigate to:

```
C:\Program Files\MySQL\MySQL Server\bin
```

or add the MySQL bin folder to PATH.

---

# 7. Database Connection Failed

Verify:

- MySQL service is running
- Database exists
- Username
- Password
- Database name

Example:

```php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "studentdb";
```

---

# 8. No Records Displayed

Verify:

```
students
```

table exists.

Run:

```sql
SELECT * FROM students;
```

---

# 9. HTTP Error 403.14 Forbidden

## Cause

Directory browsing is disabled and IIS cannot find a default page.

## Solution

Add

```
index.php
```

to IIS Default Documents.

Restart IIS.

```
iisreset
```

---

# 10. Website Not Accessible Using Public IP

Verify:

- VM is running
- Public IP exists
- NSG allows HTTP (Port 80)
- IIS service is running

Test:

```
http://<Public-IP>/StudentDemo/
```

---

# 11. PHP Extension Errors

Open:

```
php.ini
```

Enable:

```
extension=mysqli
extension=pdo_mysql
extension=openssl
extension=mbstring
extension=curl
```

Restart IIS.

---

# 12. Default Page Not Loading

Verify:

```
index.php
```

exists in

```
C:\inetpub\wwwroot\StudentDemo
```

and is added under IIS Default Documents.

---

# Useful Commands

Restart IIS

```cmd
iisreset
```

Check PHP Version

```cmd
php -v
```

Login to MySQL

```cmd
mysql -u root -p
```

Show Databases

```sql
SHOW DATABASES;
```

Select Database

```sql
USE studentdb;
```

Show Tables

```sql
SHOW TABLES;
```

View Data

```sql
SELECT * FROM students;
```
