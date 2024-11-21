Урок 1. Введение в PHP
Собрать для себя окружение из Nginx + PHP-FPM и PHP CLI
Выполните код в контейнере PHP CLI и объясните, что выведет данный код и почему:

<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
?>

В контейнере с PHP CLI поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод?
Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные, функции и конструкции типа list() использовать нельзя.


Вывод при версии 8.2
PS D:\gb\Основы PHP\Less1\php-hw1> docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php
bool(true)
int(12345)
bool(false)
bool(false)

Вывод при версии 7.4
PS D:\gb\Основы PHP\Less1\php-hw1> docker run --rm -v ${pwd}/php-cli/:/cli php:7.4-cli php /cli/start.php
bool(true)
int(12345)
bool(false)
bool(true)

