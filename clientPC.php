<?php
$file='valores.php'; 


//read file
$content=file_get_contents($file);

echo $content;

// here goes your update
$content =0;

//write file
file_put_contents($file,$content);
?>
