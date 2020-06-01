## Kennisbank

### Local Deploy

1. git clone (https of the project)
2. cd kennisbank
3. cp .env.example .env
4. Write in the .env file your database name and credentials
     * DB_CONNECTION=mysql
     * DB_HOST=mysql
     * DB_PORT=3306
     * DB_DATABASE=kennisbank
     * DB_USERNAME=root
     * DB_PASSWORD=
5. Run: composer install
6. Run: npm install
7. Run: php artisan key:generate
8. Run: php artisan migrate
9. Run: php artisan db:seed
10. Run: npm run watch
11. Run: php artisan serve