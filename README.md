## Api seu
#### Author: Saba Dumbadze

#

## Table of Contents

* [Prerequisites](#prerequisites)
* [Getting Started](#getting-started)
* [Configuration](#configuration)
* [Development](#development)

#

## Prerequisites

* _PHP@8.2 and up_
* _composer@2.4 and up_

#

## Tech Stack

-   [Laravel](https://laravel.com/)

#

## Getting Started

1.  Clone the repository from GitHub:
    ```shell
      git https://github.com/dumba23/seu-api.git
      cd seu-api
    ```
2.  Install PHP dependencies:
    ```shell
      composer install
    ```

3.  Copy the `.env` file:
    ```shell
      cp .env.example .env
    ```

#

## Configuration

1. Modify the database configuration in your `.env` file. DB_PASSWORD is empty by default.
   > DB_CONNECTION=mysql <br>
   DB_HOST=127.0.0.1 <br>
   DB_PORT=3306 <br>
   DB_DATABASE=movie_quotes <br>
   DB_USERNAME=<your_username> <br>
   DB_PASSWORD=<your_password> <br>
   
2. Run database migrations:
```shell
    php artisan migrate
```

3. Seed page:

```shell
    php artisan db:seed --class=PageSeeder 
```

#

## Development

You need to start Laravel server:

```shell
    php artisan serve
```
