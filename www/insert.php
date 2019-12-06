<?php
$link = mysqli_connect("mysql", "root", "tiger", "png");

/* check connection */
if (mysqli_connect_errno()) {
    printf("MySQL connecttion failed: %s", mysqli_connect_error());
} else {
    if (empty($name = $_POST["email"]) || empty($body = $_POST["body"])) {
        echo "please fill all requirement";
    }else {
        $name = $_POST["email"];
        $body = $_POST["body"];

        $rowSQL = mysqli_query($link, "SELECT MAX( ID ) AS max FROM `MyGuests`;");
        $row = mysqli_fetch_array($rowSQL);
        $largestNumber = $row['max'];
        $largestNumber = (int)$largestNumber + 1;

        $sql = "INSERT INTO msg (id , email, body) VALUES ($largestNumber,'$name','$body')";

        mysqli_query($link, $sql);
    }
}
/* close connection */
mysqli_close($link);
?>