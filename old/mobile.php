<?php

$menu = 'mobile';

?>

<?php require('_header.php'); ?>
<style>
	#map {
    	margin: 0 0 10px 0;
		/*height: 450px;*/
		/*width: 1170px;*/
		
		height: 400px;
		width: 570px;
	}
</style>
<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.css' rel='stylesheet' />

    <div class="container">
    
    <div class="row">
    	<div class="span12">
    	<p>Find Gin’s Mobile Juice Bar for your daily juice, cleanse pickup, growler refill, or just to say hi. Follow us to find out where we are rolling to next! </p>
    	</div>
    </div>
    
        <div class="row">
                        				
				<div class="span6">
					<img src="../images/mobile-juice-bar.jpeg" />
				</div>
				
				<div class="span6">
            	
					<div id='map'></div>
					<script>
						var map = L.mapbox.map('map', 'ginsjuicesc.hbhmfg4k');
					</script>
				</div>
            
        </div>
                
    </div>


<?php require('_footer.php'); ?>
