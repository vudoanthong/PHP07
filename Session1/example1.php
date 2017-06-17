<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	for($i =1; $i <=100; $i++){
		if($i%15 ==0){
			echo "$i MUOI LAM<br />";
		}
		if($i%3 == 0){
			echo "$i BA<br />";
		}if($i%5 == 0){
			echo "$i NAM <br />";
		}
		else {
			echo "$i KHAC<br />";
		}

		
	}
?>
</body>
</html>