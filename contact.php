<?php
// Replace with your database details
$servername = "localhost";
$username = "user2";
$password = "password";
$dbname = "ingenuity_web";

//header("Location:https://www.ingenuityfest.in");
//echo '<script>alert("hello, php working!!")</script>'; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
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
$poc1_phone = $_POST['poc1_phone'];
$poc2_name = $_POST['poc2_name'];
$poc2_email = $_POST['poc2_email'];
$poc2_phone = $_POST['poc2_phone'];
$participants = $_POST['n-participants'];
$team_members = $_POST['team_members'];

// Insert form data into database
$sql = "INSERT INTO registration (fname, lname, email, phno, uni, city, n_tickets, ticket_type, competition, poc1_name, poc1_email, poc1_phno, poc2_name, poc2_email, poc2_phno, team_members) VALUES ( '$fname', '$lname', '$email', '$phone', '$uni', '$city', '$person', '$type', '$competition', '$poc1_name', '$poc1_email', '$poc1_phno', '$poc2_name', '$poc2_email', '$poc2_phno', '$team_members')";

if (mysqli_query($conn, $sql)) {
  header("Location:https://www.ingenuityfest.in");
  echo '<script>alert("Response Recorded Succesfully!. Confirmation will be given via mail in 24 hrs.")</script>'; 

} else {
  echo "Error uploading data: " . mysqli_error($conn);
  echo '<script>alert("Error Uploading Data.")</script>'; 
}

// Close connection
mysqli_close($conn);
?>
