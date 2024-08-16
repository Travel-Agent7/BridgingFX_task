This project runs on Laravel 10 and PHP 8.1 STEPS TO RUN THE PROJECT

1. Install Composer Dependencies : composer install

2. Install and build npm Dependencies :npm install , npm run build

3. Configure the .env file with your database settings and SMTP configuration.

4. Generate the application key: php artisan key:generate

5. Run database migrations: php artisan migrate

6.Seed the database (The AdminSeeder sets up predefined admin login credentials. Ensure that the path in database/seeders/AdminSeeder.php is updated accordingly.) : php artisan db:seed

7. Cache configuration files to apply changes from .env (e.g., theme color) : php artisan config:cache 

8. Start the development server: php artisan serve

9. The admin dashboard is accessible at 'admin/dashboard.' Please log in to view the admin dashboard.
