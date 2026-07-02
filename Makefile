up: 
   docker compose up -d 
down: 
   docker compose down 
build: 
   docker compose build
rebuild: 
   docker compose up --build -d 
logs:
   docker compose logs -f 
bash: 
   docker compose exec app bash
test: 
   docker compose exec app php artisan test 
pint: 
   docker compose exec app vendor/bin/pint 
phpstan: 
   docker compose exec app vendor/bin/phpstan analyse 
psalm: 
   docker compose exec app vendor/bin/psalm 
optimize: 
   docker compose exec app php artisan optimize 
clear: 
   docker compose exec app php artisan optimize:clear