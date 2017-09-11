<?php
/**
 * Created by PhpStorm.
 * User: mhaaz
 * Date: 9/11/2017
 * Time: 9:44 AM
 */
function der2pem($der_data) {
    $pem = chunk_split(base64_encode($der_data), 64, "\n");
    $pem = "-----BEGIN CERTIFICATE-----\n".$pem."-----END CERTIFICATE-----\n";
    return $pem;
};