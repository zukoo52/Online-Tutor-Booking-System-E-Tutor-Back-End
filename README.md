

# **📚 Online Tutor Booking System - E-Tutor (Back-End) 🎓**  

This is the **back-end** of the **E-Tutor Online Tutor Booking System**, developed using **Laravel**. The platform enables students to find tutors, request lessons, and schedule sessions, while tutors can bid on requests and manage bookings.  

> ⚠️ **Disclaimer:** This project is for **educational and practical purposes only**. .  

---

## **🖼️ Project Overview**  

---

## **🌟 Features**  

### **👩‍🎓 Student Features:**  
✅ **User Registration & Login** (Secure authentication)  
✅ **Find Tutors** (Search by subject, availability, and location)  
✅ **Request a Tutor** (Select subject, session type, and schedule)  
✅ **View & Manage Tutor Requests**  
✅ **Rate & Review Tutors**  

### **👨‍🏫 Tutor Features:**  
✅ **Profile Management** (Set subjects, pricing, and availability)  
✅ **Bid on Student Requests**  
✅ **Manage Sessions** (Accept, decline, or reschedule bookings)  
✅ **Earn Reviews & Ratings**  

### **🔧 Admin Features:**  
✅ **User Management** (Monitor students & tutors)  
✅ **Tutor Request Moderation**  
✅ **Review & Feedback Management**  

---

## **📊 ER Diagram & Database Schema**  

The system follows a **well-structured database design** to handle **user roles, tutor requests, bidding, session management, and payment tracking** efficiently.  

![ER Diagram](https://github.com/user-attachments/assets/ebfb8254-fdef-4bff-ba06-7f3309268946)  

### **🛠️ Key Database Entities & Relationships**  
- **Users** → Students & Tutors (Role-based access)  
- **Tutor Requests** → Created by students, accepted by tutors  
- **Bidding System** → Tutors can bid on student requests  
- **Sessions** → Scheduled lessons between students and tutors  
- **Payments** → Transactions for booked sessions  
- **Reviews & Ratings** → Student feedback on tutor performance  

---

## **🛠️ Tech Stack**  

| **Technology**  | **Purpose**  |
|---------------|------------|
| **Laravel 10**  | Backend Framework (MVC Architecture)  |
| **MySQL**  | Database Management  |
| **Laravel Sanctum / JWT**  | Authentication & Security  |
| **REST API**  | API Communication  |
| **Postman**  | API Testing  |

---

## **🚀 Installation & Setup**  

1️⃣ **Clone the repository:**  
```bash
git clone https://github.com/zukoo52/Online-Tutor-Booking-System-E-Tutor-Back-End.git
cd Online-Tutor-Booking-System-E-Tutor-Back-End
```

2️⃣ **Install dependencies:**  
```bash
composer install
```

3️⃣ **Set up environment variables:**  
```bash
cp .env.example .env
php artisan key:generate
```

4️⃣ **Configure the database:**  
Update the `.env` file with your database credentials and run:  
```bash
php artisan migrate --seed
```

5️⃣ **Run the development server:**  
```bash
php artisan serve
```

---

## **📩 Postman API Collection**  

For easier API testing, use the provided **Postman Collection** containing all backend endpoints.  

🔗 **Download the Postman Collection:**  
[Online-Tutor-Booking-System-E-Tutor-BE.postman_collection.json](https://github.com/user-attachments/files/19012678/Online-Tutor-Booking-System-E-Tutor-BE.postman_collection.json)  

### **📌 How to Use:**  
1️⃣ **Download the file** using the link above.  
2️⃣ **Open Postman** → **File → Import**.  
3️⃣ **Upload the `.json` file** and start testing API endpoints.  

---

## **🔗 Related Repository**  

🔹 **Frontend Repository:** [Online-Tutor-Booking-System-E-Tutor (Frontend)](https://github.com/zukoo52/Front-End-Online-Tutor-Booking-System-E-Tutor.git)  

🔹 **Frontend UI Preview:**  

![Frontend UI](https://github.com/user-attachments/assets/3770910a-f9da-4c39-80eb-97d3743ff492)  

---

## **🤝 Contributing**  

Contributions are always welcome! To contribute:  
1. **Fork the repository**  
2. **Create a new branch**  
3. **Make your changes**  
4. **Submit a pull request**  

---

## **📜 License**  

This project is **open-source** and available under the **MIT License**.  

---

## **📬 Contact & Support**  

For any inquiries, feel free to reach out via **GitHub Issues** or email at `your.email@example.com`.  

---

### ⭐ **If you like this project, don’t forget to star ⭐ the repository!**  

---
