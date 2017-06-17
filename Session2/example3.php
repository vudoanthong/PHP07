<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	define("NAM_SINH", 1988);//Định nghĩa một hằng là số năm sinh của bạn
	define("Ten", "THONG");//Định nghĩa một hằng là tên của bạn
	//Kiểm tra năm sinh chẳn hay lẻ
	if(NAM_SINH%2 == 0){
		for($i =1; $i <= 100; $i++){
			if($i%2 ==0){
				echo "Tên đầy đủ của bạn: VU DOAN ". Ten."<br />";//hiển thị họ và tên lót của bạn
				break;
			}else{
				//echo Ten;

			}
			echo "So ki tu trong ten: ".strlen(Ten)."<br />";// Đếm số kí tụ trong tên
			echo "Ten ban bi thay: ".str_replace("THONG","Peter",Ten)."<br />";//Thay thế tên của bạn bằng Peter

		}

	}else{
		for($j = 100; $j >=1; $j--){
			if($j&2 == 0){
				echo Ten;
				break;

			}else{
				echo Ten." VU DOAN<br />";
				echo "So ki tu trong ten: ".strlen(Ten)."<br />";
				echo str_replace("Maria","Peter",Ten);
				break;
			}
		}
	}

	function funtionThong(){
		if(NAM_SINH%9 == 0){
			return 99;
		}else{
			return 66;
		}
	}

	echo funtionThong()."<br />";
	echo str_word_count(Ten);
?>
</body>
</html>