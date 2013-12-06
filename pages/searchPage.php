<div class="container">
	<div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Rechercher un produit</h2>
            <hr>
            <div class="col-md-4 col-md-offset-4">
				<div class="radio H">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="H" checked>
				    Homme
				  </label>
				</div>
				<div class="radio F">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios2" value="F">
				    Femme
				  </label>
				</div>
				<div class="radio S">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios3" value="S">
				    Sédentaire
				  </label>
				</div>
				<div class="radio N">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios4" value="N">
				    Nomade
				  </label>
				</div>
				<div class="radio A1">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios5" value="A1">
				    15-25 Ans
				  </label>
				</div>
				<div class="radio A2">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios6" value="A2">
				    25-40 Ans
				  </label>
				</div>
				<div class="radio A3">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios5" value="A3">
				    40-60 Ans
				  </label>
				</div>
				<div class="radio A4">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios5" value="A4">
				    60 et + 
				  </label>
				</div>
			
			<button class="form-control" id="valid1">Valider</button>
			<button class="form-control" id="valid2">Valider</button>
			<button class="form-control" id="valid3">Valider</button>
			
		</div>
		<div class="col-md-8 col-md-offset-2 text-center"><div class="selector"></div></div>
            <form id="formm" class="text-center col-md-4 col-md-offset-4">
				<input id="search"	class="form-control" type="text"/>
				<button class="btn3d btn btn-primary btn-lg btn-block" id="actionSearch">Rechercher</button>
			</form>
			<div class="col-md-3 col-md-offset-3">
				<a href="/searchPage" ><button id="redo" class="btn3d btn btn-success btn-lg btn-block" >Refaire le test</button></a>
			</div>
			<div class="col-md-3">
				<a href="/search2" ><button id="manuel" class="btn3d btn btn-success btn-lg btn-block" >Faire une recherche manuelle</button></a>
			</div>
			<div class="result2"></div>		
			<div class="clearfix"></div>
          </div>
        </div>
      </div>
</div>


<script type="text/javascript">
	
	$('.S,.N,.A1,.A2,.A3,.A4,#valid2,#valid3,#formm,#redo,#manuel').hide();

	var tab = [];
	var count = 0;
	var category = 0;
	var categorie = 0;
	$('#valid1').click(function(e){
		e.preventDefault();
		tab[0] = $('input[name=optionsRadios]:checked').val();
		if(tab[0] == "H") count +=1;
		if(tab[0] == "F") count+=2;
		$('#valid1,.H,.F').hide();
		$('#valid2,.N,.S').show();
		$('#optionsRadios3').attr('checked', true);

	});
	$('#valid2').click(function(e){
		e.preventDefault();
		tab[1] = $('input[name=optionsRadios]:checked').val();
		if(tab[1] == "S" && tab[0] == "H") count+=2;
		if(tab[1] == "S" && tab[0] == "F") count+=3;
		if(tab[1] == "N" && tab[0] == "H") count+=1;
		if(tab[1] == "N" && tab[0] == "F") count+=4;
		$('#valid2,.N,.S').hide();
		$('#valid3,.A1,.A2,.A3,.A4').show();
		$('#optionsRadios6').attr('checked', true);

	});
	$('#valid3').click(function(e){
		e.preventDefault();
		tab[2] = $('input[name=optionsRadios]:checked').val();
		if(tab[0] == "H" && tab[1] == "N" && tab[2]=="A1") count+=1;
		if(tab[0] == "H" && tab[1] == "N" && tab[2]=="A2") count+=2;
		if(tab[0] == "H" && tab[1] == "N" && tab[2]=="A3") count+=3;
		if(tab[0] == "H" && tab[1] == "N" && tab[2]=="A4") count+=4;
		if(tab[0] == "H" && tab[1] == "S" && tab[2]=="A1") count+=5;
		if(tab[0] == "H" && tab[1] == "S" && tab[2]=="A2") count+=6;
		if(tab[0] == "H" && tab[1] == "S" && tab[2]=="A3") count+=7;
		if(tab[0] == "H" && tab[1] == "S" && tab[2]=="A4") count+=8;
		if(tab[0] == "F" && tab[1] == "S" && tab[2]=="A1") count+=9;
		if(tab[0] == "F" && tab[1] == "S" && tab[2]=="A2") count+=10;
		if(tab[0] == "F" && tab[1] == "S" && tab[2]=="A3") count+=11;
		if(tab[0] == "F" && tab[1] == "S" && tab[2]=="A4") count+=12;
		if(tab[0] == "F" && tab[1] == "N" && tab[2]=="A1") count+=13;
		if(tab[0] == "F" && tab[1] == "N" && tab[2]=="A2") count+=14;
		if(tab[0] == "F" && tab[1] == "N" && tab[2]=="A3") count+=15;
		if(tab[0] == "F" && tab[1] == "N" && tab[2]=="A4") count+=16;

		$('#valid3,.A1,.A2,.A3,.A4').hide();

		if(count == 3){ category = 'Car'; categorie = 'Automobile';}
		if(count == 4){ category = 'Action'; categorie = 'Action/Sport';}
		if(count == 5){ category = 'Travel'; categorie = 'Voyage';}
		if(count == 6){ category = 'Travel'; categorie = 'Voyage';}
		if(count == 8){ category = 'Electronics'; categorie = 'Informatique';}
		if(count == 9){ category = 'Hand'; categorie = 'Bricolage';}
		if(count == 10){ category = 'Encyclopedias'; categorie = 'Culture';}
		if(count == 11){ category = 'Health Care'; categorie = 'Détente';}
		if(count == 14){ category = 'Cloth'; categorie = 'Vêtement';}
		if(count == 15){ category = 'Health Care'; categorie = 'Bien-être';}
		if(count == 16){ category = 'Cooking'; categorie = 'Cuisine';}
		if(count == 17){ category = 'Garden'; categorie = 'Jardinage';}
		if(count == 19){ category = 'Travel'; categorie = 'Voyage';}
		if(count == 20){ category = 'Action'; categorie = 'Action/Sport';}
		if(count == 21){ category = 'Encyclopedias'; categorie = 'Culture';}
		if(count == 22){ category = 'Health Care'; categorie = 'Bien-être';}

		$('.selector').html('D\'après vos réponses, nous avons déterminé que la catégorie qui vous correspond le mieux est : <strong>'+categorie+'</strong><br><br>Votre recherche :');
		$('#formm,#redo,#manuel').show();

		$('#actionSearch').click(function(e){
			e.preventDefault();
			var search = $('#search').val();
			$.post('ajax/get_cat_id.php',{category:category}, function(data){
				var id = data.cat_id;
				//alert(id);
				$('.result2').html('Chargement...');
				$.post('ajax/search_result.php',{search:search,cat_id:id},function(data){
					$('.result2').html(data);
				});
			},'json')
		});
	});


</script>