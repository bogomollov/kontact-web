## Запуск проекта

1. Установка зависимостей Composer
```sh
composer i
```

2. Запуск Laravel Sail
```sh
./vendor/bin/sail up
```

3. Вход в контейнер Laravel
```sh
docker exec -it laravel bash
```

4. Запуск миграции таблиц БД
```sh
php artisan migrate --seed
```

5. Установка зависимостей NPM
```sh
npm i
```

6. Запуск Vite
```sh
npm run dev
```