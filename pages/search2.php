<div class="container">
	<div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Rechercher un produit</h2>
            <hr>

            <form class="text-center col-md-4 col-md-offset-4">
            	<label>Catégorie :</label>
				<select name="category" id="category" class="selectpicker">
					<option value="car" >Voitures</option>
					<option value="action" >Action/sports</option>
					<option value="travel" >Voyages</option>
					<option value="hand" >Outillage/bricolage</option>
					<option value="garden" >Jardin</option>
					<option value="cooking" >Cuisine</option>
					<option value="cloth" >Vêtements</option>
					<option value="encyclopedias" >Culture</option>
					<option value="Health Care" >Détente/Bien être</option>
					<option value="Electronics" >Electronique/informatique</option>
				</select>
				<label>Recherche :</label>
				<input id="search" class="form-control" type="text"/>
				<button class="btn3d btn btn-primary btn-lg btn-block" id="actionSearch">Rechercher</button>
			</form>	
			<div class="result"></div>		
			<div class="clearfix"></div>
          </div>
        </div>
      </div>
</div>


<script type="text/javascript">
	$('#actionSearch').click(function(e){
		e.preventDefault();
		var search = $('#search').val();
		var category = $('#category option:selected').val();
		$.post('ajax/get_cat_id.php',{category:category}, function(data){
			var id = data.cat_id;
			//alert(id);
			$('.result').html('Chargement...');
			$.post('ajax/search_result.php',{search:search,cat_id:id},function(data){
				$('.result').html(data);
			});
		},'json')
	})
</script>