## About Random Persons

Random Persons is a small test project written in Laravel, in order to demo deployment of monolith applications on cloud native technologies.

### Install PHP dependencies

```
composer install
```

### Install Node.js packages

```
npm install
```

### Compile the frontend assets and watch for changes

```
npm run dev
```

### Generate application key

```
php artisan key:generate
```

### Seed the Persons table with random names

```
php artisan db:seed --class=PersonSeeder
```

### Run the Laravel application locally

```
php artisan serve
```

The application will run locally on port 8000.
