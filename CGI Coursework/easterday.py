#!/usr/bin/python
import cgi, cgitb, datetime
cgitb.enable()
form = cgi.FieldStorage()
formattype = int(form.getvalue('format'))
yeartofind = int(form.getvalue('year'))
months = list([
				'January',
				'Febuary',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'Novemeber',
				'December'
					])

def easter_formula(year):
    a = year % 19
    b = year // 100
    c = year % 100
    d = (19 * a + b - b // 4 - ((b - (b + 8) // 25 + 1) // 3) + 15) % 30
    e = (32 + 2 * (b % 4) + 2 * (c // 4) - d - (c % 4)) % 7
    f = d + e - 7 * ((a + 11 * d + 22 * e) // 451) + 114
    month = f // 31
    day = f % 31 + 1    
    return datetime.date(year, month, day)

#This is the value for easter from the formula
thiseaster = easter_formula(yeartofind)

#Check to see what formatting options the user is after and return the type they want
if formattype == 1:
	formatteddate = str(thiseaster.day) + '/' + str(thiseaster.month) + '/' + str(thiseaster.year)
elif formattype	== 2:
	day = int(thiseaster.day)
	if 4 <= day <= 20 or 24 <= day <= 30:
   		 suffix = "th"
	else:
	    suffix = ["st", "nd", "rd"][day % 10 - 1]
	formatteddate = str(day) + '<sup>' + suffix + '</sup> ' + str(months[int(thiseaster.month) - 1]) + ' ' + str(thiseaster.year)
elif formattype	== 3:
	formatteddate = str(thiseaster.day) + '/' + str(thiseaster.month) + '/' + str(thiseaster.year)
	day = int(thiseaster.day)
	if 4 <= day <= 20 or 24 <= day <= 30:
   		 suffix = "th"
	else:
	    suffix = ["st", "nd", "rd"][day % 10 - 1]
	formatteddate = formatteddate + ' - ' + str(day) + '<sup>' + suffix + '</sup> ' + str(months[int(thiseaster.month) - 1]) + ' ' + str(thiseaster.year)

#Save the page content in a docstring to make ouputting it easier
pagecontent = """
<!DOCTYPE html>
<html lang= "en" >
	<head>
		<title>When does easter fall?</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../cgicoursework/styles.css" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<div id="titles">
				<div id="page_title">
					<h1>WHEN DOES EASTER FALL?!</h1>
				</div>
				<div id="page_sub_title">
					<h2>EASTER EGGS!</h2>
				</div>
			</div>
		</header>
		<div id="body_container">		
			<div id='left_sidebar'>
				<div id='formatting'>
					<p>EASTER BUNNY</p>
					<p>
						<pre id='bunny'>
      /`\   /`\\
     (/\ \-/ /\)
        )6 6(
      >{= Y =}<
       /'-^-'\\
      (_)""-(_).
     /*  ((*   *'.
    |   *))  *   *\\
    | *  ((*   *  /
     \  *))  *  .'
      '-.((*_.-'		
					</pre>
				</p>
				</div>
			</div>
			<section style='min-height:222px;'>
				<div class="wotext">
							<span id='titleform'>EASTER FALLS ON THE...</span>
							<span id='yeardate'>%s</span>
							<span id='inyear'>... IN THE YEAR %i</span>
							<span id='again'><a href='../cgicoursework/home.html'>AGAIN?</a></span>
				</div>
			</section>
		</div>
	</body>
</html>
"""
#print the nesacerry headers followed by the page content whilst inserting the calculated values
print("Content-Type: text/html; charset=utf-8")
print("")
print(pagecontent % (str(formatteddate), int(yeartofind)))
