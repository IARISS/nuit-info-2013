<div class="container">
	
	<div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Rechercher un porduit avec la <strong>reconnaissance vocale</strong></h2>
            <hr>
            <form class="text-center col-md-4 col-md-offset-4" onSubmit="doSearch(document.getElementById('s').value);return false;">
				<input type="text" id="s" class="form-control" x-webkit-speech onwebkitspeechchange="doSearch(this.value);" />
				<input type="submit" class="btn3d btn btn-primary btn-lg btn-block" />
				<input id="mic" class="micro" style="width: 15px;border: 0px; background-color: transparent;" onwebkitspeechchange="transcribe(this.value)" x-webkit-speech="" lang="fr" type="text">
			</form>
			<div class="clearfix"></div>
          </div>
        </div>
      </div>
      

</div>

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script> 

var isCtrl = false;
$(document).keyup(function (e) {

if(e.which == 17) isCtrl=false;

}).keydown(function (e) {

    if(e.which == 17) isCtrl=true;

    if(e.which == 83 && isCtrl == true) {

        alert("coucou");

   return false;

 }

});

var withConfirmation = false;
function doSearch(value) {
	$('#message').html();
	if(value=='')
		return false;

	var varr = value.split(' ');
	
	var action = varr[0];
	var found = false;
	if( action=='chercher' ) {
		varr[0]='';
		found = true;
		var mySearch = varr.join(' ');
		var url = 'https://www.google.fr/#hl=fr&safe=off&output=search&q=' + encodeURIComponent(mySearch);
		var confirmation = 'Chercher '+ mySearch + ' sur Google ?';
	}

	if( action=='tweeter' ) {
		varr[0]='';
		found = true;
		var mySearch = varr.join(' ');
		var url = 'https://twitter.com/';
		var confirmation = 'Aller sur twitter ?';
	}
	
	if(action=='google' ) {
		varr[0]='';
		found = true;
		var mySearch = varr.join(' ');
		var url = 'https://google.com/';
		var confirmation = 'Aller sur Google ?';
	}
	
	if(action=='plus' ) {
		varr[0]='';
		found = true;
		var mySearch = varr.join(' ');
		var url = 'https://plus.google.com/';
		var confirmation = 'Aller sur G+ ?';
	}

	if(found) {
		console.log(action);
		if(!withConfirmation || confirm(confirmation)) {
			window.open(url,'_blank')
			return false;
		}
		else {
			document.getElementById('s').value = '';
			return false;
		}
	}
	else{
		$('#message').addClass('alert alert-error').html('<span class="label label-important">Erreur</span> Aucune action associée à la saisie, désolé...');
	}
}

</script>