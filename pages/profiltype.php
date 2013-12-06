<script src="https://www.google.com/jsapi"></script>
<script >
	
		function secondstep(){
			
            document.getElementById("activity1").style.display = 'block';
            document.getElementById("activity2").style.display = 'block';
            document.getElementById("m").style.display = 'none';
            document.getElementById("f").style.display = 'none';

		}
		function thirdstep(){
			document.getElementById("activity1").style.display = 'none';
			document.getElementById("activity2").style.display = 'none';
            document.getElementById("age1").style.display = 'block';
            document.getElementById("age2").style.display = 'block';
            document.getElementById("age3").style.display = 'block';
            document.getElementById("age4").style.display = 'block';
              
		}
		function quadstep(){
		
            document.getElementById("age1").style.display = 'none';
            document.getElementById("age2").style.display = 'none';
            document.getElementById("age3").style.display = 'none';
            document.getElementById("age4").style.display = 'none';
              
		}
	
</script>
<div class="container">
	<h2>Profils types</h2>
	<div style="text-align:center;color:blue;vertical-align:bottom;">
		 <div class="col-md-2" name="m" id="m" onclick="secondstep();" style="border:1px solid white;height:180px;background-image:url('vincitux.png');">
		 	
			<h4 style="width:100%;background-color:#ddd;color:gray;">Homme</h4>
		</div></a>
		<div class="col-md-2 col-md-offset-1" name="f" id="f" onclick="secondstep();"style="border:1px solid white;height:180px;background-image:url('female.png');">
			<h4 style="width:100%;background-color:#ddd;color:gray;">Femme</h4>
		</div>
		<div class="col-md-2 col-md-offset-1" name="age1" id="age1" onclick="quadstep();" style="border:1px solid white;height:180px;display:none;">
			<h4>15-25</h4>
		</div>
		<div class="col-md-2 col-md-offset-1" name="age2" id="age2" onclick="quadstep();" style="border:1px solid white;height:180px;display:none;">
			<h4>25-40</h4>
		</div>
		<div class="col-md-2 col-md-offset-1" name="age" id="age3" onclick="quadstep();" style="border:1px solid white;height:180px;margin-top:25px;display:none;">
			<h4>40-60</h4>
		</div>
		<div class="col-md-2 col-md-offset-1" name="age4" id="age4" onclick="quadstep();" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>60 et +</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" name="activity1" id="activity1" onclick="thirdstep();" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4 style="width:100%;background-color:#ddd;color:gray;">Globe-trotter</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" name ="activity2" id="activity2" onclick="thirdstep();"style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Vie d'intérieur</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;">
			<h4>Action</h4>
		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Culture</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Détente</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Informatique</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Bricolage</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Déco</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Cuisine</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Automobile</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Habillement</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Voyage</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Bien-être</h4>

		</div>
		<div class="col-md-2 col-md-offset-1" style="border:1px solid white;height:180px;margin-top:25px;display:none;" >
			<h4>Jardin</h4>

		</div>

	</div>

</div>