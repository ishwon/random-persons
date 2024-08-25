FROM dunglas/frankenphp

COPY . /app

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
