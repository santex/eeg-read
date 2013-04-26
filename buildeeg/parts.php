<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Final//EN">
<html>

<head>
	<title>Building an EEG at home: Acquiring the parts</title>
	<meta http-equiv="charset" content="text/html; charset=ISO-8859-1">
	<meta name="author" content="Dan Griffiths">
	<meta name="keywords" content="EEG, electroencephalograph, encephalograph, cheap, DIY, parts, order, ordering">

	<link rel="stylesheet" type="text/css" href="ss.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body text="#000000" bgcolor="#ffffff" link="#0000ee" vlink="#551a8b" alink="#ff0000">

<table class="title" width="100%">
<tr>
	<td align="center" width="25%">
		<img src="images/title_s.gif" alt="Title image"></td>
	<td colspan="3" align="center" style="vertical-align: middle;">
		<strong>Building an EEG at home with the OpenEEG project</strong>
		<h1>Acquiring the parts</h1>
	</td>
</tr>
</table>

<table class="nav_t" width="100%">
<tr>
	<td align="center" width="33%" class="nav">
		Previous:
		<a href="preparation.php">Preparation</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		<a href="circuits.php">Building the circuits</a>
	</td>
</table>

<p>
<strong>The total cost of the parts was $195 (NZ$380).</strong>
</p>
<p>
This section discusses where I got my parts from and what it cost. All prices are in US dollars unless stated and all shipping was to New Zealand.<br>
My purchase orders (covering BOM listed items only) can be viewed here: <a href="files/orders.txt">orders.txt</a>.
</p>

