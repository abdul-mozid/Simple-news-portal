<?php
$a=mysql_connect('localhost','root','');
$b=mysql_select_db('amarnews',$a);
if(!$b){
    echo "Database Not Connect";
}
?>