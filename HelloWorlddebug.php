<?php
echo "<h1>Hello World <br></h1>";
echo "<form method='post' alt='formulaire'>";
echo "<input type='integer'name='table' alt='table'>";
echo "<input type='button' onclick='submit'> Entrer la table </input></form><br>";
if(isset($_POST['table'])){
echo " <center>Table de :".$_POST['table']."</center>";
for($i=0;$i<=10;$i++){
echo "<br><center> ".$_POST['table']. " fois ".$i." égale ".$_POST['table']*$i."</center>";
};
};
?>