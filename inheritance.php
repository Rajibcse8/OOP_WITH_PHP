<?php
   
  
     class A{
		
		  public $name;
		  public $id;
		  const NAM="Rajib Talukdar";
          public static $value=26;
		  
		  public function __construct($name ,$id){
			 $this->name= $name;
			 $this->id=$id; 
		 }
		 public function dis(){
			 echo $this->name." ".$this->id."</br>";
		 }
		 
	}
	
	class B extends A{
	     	public $n="RRR";
	}
	
	$ob1 =new A("jack",51);
	$ob2 =new B("rajib",79);
	$ob1->dis();
	$ob2->dis();
	
   
	
?>
