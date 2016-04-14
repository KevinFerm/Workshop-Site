<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<div class="container">
        <form action="<?php echo URL_WITH_INDEX_FILE; ?>home/exampleone" id="my-form" name="my-form" method="POST">
        </form>
                        <input type='file' name="imgfile" form="my-form">
                        <input type='text' name="textinput" form="my-form" value="test">
                        <textarea id="confirmationText" class="text" cols="86" rows ="20" name="textarea" form="my-form"></textarea>

        <button id="submitform">Submit</button>

        <?php if(isset($price)) { ?>
        <h3>Bought for <?php echo $price;?></h3>
        <?php } ?>
</div>
