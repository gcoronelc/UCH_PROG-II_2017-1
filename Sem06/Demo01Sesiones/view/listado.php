<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>LISTADO</title>
</head>
<body>
	<h2>LISTADO</h2>

	<?php if(!isset($_SESSION["lista"])){?>
	<div>Lista no existe.</div>
	<?php } ?>

	<?php if(isset($_SESSION["lista"])){?>
		<ol>
		<?php foreach ($_SESSION["lista"] as $dato) {?>
			<li>
				<?php echo $dato ?>
				<a href="#">Delete</a>
			</li>
		<?php } ?>
		</ol>
	<?php } ?>
</body>
</html>