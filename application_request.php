<?php
    include "../phpscripts/dbconnet/dbresource.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $q1 = $_POST["q1"];
        $q2 = $_POST["q2"];
        $q3 = $_POST["q3"];
        $q4 = $_POST["q4"];
        $q5 = $_POST["q5"];
        $q6 = $_POST["q6"];
        $q7 = $_POST["q7"];
        $q8 = $_POST["q8"];
        $q9 = $_POST["q9"];
        $q10 = $_POST["q10"];
        $q11 = $_POST["q11"];
        $q12 = $_POST["q12"];
        $q13 = $_POST["q13"];
        $q14 = $_POST["q14"];
        $q15 = $_POST["q15"];
        $q16 = $_POST["q16"];
        $q17 = $_POST["q17"];
        $q18 = $_POST["q18"];
        $q18 = $_POST["q18"];
        $q19 = $_POST["q19"];
        $q20 = $_POST["q20"];
        $q21 = $_POST["q21"];
        $q22 = $_POST["q22"];
        $q23 = $_POST["q23"];
        $q24 = $_POST["q24"];
        $q25 = $_POST["q25"];

        $sql = "INSERT INTO `ncc_application_list`(`q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25')";
        $res = mysqli_query($conn,$sql);
        if ($res) {
            echo "success";
        }
        else {
            echo "fail";
        }

    }
    // echo $_POST["q1"] . "<br>";
    // echo $_POST["q2"] . "<br>";
    // echo $_POST["q3"] . "<br>";
    // echo $_POST["q4"] . "<br>";
    // echo $_POST["q5"] . "<br>";
    // echo $_POST["q6"] . "<br>";
    // echo $_POST["q7"] . "<br>";
    // echo $_POST["q8"] . "<br>";
    // echo $_POST["q9"] . "<br>";
    // echo $_POST["q10"] . "<br>";
    // echo $_POST["q11"] . "<br>";
    // echo $_POST["q12"] . "<br>";
    // echo $_POST["q13"] . "<br>";
    // echo $_POST["q14"] . "<br>";
    // echo $_POST["q15"] . "<br>";
    // echo $_POST["q16"] . "<br>";
    // echo $_POST["q17"] . "<br>";
    // echo $_POST["q18"] . "<br>";
    // echo $_POST["q19"] . "<br>";
    // echo $_POST["q20"] . "<br>";
    // echo $_POST["q21"] . "<br>";
    // echo $_POST["q22"] . "<br>";
    // echo $_POST["q23"] . "<br>";
    // echo $_POST["q24"] . " 24";
?>