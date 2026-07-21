# Deploy a PHP Website with MySQL on Azure Windows Server using IIS

A beginner-friendly Azure project demonstrating how to deploy a PHP web application with a MySQL database on a Windows Server Virtual Machine using Internet Information Services (IIS).

This project covers Azure infrastructure creation, IIS configuration, PHP installation, MySQL integration, and hosting a simple PHP application accessible through the VM's Public IP.

---

## 📌 Project Overview

This project demonstrates the complete deployment of a PHP website on Microsoft Azure using Windows Server and IIS.

The application connects to a MySQL database and displays student records from the database.

---

## 🚀 Technologies Used

- Microsoft Azure
- Windows Server 2022
- Internet Information Services (IIS)
- PHP 8.5
- MySQL Community Server
- HTML & CSS

---

## 🏗️ Architecture

```
Internet
      │
      ▼
Azure Public IP
      │
      ▼
Network Security Group
      │
      ▼
Windows Server Virtual Machine
      │
      ▼
IIS Web Server
      │
      ▼
PHP Application
      │
      ▼
MySQL Database
```

---

## 📂 Project Structure

```
azure-iis-php-mysql-demo
│
├── source-code
│   ├── config.php
│   └── index.php
│
├── database
│   └── create_database.sql
│
├── screenshots
│
├── docs
│   └── troubleshooting.md
│
└── README.md
```

---

## 📋 Azure Resources Created

- Resource Group
- Virtual Network (VNet)
- Subnet
- Network Security Group (NSG)
- Windows Server Virtual Machine
- Public IP Address

---

## 🔧 IIS Configuration

- Installed IIS
- Enabled CGI Feature
- Configured FastCGI
- Created PHP Handler Mapping
- Added `index.php` as Default Document

---

## 💻 PHP Configuration

- Downloaded PHP 8.5
- Extracted PHP to `C:\PHP`
- Configured Environment Variables
- Installed Visual C++ Redistributable
- Configured `php.ini`
- Tested PHP using `phpinfo()`

---

## 🛢️ MySQL Configuration

- Installed MySQL Community Server
- Created database `studentdb`
- Created `students` table
- Inserted sample records
- Connected PHP with MySQL

---

## 🌐 Application Features

- PHP database connectivity
- Display records from MySQL
- Hosted on IIS
- Accessible using Azure VM Public IP

---

## ▶️ Setup Instructions

### 1. Clone Repository

```bash
git clone https://github.com/<yourusername>/azure-iis-php-mysql-demo.git
```

---

### 2. Copy Project Files

Copy the contents of the `source-code` folder to:

```
C:\inetpub\wwwroot\StudentDemo
```

---

### 3. Create Database

Execute:

```
database/create_database.sql
```

using MySQL.

---

### 4. Update Database Credentials

Open

```
config.php
```

Update:

```php
$username = "root";
$password = "YOUR_PASSWORD";
```

---

### 5. Browse

```
http://localhost/StudentDemo/
```

or

```
http://<Public-IP>/StudentDemo/
```

---

## 📷 Screenshots

Add screenshots of:

- Resource Group
- Virtual Network
- NSG Rules
- Windows VM
- IIS Default Page
- PHP Info
- MySQL Installation
- Database Creation
- Final Application (Localhost)
- Final Application (Public IP)

---

## 🛠️ Troubleshooting

Common issues and their solutions are available in:

```
docs/troubleshooting.md
```

---

## 📚 Learning Outcomes

After completing this project you will understand:

- Azure VM Deployment
- IIS Installation
- PHP Hosting on IIS
- FastCGI Configuration
- MySQL Installation
- PHP & MySQL Connectivity
- Web Application Deployment on Azure

---

## 👩‍💻 Author

**Shabin Shareefa**

Cloud & DevOps Enthusiast

LinkedIn:
https://linkedin.com/in/shabinshareefa5018

GitHub:
https://github.com/shabinshareefa5018

---

## ⭐ If you found this project useful, consider giving it a Star.
