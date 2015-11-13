<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cars for test</title>
	<style>
		table {
			border: 1px solid #000;
			width: 50%;
		}
		td {
			border: 1px solid #000000;
		}
	</style>
</head>
<body>
	<table>
		<?php foreach($showCars->carsSelf as $ind => $carInst):
			$showCars->curShowCarsId[] = $carInst->id;
		?>
		<tr>
			<td><?php echo $carInst->name;?></td>
			<td><?php echo $carInst->photo;?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>