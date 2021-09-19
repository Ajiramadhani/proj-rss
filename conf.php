<?php
$host='localhost';
$username='root';
$password='';
$database='db_latihan_1';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$xml = simplexml_load_file ("https://www.suara.com/rss/otomotif");


foreach ($xml->channel->item as $item){
	$title = mysqli_real_escape_string($conn, $item->title);
	$date = $item->pubDate;
	$link = mysqli_real_escape_string($conn, $item->link);
	$desc = mysqli_real_escape_string($conn, $item->description);
	$img = $item->enclosure['url'];

	$sql = "INSERT INTO news (title, images, date, link, description, category, news) VALUES ('".$title."', '".$img."', '".$date."', '".$link."', '".$desc."', 'otomotif', 'suara.com')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully-Suara.Com </br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}

$conn->close();


?>