<?php

require('include/define.php');
require('lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);

$html='<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">';

//if(isset($_POST['search']))
//{
	$search="pantalon rouge";//$_POST['search'];
	$requestor->products_field("search", $search);
	$results = $requestor->get_products();
	$dr = json_decode($results);
	//var_dump($dr);
	$count=$dr->{'results_count'};
	$tableau=$dr->{'results'};
	foreach ($tableau as $product)
	{
		$name=$product->name;
		$category=$product->category;
		$price=$product->sitedetails[0]->latestoffers[0]->price;
		$currency=$product->sitedetails[0]->latestoffers[0]->currency;
		$brand=$product->brand;
		$color=$product->color;
		$url=$product->sitedetails[0]->url;
		$features=$product->features;

		$html.='<div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                <div class="col-sm-6 col-md-4">
                <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           '.$name.'</h4>
                        <small>'.$category.'<i class="glyphicon glyphicon-map-marker">
                        </i></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>'.$price.' '.$currency.'
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="'.$url.'">Lien</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Marque : '.$brand.'/p>
                            <ul>';
		foreach($features as $key => $feature)
		{
			$html.= '<li>'.$key.' : '.$feature.'</li>';
		}
		$html .= '</ul></div>';
	}
//}
$html .= '</div></div></div></div>';

echo $html;
?>
