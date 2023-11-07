
<?php
echo "<h1><center> Table de multiplication </center> </h1>";
echo" <center><form method='post' alt='formulaire'>";
echo" <input type='integer'name='table' alt='table'>";
echo" <br><button onclick='submit' >Entrer le chiffre de la table </form><br></center>";
if(isset($_POST['table'])){
echo "<center> Table de :".$_POST['table']." </center>";
for($i=0;$i<=10;$i++){
echo "<br><center> ".$_POST['table']. " fois ".$i." égale ".$_POST['table']*$i."</center>";
};
};
?>