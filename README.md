<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">

</p>

## Требования
<ul>
<li>🔴 PHP 8.0-8.2</li>
<li>🔴 База данных: MySQL 5.7+, PostgreSQL 10.0+, MariaDB 10.3+, SQLite</li>
<li>🔴 Composer</li>
<li>🔴 Npm</li>
</ul>

## Порядок запуска
<ul>
<li>Переименуйте .env.example в .env, или сделайте копию и переименуйте</li>
<li>composer install</li>
<li>npm i</li>
<li>Создайте таблицу в базе кодировка: utf8mb4_unicode_ci и пропишите доступ в файле .env, который вы скопировали или переименовали</li>
<li>php artisan migrate:refresh --seed</li>
<li>В APP_URL в файле .env необходимо указать ваш домен или ip адрес, для примера: dka-develop.ru или 192.168.56.101 или 192.168.10.50:8001, из этого параметра будет формироваться короткая ссылка</li>
<li>php artisan serve --host=192.168.56.101 --port=8000</li>
</ul>
<i>Где 192.168.56.101 ваш домен или ip адрес, если локально тогда можете использовать 127.0.0.1 либо localhost, порт указывать в случаи конфликта, если у вас на порту 80 уже работает другой сервис.</i>
<p></p>
<p>* Команда <b>php artisan serve --host=192.168.56.101 --port=8000</b> только для теста и в режиме разработки, используйте nginx, apache или в docker containers</p>
<p></p>
<p>* Команда <b>php artisan migrate:refresh --seed</b> заполняет таблицы базы данных уже готовыми миграциями с пользователем и нужными таблицами для коротких ссылок</p>

## Данные для входа
<ul>
<li>Входите по пути который указали выше http://<span></span>192.168.56.101:8000</li>
<li>develop@shorts.com</li>
<li>B4f$2a3</li>
</ul>

## Пользование
<ul>
<li>В поле URL Short Generate вводите длинный адрес который хотите сократить и нажимаете create</li>
<li>В таблице ниже в поле Short Url видите сокращенный вариант который можно использовать для перехода по ссылке</li>
</ul>

## Ошибки 
<ul>
<li>Если неправильно указали ссылку в APP_URL тогда перенаправление работать не будет, нужно указать либо ip текущего компьютера на котором запущено, либо имя домена</li>
</ul>

### Спасибо спонсорам на Boosty

- **Vladislav Poltorakov**
- **Юрий**
- **Ruslan**
- **K VD**
- **Александр**

<a href="[https://laravel.com](https://boosty.to/dkadevelop)" target="_blank">https://boosty.to/dkadevelop</a>
