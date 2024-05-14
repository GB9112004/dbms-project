<?php
$usernamer = $_POST['username'];
$password = $_POST['password'];
$foodoptions = $_POST['foodoptions'];
$foodname = $_POST['foodname'];
$ingredients = $_POST['ingredients'];
$recipe = $_POST['recipe'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'cooking recipes');
if ($conn->connect_error) {
  echo "$conn->connect_error";
  die("Connection Failed : " . $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into add recipes(username, password, foodoptions,foodname, ingredients, recipe values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sissss", $username, $password, $foodoptions, $foodname, $ingredients, $recipe);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
