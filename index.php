<?php
require_once "config.php";
include "header.php";
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if($conn->connect_error)
	die("Connection to database is currently not available please call again later or leave a message after a peep:" .
	 $conn->connect_error);
$conn->query("set names utf8");
?>
<body align="center" bgcolor="#7F7F7F">
<h1 ><strong style="border:20px solid #000000;">Arthur's Mini-Webshop</strong></h1>
</body>
<p>call me today and get -1% off !!!</p>
<ul>
<?php
$results = $conn->query(
"SELECT id,name,price FROM `arturich` WHERE 1;");

while($row = $results->fetch_assoc()) {
	?>
	<li>
	<a href="description.php?id=<?=$row['id']?>">
	<?=$row['name']?></a>
	<?=$row['price']?>EUR
	</li>
	<?php
}
$conn->close();
?>
</ul>
<? include "footer.php" ?>