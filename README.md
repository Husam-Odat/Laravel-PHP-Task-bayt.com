
1.Run git clone 'link projer github'

2.Run composer install

3.Run cp .env.example .env or copy .env.example .env

4.Run php artisan key:generate

5.Run php artisan migrate

6.Run php artisan db:seed

7.Run php artisan serve

8.Go to link localhost:8000 OR 127.0.0.1:8000



Project Description: /n
This Laravel-based student management system provides comprehensive functionalities for handling student information and associated data, including exams, marks, vacations, and attendance. The platform incorporates robust multi-role authentication and offers distinct functionalities based on user roles. Key features include:
Student Management: /n
•	Admin Users: Can add, edit, delete, and list students. They also manage student records related to exams, marks, vacations, and attendance, and have the ability to manage user accounts and roles./n
•	Sub Admin: Can add, edit, delete, and list student records, including information on exams, marks, vacations, and attendance, and have the ability to manage user accounts and roles.
•	Regular Users: Can add, edit, delete, and list student records, including information on exams, marks, vacations, and attendance./n
•	Student Information: Includes ID, name, age, residence location, exam results, marks, vacation records, and attendance data./n
Authentication & User Management:/n
•	Login, Registration, and Logout: Standard functionalities for user management./n
•	Seeded Admin User: An initial admin user is automatically created upon setup./n
•	User Registration: New users are registered as regular users by default./n
•	Role Elevation: Only admin users can promote regular users to admin status./n
Enhanced Security:/n
•	Admin Guard: A separate authentication guard and a dedicated admins table provide additional security for admin users./n
•	Admin Table: Enhances security and role separation by storing admin user data in a separate table./n
Database: /n
•	SQL Database: Utilizes SQL to store user roles, student information, exam results, marks, vacation records, and attendance data./n
