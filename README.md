## Kennisbank

### Local Deploy

1. git clone (https of the project)
2. cd kennisbank
3. cp .env.example .env
4. Write in the .env file your database name and credentials
     * DB_CONNECTION=mysql
     * DB_HOST=127.0.0.1
     * DB_PORT=3306
     * DB_DATABASE=kennisbank
     * DB_USERNAME=root
     * DB_PASSWORD=
5. Run: npm install
6. Run: composer install 
7. Run: php artisan key:generate
8. Create the db kennisbank
9. Run: php artisan migrate
10. Run: php artisan db:seed
11. Run: npm run watch
12. Run: php artisan serve