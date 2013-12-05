<?php

require('include/define.php');
require('lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);

$html='<div class="container">';

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

		$html.='<div class="col-md-6 col-md-offset-1" style="height:180px;">
                <h2>'.$name.'</h2>
                <h4>'.$category.'</h4>
                <div class="row">
                        Prix:<span id="prix">'.$price.'</span><span id="devise">'.$currency.'</span>
                </div>
                <div class="row">
                        Marque:<span id="marque">'.$brand.'</span>
                </div>
                <div class="row">
                        <a href="'.$url.'" class="link-product"><span class="glyphicon glyphicon-shopping-cart"></span>Lien d\'achat</a>
                </div>

        </div>
        <div class="row">
                <div class="row"></div>
                <div class="col-md-12">
                        <h1>Caracteristiques</h1>
                        <ul class="features">';
		foreach($features as $key => $feature)
		{
			$html.= '<li>'.$key.' : '.$feature.'</li>';
		}
		$html .= '</ul>
                </div>
        </div>';
	}
//}
$html .= '</div>';

echo $html;
?>