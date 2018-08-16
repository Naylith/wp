
<?php        

$prices=array(120);
$getId='';
$product_id='';

if ( !empty($_GET['id']) && isset($prices[$_GET['id']]) )
$getId = htmlentities($_GET['id']);


foreach ($prices as $id => $price) {

if ( empty($getId) )

echo '<a href="products.php?id=' . $product_id . '">';
include 'combined.php';


if( $getId==$id) 

echo '<a href="products.php?id=' . $product_id . '">';
include 'product.php';

}
?>




