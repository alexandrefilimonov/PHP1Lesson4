<?php
echo '<hr />';
echo 'PHP1 Lesson4:<br />';
$n = 3;
$s = "<ul>Chose your bouquet of flowers to purchase:<br>"; 
// Open a known directory, and proceed to read its contents  

$files = glob("img/*.jpg");
foreach($files as $jpg){
	$s = $s . "<li><a href='".$jpg."' target='_new'><img src='".$jpg."' width='75px'></a><br /></li><br>";
}

for($i=1;$i<=$n; $i++) {
}
$s = $s."</ul>";
?>
<html>
<head></head>
<body>
	<?=$s?>
</body>
</html>

