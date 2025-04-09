<?php
include "../phpscripts/dbconnet/dbresource.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["event_details"];
    $date = $_POST["dategiven"];
    $wingname = $_POST["wingname"];    
    $sql = "INSERT INTO `tbl_events`(`title`, `start`, `wingname`) VALUES ('$title','$date','$wingname')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:calendar");
    }
}
?>