

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Assign2 - Single Painting</title>
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
</div>
<div class="container_12 contentWhite">	
	<div class="grid_3">
		<?php require_once("utilities/navigation.php"); ?>		
	</div>
	<div class="grid_9">	
	<?php 
	include_once("singleArtist.php");

	function readPaintings($filename) 
	{
	    $paintingFile = file($filename) or die('Error: Cannot find file');
	    $delimeter = '~';
	    
	    foreach($paintingFile as $paintingLine) {
	        $paintingFields = explode($delimeter, $paintingLine);
	        	        
	        $paintArray['id'] = utf8_encode($paintingFields[0]);
	        $paintArray['artist'] = utf8_encode($paintingFields[1]);
	        $paintArray['title'] = utf8_encode($paintingFields[2]);
	        $paintArray['year'] = utf8_encode($paintingFields[3]);
	        $paintArray['length'] = utf8_encode($paintingFields[4]);
	        $paintArray['width'] = utf8_encode($paintingFields[5]);
	        $paintArray['cost'] = utf8_encode($paintingFields[6]);
	        $paintArray['description'] = utf8_encode($paintingFields[7]);
	        $paintArray['source'] = utf8_encode($paintingFields[8]);
	        $paintArray['genre'] = utf8_encode($paintingFields[9]);
        $paintings[$paintArray['id']] = $paintArray;
	    }
	    return $paintings;
	}
	
	$paintFile = 'resources/paintings.txt';
	$paintings = readPaintings($paintFile);
	$artistFile = 'resources/artists.txt';
	$artists = readArtists($artistFile);
	$url =$_SERVER['REQUEST_URI'];
	$id = urlencode(parse_url($url, PHP_URL_QUERY));
	foreach($paintings as $painting) {
	    if ($id == $painting['id']) {
	        echo "<img src=resources/paintings/huge/".$painting['id'].".jpg><br>";
	        echo '<style=vertical-align:top text-align:left><h1><b>'.$painting['title'].'</h1></b></a>';
	        echo '<td style=vertical-align:middle><a href="singleArtist.php?'.$painting['artist']."\">".$painting['artist']."</a></td><br><br>";
	        echo '('.$painting['year'].'&nbsp;-&nbsp;'.$painting['length'].'cm x '.$painting['width'].'cm)<br><br>';
	        echo '<a href="index.php?'.urlencode($painting['genre'])."\">".$painting['genre']."</a><br><br>";
	        echo $painting['description'].'<br><br>';
	        echo '<a href='.$painting['source'].'>'.$painting['title'].' on Wikipedia'."</a><br><br>";
	    }
	}
	?>
		</div>
	</div>
</body>
</html>