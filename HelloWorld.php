<?php
echo "<h1>Hello World <br></h1>";
echo " <form method='post' alt='formulaire table' alt='formulaire table'> ";
echo " <input type='integer'  name='table' alt='table'> <br>";
echo " <button name='envoyer' onclick='submit'></form>";
echo "<br><center>";
if(isset($_POST['table'])){
echo " Table de :".$_POST['table'];
for($i=0;$i<=10;$i++){
echo "<br> ".$_POST['table']. " fois ".$i." égale ".$_POST['table']*$i;
};
echo "</center>";
};
