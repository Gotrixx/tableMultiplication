<?php include('_form.php'); ?>

<h1><?= "Voici la table de " . $nbrRaw . " fois " . $nbrCol; ?></h1>
<table>
<tr>
	<th>X</th>
	<?php for($k = 1; $k <= $nbrCol; $k++) : ?>
		<th><?= $k ?></th>
	<?php endfor ?>
</tr>
	<?php for($i = 1; $i <= $nbrRaw; $i++) : ?>
		<tr>
			<th><?= $i ?></th>
			<?php for($j = 1; $j <= $nbrCol; $j++) : ?>
				<td><?= $i * $j ?></td>
			<?php endfor ?>
		</tr>
	<?php endfor ?>
</table>
