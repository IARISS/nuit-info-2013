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
		if(isset($product->sitedetails))
		{
			if(isset($product->sitedetails[0]->latestoffers)
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

		$brand=$product->brand;
		$color=$product->color;
		
		$features=$product->features;

		$html.='<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
                		<div class="well well-sm">
		                	<div class="col-sm-6 col-md-4">
		                		<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
		                    </div>
		                    <div class="col-sm-6 col-md-8">
		                        <h4>'.$name.'</h4>
		                        <small>'.$category.'<i class="glyphicon glyphicon-map-marker"></i></small>
		                        <p>
		                            <i class="glyphicon glyphicon-envelope"></i>'.$price.' '.$currency.'
		                            <br />
		                            <i class="glyphicon glyphicon-globe"></i><a href="'.$url.'">Lien</a>
		                            <br />
		                            <i class="glyphicon glyphicon-gift"></i>Marque : '.$brand.'
		                        </p>
		                        <ul>';
		foreach($features as $key => $feature)
		{
			$html.= '<li>'.$key.' : '.$feature.'</li>';
		}
		$html .= '</ul>
				</div>
			</div>
		</div>
	</div>
    <div class="clearfix"></div>';
	}
//}
$html .= '</div>';

echo $html;
?>


<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            Bhaumik Patel</h4>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

