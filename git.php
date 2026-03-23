<?php
$a = 34;
$i = 1;

while ($a != 1) {
	print "zingsnis $i - $a <br>";
	if($a % 2 == 0) {
		$a = $a / 2;
	} else {
		$a = 3 * $a + 1;
	}
	$i++;
}
print "zingsnis $i - $a<br>"; // reikia nes paskutinio zingsnio nespausdina
print("atsakymas isviso - " . $i);
?>