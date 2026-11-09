<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM contacts WHERE id=$id";
if ($conn->query($sql)) {
  header("Location: index.php");
} else {
  echo "Error: " . $conn->error;
}
?>
