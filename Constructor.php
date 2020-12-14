<?php
   
  
       class Person{
		  
	   	  public $name;
		  public $age;

          public function __construct($name,$age){
			    $this->name=$name;
				$this->age=$age;
		  }  
          
 		  
		 public function show(){
			
 			 echo $this->name."</br> ".$this->age;
		 } 
		  
		  }		

	  
	     $person1=new Person("Rajib",25);
	     $person1->show();     
      
	
?>
