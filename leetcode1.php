<!DOCTYPE html>
<head>
	<title>WAMP stack</title>
</head>
<body>
	<p>Here are some things you can do in this project:</p>
	<ul>
		<li><a href="/">Back</a></li>
	</ul>
	
	
	<?php
	/**
	 * @param Integer $x
	 * @return Integer
	 */
	function reverse($x) {
        $xStr = strval($x);
        $xStrSwap = "";
        for ($i = strlen($xStr) - 1; $i >= 0; $i--){
            $xStrSwap .= $xStr[$i];
        }
        $xFinal = 0;
        if ($x < 0) {
            $xFinal -= intval($xStrSwap);
        } else {
            $xFinal += intval($xStrSwap);
        }
        if ($xFinal < -2147483648 || $xFinal > 2147483647) {
            return 0;
        } else {
            return $xFinal;
        }
	}
	echo reverse(100) . "<br>";
	echo reverse(-543) . "<br>";
	echo reverse(10101) . "<br>";
	echo reverse(123456) . "<br>";
	echo reverse(1928346457) . "<br>";
	echo reverse(0) . "<br>";
	echo reverse(-1) . "<br>";
	echo reverse(1534236469);
	echo reverse(-3000000000);
	echo reverse(3000000000);
	echo "hello world";
	
	
	
	?>
</body>
</html>
