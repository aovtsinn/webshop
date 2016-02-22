<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Artur's best shop">
        <title>BEST SHOP3000 Limited Edition</title>
    </head>
<body align="center" bgcolor="#7F7F7F"></body>
    

		<?php
		$conn = new mysqli("localhost", "test", "t3st3r123", "test");
		$statement = $conn->prepare("SELECT name,description, price FROM arturich WHERE id = ?");
		$statement->bind_param("i", $_GET["id"]);
		$statement->execute();
		$results = $statement->get_result();
		$row = $results->fetch_assoc();
		?>
     <h1><marquee behavior="scroll" direction="left"> <?=$row["name"];?></marquee></h1>
    <h2><marquee behavior="scroll" direction="right"> <?=$row["price"];?>EUR</marquee></h2>

		<p>
			<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'><em><?=$row["description"];?></em>
	</p>
  </body>
</html>

