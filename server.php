
<?php
//we gaan de variabele DB_HOST etc. via de functie define de juiste waarde geven zodat ze gemakkelijk aan gepast kunnen worden.
define('DB_HOST', '10.3.1.221');
define('DB_NAME', 'jaspeje191_tgansspel');
define('DB_USER', 'jaspeje191_jasp');
define('DB_PASSWORD', 'borgi');

//de link met de database wordt ier gemaakt met de gegevens die wie hierboven hebben gedefinieerd
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db_selected = mysql_select_db(DB_NAME, $link);
?>