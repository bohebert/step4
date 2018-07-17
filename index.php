<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Born to Die</title>

	<style>

		header {

			color: red;
			background: black;
			padding: 2em;	
			
			text-align: center;
		
		}

	</style>

</head>

<body>
	
	<header>

			<h1>
				
				<?= "World is a fuck, " . htmlspecialchars($_GET['govt']); ?>
					

			</h1>

	</header>

</body>

</html>