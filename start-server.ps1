$env:FRONTEND_CMD = "npm run dev"
$env:BACKEND_CMD = "php artisan serve"

Start-Process powershell -ArgumentList "-NoExit -Command `"$env:FRONTEND_CMD`""
Start-Process powershell -ArgumentList "-NoExit -Command `"$env:BACKEND_CMD`""
