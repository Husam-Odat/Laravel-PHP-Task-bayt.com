
Student Management System
This Laravel-based student management system offers comprehensive functionalities for managing student information, including exams, marks, vacations, and attendance. The platform features robust multi-role authentication, with distinct functionalities based on user roles.

Setup Instructions
Clone the Repository

bash
Copy code
git clone 'link project github'
Install Dependencies

bash
Copy code
composer install
Copy Environment File

bash
Copy code
cp .env.example .env
or

bash
Copy code
copy .env.example .env
Generate Application Key

bash
Copy code
php artisan key:generate
Run Migrations

bash
Copy code
php artisan migrate
Seed the Database

bash
Copy code
php artisan db:seed
Serve the Application

bash
Copy code
php artisan serve
Access the Application Open your browser and go to:

http://localhost:8000
http://127.0.0.1:8000
Project Description
This system provides a user-friendly interface for managing student information and associated data with the following features:

Student Management
Admin Users

Add, edit, delete, and list students.
Manage student records including exams, marks, vacations, and attendance.
Manage user accounts and roles.
Sub Admin Users

Add, edit, delete, and list student records.
Manage student information similar to Admin users.
Regular Users

Add, edit, delete, and list student records.
Manage student information including exams, marks, vacations, and attendance.
Student Information
Includes details such as:

ID
Name
Age
Residence location
Exam results
Marks
Vacation records
Attendance data
Authentication & User Management
Login, Registration, and Logout: Standard functionalities for user management.
Seeded Admin User: An initial admin user is created automatically during setup.
User Registration: New users are registered as regular users by default.
Role Elevation: Only admin users can promote regular users to admin status.
Enhanced Security
Admin Guard: Separate authentication guard and a dedicated admins table for additional security.
Admin Table: Enhances security and role separation by storing admin user data in a separate table.
Database
SQL Database: Utilizes SQL to store user roles, student information, exam results, marks, vacation records, and attendance data.
