<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Assign2-Home Page of Art Gallery</title>
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
	<?php require_once("singleArtist.php"); ?>
	<?php require_once("singlePainting.php"); ?>
		<table>
	<?php
	$url =$_SERVER['REQUEST_URI'];
	$stringQuery = urldecode(parse_url($url, PHP_URL_QUERY));
	$paintFile = 'resources/paintings.txt';
	$paintings = readPaintings($paintFile);

	foreach($paintings as $value) {
	    if($stringQuery == null) {
	       echo "<tr>";
	       echo "<td><img src=resources/paintings/square-medium/".$value['id'].".jpg></td>";
	       echo "<td>"."&emsp;&emsp;&emsp;&emsp;"."</td>";
	       echo '<td style=vertical-align:middle><a href="singlePainting.php?'.$value['id']."\">".$value['title'].'</a></td>';
	       echo "<td>"."&emsp;&emsp;"."</td>";
	       echo '<td style=vertical-align:middle><a href="singleArtist.php?'.$value['artist']."\">".$value['artist']."</a></td>";
	       echo "</tr>";   
	    }
	    else if ($stringQuery == $value['genre']) {
	        echo "<tr>";
	        echo "<td><img src=resources/paintings/square-medium/".$value['id'].".jpg></td>";
	        echo "<td>"."&emsp;&emsp;&emsp;&emsp;"."</td>";
	        echo '<td style=vertical-align:middle><a href="singlePainting.php?'.$value['id']."\">".$value['title'].'</a></td>';
	        echo "<td>"."&emsp;&emsp;"."</td>";
	        echo '<td style=vertical-align:middle><a href="singleArtist.php?'.$value['artist']."\">".$value['artist']."</a></td>";
	        echo "</tr>"; 
	    } else if ($stringQuery == $value['artist']) {
	        echo "<tr>";
	        echo "<td><img src=resources/paintings/square-medium/".$value['id'].".jpg></td>";
	        echo "<td>"."&emsp;&emsp;&emsp;&emsp;"."</td>";
	        echo '<td style=vertical-align:middle><a href="singlePainting.php?'.$value['id']."\">".$value['title'].'</a></td>';
	        echo "<td>"."&emsp;&emsp;"."</td>";
	        echo '<td style=vertical-align:middle><a href="singleArtist.php?'.$value['artist']."\">".$value['artist']."</a></td>";
	        echo "</tr>"; 
	    }
	}

	?>
	</table>
	</div>
	<div class="clear"> </div>
</div>
</body>
</html>