<?php
$conn = mysqli_connect("localhost", "root", "", "intern_task");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email) 
            VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        header("Location: users.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add New User ➕</h2>

<form method="POST">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  Password: <input type="text" name="password"><br><br>
  <input type="submit" name="add" value="Add User">
</form>

</body>
</html>