<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Suara.com | Otomotif</h2>
				<?php
				$xml = simplexml_load_file("https://www.suara.com/rss/otomotif");

				foreach ($xml->channel->item as $item) {
					echo "Judul: " . $item->title . "<br>";
					echo "Link: <a href='" . $item->link . "'>" . $item->link . "</a><br>";
					echo "Tanggal Terbit: " . $item->pubDate . "<br>";
					echo "Deskripsi: " . $item->description . "<br>";
					echo "Image: <img src='" . $item->enclosure['url'] . "' width='250'/><br><br>";
				}
				?>
			</div>
			<!-- <div class="col-md-4">
			  <h2>Suara.com | Bola</h2>
			  	<?php
					// $xml = simplexml_load_file ("https://www.suara.com/rss/bola");

					// foreach ($xml->channel->item as $item){
					// 	echo "Judul: ".$item->title."<br>";
					// 	echo "Link: <a href='".$item->link."'>".$item->link."</a><br>";
					// 	echo "Tanggal Terbit: ".$item->pubDate."<br>";
					// 	echo "Deskripsi: ".$item->description."<br><br><br>";
					// }
					?>
			</div>
			<div class="col-md-4">
			  <h2>Suara.com | Health</h2>
			  	<?php
					// $xml = simplexml_load_file ("https://www.suara.com/rss/health");

					// foreach ($xml->channel->item as $item){
					// 	echo "Judul: ".$item->title."<br>";
					// 	echo "Link: <a href='".$item->link."'>".$item->link."</a><br>";
					// 	echo "Tanggal Terbit: ".$item->pubDate."<br>";
					// 	echo "Deskripsi: ".$item->description."<br><br><br>";
					// }
					?>
			</div> -->
		</div>
	</div>
</body>

</html>