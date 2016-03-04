<?php
require_once "config.php";
include "header.php";
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error)
  die("Connection to database failed:" .
    $conn->connect_error);
$conn->query("set names utf8");
if (!array_key_exists("timestamp", $_SESSION)) {
  $_SESSION["timestamp"] = date('l jS \of F Y h:i:s A');}
?>
<body align="center" bgcolor="#7F7F7F">
<h1 ><strong style="border:20px solid #000000;">Arthur's Mini-Webshop</strong></h1>
</body>
<h1>Products in shopping cart</h1>
<?php
$results = $conn->query(
"SELECT id, name, price FROM arturich;");

while ($row = $results->fetch_assoc()) {
	if (array_key_exists($row['id'], $_SESSION["cart"])) {
		?>
			<li>
				<?=$_SESSION["cart"][$row['id']];?> items of
				<a href="description.php?id=<?=$row['id']?>">
					<?=$row['name']?></a>

					<?=$row['price']?>EUR
    		</li>
    <?php
  }
}
?>

<p>NSA is monitoring you since <?=$_SESSION["timestamp"];?></p>
<p>If you want any of these just call me ;)</p>
<ul>
<?php 
$results = $conn->query(
"SELECT id,name,price FROM arturich;");
while ($row = $results->fetch_assoc()) {
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
