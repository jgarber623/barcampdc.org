<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>BarCamp DC | a technology unconference</title>
	<meta name="author" content="BarCamp DC" />
	<meta name="description" content="BarCamp comes to the nation's capital Saturday, August 11th, 2007." />
	<meta name="keywords" content="barcamp dc, barcamp washington dc, barcamp, unconference, washington dc tech events, washington dc events, technology" />
	<meta name="robots" content="all" />
	<meta name="geo.position" content="38.903937;-77.036925" />
	<meta name="geo.region" content="US-DC" />
	<meta name="geo.placename" content="Washington DC" />
	<meta name="geo.country" content="US" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/barcamp.css" />
	<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA4vs3EKzQQ5215QbVI-kWVhS1rteLo4F7_IcxunjOqbSz4U7yBxRyoy8WuKFh6GsjkvVRsujUkTieGA"></script>
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/barcampdc.js"></script>
</head>

<body>

	<div id="wrap">
		<?php if ( isset( $_GET['merchant_return_link'] ) ) { ?>
		<div id="thanks">
			<p><strong>Thanks for sponsoring!</strong> We really appreciate your help! Head on over to <a href="http://barcamp.org/BarCampWashingtonDC">the wiki</a> and add yourself as a sponsor!</p>
		</div>
		<?php } ?>
		<div id="header">
			<h1><img src="images/logo.gif" alt="BarCamp DC" /></h1>
		</div>
		<div id="content">
			<div id="about">
				<!-- <p class="update vcard vevent"><strong>Update:</strong> There will be an <span class="summary">After Party</span> at <a href="http://www.cafeasia.com/" class="fn org url">Cafe Asia</a> <span class="adr">(<span class="street-address">1720 I Street NW</span>, <span class="locality">Washington</span>, <abbr class="region" title="District of Columbia">DC</abbr> <span class="postal-code">20006</span>)</span> beginning at <abbr class="dtstamp" title="2007-08-11T17:30:00Z-0500">5:30 PM</abbr>. Everyone is invited, even if you can't make it to BarCamp! Sign up at <a href="http://upcoming.yahoo.com/event/236340/">Upcoming</a>!</p> -->
				<dl class="vevent">
					<dt id="what">What</dt>
						<dd><span class="summary">BarCamp DC</span> is an ad-hoc <a href="http://en.wikipedia.org/wiki/Unconference">unconference</a> and is part of the larger <a href="http://barcamp.org/">BarCamp</a> movement. While there are topics suggested for discussion, there is no set agenda until everyone gathers. Attendees are required to participate to some degree: either by giving a presentation, demo, etc. or by facilitating a group discussion. Topics are flexible, as well.</dd>
					<dt id="when">When</dt>
						<dd>Saturday, August 11th, 2007, <abbr class="dtstart" title="2007-08-11T09:30:00Z-0500">9:30 AM</abbr> &ndash; <abbr class="dtend" title="2007-08-11T17:30:00Z-0500">5:30 PM</abbr></dd>
					<dt id="where">Where</dt>
						<dd class="vcard">
							<a href="http://www.fleishman.com/" class="fn org url">Fleishman-Hillard Inc.</a>
							<span class="adr">
								<span class="street-address">1615 L Street NW</span>
								<span class="locality">Washington, <abbr class="region" title="District of Columbia">DC</abbr></span> <span class="postal-code">20036</span>
								<span class="geo">
									<span class="latitude">38.903937</span>, <span class="longitude">-77.036925</span>
								</span>
							</span>
							<dl id="transportation">
								<dt>Metrorail</dt>
									<dd>
										<ul id="metrorail">
											<li><a href="http://www.wmata.com/metrorail/Stations/station.cfm?station=4" class="red">Farragut North</a>,</li>
											<li><a href="http://www.wmata.com/metrorail/Stations/station.cfm?station=38" class="blue orange">Farragut West</a>,</li>
											<li><a href="http://www.wmata.com/metrorail/Stations/station.cfm?station=36" class="blue orange">McPherson Square</a></li>
										</ul>
									</dd>
								<dt>Metrobus</dt>
									<dd>
										<ul id="metrobus">
											<li>30,</li>
											<li>32,</li>
											<li>34,</li>
											<li>35,</li>
											<li>36,</li>
											<li>38B,</li>
											<li>42,</li>
											<li>52,</li>
											<li>53,</li>
											<li>54,</li>
											<li>80,</li>
											<li>Circulator,</li>
											<li>D1,</li>
											<li>D3,</li>
											<li>D5,</li>
											<li>D6,</li>
											<li>L2,</li>
											<li>N2,</li>
											<li>N4,</li>
											<li>N6,</li>
											<li>S1,</li>
											<li>S2,</li>
											<li>S4</li>
										</ul>
									</dd>
							</dl>
						</dd>
				</dl>
			</div>
			
			<div id="sponsors" class="box">
				<h3>Sponsors</h3>
				<ul>
					<li class="vcard"><a href="http://200ok.net/" class="fn org url">200 OK</a>,</li>
					<li class="vcard"><a href="http://dev.aol.com/" class="fn org url">AOL Developer Network</a>,</li>
					<li class="vcard"><a href="http://caseysoftware.com/" class="fn org url">CaseySoftware</a>,</li>
					<li class="vcard"><a href="http://www.clearspring.com/" class="fn org url">Clearspring Technologies</a>,</li>
					<li class="vcard"><a href="http://www.culturecaptioning.com/" class="fn org url">Culture Captioning</a>,</li>
					<li class="vcard"><a href="http://www.digitalphenom.com/" class="fn org url">Digital Phenom</a>,</li>
					<li class="vcard"><a href="http://www.fleishman.com/" class="fn org url">Fleishman-Hillard</a>,</li>
					<li class="vcard"><a href="http://www.freewebs.com/" class="fn org url">Freewebs</a>,</li>
					<li class="vcard"><a href="http://www.jfciii.com/" class="fn url">John F Croston III</a>,</li>
					<li class="vcard"><a href="http://www.jounce.net/" class="fn org url">Jounce</a>,</li>
					<li class="vcard"><a href="http://lawver.net/" class="fn url">Kevin Lawver</a>,</li>
					<li class="vcard"><a href="http://dc.metblogs.com/" class="fn org url">Metroblogging DC</a>,</li>
					<li class="vcard"><a href="http://www.microsoft.com/" class="fn org url">Microsoft</a>,</li>
					<li class="vcard"><a href="http://nclud.com/" class="fn org url">nclud</a>,</li>
					<li class="vcard"><a href="http://www.setconsulting.com/" class="fn org url">SET Consulting</a>,</li>
					<li class="vcard"><a href="http://www.sunlightfoundation.com/" class="fn org url">Sunlight Foundation</a>,</li>
					<li class="vcard"><a href="http://www.viget.com/" class="fn org url">Viget Labs</a></li>
				</ul>
			</div>
			
			<div id="actions" class="box">
				<h3>Actions</h3>
				<ul>
					<li>Check out the <a href="/wiki">BarCamp DC wiki</a> for tons of information,</li>
					<li>mark yourself as "attending" on the <a href="http://upcoming.yahoo.com/event/211115/" class="upcoming">Upcoming event page</a>,</li>
					<li>join the <a href="http://www.flickr.com/groups/barcampdc" class="flickr">Flickr group</a> and post photos from the event,</li>
					<li>follow us on <a href="http://www.twitter.com/barcampdc" class="twitter">Twitter</a>,</li>
					<li>see who's <a href="http://technorati.com/search/barcampdc+OR+barcampwashingtondc" class="technorati">blogged about BarCamp DC</a>, and</li>
					<li>learn more about the BarCamp unconference concept at the <a href="http://barcamp.org/">BarCamp site</a>.</li>
				</ul>
			</div>
		</div>
		<div id="footer">
			<p><img src="images/icon-cc.gif" alt="Creative Commons logo" /> Some rights reserved. This site and its content are licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/" rel="license">Creative Commons Attribution-ShareAlike 3.0 License</a>.</p>
		</div>
	</div>

</body>
</html>