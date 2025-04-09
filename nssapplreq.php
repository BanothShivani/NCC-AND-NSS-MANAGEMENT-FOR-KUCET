<?php
    include "../phpscripts/dbconnet/dbresource.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $wingname = $_POST["wingname"];
        $names = $_POST["names"];
        $roll_no = $_POST["roll_no"];
        $father_name = $_POST["father_name"];
        $gender = $_POST["gender"];
        $year = $_POST["year"];
        $phone = $_POST["phone"];
        $adhar_no = $_POST["adhar_no"];
        $dob = $_POST["dob"];
        $bloo_grp = $_POST["bloo_grp"];
        $addresss = $_POST["addresss"];
        $email_id = $_POST["email_id"];
        $course = $_POST["course"];
        $castes = $_POST["castes"];
        $sql = "INSERT INTO `nss_appl_list`(`wingname`, `names`, `roll_no`, `father_name`, `gender`, `year`, `phone`, `adhar_no`, `dob`, `bloo_grp`, `addresss`, `email_id`, `course`, `castes`) VALUES ('$wingname','$names','$roll_no','$father_name','$gender','$year','$phone','$adhar_no','$dob','$bloo_grp','$addresss','$email_id','$course','$castes')";  

        $res = mysqli_query($conn,$sql);
        if ($res) {
            header("location:applesucc");
        }
        else {
            header("location:applefail");
        }
    }
?>