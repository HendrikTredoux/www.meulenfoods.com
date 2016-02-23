<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>MeulenFoods - About</title>

		<meta name="description" content="Meulen Foods offer spitbraais for any occasion. Big or small, in-or outdoors. You can choose between a gas spitbraai or wood spitbraai. We can personalize your menu to suite your needs. From weddings, bachelors, birthdays, year end functions, corporate events, kiddies partys to any social event you would need catering for.">
		<meta name="keywords" content="spitbraai, spitbraais, spit braai, spit braais, biltong, droewors, catering, gasspit, functions, braai, meat, vleis, mobile, kaapstad, cape town, weskaap, westerncape">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

		<link rel="stylesheet" href="mobile_design/styles.css" type="text/css" media="screen"></link>

		<script type="text/javascript" src="mobile_design/jquery.js"></script>
		<script type="text/javascript" src="mobile_design/utils.js"></script>
		<script type="text/javascript">
			document.onreadystatechange = onLoad;
			function onLoad(){
				if(document.readyState=="complete"){
				}
			}
		</script>
	</head>
	<body>
		<form action="email.php" id="form" method="POST">
			<input type="hidden" value="About" name="fromform"/>
			<div id="wrap">
				<div id="header">
					<a href="/"><img src="mobile_design/logo.png" border="0"/></a>
					<br/><br/>
					<div id="menu">
						<a href="mobile_meats.php"><div class="menuitem">meats</div></a>
						<a href="mobile_spit.php"><div class="menuitem">spitbraai</div></a>
						<a href="mobile_about.php"><div class="menuitem selected">about</div></a>
					</div>
				</div>
				<div id="content">
					<p class="introtext">We offer a wide range of quality and affordable meat products for the restaurant and catering trade. Public welcome to buy our meat products at wholesale prices, with option of our free delivery service.</p>
					<p class="introtext">We offer spitbraais for any occasion. Big or small, in-or outdoors. You can choose between a gas spitbraai or wood spitbraai. We can personalize your menu to suite your needs. From weddings, bachelors, birthdays, year end functions, corporate events, kiddies partys to any social event you would need catering for.</p>
					<br/>
					<div class="form" id="contactform">
						<table style="width:100%;table-layout:fixed" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<table>
										<tr>
											<td><label class="formlabel">Name:</label></td>
											<td class="formspace"/>
											<td><input type="text" name="name" alt="Enter name here" value="Enter name here" class="inputinit" onfocus="onInputFocus(this);"/></td>
										</tr>
										<tr>
											<td><label class="formlabel">Surname:</label></td>
											<td class="formspace"/>
											<td><input type="text" name="surname" alt="Enter surname or lastname here" value="Enter surname or lastname here" class="inputinit" onfocus="onInputFocus(this);"/></td>
										</tr>
										<tr>
											<td><label class="formlabel">Telephone:</label></td>
											<td class="formspace"/>
											<td><input type="text" name="telephone" alt="Enter contact number here" value="Enter contact number here" class="inputinit" onfocus="onInputFocus(this);"/></td>
										</tr>
										<tr>
											<td><label class="formlabel">Email:</label></td>
											<td class="formspace"/>
											<td><input type="text" name="email" alt="Enter email address here" value="Enter email address here" class="inputinit" onfocus="onInputFocus(this);"/></td>
										</tr>
										<tr>
											<td></td>
											<td class="formspace"/>
											<td><input type="checkbox" name="contact_by_email" id="contact_by_email"/> <label class="formlabelsmall" style="color:#e36c0a" for="contact_by_email">Contact me by email</label></td>
										</tr>
										<tr>
											<td><label class="formlabel">Comments:</label></td>
											<td class="formspace"/>
											<td>
												<textarea name="comments" alt="Enter comments here" value="Enter comments here" rows="2" class="inputinit" onfocus="onInputFocus(this);"></textarea>
											</td>
										</tr>
										<tr>
											<td></td>
											<td class="formspace"/>
											<td style="text-align:right">
												<input type="button" class="button" value="Contact me" onclick="onFormSubmitClick()" />
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<br/>
					<div>
						<div class="flyout  bordered">
							"MeulenFoods has delivered the most professional service, and is very reliable, thank you!"<br/>
							Hendrik Tredoux
						</div>
						<div class="flyout  bordered">
							"...we are very pleased with the high quality of the products and staff at MeulenFoods..." <br/> - Unknown<br/><br/>
						</div>
					</div>
				</div>
			</div>
			<div id="footerlanding">
				<hr/>
				<div>
					<span style="padding-right:10px;"><label class="obchar fontmedium">t:</label> <label class="contact">021 930 1670</label></span>
					<label class="obchar fontmedium">f:</label> <label class="contact">086 571 9349</label>
					<br/>
					<label class="obchar fontmedium">e:</label> <label class="contact"><a href="mailto:info@meulenfoods.co.za">info@meulenfoods.co.za</a></label>
				</div>
				<hr/>
				Copyright © 2014 MeulenFoods
			</div>
		</form>
		<div id="treXis"><a href="http://www.trexis.net"><img src="mobile_design/trexis.png" class="small" border="0" onmouseover="this.className='large'" onmouseout="this.className='small'"/></a></div>
	
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