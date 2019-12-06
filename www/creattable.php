<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creat table</title>
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
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
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <?php
    $link = mysqli_connect("mysql", "root", "tiger", "png");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("MySQL connecttion failed: %s", mysqli_connect_error());
    } else {
        /* print server version */
        // sql to create table
        $sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
body VARCHAR(30) NOT NULL
)";
        if ($link->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $link->error;
        }

    }
    /* close connection */
    mysqli_close($link);
    ?>
</div>
<!-- /.container -->
</body>
</html>