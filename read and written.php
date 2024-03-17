
<?php
$filename = "contents.txt";
$content = file_get_contents($filename);
echo"<h4>To read the content in contents file.</h4>";
echo "<br>";
echo  $content . PHP_EOL;


$file = "contents.txt";
$filehandler = fopen($file,"w") or die("unable to open the file");
echo"<br>";
echo"<br>";
echo "<h4>This is to write content in the file using write function.</h4>";
fwrite($filehandler," <pre>
		I am vasu. 
		A student of Sri Ramakrishna college of arts & science. 
		And pursuing the BCA UG 2nd year.
		<h3>	     College Location </h3>
		Nava India, Coimbatore.</pre>");
fclose($filehandler);
echo"<br>";
echo"<br>";

echo"<h4>To read the content that is written in the file.</h4>";
echo"<br>";
$filehand = fopen($file,"r");
$filesize = filesize($file);
$cont = fread($filehand,$filesize);
echo $cont . PHP_EOL;
fclose($filehand);
?>

