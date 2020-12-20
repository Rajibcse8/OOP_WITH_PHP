<?php
  
   
   class A{
	   
	   public $id,$cgpa;
	   
	   public function __construct($o1,$o2 ){
		   
		   $this->id=$o1;
		   $this->cgpa=$o2;
	   }
	   
	   public function printt(){
		   echo $this->id." ".$this->cgpa." </br>";
	   }
	   public function __get($input){
		    echo $input."</br>";
	   }  
      
	   public function __set($inpu ,$value){
		   echo  "$inpu value is  $value";
	   } 
     	   
   }
   
	 $ob=new A(79,3.50);
	 $ob-> Rajib_Talukadr ;
	 $ob->printt();
	 $ob-> Rajib=111 ;
	 
	
?>
