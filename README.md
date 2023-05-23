
## DOCUMENT-MANAGEMENT-SYSTEM

## PROJECT-SETUP

### Clone the project
```
git clone https://github.com/innotuyi/-document-management-system-backend.git
```
### Enter in directory where it saved
```

cd /path/to/your/project

```

### Install dependencies
```
composer install

```

### Make a copy of the .env.example file and rename it to .env.
```
cp .env.example .env

```
### Generate an application key
```
php artisan key:generate

```
### Set your database
```
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

```
### Run your migration to create necessary tables
```
php artisan migrate

```
### start server

```
php artisan serve

```








