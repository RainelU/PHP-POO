<?php include_once './class_lib.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>OOP in PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		$person = new Persona("Rainel Enrique");
		$champ = new favoriteChampion($champ_name);
	?>

	<label class="main">
		<span style="color:white;" class="span-main">	
			<?= $person->obtener_nombre() ?>, tu campeón
			<?php 
				$champ_name = ["Ekko", "Elise", "Braum", "Lulu"];
				$set_champ_name = array_rand($champ_name, 1);
				if ($set_champ_name === 0) {
					$champ_name = "Ekko";
				}else if ($set_champ_name === 1) {
					$champ_name = "Elise";
				}else if ($set_champ_name === 2) {
					$champ_name = "Braum";
				}else if ($set_champ_name === 3) {
					$champ_name = "Lulu";
				}
			?>
			<?= $champ_name ?>
		</span>
	</label>
</body>
</html>