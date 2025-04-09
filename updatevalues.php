<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
    </script>
    <title>Document</title>
    <script>
        $(document).ready(function() {
            $('button').click(function() {
                location.reload();
            })
        })
    </script>
</head>
<body>
<button>Reload</button><br>
</body>
</html>
<?php
include "../phpscripts/dbconnet/dbresource.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sino = $_POST["sino"];
    $username = $_POST["username"];
    $names = $_POST["names"];
    $wingname = $_POST["wingname"];
    $phone = $_POST["phone"];
    $addresss = $_POST["address"];
    $email = $_POST["email_id"];
    $tablename = $_POST["tablename"];
    $org = $_POST["passkey"];
    $pass = $_POST["passkey"];
    $pass = md5($pass);
    $sql = "UPDATE $tablename SET username = '$username',names='$names',wingname = '$wingname', phone='$phone',addresss='$addresss',email_id = '$email',passkey = '$pass', orgkey = '$org' WHERE sino = '$sino'";
    $res = mysqli_query($conn, $sql);
    if ($res)
        echo "Update Successfull";
    else
        echo "unable";

    echo "<br>".$sino."<br>". $tablename."<br>";
    echo $username . "<br>" . $names . "<br>" . $wingname . "<br>" . $phone . "<br>" . $addresss . "<br>" . $email;
} else {
    header("location:indexpg");
}
?>