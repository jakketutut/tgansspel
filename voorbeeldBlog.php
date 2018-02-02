<!doctype html>
<html lang="nl">
<?php include 'includes/serverBlog.php';?>

<head>
<?php include 'includes/header.php';?>
   
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
       <h2>Voorbeeld Blog</h2>

<div class="blog">
           
    <?php
       $qryPosts= "SELECT postID,titel,datum,inhoud FROM blogposts WHERE zichtbaar = 1 ORDER BY positie Desc";
        $resultPost = mysql_query($qryPosts);
 
  while ($rowPost = mysql_fetch_row($resultPost)) {
        $titel = $rowPost[1];
        $datum = $rowPost[2];
      $inhoud = $rowPost[3];

   echo"<h4>".$datum."</h4>
<section class='blogtekst'> <h3>".$titel."</h3><p class= 'bloginhoud'>".$inhoud."</p></section>";
        
    }
  
            ?>
</div>    
         <aside class="nieuws">
             <div class="submit-container"><a class="submit-button" href="inschrijvingen/Admin/Blog/BlogOverzicht.php">Terug naar het overzicht</a></div> </aside>
        <aside class="zijkant">
            <h4 class="zomer">Je bent nu terecht gekomen op de test pagina voor de blog , nu kan je hier links zien of dat de blog er uit ziet zoals dat jij het wou <br> groetjes digiboy :)</h4></aside>



</main>
<?php include 'includes/footer.php';?>
</body>

</html>