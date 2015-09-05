<?php
require 'image.compare.class.php';
require 'email.php';
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>"; 
mysql_select_db("uav");
$directryName = "image/video/WebCam/grabs/";
$files = array();
$dir = new DirectoryIterator($directryName);
foreach ($dir as $fileinfo) {
$files[$fileinfo->getMTime()] = $fileinfo->getFilename();
}
 
//krsort will sort in reverse order
krsort($files);
 
//just print out the file names
//excluding this file (named index.php and the dir "." )
 $baseImage ='theft 2.jpg';
$time = time();
$imgNames = array();
$i=0;
foreach($files as $file){
	    
	    $imgCheck = mysql_query("select * from check where liveimage=='$file' ");
	    if(!$imgCheck)
	    {
	    	
		    echo $file;
		    echo "&nbsp;&nbsp;&nbsp;";
		   	$class = new compareImages;
			$cmp =  $class->compare($directryName.$file,$directryName.$baseImage);
			echo $cmp;
	 	print "</br>";
	     	$imgInsert=mysql_query("INSERT INTO `check`( `liveimage`, `baseimage`, `compvalue`, `time`) VALUES ('$file','$baseImage','$cmp','$time');") or die(mysql_error());
			if($cmp<30)
			{
			echo "cmp>0 ::" .$i;
			echo "<br />";
      
				$alertimage = $directryName.$file;
				$imgNames[++$i] = $alertimage;
			}
		}
	}
  	emailalert($imgNames);
  
?>