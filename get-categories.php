<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "news_portal");
$result = $conn->query("SELECT * FROM categories");
$categories = [];

while ($row = $result->fetch_assoc()) {
  $categories[] = $row;
}

echo json_encode($categories);
?>
