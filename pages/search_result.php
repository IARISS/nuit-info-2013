<?php

require('include/define.php');
require('lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);

//if(isset($_POST['search']))
//{
	$search="pantalon rouge";//$_POST['search'];
	$requestor->products_field("search", $search);
	$results = $requestor->get_products();
	$dr = json_decode($results);
	$count=$dr['results_count'];
	$tableau=$dr['results'];
	foreach ($tableau as $product)
	{
		$name=$product['name'];
		echo $name;
		echo '\n';
	}
//}

?>