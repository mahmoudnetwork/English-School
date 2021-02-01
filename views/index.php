<?php
include_once './header.php';
include '../models/DataBaseConnection.php';

try {
    $c = new DataBaseConnection();   
} 
catch (Exception $exc) {
    echo $exc->getMessage();
}


$query = "select * from member where username='Adin' ";

$c->query($query);

if(mysqli_errno($c->getconnection())==0)

{
    if(mysqli_affected_rows($c->getconnection())==1)
  
   echo 'Admin Loged in ';

}


include_once './body.php';
include_once './footer.php';
