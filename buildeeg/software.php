<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Final//EN">
<html>
	<head>
		<title>Building an EEG at home: software</title>
		<meta http-equiv="charset" content="text/html; charset=ISO-8859-1">
		<meta name="author" content="Dan Griffiths">
		<meta name="keywords" content="EEG, electroencephalograph, encephalograph, cheap, software, electric guru, bwview">
		<link rel="stylesheet" type="text/css" href="ss.css">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
<body text="#000000" bgcolor="#ffffff" link="#0000ee" vlink="#551a8b" alink="#ff0000">

<table class="title" width="100%">
<tr>
	<td align="center" width="33%">
		<img src="images/title_s.gif" alt="Title image"></td>
	<td colspan="3" align="center" style="vertical-align: middle;">
		<strong>Building an EEG at home with the OpenEEG project</strong>
		<h1>EEG Feedback Software</h1>
	</td>
</tr>
</table>

<table class="nav_t" width="100%">
<tr>
	<td align="center" width="25%" class="nav">
		Previous:
		<a href="circuits.php">Building the circuits</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		Powering up and testing
	</td>
</table>

<table align="center" width="95%" cellpadding="10">
<tr>
	<th>Screen shot</th>
	<th>Software</th>
</tr>

<tr>
	<td align="center">
		<a href="images/bwview_ss_full.jpeg">
		<img src="images/bwview_ss_thumb.jpeg" alt="BWView screen shot">
		</a>
	</td>
	<td>
		<strong>BWView</strong> (<a href="http://uazu.net/bwview/">http://uazu.net/bwview/</a>)<br>
			<p>
			 This application, released as free software under the GNU GPL v2 for Linux and Windows, is designed for getting a rapid visual understanding of recorded brain-wave data. It uses FFT-accelerated convolution to do the analysis, which enables much greater flexiblity than using the traditional FFT-of-windowed-data approach. The frequency is plotted on a log scale, which is much better for viewing data that includes a wide range of frequencies. The window size is proportional to the wavelength at any frequency, so the convolution is effectively being done with a complex wavelet at various different scales. The ratio of window size to wavelength can be varied easily to allow different aspects of the data to be shown.
		</p>
		<p>
		Features:
		<ul>
			<li>Visually displays EEG data.</li>
		</ul>
		</p>
		<p> Platforms: Linux, Windows </p>
		</td>
</tr>

<tr>
	<td align="center">
		<a href="images/elecguru_ss_full.jpeg">
		<img src="images/elecguru_ss_thumb.jpeg" alt="Electric Guru screen shot">
		</a>
	</td>
	<td>
		<strong>Electric Guru</strong> (<a href="http://www.realization.org/page/topics/electric_guru.htm">http://www.realization.org/page/topics/electric_guru.htm</a>)<br>
		<p>
			ElectricGuru is a computer program for neurofeedback. Although it's not ready for public release the author has agreed to post it for downloading so people who are working on the OpenEEG project can obtain it conveniently.
		</p>
		<p>
		Features:
		<ul>
			<li>Visually displays EEG data.</li>
			<li>Hardware simulator</li>
			<li>Brain mirror</li>
			<li>Reward tone for target frequencies</li>
		</ul>
		</p>
		<p> Platforms: Windows </p>
	</td>
</tr>

<tr>
	<td align="center"><img src="images/title_s.gif" alt="Empty screen shot"></td>
	<td>
		<strong>ttysnoop shell script</strong><br>
		<p>
			Prints out data received by the serial port.
		</p>
		<p>Copy the following lines into a file and execute. Change 'ttyS0' to the port the EEG is using.</p>

<p>
#!/bin/sh<br>
<br>
# Configure serial port<br>
stty -F /dev/ttyS0 sane 57600 intr undef quit undef erase undef kill undef eof undef eol undef eol2 undef start undef stop undef susp undef rprnt undef werase undef lnext undef flush undef min 1 time 0 ignbrk -brkint -icrnl -imaxbel -opost -onlcr -isig -icanon -iexten -echo -echoe -echok -echoctl -echoke<br>
<br>
# View port traffic and write to file '/tmp/test.dat'<br>
cat /dev/ttyS0 | tee /tmp/test.dat | od -tx1 -w17<br>
		<p>Platforms: Linux</p>
		</td>
</tr>

<tr>
	<td align="center"><img src="images/title_s.gif" alt="Empty screen shot"></td>
	<td>
		<strong>SBaGen</strong> (<a href="http://www.uazu.net/sbagen/">http://www.uazu.net/sbagen/</a>)<br>
		<p>
		 The theory behind binaural beats is that if you apply slightly different frequency sine waves to each ear, a beating affect is created in the brain itself, due to the brain's internal wiring. If, in the presence of these tones, you relax and let your mind go, your mind will naturally synchronize with the beat frequency. In this way it is possible to tune the frequency of your brain waves to particular frequencies that you have selected, using of the four bands: Delta - deep sleep, Theta - dreaming and intuitive stuff, Alpha - awake, focussed inside, Beta - awake, focussed outside.</p>
		 <p>
		  So, SBAGEN is my (Jim Peter's) utility, released as freeware (under the GNU General Public Licence) for Linux, Windows, DOS and Mac OS X, that generates pink noise and binaural tones in real-time according to a 24-hour programmed sequence read from a file. It can also be used to play a sequence on demand, rather than according to the clock, or to write a WAV file for playing later. It is ideal for anyone who wishes to experiment with these techniques and do research into this for themselves. </p>
			</td>
</tr>
</table>


<table class="nav_t" width="100%">
<tr>
	<td align="center" width="25%" class="nav">
		Previous:
		<a href="circuits.php">Building the circuits</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		Powering up and testing
	</td>
</table>


</body>
</html>
		<h2>User contributed comments and advice</h2>
		<p>
		If you have questions please do not post them here. That is what the <a href="http://lists.sourceforge.net/lists/listinfo/openeeg-list">mailing lists</a> are for.</p>
		<p><a name="comment_end"><a href="post.php?mode=Edit&page=software">Add a comment</a></a></p>
	<p>No comments posted</p>
<table class="nav_b" width="100%">
<tr>
	<td align="center" width="25%" class="nav">
		Previous:
		<a href="circuits.php">Building the circuits</a>
	</td>
	<td align="center" width="25%" class="nav">
		<a href="index.php">Contents</a>
	</td>
	<td align="center" width="25%" class="nav">
		Next:
		Powering up and testing
	</td>
</table>

</body>
</html>
