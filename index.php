<?php
/**
 * Created by PhpStorm.
 * User: mhaaz
 * Date: 9/11/2017
 * Time: 9:37 AM
 */
$desc = "Press the Button to generate a CSR";
//Load Page Header
include_once('assets/inc/_header.php');
?>
<div class="container">
    <div class="row">
        <div class="column column-33"></div>
        <div class="column column-33 text-center">
            <form action="page2.php" method="post">
                <fieldset>
                    <label for="company">Company Name</label>
                    <input name="company" id="company">
                    <label for="email">Email Address</label>
                    <input name="email" id="email">
                    <label for="pass">Password for final P12</label>
                    <input name="password" id="pass"><br>
                    <input class="button" type="submit" value="Genereer" name="1">
                </fieldset>
            </form>
        </div>
        <div class="column column-33"></div>
    </div>
</div>
<?php
//Load Page Footer
include_once ('assets/inc/_footer.php');
?>


