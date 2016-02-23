<?php
	$to_1 = "info@meulenfoods.co.za";
	$to_2 = "david@meulenfoods.co.za";
	//$to_2 = "hendrik.tredoux@trexis.net";
	$subject = "[MeulenFoods.co.za " . $_POST["fromform"] ."]";
	$body_string_part1 = "You have been contacted for a quote by %name% %surname% on the %section% section of the MeulenFoods website.";
	$body_string_part2 = "<h3>Contact Details:</h3>";
	$body_string_part3 = "<h3>Selected options:</h3>";

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	if ($_POST) {
		while (list($key,$value) = each($_POST)){
			switch($key){
				case "fromform":
					$body_string_part1 = str_replace("%section%", $value, $body_string_part1);
					break;
				case "name":
					$body_string_part1 = str_replace("%name%", $value, $body_string_part1);
					$body_string_part2 .= ucfirst(str_replace("_", " ", $key))  . " : " . $value . "<br/>";
					break;
				case "surname":
					$body_string_part1 = str_replace("%surname%", $value, $body_string_part1);
					$body_string_part2 .= ucfirst(str_replace("_", " ", $key))  . " : " . $value . "<br/>";
					break;
				case "email":
					$headers .= "From: " . strip_tags($value) . "\r\n";
					$headers .= "Reply-To: " . strip_tags($value) . "\r\n";
					$body_string_part2 .= ucfirst(str_replace("_", " ", $key))  . " : " . $value . "<br/>";
					break;
				case "telephone":
					$body_string_part2 .= ucfirst(str_replace("_", " ", $key))  . " : " . $value . "<br/>";
					break;
				case "comments":
					$body_string_part2 .= ucfirst(str_replace("_", " ", $key))  . " : " . $value . "<br/>";
					break;
				case "contact_by_email":
					$body_string_part2 .= "<b>Contact this person by email</b><br/>";
					break;
				default:
					$body_string_part3 .= ucfirst(str_replace("_", " ", $key)) . "<br/>";
					break;
			}
		}
	}
	$body = "<html><body>" . $body_string_part1 . "<br/><br/>" . $body_string_part2 . "<br/><br/>" . $body_string_part3 . "</body></html>";
	//echo($body);
 ?>
 
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>MeulenFoods - <?php echo($_POST["fromform"]); ?></title>

		<meta name="description" content="Meulen Foods offer spitbraais for any occasion. Big or small, in-or outdoors. You can choose between a gas spitbraai or wood spitbraai. We can personalize your menu to suite your needs. From weddings, bachelors, birthdays, year end functions, corporate events, kiddies partys to any social event you would need catering for.">
		<meta name="keywords" content="spitbraai, spitbraais, spit braai, spit braais, biltong, droewors, catering, gasspit, functions, braai, meat, vleis, mobile, kaapstad, cape town, weskaap, westerncape">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

		<link rel="stylesheet" href="design/styles.css" type="text/css" media="screen"></link>

		<script type="text/javascript" src="design/jquery.js"></script>
		<script type="text/javascript" src="design/utils.js"></script>
		<script type="text/javascript">
			document.onreadystatechange = onLoad;
			function onLoad(){
				if(document.readyState=="complete"){
				}
			}
		</script>
	</head>
	<body>
		<form>
			<div id="wrap">
				<div id="header">
					<a href="/"><img src="design/logo.png" border="0"/></a>
					<br/><br/>
					<div id="menu">
						<a href="meats.php"><div class="menuitem">meats</div></a>
						<a href="spit.php"><div class="menuitem">spitbraai</div></a>
						<a href="about.php"><div class="menuitem">about</div></a>
					</div>
				</div>
				<div id="content">
					<br/>
					<?php
					if (mail($to_1, $subject, $body, $headers) && mail($to_2, $subject, $body, $headers)) {
						echo("<p class='thankyou'>Thank you for contacting MeulenFoods.  We will get back to you soon.</p>");
					} else {
						echo("<p>We appologize, the message delivery failed.  Please try again later.</p>");
					}
					?>			
					<p class="intotext">For any further queries, feel free to contact us at <label class="contact"><a href="mailto:info@meulenfoods.co.za">info@meulenfoods.co.za</a></label>.</p>
				</div>
			</div>
			<div id="footerlanding">
				<hr/>
				<div>
					<label class="obchar fontmedium">t:</label> <label class="contact">021 930 1670</label> 
					<span class="lrpadding50"><label class="obchar fontmedium">e:</label> <label class="contact"><a href="about.php">info@meulenfoods.co.za</a></label></span> 
					<label class="obchar fontmedium">f:</label> <label class="contact">086 571 9349</label>
				</div>
				<hr/>
				Copyright © 2014 MeulenFoods
			</div>
		</form>
		<div id="treXis"><a href="http://www.trexis.net"><img src="design/trexis.png" class="small" border="0" onmouseover="this.className='large'" onmouseout="this.className='small'"/></a></div>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-23205288-1']);
		  _gaq.push(['_setDomainName', 'none']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>	
	</body>
</html>