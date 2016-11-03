
<?php
$servername = "localhost"; 
$username = "mybandwesly";
$password = "wesjor";
$dbname = "MyBand";


$title = addslashes($_POST['title']);
$content = addslashes($_POST['content']);
$image = addslashes($_POST['image']);
$tags = addslashes($_POST['tags']);
$link = addslashes($_POST['link']);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO myband (title, content, image, tags, link)
VALUES ('$title', '$content', '$image', '$tags', '$link')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



