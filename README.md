
## Setup:

```bash

git clone https://github.com/ms-yusuf/tugas-pemodelan-perangkat-lunak.git

cd tugas-pemodelan-perangkat-lunak

composer install # Install backend dependencies

sudo chmod 777 storage/ -R # Chmod Storage

php artisan storage:link # Enable link to storage

cp .env.example .env # Update database credentials configuration

php artisan key:generate # Generate new keys for Laravel

php artisan migrate:fresh --seed # Run migration and seed users and categories for testing

yarn install # or npm i to Install node dependencies(>= node 9.x)

npm run production # To compile assets for prod

php artisan serve # To serve the app into localhost:8000

```

**Note:**
Username: test@example.com
Password: 123456
