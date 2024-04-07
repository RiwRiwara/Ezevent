@echo off
set FRONTEND_CMD=npm run dev
set BACKEND_CMD=php artisan serve
set NGROK_PATH="%USERPROFILE%\Desktop\ngrok.exe"

start cmd /k %FRONTEND_CMD%
start cmd /k %BACKEND_CMD%

REM Start ngrok for port 8000
start "" %NGROK_PATH% http 8000
