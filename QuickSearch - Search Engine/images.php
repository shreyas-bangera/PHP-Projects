<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quick Images || <?php echo $_SESSION['k']; ?> </title>
		<link rel="stylesheet" href="main.css">
		<script type="text/javascript" src="subvalidation.js"></script>
		<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
		<script>
			function load(){
				setTimeout(function(){document.getElementById("su").click();},1000);
			}
		</script>

		<style>
		div{
			display: inline-block;
		}
		.main img{
			width: 300px;
			height: 200px;
		}
		</style>
	</head>

	<body onload="return load();">
		<div class="top">
			<form method="post" id="form2">			
					<div class="se">
						<a href="index.php"><img id="img" src="logo2.png"></a>
						<input type="text" name="k" id="k" value='<?php echo $_SESSION['k']; ?>' style="height:25px; width:500px; font-size:20px;padding-left:6px;margin-bottom:15px;">&nbsp
						<input type="submit" value="Go" name="subb" id="su" style="height:28px; width:60px;background-color:#2980b9;padding:5px;color:white;border-radius:7px;"> <br /><br />
					</div>
					<span style="margin-left:-580px;"><a href="search.php" style="padding-right:15px;">Web</a> <a href="images.php" style="color:green;"><b>Images</b></a></span>
			</form>
		
		</div>
	
		<div class="main" style="margin-left:100px;height:100px;">
			<?php
				include("simple_html_dom.php");
				if(isset($_POST['subb']))
				{
					$input = $_POST['k'];
					$input = str_replace(' ','+',$input);
					$url  = 'http://www.bing.com/images/search?q='.$input.'&qpvt=images&qpvt=images&FORM=IGRE';
					$html = file_get_html($url);
					$linkObjs = $html->find('div.item a');
					
					foreach ($linkObjs as $linkObj) 
					{
					    $img = trim($linkObj->href);
					   	$file_extension = substr($img, -4);
						if($file_extension == '.png' || $file_extension == '.jpg' )
						{
						   echo "<div id='right'>
							<a href='$img'><img src='$img' alt='Quick Images'></a><hr>
							</div> "; 						
						}
    
					}	

				}

			?>
	</div>
		
	</body>
</html>

