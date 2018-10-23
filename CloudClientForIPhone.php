<?php
$file='valores.php'; 

//read file
$content=file_get_contents($file);

// here goes your update
$content = 1;
echo $content;
//write file
file_put_contents($file,$content);

sleep(5);
$content = 0;
file_put_contents($file,$content);
?>
