<html>
<head>
<link rel="stylesheet" href="main.css">
<html>
<head>
<link rel="stylesheet" href="main.css">
<body>
<form action="crawler.php" method="GET">
<h1>Crawler</h1>
<input class="tekst" type="text" name="search">
<input class="przycisk" type="submit" value= "Crawl!">


<?php
    $url = $_GET['search'];
    
    function get_links($url) { 

		    $xml = new DOMDocument(); 

		    $internalErrors = libxml_use_internal_errors(true);

		    $xml->loadHTMLFile($url);

		    $links = array(); 

		    foreach($xml->getElementsByTagName('a') as $link) { 
		        echo $link->getAttribute('href'); 
		     	echo ("<br>");
		    } 
		}
    
		if (filter_var($url, FILTER_VALIDATE_URL)) {
			echo ("$url poprawny URL<br><br>");
            get_links($url);
            
		 else {
			echo ("$url niepoprawny URL<br><br>");
		}

        }

?>

</form>
</body>
</head>
</html>
<body>
<form action="" method="GET">
<h1>Crawl!</h1>
<input class="tekst" type="text" name="search">
<input class="przycisk" type="submit" value= "Crawl!">


<?php
    $url = $_GET['search'];
		if (filter_var($url, FILTER_VALIDATE_URL)) {
			echo ("$url poprawny URL<br><br>");
		} else {
			echo ("$url niepoprawny URL<br><br>");
		}

		function get_links($url) { 

		    $xml = new DOMDocument(); 

		    $internalErrors = libxml_use_internal_errors(true);

		    $xml->loadHTMLFile($url);

		    $links = array(); 

		    foreach($xml->getElementsByTagName('a') as $link) { 
		        echo $link->getAttribute('href'); 
		     	echo ("<br>");
		    } 
		} 

		get_links($url);

?>

</form>
</body>
</html>