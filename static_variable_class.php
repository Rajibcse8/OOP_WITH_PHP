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
		 
		 public function println(){
			 echo $this->name." and id is ".$this->id;
		 }
		 
		 public static function hi(){
			 
			 echo "My name is " .A::NAM. " and  my age is " .self::$value;
		 }
		 
		 
   	 
	}
	
	$ob1 =new A("rajib",79);
    $ob1->println();
	$namm= $ob1::NAM;
	echo "</br>".$namm;
    $d= A::$value;
    echo $d;
    A::hi();
 	
	
?>
