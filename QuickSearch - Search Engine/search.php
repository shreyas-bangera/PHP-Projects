<?php
	session_start();
	if(isset($_POST['subb']))
		$_SESSION['k'] = $_POST['k'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quick Search || <?php echo $_SESSION['k']; ?></title>
		<link rel="stylesheet" href="main.css">
		<script type="text/javascript" src="subvalidation.js"></script>
		<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" href="jquery-ui.css">
		<script type="text/javascript" src="jquery-ui.js"></script>
		<script type="text/javascript" src="complete.js"></script>
		<script type="text/javascript">
		   $(document).ready(function(){
		   			$('form1').submit();
		   		
		   });
</script>
	</head>

	<body>
		<div class="top">
			<form method="post" id="form1"  name="theform" onSubmit="return check();">			
					<div class="se">
						<a href="index.php"><img id="img" src="logo2.png"></a>
						<input type="text" name="k" id="k" value='<?php echo $_SESSION['k']; ?>' style="height:25px; width:500px; font-size:20px;padding-left:6px;margin-bottom:15px;" autofocus autocomplete="off" />&nbsp
						<input type="submit" value="Go" name="subb" id="su" style="height:28px; width:60px;background-color:#2980b9;padding:5px;color:white;border-radius:7px;">
					</div>
				<span style="margin-left:210px;" class="span"><a href="search.php" style="padding-right:15px;color:green;"><b>Web</b></a><a href="images.php">Images</a></span>
			</form>

		</div>

		<div class="main" style="margin-left:80px;">
			<?php
				include("simple_html_dom.php");
				/*if(isset($_POST['subb']))
				{
					$input = $_POST['k'];
					$input = str_replace(' ','+',$input);
					$url  = 'https://duckduckgo.com/?q='.$input.' ';
					$html = file_get_html($url);
					$linkObjs = $html->find('h2.result__title a');
					$i=0;
					foreach ($linkObjs as $linkObj) 
					{
						    $title = trim($linkObj->plaintext);
						    $link  = trim($linkObj->href);
						    $dis = $html -> find('div.result__snippet',$i);
						    $i++;

						    // if it is not a direct link but url reference found inside it, then extract
						    if (!preg_match('/^https?/', $link) && preg_match('/q=(.+)&amp;sa=/U', $link, $matches) && preg_match('/^https?/', $matches[1])) 
						    {
						        $link = $matches[1];
						    } 
						    else if (!preg_match('/^https?/', $link)) { // skip if it is not a valid link
						        continue;
						    }

							echo "<div id='right' style='width:900px;height:auto;margin-bottom:-10px;'>
								<h2 id='link'><a href='$link'>$title</a></h2>
								<p style='color:green;margin-top:-20px;font-size:20px;'>$link</p>
								<p style='margin-top:-20px;font-size:20px;'>$dis</p>
								<br></div> "; 
					}
				
				}*/
				if(isset($_POST['subb']))
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

							echo "<div id='right' style='width:900px;height:auto;margin-bottom:-10px;'>
								<h2 id='link'><a href='$link'>$title</a></h2>
								<p style='color:green;margin-top:-20px;font-size:20px;'>$link</p>
								<p style='margin-top:-20px;font-size:20px;'>$dis</p>
								<br></div> "; 
					}
				
				}
		?>
	</div>
		
	</body>
</html>

