<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>MeulenFoods - Spitbraai</title>

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
		<form action="email.php" id="form" method="POST">
			<input type="hidden" value="Spitbraai" name="fromform"/>
			<div id="wrap">
				<div id="header">
					<a href="/"><img src="design/logo.png" border="0"/></a>
					<br/><br/>
					<div id="menu">
						<a href="meats.php"><div class="menuitem">meats</div></a>
						<a href="spit.php"><div class="menuitem selected">spitbraai</div></a>
						<a href="about.php"><div class="menuitem">about</div></a>
					</div>
				</div>
				<div id="content">
					<p class="introtext">We offer spitbraais for any occasion. Big or small, in-or outdoors. You can choose between a gas spitbraai or wood spitbraai. We can personalize your menu to suite your needs. From weddings, bachelors, birthdays, year end functions, corporate events, kiddies partys to any social event you would need catering for.</p>
					<div class="options" id="options">
						<div class="selectoption"><img src="design/selectoptions.png"/></div>
						<table style="width:100%;table-layout:fixed" cellpadding="0" cellspacing="0">
							<tr>
								<td style="width:40px"></td>
								<td class="arrowdownshort">
									<table style="width:100%;table-layout:fixed">
										<tr>
											<td style="width:180px">
												<label class="header">Starter</label><br/>
												<input type="checkbox" name="cheese_griller" id="cheese_griller"><label for="cheese_griller">Cheese griller & dip</label><br/>
												<input type="checkbox" name="bread_table" id="bread_table"><label for="bread_table">Bread table</label><br/>
												<input type="checkbox" name="biltong" id="biltong"><label for="biltong">Biltong Basket</label>
												<br/><br/>
												<label class="header">Extra's</label><br/>
												<input type="checkbox" name="cutlery_crockery" id="cutlery_crockery"><label for="cutlery_crockery">Cutlery & Crockery</label><br/>
												<input type="checkbox" name="serviettes" id="serviettes"><label for="serviettes">Serviettes</label><br/>
											</td>
											<td>
												<label class="header">Main</label><br/>
												<input type="checkbox" name="lamb_on_the_spit" id="lamb_on_the_spit"><label for="lamb_on_the_spit">Lamb on the spit</label><br/>
												<input type="checkbox" name="roast_chicken" id="roast_chicken"><label for="roast_chicken">Roast Chicken</label><br/>
												<input type="checkbox" name="salads" id="salads"><label for="salads">Salads</label><br/>
												<input type="checkbox" name="warm_veggies" id="warm_veggies"><label for="warm_veggies">Warm Veggies</label><br/>
												<input type="checkbox" name="toasted_ciabattas" id="toasted_ciabattas"><label for="toasted_ciabattas">Toasted ciabattas with<br/>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tomato & cheese
													</label><br/>
											</td>
											<td style="width:180px">
												<label class="header">Dessert</label><br/>
												<input type="checkbox" name="choc_brownies_with_custard" id="choc_brownies_with_custard"><label for="choc_brownies_with_custard">Choc brownies with custard</label><br/>
												<input type="checkbox" name="ice_cream" id="ice_cream"><label for="ice_cream">Ice-cream</label><br/>
												<input type="checkbox" name="fruits" id="fruits"><label for="fruits">Fruits</label><br/>
											</td>
										</tr>
									</table>
									<br/>
								</td>
							</tr>
							<tr>
								<td/>
								<td class="alignright">
									<input type="button" class="button" value="Get Quote" onclick="onGetQuoteClick()" />
								</td>
							</tr>
						</table>
					</div>
					<div class="form" id="contactform" style="display:none;">
						<table style="width:100%;table-layout:fixed" cellpadding="0" cellspacing="0">
							<tr>
								<td style="width:40px"></td>
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
								<td style="width:159px;vertical-align:bottom;">
									<img src="design/contact_callout.png"/>
									<br/><br/>
								</td>
							</tr>
						</table>
					</div>
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