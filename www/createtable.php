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
                    <a class="nav-link" href="index.php">Give data to mysql</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="createtable.php">Create table</a>
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
    echo '<div class="alert alert-danger mt-3" role="alert">' . "MySQL connecttion failed: " . mysqli_connect_error() . "</div>";
} else {
    if(mysqli_num_rows(mysqli_query($link,"SHOW TABLES LIKE 'MyGuests'"))) {
        mysqli_query($link, "DROP TABLE MyGuests");
    }
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    body VARCHAR(60000) NOT NULL
    )";
    if ($link->query($sql) === TRUE) {
        echo "<div class=\"alert alert-success mt-3\" role=\"alert\">
  Table MyGuests created successfully!
</div>";
    }else{
        echo '<div class="alert alert-danger mt-3" role="alert">
  Table MyGuests is not created!
</div>';
    }
}
?>
</div>
<!-- /.container -->
</body>
</html>
