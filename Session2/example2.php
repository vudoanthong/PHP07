<?php
define('BIRTH', 1988);
define('NAME', "Luong Hoai Canh");
define('FIRST_NAME', "Luong Hoai");
define('LAST_NAME', "Canh");
if (BIRTH % 2 == 0) {
	for($i = 1; $i <= 100; $i++){
		if ($i % 2) {
			echo FIRST_NAME;
		}else{
			echo LAST_NAME;
		}
	}
	echo strlen(NAME);
	echo str_replace(LAST_NAME, "Peter", NAME);

	function show($birth) {
		if ($birth % 9 == 0) {
			return 99;
		} else {
			return 66;
		}
	}
    
    echo show(BIRTH);
    echo str_word_count(NAME);

}