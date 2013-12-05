<?php

require('include/define.php');
require('lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);
 
$requestor->products_field("cat_id", 4992);
$requestor->products_field("brand", "Toshiba");
 
$results = $requestor->get_products();
 
echo 'Page de test';
echo $results;

?>