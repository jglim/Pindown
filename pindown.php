<?php

// Making a request without specifying page_size=100 only returns 25 results. (Pinterest iOS Client sets page_size as 50 in its requests)
$url = 'https://api.pinterest.com/v3/boards/' . $_GET['board'] . '/pins/?page_size=100&access_token=' . $_GET['token'];
$json = file_get_contents($url);
$jsondata = json_decode($json);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pindown: <?php echo count($jsondata->data);?> pins</title>
	</head>
	<body>
		<?php
			
			for ($i = 0; $i < count($jsondata->data); $i++)
			{
				echo '<img src="';
				echo $jsondata->data[$i]->image_large_url;
				echo '" title="';
				echo $jsondata->data[$i]->description;
				echo '"/>';
				
			}
		?>

	
	</body>
</html>

