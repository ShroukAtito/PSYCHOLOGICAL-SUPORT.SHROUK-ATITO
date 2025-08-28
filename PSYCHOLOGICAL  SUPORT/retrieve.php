<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Retrieve Users</title>
</head>
<body>
  <h2>Registered Users</h2>
  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
    </tr>
    <?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['full_name'] . "</td>
                <td>" . $row['email'] . "</td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>

