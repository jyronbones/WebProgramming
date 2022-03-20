

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Assign2 - Single Artist</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/960.css" />
<meta http-equiv="Content-Type" content="text/html; 
   charset=utf-8" />
<link rel="stylesheet" href="css/assign2.css" />
</head>

<body>

<div class="container_12">
	<?php require_once("utilities/header.php"); ?>
	<div class="grid_3">
		<?php require_once("utilities/navigation.php"); ?>		
	</div>
	<div class="grid_9">
	<?php 
	include_once("singlePainting.php");
	
	function readArtists($filename)
	{
	    $artistFile = file($filename) or die('Error: Cannot find file');
	    $delimeter = '~';
	    
	    foreach($artistFile as $artistLine) {
	        $artistFields = explode($delimeter, $artistLine);
	        
	        $artArray = array();
	        
	        $artArray['id'] = utf8_encode($artistFields[0]);
	        $artArray['name'] = utf8_encode($artistFields[1]);
	        $artArray['nationality'] = utf8_encode($artistFields[2]);
	        $artArray['birth'] = utf8_encode($artistFields[3]);
	        $artArray['death'] = utf8_encode($artistFields[4]);
	        $artArray['bio'] = utf8_encode($artistFields[5]);
	        $artArray['source'] = utf8_encode($artistFields[6]);
	        $artists[$artArray['id']] = $artArray;
	    }
	    return $artists;
	}
	
	$artistFile = 'resources/artists.txt';
	$artists = readArtists($artistFile);
	
	$url =$_SERVER['REQUEST_URI'];
	$id = urldecode(parse_url($url, PHP_URL_QUERY));

	foreach($artists as $artist) {
	    if ($id == $artist['name']) {
	        echo "<img src=resources/artists/large/".$artist['id'].".jpg><br>";
	        echo '<h1><b>'.$artist['name'].'</h1></b></a>';
	        echo $artist['birth'].'-'.$artist['death'].'<br>';
	        echo '<em>('.$artist['nationality'].')</em><br><br>';
	        echo $artist['bio'].'<br><br>';
	        echo '<a href='.$artist['source'].'>'.$artist['name'].' on Wikipedia'."</a><br><br>";
	        
	        echo '<ul><h1>Paintings</h1></ul>';
	        $paintFile = 'resources/paintings.txt';
	        $paintings = readPaintings($paintFile);
	        foreach($paintings as $value) {
	            if($artist['name'] == $value['artist']) {
	                echo '<li><a href="singlePainting.php?'.$value['id']."\">".$value['title'].'</a></td>';
	            }
	        }
	        echo "</ul>";
	    }
	}

	?>
	</div>
	<div class="clear"> </div>
</div>
</body>
</html>