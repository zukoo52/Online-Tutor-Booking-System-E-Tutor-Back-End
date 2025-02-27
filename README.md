🎓 Online Tutor Booking System - E-Tutor (Back-End) 📚
This is the back-end of the E-Tutor Online Tutor Booking System, developed using Laravel. It provides a platform for students to find tutors, request lessons, and schedule sessions, while tutors can bid on requests and manage their bookings.

⚠️ Disclaimer: This project is for learning and practical purposes only. It is not a real-world application.
Group Contribution:

🌟 Features
👩‍🎓 Student Features:
✅ User Registration & Login (Secure authentication)
✅ Find Tutors (Search by subject, availability, and location)
✅ Request a Tutor (Select subject, session type, and schedule)
✅ View & Manage Tutor Requests
✅ Rate & Review Tutors

👨‍🏫 Tutor Features:
✅ Profile Management (Set subjects, pricing, and availability)
✅ Bid on Student Requests
✅ Manage Sessions (Accept, decline, or reschedule bookings)
✅ Earn Reviews & Ratings

🔧 Admin Features:
✅ User Management (Monitor students & tutors)
✅ Tutor Request Moderation
✅ Review & Feedback Management

🛠️ Tech Stack
Backend Framework: Laravel 10
Database: MySQL
Authentication: Laravel Sanctum / JWT
API: RESTful API with Laravel
Storage: Cloud/Local File System
🚀 Installation & Setup
1️⃣ Clone the repository:

bash
Copy
Edit
git clone https://github.com/zukoo52/Online-Tutor-Booking-System-E-Tutor-Back-End.git
cd Online-Tutor-Booking-System-E-Tutor-Back-End
2️⃣ Install dependencies:

bash
Copy
Edit
composer install
3️⃣ Set up environment variables:

bash
Copy
Edit
cp .env.example .env
php artisan key:generate
4️⃣ Configure the database:
Update the .env file with your database credentials and run:

bash
Copy
Edit
php artisan migrate --seed
5️⃣ Run the development server:

bash
Copy
Edit
php artisan serve
📩 Postman API Collection
For easier API testing, use the provided Postman Collection containing all backend endpoints.

🔗 Download the Postman Collection:
Online-Tutor-Booking-System-E-Tutor-BE.postman_collection.json

📌 How to Use:
1️⃣ Download the file using the link above.
2️⃣ Open Postman → File → Import.
3️⃣ Upload the .json file and start testing API endpoints.

🔗 Related Repository
🔹 Frontend Repository: Online-Tutor-Booking-System-E-Tutor (Frontend)
