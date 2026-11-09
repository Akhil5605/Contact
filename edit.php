<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contacts WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Edit Contact</title></head>
<body>
  <h1>Edit Contact</h1>
  <form method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
    <button type="submit">Update</button>
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone' WHERE id=$id";
  if ($conn->query($sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
