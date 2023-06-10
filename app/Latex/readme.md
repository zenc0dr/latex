# Установка

В файле composer.json добавить
```
"autoload-dev": {
        ***
        "files": [
            "app/Latex/init.php"
        ]
    },
```

В файл app/Providers/RouteServiceProvider.php в метод boot добавить код
```php
public function boot(): void
    {
        ***
        Route::prefix('latex')
                ->group(base_path('app/Latex/routes.php'));
        });
    }
```

В консоли набрать
```bash
composer dump
```
