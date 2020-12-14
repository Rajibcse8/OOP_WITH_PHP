<?php
   
       class Person{
		  
	   	  public $name;
		  public $age;
		  public $id;

          public function __construct($name,$age){
			    $this->name=$name;
				$this->age=$age;
				
		  }  
          
		 public function show(){
			
 			 echo $this->name."</br> ".$this->age."</br>";
		 }
         
         public function setid($id){
			  $this->id=$id;
		 }		 
		 		 
		 public function __destruct(){
			 if(! empty($this->id)){
				 echo  "Helo  World! ";
			 }
			 
		 }
		  
		  }		
	  
	     $person1=new Person("Rajib",25);
	     $person1->show();   
         $person1->setid(100);   		 
      
?>
