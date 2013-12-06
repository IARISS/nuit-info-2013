<?php

require('../include/define.php');
require('../lib/semantics3/Semantics3.php');
 
$requestor = new Semantics3_Products(SEM3_KEY,SEM3_SECRET);

$html='<div class="container">';

if(isset($_POST['search']) && isset($_POST['cat_id']))
{

	$ch = curl_init();
 
	// Définition de l'URL et autres options appropriées
	curl_setopt($ch, CURLOPT_URL, "http://www.google.fr/images?hl=fr&q=shakira");
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	// Récupération de l'URL et passage au navigateur
	$ret=curl_exec($ch);
	// Fermeture de la ressource cURL et libération des ressources systèmes
	curl_close($ch);
	 
	preg_match("#http:[^:]+\.jpg#",$ret,$res);//on match une url d'image
	if(empty($res)) $res = 'vide';

	$search=$_POST['search'];
	$cat_id=$_POST['cat_id'];
	$requestor->products_field("name", $search);
	$requestor->products_field("cat_id", $cat_id);
	$results = $requestor->get_products();
	$dr = json_decode($results);
	//var_dump($dr);
	$count=$dr->{'results_count'};
	$tableau=$dr->{'results'};
	foreach ($tableau as $product)
	{
		$name=$product->name;
		$category=$product->category;
		if(isset($product->sitedetails))
		{
			if(isset($product->sitedetails[0]->latestoffers))
			{
				$price=$product->sitedetails[0]->latestoffers[0]->price;
				$currency=$product->sitedetails[0]->latestoffers[0]->currency;
			}
			else
			{
				$price='n/a';
				$currency='';
			}
			$url=$product->sitedetails[0]->url;
		}
		else
		{
			$price='n/a';
			$currency='';
			$url='#';
		} 

		if(isset($product->brand))
			$brand=$product->brand;
		else
			$brand='n/a';
		if(isset($product->color))
			$color=$product->color;
		else
			$color='n/a';
		
		if(isset($product->features))
			$features=$product->features;
		else $features = array('aucune propriété' => '...' );

		$html.='<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="well">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="'.$res[0].'" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>'.$name.'</h4>
                        Catégorie : '.$category.'
                        <p>
                            Prix : '.$price.' '.$currency.'
                            <br />
                            Marque : '.$brand.'
                            <br />
							<a href="'.$url.'"><small>'.$url.'</small></a>
							<br />
							Propriétés : <ul>';

							foreach($features as $key => $feature){
								$html.='<li>'.$key.' : '.$feature.'</li>';
							}
$html.='           		</ul>
						</p>
					</div>
                </div>
            </div>
        </div>
    </div>';
		
	}
}
$html .= '</div>';

if($count==0) $html='Aucun résultat n\'a été trouvé';
echo $html;
?>
