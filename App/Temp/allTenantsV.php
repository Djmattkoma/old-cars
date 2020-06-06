<form action="index.php?page=cars" method="POST">
	<input type="submit" value="Submit" class="btn btn-grn">
</form>

<table class="table">
    <?php foreach( $allTaenants as $car ): ?>
        <tr>
        <?php for( $i = 1; $i < count($car) / 2; $i++): ?>
       
            <td><?= $allTaenants[$i] ?></td>

        <?php endfor ?>
        <td><a href="index.php?page=modifyCar&id=<?= $car[0] ?>">Modify</a></td>
        </tr>
    <?php endforeach ?>
</table>