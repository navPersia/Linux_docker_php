<?php
$link = mysqli_connect("mysql", "root", "tiger", "png");

/* check connection */
if (mysqli_connect_errno()) {
    printf("MySQL connecttion failed: %s", mysqli_connect_error());
} else {
    if (empty($name = $_POST["name"]) || empty($body = $_POST["body"])) {
        echo "cant send data!";
    }else {
        $name = $_POST["name"];
        $body = $_POST["body"];

        $rowSQL = mysqli_query($link, "SELECT MAX( ID ) AS max FROM `MyGuests`;");
        $row = mysqli_fetch_array($rowSQL);
        $largestNumber = $row['max'];
        $largestNumber = (int)$largestNumber + 1;

        $sql = "INSERT INTO MyGuests (id , name, body) VALUES ($largestNumber,$name,$body)";

        mysqli_query($link, $sql);
        /* Redirect browser */
        header("Location: /index.php");
        exit();
    }
}
/* close connection */
mysqli_close($link);
?>