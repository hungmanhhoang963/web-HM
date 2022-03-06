<?php
ob_start();
include('header.php')
?>

<?php
count($product->getData('cart')) ? include ('Template/_carts.php') :  include ('Template/Cart_Empty.php');
?>

<?php
include('Template/seen.php')
?>

<?php
include('footer.php')
?>
