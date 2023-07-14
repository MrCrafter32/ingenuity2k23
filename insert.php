<?php
include_once 'db.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $sql = "INSERT INTO registrations (name, email, phno) VALUES ('$fname', '$email', '$mobile')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully!";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>


