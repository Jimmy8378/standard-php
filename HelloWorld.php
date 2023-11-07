<?php
echo "<h1>Hello World <br></h1>";
echo" <input type='integer'name='table' alt='table'>";
if(isset($_POST['table'])){
echo " Table de :".$_POST['table'];
for($i=0;10;$i++){
echo "<br> ".$_POST['table']. " fois ".$i." égale ".$_POST['table']*$i;
};
};
