# Запуск проекта

Удаление ненужных/старых пакетов
```sh
sudo apt purge php* && sudo apt remove php*
sudo apt purge apache* && sudo apt remove apache*
sudo apt-get purge apache2 apache2-utils apache2-bin apache2.2-common
sudo apt autoclean && sudo apt autoremove
```

Установка PHP с расширениями
```sh
sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update
sudo apt install php8.3-cli && sudo apt install php8.3-common && sudo apt install php8.3-opcache && sudo apt install php8.3-readline && sudo apt install php8.3-curl && sudo apt install php8.3-xml && sudo apt install php8.3-dom && sudo install php8.3-mbstring
```

Установка Composer
```sh
sudo apt purge composer*
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
alias composer='/usr/local/bin/composer'
```

Установка зависимостей Composer
```sh
composer i
```

Расшифровка файла конфигурации
```sh
php artisan env:decrypt --key=base64:kpbr6PuoOHh8VIIyIyf1yODRZVXYnrQldEAxrRDyxgI=
```

Запуск Docker Compose
```sh
./vendor/bin/sail up
```

Вход в контейнер Laravel
```sh
docker exec -it kontact bash
```

Обновление и установка зависимостей NPM
```sh
npm update --save
```

Запуск миграцию таблиц БД
```sh
php artisan migrate
```

Запуск Vite
```sh
npm run dev
```