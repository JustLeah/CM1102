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
					<h2>AN OVERVIEW</h2>
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
						<a href='http://www.infosectoday.com/Articles/Deep_Packet_Inspection_Technologies.htm'>infosectoday.com</a><br />
						<a href='http://www.pcworld.com/article/249137/what_is_deep_packet_inspection_.html'>pcworld.com</a>
					</p>
				</div>
			</div>
			<section>
				<div class="wotext">
					<p>
						So what exactly is deep packet inspection (DPI)? DPI is when and ISP or someone higher up on your network is using software to monitor the data that is contained in each of your packets, they also have the ability to decide what to do with those packets. For example, an ISP may see that I am viewing youtube and start sniffing the packets, they can then throttle the speed at which I will receive those packets thus restricting my download speed and in turn just ruining the whole viewing experience.
					</p>
					<p>
						The main benefit of DPI is security. This gives the network admin an extra layer of security to decide what information goes where. It can almost be seen as a second type of firewall which allows to block and allow incoming/outgoing connections. There is currently a lot of controversy regarding DPI. The NSA are using it to spy on people, companies such as Comcast in the USA are using it to throttle not just paying customers internet speeds but as well as large companies such as Netflix and Youtube.
					</p>
					<p>
						This is what is causing the whole issue with internet fast lanes, DPI is what allows ISP's and establishments to dictate what people are able to view and do on the internet. In a place of work this is understandable, but having constantly monitored and restricted internet based on a governments needs is a big no no. This is currently being taken to the extreme in places such as China and Korea.
					</p>
					<img id='chansenl' src='assets/chris.jpg' />
					<img id='chansenm' src='assets/chris2.png' />
					<img id='chansenr' src='assets/chris.jpg' />
				</div>
			</section>
		</div>
	</body>
</html>
