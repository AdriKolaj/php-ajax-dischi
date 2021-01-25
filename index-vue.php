<?php 
	include __DIR__ . '/db.php'
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dischi - Ajax</title>
		<link rel="stylesheet" href="css/app.css">
	</head>

	<body>
		<?php include __DIR__ . '/partials/header.php' ?>
		
		<main>
			<div id="root" class="container">
					<div class="album-container" v-for="album in albums">
						<div class="img-container">
							<img :src=album.poster alt="poster">
						</div>
						<div class="text-container">
							<h3>{{album.title}}</h3>
							<h4>{{album.author}}</h4>
							<div class="year">{{album.year}}</div>
						</div>
					</div>
			</div>
		</main>

		<?php include __DIR__ . '/partials/footer.php' ?>
    <script src="js/main.js"></script>
	</body>
</html>