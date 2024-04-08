@echo off

echo Installing/updating npm packages...
npm install
npm update

echo.
echo Installing/updating composer packages...
composer install
composer update

echo.
echo Running database migrations and seeding...
php artisan migrate:fresh --seed

echo.
echo Clearing cache...
php artisan cache:clear

echo.
echo All tasks completed successfully.
pause
