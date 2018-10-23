<?php
class kelipatan{
	function berlipat($angka){
		for($a = 1; $a<$angka-2; $a++){
			if ($a%3== 0) 
			{
				echo "Marlin </br>";
			}
			else if ($a%5==0) 
			{
				echo "Booking </br>";
			}
			else if (($a%3==0) and ($a % 5 ==0)){
				echo "Marlin Booking </br>";
			}
			else if (($a%3==0) and ($a%5==0) ==2){
				if ($a%3==0) 
				{
					echo "Booking </br>";
				}
				else if ($a%5==0) 
				{
					echo "Marlin </br>";
				}	
				else if (($a%3==0) and ($a % 5 ==0)){
					echo "Booking Marlin <br>";
				}
			}
			else if (($a % 3 ==0) and ($a % 5 ==0) > 5){
				break;
			}
		}
	} 
}
?>