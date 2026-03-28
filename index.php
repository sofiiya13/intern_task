<?php
$conn = mysqli_connect("localhost", "root", "", "intern_task");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$conn = mysqli_connect("localhost", "root", "", "intern_task");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Enter Details</h2>

<form method="POST">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  Password: <input type="password" name="password"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
 