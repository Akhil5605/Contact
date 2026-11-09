<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Add Contact</title></head>
<body>
  <h1>Add Contact</h1>
  <form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone" required><br>
    <button type="submit">Save</button>
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name','$email','$phone')";
  if ($conn->query($sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
