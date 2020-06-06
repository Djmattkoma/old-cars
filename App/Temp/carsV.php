<div>
    <table class="table">
    <?php foreach( $cars as $car ): ?>
        <tr>
        <?php for( $i = 1; $i < count($car) / 2; $i++): ?>
       
            <td><?= $car[$i] ?></td>

        <?php endfor ?>
        <td><a href="index.php?page=modifyCar&id=<?= $car[0] ?>" class="modify">Modify</a></td>
        <td><a href="index.php?page=deleteCar&id=<?= $car[0] ?>" class="delete">Delete</a></td>
        </tr>
    <?php endforeach ?>
</table>
</div>
