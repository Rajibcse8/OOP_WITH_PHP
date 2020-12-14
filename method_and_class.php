<?php
   
  
       class Person{
		  
	   	  public $name;
		  public $age;

          public function getname($name){
			  $this->name=$name; 
		  }		
   
          public function getage($age){
			 $this->age=$age;
		  }				  
		  
	  }
	  
	     $person1=new Person();
	    
         $person1->getname("Rajib");
		 $person1->getage(25);
          		
		echo $person1->name."</br>".$person1->age;
	
?>
