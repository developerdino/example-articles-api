# Laravel 5.5 API Resource Example App

## Testing

Create a new file on the root folder called `.env.testing`
and fill out the following variables (according with your database connection):

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_db
DB_USERNAME=homestead
DB_PASSWORD=secret
DB_SSL=disable
```

then just run the tests with:

`vendor/bin/phpunit`
