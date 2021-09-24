# Circlelink-assessment-doc.

Laravel web app

# INSTALLATION STEPS
1.Clone the repo

2.Create Database and Add name to env file

3.Use php 7.4 or higher in your development environment PATH.

4.Run "composer install" in terminal

5.Generate APP key

6.Run "php artisan migrate" in terminal

7.Seed database

8.Run "php artisan serve" to launch app.


# User Credentials
ADMIN (To perform all Access control)
Email: admin@admin.com
Password: Admin2021@

DOCTOR (To sign in export patient blood pressure observations)
Email: doctor@example.com
Password: Admin2021@

NURSE (To sign in to create patient)
Email: nurse@example.com
Password: Admin2021@



# Tests 
Run "php artisan test"
<br>
  ✓ user creation if component exists   

  ✓ patient creation if component exists

  ✓ homepage if component exists     

  ✓ patients page if component exists

  ✓ login

  ✓ login failed

  ✓ staff creation

  ✓ if validation has errors  staff creation
