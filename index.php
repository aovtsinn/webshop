<?php
require_once "config.php";
include "header.php";
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if($conn->connect_error)
	die("Connection to database is currently not available please call again later or leave a message after a peep:" .
	 $conn->connect_error);
$conn->query("set names utf8");
if (!array_key_exists("timestamp", $_SESSION)) {
	$_SESSION["timestamp"] = date('l jS \of F Y h:i:s A');}
?>
<body>
<h1 ><strong style="border:20px solid #000000;">Arthur's Mini-Webshop</strong></h1>
</body>
<p><a href="register.php">Sign up!</a>
<h2>Products in shopping cart</h2>
<ul>
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
<a href="http://enos.itcollege.ee/~aovtsinn/cart.php"> View your cart</a>
</ul>
<h2>Products avaliable</h2>
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
<p>Thanks to this website NSA and FBI is monitoring you since <?=$_SESSION["timestamp"];?></p>
<p>call me today and get -1% off !!!</p> 
<iframe src="http://free.timeanddate.com/countdown/i532mifg/n242/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcfff/tcfff/fs100/szw448/szh189/tatDiscount%20expires/tac000/tptTime%20since%20Event%20started%20in/tpc000/matin/mac000/mpc000/iso2016-03-27T00:00:00" allowTransparency="true" frameborder="0" width="178" height="92"></iframe>


<?php

while($row = $results->fetch_assoc()) {
	?>
	<li>
	<a href="description.php?id=<?=$row['id']?>">
	<?=$row['name']?></a>
	<?=$row['price']?>EUR
	</li>
	<?php
}
?>
</ul>
<?php include "footer.php"; ?>
