

Project Description:
This Laravel-based student management system provides comprehensive functionalities for handling student information and associated data, including exams, marks, vacations, and attendance. The platform incorporates robust multi-role authentication and offers distinct functionalities based on user roles. Key features include:
Student Management:
•	Admin Users: Can add, edit, delete, and list students. They also manage student records related to exams, marks, vacations, and attendance, and have the ability to manage user accounts and roles.
•	Sub Admin: Can add, edit, delete, and list student records, including information on exams, marks, vacations, and attendance, and have the ability to manage user accounts and roles.
•	Regular Users: Can add, edit, delete, and list student records, including information on exams, marks, vacations, and attendance.
•	Student Information: Includes ID, name, age, residence location, exam results, marks, vacation records, and attendance data.
Authentication & User Management:
•	Login, Registration, and Logout: Standard functionalities for user management.
•	Seeded Admin User: An initial admin user is automatically created upon setup.
•	User Registration: New users are registered as regular users by default.
•	Role Elevation: Only admin users can promote regular users to admin status.
Enhanced Security:
•	Admin Guard: A separate authentication guard and a dedicated admins table provide additional security for admin users.
•	Admin Table: Enhances security and role separation by storing admin user data in a separate table.
Database:
•	SQL Database: Utilizes SQL to store user roles, student information, exam results, marks, vacation records, and attendance data.




Run git clone 'link projer github'

Run composer install

Run cp .env.example .env or copy .env.example .env

Run php artisan key:generate

Run php artisan migrate

Run php artisan db:seed

Run php artisan serve

Go to link localhost:8000 OR 127.0.0.1:8000
