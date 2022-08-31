 <!DOCTYPE html>
 <html lang="ru">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/style.css">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">   
 </head>
 <body>
    <div class="container">
    <h1>Обратная связь</h1>
    <form id="mailForm">
        <input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
        <input type="name" id="name" name="name" placeholder="Введите ваше имя" class="form-control"><br>
        <input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <button type="button" id="sendMail" class="btn btn-success">Отправить</button>
    </form>
    <div id="errorMess"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/formMail.js"></script>
 </body>
 </html>