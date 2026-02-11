# 🐾 Anabulcom – Web for Animal Service Centers

Anabulcom is a web-based information and reservation system designed to support MSME-based animal service centers in managing services such as grooming, pet hotel, and veterinary consultations digitally.

This system helps improve operational efficiency while making it easier for customers to access services and manage reservations online.

---

## 📌 Features

### 👩‍💼 Admin Features
- Manage service data (add, edit, delete services)
- Manage product and service information
- Manage grooming, pet hotel, and veterinary reservations
- View and update reservation status
- Manage customer data

### 👤 User Features
- View information about Anabulcom and available services
- Make online reservations (grooming, pet hotel, doctor)
- Check reservation status using a reservation code

---

## 🛠️ Tech Stack

- PHP (Laravel Framework)  
- HTML  
- CSS  
- JavaScript  
- MySQL Database  

---

## ⚙️ Installation

### 1. Clone Repository
```bash
git clone https://github.com/your-username/anabulcom.git
cd anabulcom
```
### 2. Install Dependencies
```bash
composer install
npm install
```
### 3. Configure Environment
Copy .env.example to .env and configure database:
```bash
cp .env.example .env
php artisan key:generate
```
Edit database configuration in .env:
```bash
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

---

## 🗃️ Database Migration

```bash
php artisan migrate
```

---

## ▶️ Run the Application

```bash
php artisan serve
```

Open in browser:
```bash
http://127.0.0.1:8000/
```


---

## 📜 License

This project is developed for educational and portfolio purposes only.