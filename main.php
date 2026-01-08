<?php

$surname = 'курицын';
$name = 'денис';
$patronymic = 'станиславович';

// Первая буква заглавная в каждом слове
$fullName = mb_convert_case($surname, MB_CASE_TITLE, 'UTF-8') . ' ' 
          . mb_convert_case($name, MB_CASE_TITLE, 'UTF-8') . ' ' 
          . mb_convert_case($patronymic, MB_CASE_TITLE, 'UTF-8');

// Аббревиатура ФИО
$firstLetterSurname = mb_substr($surname, 0, 1, 'UTF-8');
$firstLetterName = mb_substr($name, 0, 1, 'UTF-8');
$firstLetterPatronymic = mb_substr($patronymic, 0, 1, 'UTF-8');

$fio = mb_strtoupper($firstLetterSurname, 'UTF-8') 
     . mb_strtoupper($firstLetterName, 'UTF-8') 
     . mb_strtoupper($firstLetterPatronymic, 'UTF-8');

// Фамилия и инициалы
$surnameAndInitials = mb_convert_case($surname, MB_CASE_TITLE, 'UTF-8') . ' ' 
                    . mb_strtoupper($firstLetterName, 'UTF-8') . '.' 
                    . mb_strtoupper($firstLetterPatronymic, 'UTF-8') . '.';

echo "Полное имя: '$fullName'\n";
echo "Фамилия и инициалы: '$surnameAndInitials'\n";
echo "Аббревиатура: '$fio'\n";
