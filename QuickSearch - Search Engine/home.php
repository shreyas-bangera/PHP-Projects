<!DOCTYPE html>
<html>
	<head>
		<title>Quick Search Pro</title>
	</head>
	<body>
		<form method="post">
			<div>
				<center><h1>Search here</h1><br />
				<input type="text" name="k" style="width:300px;height:30px;">
				<input type="submit" name="submit" value="search" style="height:37px;"></center><br />
				<hr> <br/>
			</div>
		</form>
	</body>
</html>

	<div class="main" style="margin-left:100px;">
	<?php
		include("simple_html_dom.php");
		if(isset($_POST['submit']))
		{
			$input = $_POST['k'];
			$input = str_replace(' ','+',$input);
			$url  = 'http://www.google.com/search?hl=en&tbo=d&site=&source=hp&q='.$input.'&oq='.$input.'';
			$html = file_get_html($url);
			$linkObjs = $html->find('h3.r a');
			$i=0;
			foreach ($linkObjs as $linkObj) 
			{
				    $title = trim($linkObj->plaintext);
				    $link  = trim($linkObj->href);
				    $dis = $html -> find('span.st',$i);
				    $i++;

				    // if it is not a direct link but url reference found inside it, then extract
				    if (!preg_match('/^https?/', $link) && preg_match('/q=(.+)&amp;sa=/U', $link, $matches) && preg_match('/^https?/', $matches[1])) 
				    {
				        $link = $matches[1];
				    } 
				    else if (!preg_match('/^https?/', $link)) { // skip if it is not a valid link
				        continue;
				    }

					echo "<div id='right' style='width:900px;'>
						<h2><a href='$link'>$title</a></h2>
						<h3 style='color:green;'>$link</h3><br>
						<h3 style='margin-top:-20px;'>$dis</h3>
						<hr></div> "; 
			}
		}


	?>
	</div>