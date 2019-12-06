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
                    <a class="nav-link active" href="checkresult.php">Check result</a>
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
    <div class="mt-3">
    </div>
</div>
<div class="message-wrap">
    <div class="msg-wrap">

        <?php
        $link = mysqli_connect("mysql", "root", "tiger", "png");

        /* check connection */
        if (mysqli_connect_errno()) {
            echo '<div class="alert alert-danger" role="alert">' . "MySQL connecttion failed: " . mysqli_connect_error() . "</div>";
        } else {
            $sql = "SELECT name, body FROM MyGuests";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "div class=\"media msg \">
            <a class=\"pull-left\" href=\"#\">
                <img class=\"media-object\" data-src=\"holder.js/64x64\" alt=\"64x64\" style=\"width: 32px; height: 32px;\" src=\"/assets/text-icon.png\">
            </a>
            <div class=\"media-body\">
                <h5 class=\"media-heading\">" . $row["name"]. "</h5><small class=\"col-lg-10\">" . $row["body"]. "</small>
            </div>
        </div>";
                }
            } else {
                echo "<div class=\"alert alert-dark\" role=\"alert\">
  No Message!
</div>";
            }
        }
        /* close connection */
        mysqli_close($link);
        ?>
        
<!--        <div class="media msg ">-->
<!--            <a class="pull-left" href="#">-->
<!--                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="/assets/text-icon.png">-->
<!--            </a>-->
<!--            <div class="media-body">-->
<!--                <h5 class="media-heading">Naimish Sakhpara</h5>-->
<!--                <small class="col-lg-10">Location H-2, Ayojan Nagar, Near Gate-3, Near-->
<!--                    Shreyas Crossing Dharnidhar Derasar,-->
<!--                    Paldi, Ahmedabad 380007, Ahmedabad,-->
<!--                    India-->
<!--                    Phone 091 37 669307-->
<!--                    Email aapamdavad.district@gmail.com</small>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="media msg">-->
<!--            <a class="pull-left" href="#">-->
<!--                <img class="media-object" alt="64x64" style="width: 32px; height: 32px;" src="assets/text-icon.png">-->
<!--            </a>-->
<!--            <div class="media-body">-->
<!--                <h5 class="media-heading">Naimish Sakhpara</h5>-->
<!--                <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="media msg">-->
<!--            <a class="pull-left" href="#">-->
<!--                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="/assets/text-icon.png">-->
<!--            </a>-->
<!--            <div class="media-body">-->
<!--                <h5 class="media-heading">Naimish Sakhpara</h5>-->
<!--                <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="media msg">-->
<!--            <a class="pull-left" href="#">-->
<!--                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="/assets/text-icon.png">-->
<!--            </a>-->
<!--            <div class="media-body">-->
<!--                <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>-->
<!--                <h5 class="media-heading">Naimish Sakhpara</h5>-->
<!---->
<!--                <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>-->
<!--            </div>-->
<!--        </div>-->

    </div>
<!-- /.container -->
</body>
</html>