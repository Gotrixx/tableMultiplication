<form action="index.php" method="post">
	<label for="nbrRaw">Entrez le nombre de lignes désirées :</label>
	<input type="text" name="nbrRaw" id="nbrRaw"
        <?php if($nbrRaw !== 0 ) : ?> 
            value="<?= $nbrRaw ?>"
        <?php endif ?>
    >
    <?php if (isset($errors["nbrRaw"])) : ?>
        <span class="error"><?= $errors["nbrRaw"] ?></span>
    <?php endif ?>

	<label for="nbrCol">Entrez le nmobre de colonnes désirées :</label>
	<input type="text" name="nbrCol" id="nbrCol"
        <?php if($nbrCol !== 0 ) : ?> 
            value="<?= $nbrCol ?>"
        <?php endif ?>
    >
    <?php if (isset($errors["nbrCol"])) : ?>
        <span class="error"><?= $errors["nbrCol"] ?></span>
    <?php endif ?>

	<input type="submit" value="envoyer">
</form>