<?php

$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uni = $_POST['uni'];
$city = $_POST['city'];
$person = $_POST['n-tickets'];
$type = $_POST['type'];

$competition = $_POST['event'];
//$poc1_name = $_POST['poc1_name'];
//$poc1_email = $_POST['poc1_email'];
//$poc1_phone = $_POST['poc1_phone'];
//$poc2_name = $_POST['poc2_name'];
//$poc2_email = $_POST['poc2_email'];
//$poc2_phone = $_POST['poc2_phone'];
//$participants = $_POST['n-participants'];
//$team_members = $_POST['team_members'];

function pushtoDB($fname, $lname, $email, $phone, $uni, $city, $person, $type, $competition){
    $server = "localhost";
    $user = "user2";
    $pass = "password";
    $db = "ingenuity_web";
    $con = mysqli_connect($server, $user, $pass, $db);

    $sql = "INSERT INTO registrations (`fname`, `lname`, `email`, `phno`, `uni`, `city`, `n_tickets`, `ticket_type`, `competition`) VALUES ( '$fname', '$lname', '$email', '$phone', '$uni', '$city', '$person', '$type', '$competition)";
    $results = mysqli_query($con, $sql);
    if (mysqli_query($con, $sql)) {
        $last_id = mysqli_insert_id($conn);
        header("Location:https://www.ingenuityfest.in");
        echo '<script>alert("Response Recorded Succesfully!. Confirmation will be given via mail in 24 hrs.")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
} 

pushtoDB($fname, $lname, $email, $phone, $uni, $city, $person, $type, $competition)
?>
