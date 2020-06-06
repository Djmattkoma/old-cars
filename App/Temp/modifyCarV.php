<section class="update-section">
    <form action="index.php?page=update" method="POST">
        <div>
            <label for="producer  ">Producer</label>
            <input id="producer" name="producer" type="text" autofocus value="<?= $car['producer'] ?>"><br>
        </div>
        
        <div>
            <label for="type">Type</label>
            <input id="type" name="type" type="text" value="<?= $car['type'] ?>"><br>
        </div>
        
        <div>
            <label for="vintage">Vintage</label>
            <input id="vintage" name="vintage" type="text" value="<?= $car['vintage'] ?>"><br>
        </div>
        
        <div>
            <label for="fuel">Fuel</label>
            <input id="fuel" name="fuel" type="text" value="<?= $car['fuel'] ?>"> <br>
        </div>
        

        <input type="hidden" name="id" value="<?= $car['id'] ?>">   
        
        <input type="submit" value="submit" class="btn btn-grn">
    </form>
</section>