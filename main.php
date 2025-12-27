<?php

$surname = 'курицын';
$name = 'денис';
$patronymic = 'станиславович';

// Первая буква заглавная в каждом слове
$fullName = mb_convert_case($surname, MB_CASE_TITLE) . ' ' 
          . mb_convert_case($name, MB_CASE_TITLE) . ' ' 
          . mb_convert_case($patronymic, MB_CASE_TITLE);

// Аббревиатура ФИО
$firstLetterSurname = mb_substr($surname, 0, 1);
$firstLetterName = mb_substr($name, 0, 1);
$firstLetterPatronymic = mb_substr($patronymic, 0, 1);

$fio = mb_strtoupper($firstLetterSurname) 
     . mb_strtoupper($firstLetterName) 
     . mb_strtoupper($firstLetterPatronymic);

// Фамилия и инициалы
$surnameAndInitials = mb_convert_case($surname, MB_CASE_TITLE) . ' ' 
                    . mb_strtoupper($firstLetterName) . '.' 
                    . mb_strtoupper($firstLetterPatronymic) . '.';

echo "Полное имя: '$fullName'\n";
echo "Фамилия и инициалы: '$surnameAndInitials'\n";
echo "Аббревиатура: '$fio'\n";
