<?php
   header('Access-Control-Allow-Origin:*');
   $username=$_GET["name"];
   $username=array("janani","raj");
   $b=false;
   foreach ($username as $value){
    if($name ==$value){
        $b=True;
        break;
    }
   }
   if($b){
    echo "<h1>".$name."is already taken"
   }

?>