<?php


$userSurname = readline('Введите фамилию: ');

$userName = readline('Введите имя: ');

$userSecondName = readline('Введите отчество: ');

///////////////////////////////////////////////////////

$fullName = "$userSurname $userName $userSecondName";

$surnameAndInitials = $userSurname.' '
                      .mb_substr($userName, 0, 1).'.'
                      .mb_substr($userSecondName, 0, 1).'.';

$fio = mb_substr($userSurname, 0, 1)
      .mb_substr($userName, 0, 1)
      .mb_substr($userSecondName, 0, 1);

fwrite(STDOUT, "Полное имя: $fullName".PHP_EOL);
fwrite(STDOUT, "Фамилия и инициалы: $surnameAndInitials".PHP_EOL);
fwrite(STDOUT, "Аббревиатура: $fio".PHP_EOL);