<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<form a  method="POST" enctype="multipart/form-data"><br>
<label for="v-1">Напишите ваше имя</label><br>
<input type="text" name="name" placeholder="техт" id="v-1"><br>
<label for="v-1">Напишите ваш телефон</label><br>
<input type="number" name="phone" placeholder="телефон" id="v-2"><br>
<label for="v-1">Напишите ваш email</label><br>
<input type="email" name="email" placeholder="email" id="v-3"><br>
<label for="v-1">Напишите письмо</label><br>
<textarea name="textarea" id="" cols="30" rows="10" placeholder="текст" id="v-4"></textarea>
<input type="button" onclick="request()" value="Отправить">
</form>

<!--<?php include("form/form.php");?>-->
<script src="js/ajaxreques.js"></script>
    
</body>
</html>