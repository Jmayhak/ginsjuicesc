<?php

$menu = 'home';

?>

<?php require('_header.php'); ?>

    <style>
        #map {
            margin: 0 0 10px 0;
            height: 247px;
            width: 370px;
        }
    </style>

    <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.css' rel='stylesheet'/>

    <div class="container">
        <div class="row">
            <div class="offset1 span10">
                <h4>Super fresh fruit and vegetable juice made with <img src="/images/red-heart.png"/> especially for
                    you in Columbia, South Carolina.</h4>
            </div>
        </div>
        <div class="row">
            <div class="span4">
                <iframe
                    src="http://snapwidget.com/in/?u=Z2luc2p1aWNlc2N8aW58MTI1fDN8Nnx8bm98NXxub25lfG9uU3RhcnR8bm8=&v=23214"
                    title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no"
                    style="border:none; overflow:hidden; width:390px; height:780px"></iframe>
            </div>

            <div class="span8">
                <div class="row">
                    <div class="span4">
                        <img src="images/DSC_0869.JPG" alt="DSC_0869"/>
                    </div>
                    <div class="span4">
                        <div id='map'></div>
                        <script>
                            var map = L.mapbox.map('map', 'ginsjuicesc.hbhmfg4k');
                        </script>
                    </div>
                </div>

                <div class="row">
                    <div class="span8">
                        <img src="/images/juice.JPG"/>
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php require('_footer.php'); ?>