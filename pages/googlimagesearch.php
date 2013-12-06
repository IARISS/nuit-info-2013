
    <script src="https://www.google.com/jsapi"></script>
    <script >

      google.load('search', '1');

      var imageSearch;
      function searchComplete() {

        // Check that we got results
        if (imageSearch.results && imageSearch.results.length > 0) {

          
          var results = imageSearch.results;
          
            var result = results[0];
            var newImg = document.getElementById('img');

            newImg.src = result.url;
            newImg.alt = result.titleNoFormatting;
            newImg.title = newImg.alt;
            imgContainer.appendChild(newImg);
           contentDiv.appendChild(imgContainer);
          
        }
      }

      function OnLoad(hdhdth) {
      
      
        imageSearch = new google.search.ImageSearch();

        imageSearch.setSearchCompleteCallback(this, searchComplete, null);

        
        <?php 
        $name = 'iphone 5s';
        echo 'imageSearch.execute("'.$name.'");';
        ?>
        google.search.Search.getBranding('branding');
      }
     google.setOnLoadCallback(OnLoad);
    </script>


    <div id="content">Loading...</div>

  