<?php

require('include/define.php');
require('lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);
 
$requestor->products_field("search", "pantalon rouge");

 
$results = $requestor->get_products();
 
echo 'Page de test';
var_dump(json_decode($results));

?>