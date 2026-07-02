#!/bin/bash 
git pull 
docker compose pull 
docker compose up -d 
docker compose exec app php artisan migrate --force 
docker compose exec app php artisan optimize 
docker compose exec app php artisan queue:restart
