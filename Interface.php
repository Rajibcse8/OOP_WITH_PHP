<?php
  
     interface Name{
		 public function naam();
		 
	 }
	 
	 interface Age{
		 public function aage();
	 }
	 
	 
	 Class B implements Name, Age{
		 
		 public $aa;
		 
		 public function  __construct(){
		 $this->naam();
		 $this->aage();
	      }
     	 public function naam (){
		 echo"Rajib </br>";
	 }
	 
	 public function aage(){
		 echo     30 ."</br>";
	 }
	 
	}
	 
	 $ob=new B();
		 
?>
