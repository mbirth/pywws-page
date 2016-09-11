<?php
    // ini_set( 'date.timezone', 'Europe/Berlin' );
    date_default_timezone_set( 'Europe/Berlin' );
?>
<!DOCTYPE html>
<html lang="de" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:profile="http://ogp.me/ns/profile#">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

    <meta property="og:title" content="Wetterdaten für Falkensee"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://fks.birth-online.de/"/>
    <meta property="og:image" content="http://fks.birth-online.de/falkensee.png"/>
    <meta property="og:description" content="Wetterdaten für Falkensee seit 2009."/>
    <meta property="og:latitude" content="52.574202"/>
    <meta property="og:longitude" content="13.127534"/>
    <meta property="og:street-address" content="Lortzingallee 16"/>
    <meta property="og:locality" content="Falkensee"/>
    <meta property="og:region" content="BR"/>
    <meta property="og:postal-code" content="14612"/>
    <meta property="og:country-name" content="Germany"/>
    <meta property="og:phone_number" content="+49 3322 3198"/>
    <meta property="og:fax_number" content="+49 3322 289547"/>

    <title>Wetterdaten für Falkensee</title>
    <link rel="SHORTCUT ICON" type="image/vnd.microsoft.icon" href="/favicon.ico"/>
    <link rel="alternate" type="application/rss+xml" title="Daten der letzten Stunde" href="feed_hourly.xml"/>
    <link rel="alternate" type="application/rss+xml" title="Daten des letzten Tages" href="feed_daily.xml"/>
    <!--script type="text/javascript" src="//www.google.com/jsapi"></script-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $('ul.tabs').tabs('div.panes > div');
        } );
    </script>
    <link rel="stylesheet" type="text/css" href="css/tabs-no-images.css" />
    <style type="text/css">
        DIV#bighead {
            font-size: 2.5em;
            font-weight: bold;
        }

        IMG#coat {
            float: left;
            width: 113px;
            margin-bottom: 10px;
        }

        UL.tabs {
            clear: both;
        }

        DIV#footer {
            margin-top: 10px;
            padding-top: 5px;
            text-align: center;
        }

        #footer img {
        	width: 16px;
        	height: 16px;
        	vertical-align: bottom;
        }

        A {
            text-decoration: none;
        }

        DIV#loc {
            background-color: #ccf;
            border: 1px dotted #88f;
            top: 10px;
            width: 150px;
            right: 10px;
            height: 60px;
            position: absolute;
            z-index: 100;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="heading">
    <img id="coat" src="falkensee.png" />
    <div id="bighead">Wetterdaten für Falkensee</div>
    Stand: <?php echo date( 'Y-m-d H:i.s', filemtime( '6hrs.txt' ) ); ?>
</div>
<!--script type="text/javascript">
    if ( google.loader.ClientLocation && google.loader.ClientLocation.address.city ) {
        document.write( '<div id="loc">' );
        document.write( 'Ihr Internetzugriff erfolgt aus:<br /><strong>' + google.loader.ClientLocation.address.city + '</strong>' );
        document.write( '</div>' );
    }
</script-->

<ul class="tabs">
    <li><a href="#6hrs">6 Stunden</a></li>
    <li><a href="#24hrs">24 Stunden</a></li>
    <li><a href="#7days">7 Tage</a></li>
    <li><a href="#28days">28 Tage</a></li>
    <li><a href="#12months">12 Monate</a></li>
    <li><a href="#allmonths">alle Monate</a></li>
    <li><a href="#2009">2009</a></li>
    <li><a href="#2010">2010</a></li>
    <li><a href="#2011">2011</a></li>
    <li><a href="#2012">2012</a></li>
    <li><a href="#2016">2016</a></li>
    <li><a href="#wunderground">WUnderground</a></li>
</ul>

<div class="panes">
    <div><!-- letzte 6 Stunden -->
        <?php include('6hrs.txt'); ?>
    </div>

    <div><!-- letzte 24 Stunden -->
        <img src="24hrs.svg" />
        <?php include('24hrs.txt'); ?>
        <img src="rose_24hrs.svg" />
    </div>

    <div><!-- letzte 7 Tage -->
        <img src="7days.svg" />
        <?php include('7days.txt'); ?>
        <img src="rose_7days_nights.svg" />
    </div>

    <div><!-- letzte 28 Tage -->
        <img src="28days.svg" />
    </div>

    <div><!-- letzte 12 Monate -->
        <?php include('12months.txt'); ?>
    </div>

    <div><!-- alle Monate -->
        <?php include('allmonths.txt'); ?>
    </div>

    <div><!-- 2009 -->
        <img src="2009.png" />
    </div>

    <div><!-- 2010 -->
        <img src="2010.png" />
    </div>

    <div><!-- 2011 -->
        <img src="2011.png" />
    </div>

    <div><!-- 2012 -->
        <img src="2012.png" />
    </div>

    <div><!-- 2016 -->
        <img src="2016.svg" />
    </div>

    <div><!-- WUnderground -->
    	<p>
	        <a href="http://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=IBRANDEN17&amp;graphspan=week" target="_blank">
	            Diese Station bei <em>Weather Underground</em>:<br />
	            <img src="http://banners.wunderground.com/cgi-bin/banner/ban/wxBanner?bannertype=pws250_metric&amp;weatherstationcount=IBRANDEN17" />
	            <img src="http://banners.wunderground.com/cgi-bin/banner/ban/wxBanner?bannertype=WeatherStationCount&amp;weatherstationcount=IBRANDEN17" height="160" width="163" border="0" alt="Weather Underground PWS IBRANDEN17" />


	        </a>
	        <object width="290" height="130">
	        	<param name="movie" value="http://www.wunderground.com/swf/pws_mini_rf_nc.swf?station=IBRANDEN17&amp;freq=&amp;units=metric&amp;lang=EN" />
	        	<embed src="http://www.wunderground.com/swf/pws_mini_rf_nc.swf?station=IBRANDEN17&amp;freq=&amp;units=metric&amp;lang=EN" type="application/x-shockwave-flash" width="290" height="130" />
	    	</object>
    	</p>
    	<p>
	        <object width="600" height="400">
	            <param name="movie" value="http://www.wunderground.com/swf/Rapid_Fire.swf?units=metric&amp;station=IBRANDEN17" />
	            <embed src="http://www.wunderground.com/swf/Rapid_Fire.swf?units=metric&amp;station=IBRANDEN17" type="application/x-shockwave-flash" width="600" height="400" />
	        </object>
	    </p>
    </div>
</div>

<div id="footer">
    powered by <a href="https://github.com/jim-easterbrook/pywws">pywws</a><br />
    <a href="https://twitter.com/_FalkenseeDE"><img src="img/Twitter.png"/> Twitter</a> | <a rel="author" href="https://plus.google.com/+GottfriedBirth"><img src="//ssl.gstatic.com/images/icons/gplus-16.png"/> Google+</a> | <a href="https://github.com/mbirth/pywws-page"><img src="//github.com/favicon.ico"/> GitHub</a> | <a href="http://markus.birth-online.de/">Kontakt / Impressum</a>
</div>

<!-- BEGIN Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-259868-13', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script>
<!-- END Google Analytics -->

</body>
</html>
