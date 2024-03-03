#!/bin/bash
FRONTEND_CMD="npm run dev"
BACKEND_CMD="php artisan serve"

gnome-terminal --tab --title="Frontend Server" --command="bash -c '$FRONTEND_CMD; exec bash'" \
               --tab --title="Backend Server" --command="bash -c '$BACKEND_CMD; exec bash'"
