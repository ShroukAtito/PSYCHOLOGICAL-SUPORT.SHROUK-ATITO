<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert Data</title>
</head>
<body>
  <h2>Insert User Data</h2>
  <form method="POST" action="">
    <label>Full Name:</label><br>
    <input type="text" name="full_name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="submit" value="Insert">
  </form>
  <?php
  if (isset($_POST['submit'])) {
      $full_name = $_POST['full_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
      if (mysqli_query($conn, $sql)) {
          echo "Data inserted successfully!";
      } else {
          echo "Error: " . mysqli_error($conn);
      }
  }
  ?>
</body>
</html>
