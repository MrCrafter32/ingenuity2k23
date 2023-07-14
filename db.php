<?php
//server connection details
$servername = '127.0.0.1';
$username = 'user2';
$password = 'password';
$dbname = "ingenuity_web";

//form-fields to connect
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uni = $_POST['uni'];
$city = $_POST['city'];
$person = $_POST['n-tickets'];
$type = $_POST['type'];

$competition = $_POST['event'];
$poc1_name = $_POST['poc1_name'];
$poc1_email = $_POST['poc1_email'];
$poc1_phno = $_POST['poc1_phone'];
$poc2_name = $_POST['poc2_name'];
$poc2_email = $_POST['poc2_email'];
$poc2_phno = $_POST['poc2_phone'];
$participants = $_POST['n-participants'];
$team_members = $_POST['team_members'];



$conn = mysqli_connect($servername, $username, $password, "$dbname");   // establishes connection with mysql server. 
if (!$conn) {
    die('Could not Connect MySql Server:' . mysql_error());
}else{
    echo '<script>alert("Connection to database is a go.")</script>';
    if ($type=='visitor'){
        $sql_1 = "INSERT INTO registrations (fname, lname, email, phno, uni, city, n_tickets, ticket_type) VALUES ( '$fname', '$lname', '$email', '$phone', '$uni', '$city', '$person', '$type')";//, '-', '-', '-', '-', '-', '-', '-', '-')";
        if (mysqli_query($conn, $sql_1)) {
            header("Location:https://www.ingenuityfest.in");
            echo '<script>alert("Response Recorded Succesfully!. Confirmation will be given via mail in 24 hrs.")</script>'; 

        } else {
            echo "Error uploading data: " . mysqli_error($conn);
            echo '<script>alert("Error Uploading Data.")</script>'; 
        }

    }
    else{
        $sql_2 = "INSERT INTO registrations (fname, lname, email, phno, uni, city, n_tickets, ticket_type, competition, poc1_name, poc1_email, poc1_phno, poc2_name, poc2_email, poc2_phno, team_members) VALUES ( '$fname', '$lname', '$email', '$phone', '$uni', '$city', '$person', '$type', '$competition', '$poc1_name', '$poc1_email', '$poc1_phno', '$poc2_name', '$poc2_email', '$poc2_phno', '$team_members')";
        if (mysqli_query($conn, $sql_2)) {
            header("Location:https://www.ingenuityfest.in");
            echo '<script>alert("Response Recorded Succesfully!. Confirmation will be given via mail in 24 hrs.")</script>'; 

        } else {
            echo "Error uploading data: " . mysqli_error($conn);
            echo '<script>alert("Error Uploading Data.")</script>'; 
        }
    }
}
?>

