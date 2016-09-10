<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Николай - инженер, просто инженер.</title>
	<meta charset="utf-8">
	  <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
</head>
<body>
	<h1>Страница пользователя Николая</h1>
<?php
$name = "Николай"; //мое имя
$age = 33; // мой возраст
$email = "nicolas7763@rambler.ru"; //мой адрес почты
$city = "Ростов-на-Дону"; //город, где я живу
$aboutMyself = "Инженер электросвязи. Ростелеком"; //здесь я, к сожалению, работаю
?>
<dl>
            <dt>Имя</dt>
            <dd><?=$name?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?=$age?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="<?=$email?>"><?=$email?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?=$city?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?=$aboutMyself?></dd>
        </dl>
        
        


</body>
</html>