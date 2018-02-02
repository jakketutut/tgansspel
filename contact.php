<!doctype html>
<html lang="nl">

<head>
<?php include 'includes/header.php';
    include 'includes/verwijzing.php';
    include 'includes/server.php';?>
   
    <title>'t Gansspel</title>
</head>

<body>

 <?php include 'includes/menu.php';?>
   
    <main>
        <h2>Vragen?</h2>
        <form class="contact" name="Systeem_Formulier" method="post" action="contactVerwerken.php">
            <p class="veld">
                <label for="naam">Naam: </label>
                <br>
                <input type="text" id="naam" name="naam" class="veld2"> </p>
            <p class="veld">
                <label for="email" >E-mail: </label>
                <br>
                <input type="email" id="email" name="email" class="veld2"> </p>
            <p class="veld">
                <label for="onderwerp">Onderwerp: </label>
                <br>
                <input type="text" id="onderwerp" name="onderwerp" class="veld2"> </p>
            <p class="veld">
                <label for="vraag">Vraag: </label>
                <br>
                <textarea id="vraag" name="vraag" rows="10" cols="20"></textarea>
            </p>
            <p class="inputsubmit">
                <input class="submit-button" type="submit" value="Verstuur" > </p>
        </form>
    </main>
    
    <?php include 'includes/footer.php';?>
</body>

</html>