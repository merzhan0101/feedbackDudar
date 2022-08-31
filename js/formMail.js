$("#sendMail").on("click", function(){
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();

    if(email == ""){
        $("#errorMess").text("Введите email");
        return false;//выход из функ
    } else if(name == ""){
        $("#errorMess").text("Введите имя");
        return false;
    } else if(phone == ""){
        $("#errorMess").text("Введите телефон");
        return false;
    } else if(message.length < 5){
        $("#errorMess").text("Введите сообщение не менее 5 символов");
        return false;
    }

    //если все прав, то удал text с блока ошибками 
    $("#errorMess").text("");

    //отправка на почту 
    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: {'name': name, 'email': email, 'phone': phone, 'message': message},
        dataType: 'html', //тип открытия команд в коде
        beforeSend: function(){
            $("#sendMail").prop("disabled", true);//становится не активной
        },
        //вызывается когда мы получили данные
        success: function(data){
            if(!data)//data == false
                alert("Были ошибки, сообщение не отправлено");
            else
                $("#mailForm").trigger("reset");//очистка заполн данных форм
            $("#sendMail").prop("disabled", false);//кнопка станов активной
        }
    });
});