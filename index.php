<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Manager</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Contact List</h1>
  <a href="add.php">Add New Contact</a>
  <table>
    <tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM contacts");
    while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['phone']}</td>
              <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>
