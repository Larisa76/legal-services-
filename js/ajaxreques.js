function request() {
    let fio = $("#v-1").val();
    let phone = $("#v-2").val();
    let email = $("#v-3").val();
    let adress = $("#v-4").val();
    let message = $("#text").val();



    let str = "fio="+fio+"&phone="+phone+"&email="+email+"&message="+message + "&adress="+adress;

    $.ajax({

        type: "POST",
        url: "model/mail.php",
        data: str,
        success: function(smr) {
            alert("Запрос отправлен!")
        }
       
    });
}
