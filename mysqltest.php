<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="description" content="Introduction to this guy's website">
    <title>This goes into the titlebar</title>
	<link rel="blah.css" type="text/css"/>
	<script type="text/javascript" src="blah.js">
	  Your web browser does not support JS! Are you living in 90's or what?!
	</script>
    <!-- All of the CSS and JS includes go here as well -->
  </head>

  <body>
    <p>
      <!-- unordered list -->
		<ul>
		<?php
		echo "AMAZING ERROR DOWN THERE :D";
		$conn = new mysqli("localhost", "test", "t3st3r123", "test");
		$results = $conn->query("SELECT * FROM `arturich` WHERE 1;");
	
		while ($row = $results->fetch_assoc()){
			echo "<li>" . $row["name"] . " " . $row["price"] . "EUR</li>";
		}

		$conn->close();
		?>
		</ul>


      This, is hellõu from PHP!<li>Pair of Boots 20EUR</li><li>iPhone 600EUR</li>      </ul>
    </p>
  </body>

</html>
