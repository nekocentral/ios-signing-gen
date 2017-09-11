<?php
/**
 * Created by PhpStorm.
 * User: mhaaz
 * Date: 9/11/2017
 * Time: 11:05 AM
 */
$desc = "Click the buttons below to download the CSR and Private Key.";
$desc2 = 'Upload the CSR to <a href="https://developer.apple.com/account/ios/certificate/">Apple</a> to create the Signing certificate. You can create an App ID <a href="https://developer.apple.com/account/ios/identifier/bundle">Here</a> and the Provision file <a href="https://developer.apple.com/account/ios/profile/">Here</a> ';
$comapny = $_POST['company'];
$email = $_POST["email"];
$pass = $_POST["password"];
$dn = array(
    "organizationName" => $comapny,
    "emailAddress" => $email
);

// Generate a new private (and public) key pair
$privkey = openssl_pkey_new();

// Generate a certificate signing request
$csr = openssl_csr_new($dn, $privkey, array('digest_alg' => 'sha256'));

openssl_pkey_export($privkey, $pkeyout);
openssl_csr_export($csr, $csrout);
file_put_contents("pass",$pass);
file_put_contents("apple.csr",$csrout);
file_put_contents("apple.key",$pkeyout);

//Load Page Header
include_once('assets/inc/_header.php');
?>
<div class="container">
    <div class="row">
        <div class="column column-33"></div>
        <div class="column column-33 text-center">
            <p><a class="button" href="/apple.csr">Certificate request</a><a class="button" href="/apple.key">Private Key</a></p>
            <br>
            <a href="page3.php" class="button">Generate P12</a>
        </div>
        <div class="column column-33"></div>
    </div>
</div>
<?php
//Load Page Footer
include_once ('assets/inc/_footer.php');
?>
