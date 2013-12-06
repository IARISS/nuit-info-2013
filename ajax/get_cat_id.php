<?php

require('../include/define.php');
require('../lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);

if(isset($_POST['category']))
{
	$requestor->categories_field("name", $_POST['category']);
	$results = $requestor->get_categories();
	$dr = json_decode($results);

	$count=$dr->{'results_count'};
	$tableau=$dr->{'results'};

	$id=$tableau[0]->cat_id;
	echo '{"cat_id",'.$id.'}';
}

?>