<p>I have summarised everything into following categories:</p>
<ul>
	<li><a href="#boards">The printed circuit boards (PCB's)</a></li>
	<li><a href="#components">The electrical components (BOM)</a></li>
	<li><a href="#power">The power supply</a></li>
	<li><a href="#cables">Cables</a></li>
	<li><a href="#casing">Casing and shielding</a></li>
	<li><a href="#electrodes">Electrodes</a></li>
	<li><a href="software.php">Software</a></li>
</ul>


<h2><a name="boards">The printed circuit boards (PCB's)</a></h2>
<p>
My circuit boards were printed by <a href="http://www.olimex.com">Olimex</a>, a Bulgarian circuit board manufacturer.
</p>
<p>
The boards (OpenEEG version 0.04) can be re-ordered by using this order form: <a href="files/sg300902.PDF">sg300902.PDF</a>. If you wish to order a later version then you will have to obtain a template reference number for it (ask the mailing list) or pay extra for an initial cut.
</p>
<p>
<strong>To order:</strong><br>
Send an email with your name, address, shipping option (ie. airmail parcel) and quote the reference number of the board that you want. Olimex will send back an order form. Payments can be made by credit card.
</p>

<p>
<strong>Cost:</strong> $32.45<br>
<strong>Estimated time of delivery:</strong> 2 weeks
</p>

<h2><a name="components">The electrical components (BOM)</a></h2>
<p>
A list of the required electrical components and the associated reference information is summarised in the bill of materials (BOM) located in the modularEEG files (see <a href="preparation.php#plans">plans</a>).
</p>

<p>I ordered from four vendors:</p>
<ul>
	<li><a href="#reichelt">Reichelt Electronics</a></li>
	<li><a href="rs">RS-Components</a></li>
	<li><a href="dse">Dick Smith Electronics</a></li>
	<li><a href="farnell">Farnell</a></li>
</ul>


<div class="indented">
<h3><a name="reichelt">Reichelt electronics</a></h3>
<a href="www.reichelt.de">http://www.reichelt.de</a>

<p>
This site is in German so use <a href="babelfish.altavista.com">Babelfish</a> to translate.<br>
The 47uF capacitors from here have an ESR of 2 ohms.
</p>

<p>
<strong>To order:</strong><br>
I used the online order form and my credit card to make the purchase. This was unnerving because I do not speak German, but it was worth it because most of the parts are here and the ordering codes are quoted in the BOM.
</p>

<p>
<strong>Cost:</strong> $90.00<br>
<strong>Estimated time of delivery:</strong> 2 weeks
</p>

<h3><a name="rs">RS-Components</a></h3>
<a href="http://rs-components.co.nz">http://rs-components.co.nz</a>

<p>
I could not find a TMV0505S dc-dc converter so I ordered an NMV0505SA from here instead. There is a footnote warning in the BOM that you need to read when using this part. Despite the warning I read 5.6V on IC103 pin 8 and did not have to take any extra measures.
</p>
<p>
<strong>Cost:</strong> $24.65<br>
<strong>Estimated time of delivery:</strong> 2 days
</p>

<h3><a name="dse">Dick Smith Electronics</a></h3>
<a href="dse.co.nz">http://dse.co.nz</a>

<p>
The 47uF capacitors from here have an ESR of 2 ohms.
</p>
<p>
<strong>Cost:</strong> $16.97<br>
<strong>Estimated time of delivery:</strong> 2 days
</p>

<h3><a name="farnell">Farnell</a></h3>
<a href="farnell.com">http://farnell.com</a>
<p>
This is where I found the elusive 0.8 ohms ESR 47uF capacitor. I also added a rocker switch to the list because a minimum order of NZ$10.00 was imposed.
</p>
<p>
<strong>Cost:</strong> $8.00<br>
<strong>Estimated time of delivery:</strong> 1 weeks
</p>

I used an old IDE cable to bridge the two circuit boards.
</div>

<h2><a name="power">The power supply</a></h2>
<p>
Not included in the BOM.<br>
I just happened to have an old 9V 200mA DC power supply lying around which was ideal. I purchased a dc power plug and socket for it and added a rocker switch to turn the eeg on and off (covered in my order from farnell). 
</p>


<p>
<strong>Cost:</strong> $2.70<br>
<strong>Estimated time of delivery:</strong> purchased in person at Dick Smith
</p>

<h2><a name="cables">Cables</a></h2>

<p>
Not included in the BOM.<br>
These are the cables you will need:</p>
<ul>
	<li>A serial cable (to connect the EEG to your PC)</li>
	<li>A programmer cable (see the cables schematic)</li>
	<li>A 9 pin d-sub interface and a small length of ribbon cable (to connect the digital board tx/rx inputs to the serial cable)</li>
	<li>Shielded cable to connect your electrode inputs to your amplifier channels</li>
	<li>Two small lengths of wire to connect your digital board switch inputs (5VO/5VI) to a power switch</li>
</ul>

<p>I already had these parts, except for the following which I ordered from Dick Smith:</p>
<ul>
	<li>9 pin sub-d idc f/ribbon plug, cat P2699 NZ$6.95</li>
	<li>1 meter of shielded twin core cable, cat W2034 NZ$1.45</li>
	<li>2x 220 Ohm resistors for the programmer cable, cat R0558 NZ$0.30</li>
</ul>

<p>
<strong>Cost:</strong> $4.50<br>
<strong>Estimated time of delivery:</strong> purchased in person at Dick Smith
</p>

<h2><a name="casing">Casing and shielding</a></h2>
<p>
Finding an adequate box was a difficult task. The best I could find was a rather pricey piece of plastic from Dick Smith: Small sloping case, cat H2193 NZ$17.20
</p>
<p>
For my shielding I used adhesive aluminium tape (already owned).
</p>

<p>
<strong>Cost:</strong> $8.00<br>
<strong>Estimated time of delivery:</strong> purchased in person at Dick Smith
</p>

<h2><a name="electrodes">The electrodes</a></h2>
<p>
See <a href="electrodes.php">DIY electrodes</a>.
</p>
<ul>
	<li>5x plastic coax plugs (male), P2021 NZ$11.25</li>
	<li>1m 5 core data cable, W2040 NZ$2.50</li>
	<li>1m twin core shielded audio cable, W2034 NZ$1.45</li>
</ul>
<p>I also used a 5 pin din plug and socket which I already had.</p>

<p>
<strong>Cost:</strong> $7.80<br>
<strong>Estimated time of delivery:</strong> purchased in person at Dick Smith
</p>

<table class="nav_t" width="100%">
<tr>
	<td align="center" width="33%" class="nav">
		Previous:
		<a href="preparation.php">Preparation</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		<a href="circuits.php">Building the circuits</a>
	</td>
</table>


</body>
</html>
		<h2>User contributed comments and advice</h2>
		<p>
		If you have questions please do not post them here. That is what the <a href="http://lists.sourceforge.net/lists/listinfo/openeeg-list">mailing lists</a> are for.</p>
		<p><a name="comment_end"><a href="post.php?mode=Edit&page=parts">Add a comment</a></a></p>
	
<div class="comments">
<p>
Posted February 2 2005 2:54 pm, by Anonymous<br>
Subject: does this work
</p></div>

<p>
Hi I am doing an eeg design project, and I have been having a hard time putting together the design.
</p>
 <p><a name="comment_end"><a href="post.php?mode=Edit&page=parts">Add a comment</a></a></p> 
<table class="nav_b" width="100%">
<tr>
	<td align="center" width="33%" class="nav">
		Previous:
		<a href="preparation.php">Preparation</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		<a href="circuits.php">Building the circuits</a>
	</td>
</table>

</body>
</html>
