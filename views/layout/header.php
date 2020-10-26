<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for Bootstrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Boottrap-->
    <link rel="stylesheet" href="<?=base_url?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/all.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <title>Homeopatía Integral</title>
</head>

<?php if(!isset($_SESSION['identity'])): ?>
    <body class="bg-image">
    <?php require_once 'views/layout/login.php';?>
<?php else:?>
    <body class="bg-logged">
<?php endif;?>