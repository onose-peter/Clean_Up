<?php
$conn = mysqli_connect("localhost", "root", "", "peter");
$message = '';

if (isset ($_POST['submit'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO capture details (email) VALUE ('$email')";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "<script>
        alert('Successfully Subscribed');
        </script>";
    } else {
        echo "<script>
        alert('Unsuccessful')
        </script>";
    }
}





?>





