<?php
/**
 * Created by PhpStorm.
 * User: mhaaz
 * Date: 9/11/2017
 * Time: 9:45 AM
 */
?>
<!-- Start Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate Generator</title>
    <link rel="stylesheet" href="assets/css/milligram.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="header" id="home">
    <section class="container">
        <h1 class="title">IOS Signing certificate generator</h1>
        <p class="description"><?php echo($desc);?></p>
        <?php if (isset($desc2)){
        echo '<p class="description">' . $desc2 . '</p>';
};?>
    </section>
</header>