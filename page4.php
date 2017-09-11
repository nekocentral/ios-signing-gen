<?php
/**
 * Created by PhpStorm.
 *correspondaaz
 * Date: 9/11/2017
 * Time: 1:23 PM
 */
$desc = "Download the generated P12 file here";
//Load Page Header
include_once('assets/inc/_header.php');
include_once('assets/inc/function.php');
?>
    <div class="container">
        <div class="row">
            <div class="column column-33"></div>
            <div class="column column-33 text-center">
<?php
    $target_dir = "./";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $keyFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<br>Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($keyFileType != "cer" ) {
        echo "<br>Sorry, only CER files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<br>Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
            $apple = file_get_contents($target_file);

            $certout = der2pem($apple);
            $pkeyout = file_get_contents("apple.key");
            $pass = file_get_contents("pass");
            openssl_pkcs12_export($certout,$p12,$pkeyout,$pass);
            file_put_contents("ios_development.p12",$p12);
            if ( 0 == filesize( 'ios_development.p12' ) )
            {
                echo "<p> The CER and Private Key do not corespond with each other, Please upload the downloaded key.</p>";
            }else{
                echo('<a class="button" href="/ios_development.p12">Download the P12 Keys</a>');
            }
        } else {
            echo "<br>Sorry, there was an error uploading your file.";
        }
    }
    ?>
            </div>
            <div class="column column-33"></div>
        </div>
    </div>
<?php include_once('assets/inc/_footer.php');?>
