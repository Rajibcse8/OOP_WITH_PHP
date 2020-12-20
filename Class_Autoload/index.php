<?php

        function __autolaod($class_name){
		    
			include "Directory/".$class_name.".php";
	  }
   
   $ob1= new teacher();
   $ob2 =new student();

?>
