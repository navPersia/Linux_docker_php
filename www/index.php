<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Give data</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
        <link rel="stylesheet" href="/assets/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="/assets/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/jquery.slim.min.js">
    </head>
    <body>
    <?php
    $link = mysqli_connect("mysql", "root", "navid7373", "php");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("MySQL connecttion failed: %s", mysqli_connect_error());
    } else {
        /* print server version */
        printf("MySQL Server %s", mysqli_get_server_info($link));
    }
    /* close connection */
    mysqli_close($link);
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkresult.php">Check result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Give data to mysql</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4">Logo Nav by Start Bootstrap</h1>
        <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap 4! Make sure to set the width and height of the logo within the HTML or with CSS. For best results, use an SVG image as your logo.</p>
    </div>
    <!-- /.container -->
    </body>
</html>