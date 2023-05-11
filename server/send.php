<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

</head>

<body>
    <div class="feedback_form_bg">
        <span class="close"></span>
        <!-- <form method="post" action="model/mail.php"  id="forma"> -->
        <form method="POST" id="forma" class="contact-form" action="model/mail/mail.php" enctype="multipart/form-data">
            <span id="CloseBlock" class="close"></span>
            <input type="text" name="fio" placeholder="Ф.И.О" id="v-1" />
            <input type="number" name="phone" placeholder="Телефон" id="v-2" />
            <input type="email" name="email" placeholder="E-Mail" id="v-3" />
            <input type="text" name="adress" placeholder="Адрес доставки" id="v-4" />
            <textarea name="message" id="text" cols="30" rows="10" placeholder="Напиши нам"></textarea>
            <br />
            <input type="button" onclick="request()" value="отправить" />
        </form>
    </div>


</body>

</html>