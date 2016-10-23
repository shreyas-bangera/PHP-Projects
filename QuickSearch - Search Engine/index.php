<!DOCTYPE html>
<html>
	<head>
		<title>Quick Search</title>
		<link rel="stylesheet" href="design.css">
		<script type="text/javascript" src="subvalidation.js"></script>
		<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
		 <link rel="stylesheet" href="jquery-ui.css">
		 <script type="text/javascript" src="jquery-ui.js"></script>
		 <script type="text/javascript" src="complete.js"></script>
	</head>

	<body onload="form1.reset();">
	<div class="se">
		<form action="search.php" method="post" id="form1" onSubmit="return check();" >	
		<center><img id="img" src="logo2.png" height="160px;"></center>				
			<center>
				<div class="wrapper">
					<input type="text" name="k" id="k" style="height:35px; width:510px; font-size:26px;border-radius:7px;" autofocus autocomplete="off" />
					<input type="submit" name="subb" value="Go" style="width:60px;height:35px;font-family:helvetica;color:white;background-color:#2980b9;font-size:20px;"><br /><br />
				</div>
			</center>
	</div>

	<footer class="footer">
		<center><p>Quick Search Designed & Developed by Shreyas Bangera</p></center>
	</footer>
		</form>

	</body>
</html>
