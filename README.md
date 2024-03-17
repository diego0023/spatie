# Documentation 
## Sapite-settings
* [GitHub](https://github.com/spatie/laravel-settings#usage)
* [Documentation](https://www.larablocks.com/package/spatie/laravel-settings)
## Spatie-Media-Library
* [GitHub](https://github.com/spatie/laravel-medialibrary)
* [Documentation](https://spatie.be/docs/laravel-medialibrary/v11/basic-usage/preparing-your-model)
## Filament-plugins
* [sapite-settings](https://filamentphp.com/plugins/filament-spatie-settings)
* [spatie-media-library](https://filamentphp.com/plugins/filament-spatie-media-library)
# Cloning the project
```
docker run --rm --interactive --tty -v $(pwd):/app composer install
./vendor/bin/sail build --no-cache
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan artisan make:filament-user
./vendor/bin/sail root-shell
chown -R sail:sail /var/www/html
chown -R sail:sail /var/www/html/vendor
```
