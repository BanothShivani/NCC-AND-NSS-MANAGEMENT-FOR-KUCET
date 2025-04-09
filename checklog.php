<?php
session_start();
include "../phpscripts/dbconnet/dbresource.php";
$table_name = "";
$_SESSION["requestmeth"] = "GET";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usertype = $_POST["usertype"];
    $username = $_POST["username"];
    $passkey = $_POST["password"];
    $wingty = $_POST["wingtype"]; 
    $hash = md5($passkey);
    // echo $hash;
    if ($usertype == "admin") {
        $table_name = "admin_list";
    } elseif ($usertype == "coordinator") {
        $table_name = "co_ordinators_lists_data";
    }
    $_SESSION["usertype"] = $usertype;
    $sql = "SELECT * FROM $table_name WHERE username = '$username' and wingname = '$wingty' and passkey ='$hash'";

    $qryres = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($qryres);
    $res = mysqli_num_rows($qryres);
    if ($res > 0) {
        $_SESSION["sino"] = $rows['sino'];
        $_SESSION["username"] = $rows['username'];
        $_SESSION["names"] = $rows['names'];
        $_SESSION["wingname"] = $rows['wingname'];
        $_SESSION["phone"] = $rows['phone'];
        $_SESSION["address"] = $rows['addresss'];
        $_SESSION["passkey"] = $rows['passkey'];
        $_SESSION["email"] = $rows['email_id'];
        $_SESSION["imgnms"] = $rows['imgnames'];
        $_SESSION["requestmeth"] = "POST";
        $_SESSION["table_name"] = $table_name;
        echo $_SESSION['table_name'];
        if ($usertype == "admin") {
            header("Location:admindashboard");
        } elseif ($usertype == "coordinator") {
            header("Location:coordinatordashboard");
        }
    } else {
        echo '<a href="login"> Click to relogin</a><br>invalide credentials';
    }
} else {
    echo "log dis";
}


// UPDATE `co_ordinators_list` SET `passkey`='' WHERE `sino`='1'