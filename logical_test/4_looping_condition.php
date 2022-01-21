<?php
	function fooBar($jumlah) {
	    for ($i=1; $i<=$jumlah; $i++){
	        if ($i%3 == 0 && $i%5 != 0 ){
	            echo "<br>";
	            echo "Foo";
	        } else if ($i%5 == 0 && $i%3 != 0){
	            echo "<br>";
	            echo "Bar";
	        } else if ($i%3 == 0 && $i%5 == 0){
	            echo "<br>";
	            echo "FooBar";
	        } else {
	          echo "<br>";
	          echo $i;
	        }
	    }
	}

	fooBar(50);
?>