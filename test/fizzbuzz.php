<?php 

function fizzbuzz($n)
{
	for($i = 1; $i <= $n; $i++){
		if($i % 3 == 0 && $i % 5 == 0){
			echo "<br/> fizzbuzz";
		}elseif ($i % 3 == 0) {
			echo "<br/> fizz";
		}elseif ($i % 5 == 0) {
			echo "<br/> buzz";
		}else {
			echo "<br/>" . $i;
		}
	}
}

echo fizzbuzz(15);

 ?>