<?php
  
     class A{
			  
             function add($num1,$num2){
				
				echo $num1+$num2;				
			}      
					
	}
		
	     class B extends A{
		
             function add($num1,$num2 ,$num3){
				
				echo $num1+$num2+$num3;
				
			}
          
					
	}
	
	$ob1=new B();
	$ob2=new A();
	echo $ob1->add(1,10,11)."</br>";
	echo $ob2->add(23,44);
	
   
	
?>
