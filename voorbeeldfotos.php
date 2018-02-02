<!doctype html>
<html lang="nl">
<?php include 'includes/serverFotos.php';?>
<head>
   <?php include 'includes/header.php';?>
   
    <script type="text/javascript" src="../css/js/highslide-with-gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/highslide.css" />


    <script type="text/javascript">
        hs.graphicsDir = '../css/graphics/';
        hs.align = 'center';
        hs.transitions = ['expand', 'crossfade'];
        hs.wrapperClassName = 'dark borderless floating-caption';
        hs.fadeInOut = true;
        hs.dimmingOpacity = .75;

        // Add the controlbar
        if (hs.addSlideshow) hs.addSlideshow({
            //slideshowGroup: 'group1',
            interval: 5000,
            repeat: false,
            useControls: true,
            fixedControls: 'fit',
            overlayOptions: {
                opacity: .6,
                position: 'bottom center',
                hideOnMouseOut: true
            }
        });
    </script>


    <meta charset="UTF-8">
    <title>'t Gansspel</title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li><img class="logo" src="images/favicongans.jpg" alt="Gans"> </li>
                <li><a href="#index.html">Dit</a> </li>
                <li><a href="#over.html">is</a></li>
                <div class="dropdown">

                    <button class="dropbtn">niet</button>
                    <div class="dropdown-content">
                        <a href="#praktisch.html">ouders</a>
                        <a href="#praktischmonis.html">monitoren</a>
                    </div></div>
                <li><a href="#fotos.php">de </a> </li>
                <li><a href="#inschrijven.html">echte</a> </li>
                <li><a href="#contact.html">site</a> </li>
            </ul>
        </nav>
    </header>
    <main>


        <h2>Foto's</h2>
        <div class="fotogalerij">
            <div class="highslide-gallery">
    <?php
        $qryFotos= "SELECT FotosID,naam,uitleg, positie FROM Fotos WHERE zichtbaar = 1 ORDER BY positie ";
        $resultFoto = mysql_query($qryFotos);

    while ($rowFoto = mysql_fetch_row($resultFoto)) {
        $naam = $rowFoto[1];
        $uitleg = $rowFoto[2];


        echo"<a href='/inschrijvingen/Admin/Fotos/Images/".$naam."' class='highslide' onclick='return hs.expand(this)'>
                    <img class='fotogal ' src='/inschrijvingen/Admin/Fotos/makeThumb.php?src=inschrijvingen/Admin/Fotos/Images/".$naam."' alt= ".$uitleg. "
                         title='Click to enlarge' /> 
                </a>";
        
    }

            ?>
        </div>
</div>
        <div class="fotogalerij">
            <h4>Je bent nu terecht gekomen op de test pagina voor de fotos , nu kan je hier boven zien of dat de fotos er uit zien zoals dat jij het wou <br> groetjes digiboy :)<br><br><a class="submit-button" href="inschrijvingen/Admin/Fotos/FotoOverzicht.php">Terug naar het overzicht</a></h4>
        </div>
    </main>
   
    <?php include 'includes/footer.php';?>
</body>

</html>