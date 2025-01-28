<?
// Для вызова функции с другой страницы PHP, вы можете использовать функцию include или require. Вот примеры использования каждой из них:

// 1. Использование функции include:
// Файл с функцией: functions.php
function myFunction() {
    echo "Привет, я функция!";
}

// Файл, вызывающий функцию: index.php
include 'functions.php';

// Вызов функции
myFunction();


// 2. Использование функции require:
// Файл с функцией: functions.php
function myFunction() {
    echo "Привет, я функция!";
}

// Файл, вызывающий функцию: index.php
require 'functions.php';

// Вызов функции
myFunction();


// В обоих случаях, функция myFunction() определена в файле functions.php, а затем вызывается в файле index.php с помощью функций include или require. В результате будет выведено сообщение "Привет, я функция!".