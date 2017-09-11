<?php
/**
 * Created by PhpStorm.
 * User: mhaaz
 * Date: 9/11/2017
 * Time: 11:52 AM
 */
$desc = "Upload the CER from apple to convert it to a P12";
//Load Page Header
include_once('assets/inc/_header.php');
?>
<div class="container">
    <div class="row">
        <div class="column column-33"></div>
        <div class="column column-33 text-center">
            <form action="page4.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <input type="submit" value="Upload CER" name="submit">
            </form>
        </div>
        <div class="column column-33"></div>
    </div>
</div>
<?php
//Load Page Footer
include_once ('assets/inc/_footer.php');
?>
