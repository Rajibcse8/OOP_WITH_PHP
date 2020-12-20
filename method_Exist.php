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
	   
	   public function hii(){
		   echo "Hello  My friend";
	   }
	 	   
   }
  
  if(class_exists("A")== true){
	  
	  $ob=new A(79,3.50);
	  $ob->printt();
	  if(method_exists($ob,"hii")==true){
		  $ob->hii();
	  }
	  
	  
  } 	 

	
?>
