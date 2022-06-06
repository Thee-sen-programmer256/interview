<?php
$array=array(100,150,1100,3500,600,50,8000);//array with all figure for all individuals
 for( $i=0;$i<sizeof($array);$i++){        //a for loop to calculate the exchange
 
 	$output = $array[$i]*3650;   //changing USD to UGX
 	if($output>=1000000){ //checking if we can deduct a tax if >=1million                    
	$newamount=($output-($output*0.02))/3870;
	// echo $newamount."<br>";
	if($array[$i]==100){
		echo "John new amout is ".$newamount." USD"."<br>";
	}elseif($array[$i]==150){
		echo "Mark new amout is ".$newamount." USD"."<br>";
	}elseif($array[$i]==1100){
		echo "Slyvia new amout is ".$newamount." USD"."<br>";
	}elseif($array[$i]==3500){
		echo "Juma new amout is ".$newamount." USD"."<br>";
	}elseif($array[$i]==600){
		echo "Mike new amout is ".$newamount." USD"."<br>";
	}elseif($array[$i]==50){
		echo "Sana new amout is ".$newamount." USD"."<br>";
	}elseif($array[$i]==8000){
		echo "Linda new amout is ".$newamount." USD"."<br>";
	}
	
	// }else{
	// 	$ex=
	// }
 	
 }else{  // if the exchange to UGX is less that 1million
 	$ex=$output/3870;
 	// echo $ex."<br>";
 	//checking and assigning each index avaliue to a particular individual
 	if($array[$i]==100){
		echo "John new amounSenyonjo21t is ".$ex." USD"."<br>";
	}elseif($array[$i]==150){
		echo "Mark new amout is ".$ex." USD"."<br>";
	}elseif($array[$i]==1100){
		echo "Slyvia new amout is ".$ex." USD"."<br>";
	}elseif($array[$i]==3500){
		echo "Juma new amout is ".$ex." USD"."<br>";
	}elseif($array[$i]==600){
		echo "Mike new amout is ".$ex." USD"."<br>";
	}elseif($array[$i]==50){
		echo "Sana new amout is ".$ex." USD"."<br>";
	}elseif($array[$i]==8000){
		echo "Linda new amout is ".$ex." USD"."<br>";
	}
 }
}
?>





