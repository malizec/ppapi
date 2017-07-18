<?php


$servername = "localhost";
$username = "id1959174_wp_d8a224f463b0dfd34e7e53549f63a15b";
$password = "@Nenad05031984";
$dbname = "id1959174_wp_d8a224f463b0dfd34e7e53549f63a15b";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
// $stmt = $conn->prepare("INSERT INTO `portfolio_items` (name, img, description) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $name, $img, $description);

// // set parameters and execute
// $name = "John";
// $img = "Doe";
// $description = "john@example.com";
// $stmt->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $stmt->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $stmt->execute();

// echo "New records created successfully";

// $stmt->close();
// $conn->close();

$query = "select * from `portfolio_items`";
$result = $conn->query($query);

if ( $result->num_rows > 0 )
{
	while($row = $result->fetch_assoc()){
		$list[]=$row;
	}


	foreach ($list as $item) {
		echo "id: " . $item["id"]. " - Name: " . $item["name"]. " " . $item["img"]. " Opis: " . $item['description'];
		echo '<hr>';
	}
	
} else {
	echo '<h1>Nema</h1>';
}

?>