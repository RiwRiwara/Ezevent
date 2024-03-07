@echo off
set FRONTEND_CMD=npm run dev
set BACKEND_CMD=php artisan serve

start cmd /k %FRONTEND_CMD%
start cmd /k %BACKEND_CMD%
