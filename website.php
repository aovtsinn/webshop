<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name= "description" content= "Introduction to website etc">
		<title>This is title</title>
        
	</head>
        <body align="center" bgcolor="#7F7F7F">
	   <h1 ><strong style="border:20px solid #000000;">Mini-Webshop</strong></h1>
        </body>
	<ul>
	<?php
	echo "Click on the link below to see more information";
	$conn = new mysqli("localhost", "test", "t3st3r123", "test");
	$results = $conn->query("SELECT * FROM `arturich` WHERE 1;");
	
	while ($row = $results->fetch_assoc()){
		echo "<li><a href=\"description.php?id=".$row["id"] . "\">" . $row["name"] . "</a> " . 					$row["price"] . "EUR</li>\n";
	}

	$conn->close();
	?>
	</ul>


<marquee behavior="alternate"><img src="//eu.portal.sf.my.com/proxy?pic=http://cdn.meme.am/instances/18722734.jpg" alt="Mr. Bean"></marquee>
        <p>
	  <a href="http://arturich.tk/">Let's have a little Party!! :D</a>
     </p>
        
    <body align="center" bgcolor="#7F7F7F">
	<h1 ><strong style="border:20px solid #00FF00;"><a href="http://arturich.tk/">!!!PARTY HERE!!!</a></strong></h1>

    </body>
	
</html>
