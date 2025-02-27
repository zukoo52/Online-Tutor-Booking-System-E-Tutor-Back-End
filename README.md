📚 Online Tutor Booking System - E-Tutor (Back-End) 🎓
This is the back-end of the E-Tutor Online Tutor Booking System, built using Laravel. The system enables students to find tutors, request lessons, and schedule sessions, while tutors can bid on requests and manage their bookings.

⚠️ Disclaimer: This is not a real-world project. It was developed for learning and practical purposes as part of a group contribution.

🌟 Features
👩‍🎓 For Students:
✅ User Registration & Login – Secure authentication
✅ Find Tutors – Search by subject, location, and availability
✅ Request a Tutor – Choose session type (online or in-person)
✅ Schedule Sessions – Manage time slots with selected tutors
✅ Review & Rate Tutors – Provide feedback on tutor performance

👨‍🏫 For Tutors:
✅ Profile Management – Set subjects, schedules, and pricing
✅ Bid on Tutor Requests – Compete for student requests
✅ Manage Sessions – Accept, decline, and track tutoring sessions
✅ Earn Ratings & Reviews – Improve credibility and visibility

🔧 Admin Panel:
✅ User Management – Oversee students & tutors
✅ Monitor Tutor Requests – Track and manage session activities
✅ Review Moderation – Ensure fair ratings and feedback

🛠️ Tech Stack
Framework: Laravel 10
Database: MySQL
Authentication: Laravel Sanctum / JWT
API: RESTful API with Laravel
Storage: Cloud/Local File System for storing tutor/student data
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
To simplify API testing, we have provided a Postman Collection containing all backend endpoints.

🔗 Download the Postman Collection:
Online-Tutor-Booking-System-E-Tutor-BE.postman_collection.json

📌 How to Use:
1️⃣ Download the file using the link above.
2️⃣ Open Postman and go to File → Import.
3️⃣ Upload the .json file and start testing the API.

This will help developers quickly test authentication, tutor requests, and other features without manually setting up API calls. 🚀
