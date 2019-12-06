<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Give data</title>
        <link rel="stylesheet" href="/assets/css/index.css">
        <link rel="stylesheet" href="/assets/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="/assets/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/jquery.slim.min.js">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="checkresult.php">Check result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Give data to mysql</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="creattable.php">Create table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="container-contact1">
            <form id="myForm" class="contact1-form validate-form">
                <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="name" placeholder="Name">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Message is required">
                    <textarea class="input1" name="body" placeholder="Message"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <input class="contact1-form-btn" onclick="send()" type="button" id="save" value="send"></input>
            </form>
            <span id="result">click on send to send you message!</span>
        </div>
    </div>
    <!-- /.container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#save").click(function () {
                $.ajax({
                    url: "http://192.168.0.156/insert.php",
                    type: "post",
                    data: $("#myForm").serialize(),

                });
                document.getElementById('result').innerHTML = "sending your messsage!";
                $('#result').css({
                    'color': 'green'
                });
                $('.contact1-form-btn').css({
                    'background': '#333333'
                });
                setTimeout(function () {
                    document.getElementById('result').innerHTML = "click on send to send you message!";
                    $('#result').css({
                        'color': 'red'
                    });
                    $('.contact1-form-btn').css({
                        'background': '#57b846'
                    });
                }, 5000);
            });
        });
    </script>
    </body>
</html>