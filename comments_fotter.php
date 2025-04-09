<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "../phpscripts/dbconnet/dbresource.php";
    $comment_post = $_POST["Comment_value"];
    $email_Id = $_POST["email_value"];
    echo "Comment Recieved";
    $SqlInsertQry = "INSERT INTO footter_comments (comment_discription, email_id) VALUES ('" . $comment_post . "','" . $email_Id . "')";
    $Insertqry = mysqli_query($conn, $SqlInsertQry);
    if (!$Insertqry) {
        echo "Unable to submit comment!, try after some time";
    }
}
