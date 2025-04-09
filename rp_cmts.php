<?php
include "../phpscripts/dbconnet/dbresource.php";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $sino = $_POST["sinom"];
    $mail = $_POST["rplymail"];
    $cmt = $_POST["rplycmt"];
    // "INSERT INTO footter_comments (comment_discription, email_id) VALUES ('" . $comment_post . "','" . $email_Id . "')";
    $sqlp = "UPDATE `footter_comments` SET `reply_comt`= '$cmt', `reply_mail` = '$mail' WHERE `sino` = '$sino'";
    $qry = mysqli_query($conn, $sqlp);
    if ($qry) {
        header("location:comments_page");
    } else {
        header("location:Indexpg");
    }
}
?>