# sa-system
How to use the System
1. clone the repository
2. Open terminal with directory set to the cloned folder then run "composer install"
3. Wait for the dependencies to install
4. install a key for your application by running "php artisan key:generate"
5. modify the AppServiceProvider located in app/providers/appServiceProvider
6. inside the boot function add "Schema::defaultStringLength(191);"
