<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Final//EN">
<html>
	<head>
		<title>Building an EEG at home: building the circuits</title>
		<meta http-equiv="charset" content="text/html; charset=ISO-8859-1">
		<meta name="author" content="Dan Griffiths">
		<meta name="keywords" content="EEG, electroencephalograph, encephalograph, cheap, DIY, circuit, electronics, PCD, assembly, construction">
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
		<h1>Building the circuits</h1>
	</td>
</tr>
</table>

<table class="nav_t" width="100%">
<tr>
	<td align="center" width="33%" class="nav">
		Previous:
		<a href="parts.php">Acquiring the parts</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		<a href="software.php">Software</a>
	</td>
</table>

<p>These are pictures of the circuits after completion. Click to enlarge.</p>
<br>

<table align="center">
<tr>
	<th>The amplifier board</th>
	<th>The digital board</th>
</tr>
<tr>
	<td>
		<a href="images/amp_l.jpeg"><img src="images/amp.jpeg" border="0" title="OpenEEG amp v0.04 - click to enlarge" alt="Picture of amplifier PCB"></a>
	</td>
	<td>
		<a href="images/digital_l.jpeg"><img src="images/digital.jpeg" border="0" title="OpenEEG digital v0.04 - click to enlarge" alt="Picture of digital PCB"></a>
	</td>
</tr>
</table>

<h2>Preparing to build the circuit boards</h2>
<ol>
<li>First of all, scrutinise your PCB's (printed circuit boards) closely for defects. One of the tracks on my amplifier board was shorting to ground and blocking the calibration signal. It took me a week to find the problem and others have experienced this as well. Viewing the board while lit from behind is a good way to find any defects.
</li>

<li>
Double check the values on your components, especially the resistors. Being a novice and (at the time of assembly) unable to read resistor colour codes I took it on blind faith that the vendor would deliver the correct values. This was not so! As a result I had to replace 16 resistors which was a difficult task. The pictures above were taken before I replaced them.<br>
I used this site to learn how to read resistor colour codes: <a href="http://members.aol.com/_ht_a/RAdelkopf/resist.html">Resistors, how to read them</a>.
</li>

<li>
Leave your IC's (chips) in their anti static packaging until <em>everything</em> else has been completed. This includes powering up the circuit for the first time. They are very sensitive to static and this will minimise the risk of damage.
</li>

<li>
Have a read of the OpenEEG build tips: <a href="http://openeeg.sourceforge.net/doc/modularEEG-build-tips.txt">http://openeeg.sourceforge.net/doc/modularEEG-build-tips.txt</a>
</ol>

<h2>Soldering the components</h2>

<ol>
<li>Heat your soldering iron. Scrape it regularly with something metal to keep the tip clean from flux and dirt (flux is built into the core of solder to keep it flowing). It is best to "tin" the iron by wetting it with some fresh solder before every application. This will keep the temperature up and the solder smooth.
</li>

<li>Start with the lowest profile (smallest) components first and work your way up to the largest. This will enable you to rest the board (and the component you are working on) on your table top while soldering it. 
</li>

<li>Place your component through the appropriate holes on the PCB.</li>

<li>Turn the circuit over. Bend the legs a little to hold the component in place.</li>

<li>Apply solder. Applying just the right amount of heat to the component while adding solder is a bit of an art form. Too much heat will risk damaging your component and too little will not do the job. Most of these parts are hardy so don't be too worried about it. The IC's are the most sensitive parts and by using dill sockets you can avoid this risk with them.<br>

If you leave the iron on the solder weld long enough for it to "run and settle" you will decrease the risk of a dry joint and give it a nicer finish. A dry joint is when the conductivity of the join is impaired because the solder has not bonded properly. If the solder has run through the board and can be seen on the other side, this is a good indicator of a strong bond. You should use just enough to make a strong electrical connection and hold the component in place.<br>
If you are finding the solder will not 'stick' then chances are that too much flux is on the component. Carefully scrape off the flux and clean the tip of your soldering iron. Flux appears as a clear-brown residue.

<li>Trim the excess from the leg of the component with your side cutters.</li>
</ol>

<h2>Correcting mistakes</h2>
<p>
If you are unfortunate enough to make a mistake, buy a desoldering pump and follow these steps:
</p>

<ol>
<li>
Take your time. There is no quick and easy way to do this.
</li>

<li>
Position the nose of the desoldering pump as close to the solder weld as you 
can. Melt the solder with your soldering iron. The faster you cover the weld 
and press the button the hotter the solder will be and the better your 
results will be. You don't want to leave the heat on longer than required. 
Repeat if necessary.  It may be beneficial to practise the action a couple of 
times before applying heat.
</li>

<li>
You will be left with an almost clear hole. Usually there is some residual 
solder holding the component in place. Use the soldering iron to push the 
component as far through the board as you can. Proceed carefully, it is very 
easy to snag and lift the tracks of the PCB. Make sure none of them are 
sticking to the component as you move it.
</li>

<li>
Hold a pin (or a cut off leg from a previous component) with long nose 
pliers and heat it with the soldering iron. You may need to tin (put a bit of 
solder on) the end of the iron first to get optimum heat transfer. While 
heating the pin you can use it to push the component out the rest of the way. 
</li>

<li>
If the hole is not completely cleared you can tidy it up with the heated 
pin or try the desoldering pump again.
</li>
</ol>
<p>
Good luck.
</p>

<table class="nav_t" width="100%">
<tr>
	<td align="center" width="33%" class="nav">
		Previous:
		<a href="parts.php">Acquiring the parts</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		<a href="software.php">Software</a>
	</td>
</table>


</body>
</html>
		<h2>User contributed comments and advice</h2>
		<p>
		If you have questions please do not post them here. That is what the <a href="http://lists.sourceforge.net/lists/listinfo/openeeg-list">mailing lists</a> are for.</p>
		<p><a name="comment_end"><a href="post.php?mode=Edit&page=circuits">Add a comment</a></a></p>
	<p>No comments posted</p>
<table class="nav_b" width="100%">
<tr>
	<td align="center" width="33%" class="nav">
		Previous:
		<a href="parts.php">Acquiring the parts</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		<a href="software.php">Software</a>
	</td>
</table>

</body>
</html>
