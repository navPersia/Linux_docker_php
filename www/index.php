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
                        <a class="nav-link" href="createtable.php">Create table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class="mt-3">
            <form id="myForm" action="/insert.php" method="post">
                <div class="form-group" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>

                <div class="form-group" data-validate = "Message is required">
                    <textarea class="form-control" name="body" placeholder="Message" rows="3"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- /.container -->
    </body>
</html>