<!DOCTYPE html>
<html lang= "en" >
	<head>
		<title>Deep Packet Inspection</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<div id="titles">
				<div id="page_title">
					<h1>DEEP PACKET INSPECTION</h1>
				</div>
				<div id="page_sub_title">
					<h2>HOW IT WORKS</h2>
				</div>
			</div>
		</header>
		<div id="body_container">		
			<div id='left_sidebar'>
				<nav>
					<ul>
						<li onclick="location.href='home.php';"><a href="home.php">OVERVIEW</a></li>
						<li onclick="location.href='page2.php';"><a href="page2.php">USES OF DPI</a></li>
						<li onclick="location.href='page3.php';"><a href="page3.php">HOW IT WORKS</a></li>
					</ul>
				</nav>
				<div id='refrences'>
					<p>REFRENCES</p>
					<p>
						<a href='http://www.solarwinds.com/resources/webcasts/deep-packet-analysis-quality-of-experience-monitoring.html'>solarwinds.com</a><br />
						<a href='http://www.zen.co.uk/enterprise/broadband/enterprise-broadband/stateful-vs-deep-packet-inspection.aspx'>zen.co.uk</a><br />
						<a href='http://af.wikipedia.org/wiki/OSI-model'>wikipedia.com</a><br />
					</p>
				</div>
			</div>
			<section>
				<div class="wotext">
					<p>
						DPI works due to the OSI (Open Systems Interconnection) model that currently standardizes the internet. Every pack that is sent is split in to 7 different layers. Each of these layers has their own function/use. DPI essentially looks through layers that aren't normally checked by ISP's and then decides what to do with that packet based on preset criteria.
					</p>
					<p>
						For example if a packet between the user and the server is intercepted by some form of MITM (man in the middle) which in this case is normally the ISP but it could also be any third party that has managed to intercept the connections from the end point and the host, then the MITM can do what they please with this information. The MITM will disassemble the packet and look at the information and then reassemble it feed it back to the user if they wish, or they can simply block that packet and it will never reach the user. This can all be done without the users knowledge. 	
					</p>
					<p>
						At the end of the day DPI is needed, without it the internet would be a much less secure place. But given to the wrong people it allows censorship over the internet, nobody wants that. The internet is meant to be about freedom of speech, as soon as people start getting charged more to view certain websites because of their interests or people get flat out refused because somebody in power doesn't like what they are looking for, the internet is going to become a very empty husk of what it once was.
					</p>
					<img id='osi' src='assets/Osi-model.png' />
				</div>
			</section>
		</div>
	</body>
</html>
