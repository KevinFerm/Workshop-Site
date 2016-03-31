<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<div class="container">
        <form action="<?php echo URL_WITH_INDEX_FILE; ?>home/exampleone" id="my-form" method="POST">
            <input type="hidden" name="price" value="100">
        </form>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Shopping Cart Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Counter-Strike: Global Offensive</td>
                        <td>100kr</td>
                        <td><input type="text" name="quantity" class="form-control" value="1" form="my-form"></td>
                        <td><input type='file' name="imgfile" form="my-form"></td>
                        <td><input type='text' name="textinput" form="my-form" value="test"></td>
                    </tr>
                </tbody>
        </table>
        <button id="submitform">Submit</button>

        <?php if(isset($price)) { ?>
        <h3>Bought for <?php echo $price;?></h3>
        <?php } ?>
</div>
