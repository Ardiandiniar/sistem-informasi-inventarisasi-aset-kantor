<?php
 
 try {
     $con = new PDO('mysql:host=localhost;dbname=db_siiak','root','',array(PDO::ATTR_PERSISTENT=>true));
 }

 catch (PDOException $e){
     echo $e->getMessage();
 }


?>