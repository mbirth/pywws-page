<?php
    // ini_set( 'date.timezone', 'Europe/Berlin' );
    date_default_timezone_set( 'Europe/Berlin' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Wetterdaten für Falkensee</title>
    <link rel="SHORTCUT ICON" type="image/vnd.microsoft.icon" href="/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="Daten der letzten Stunde" href="feed_hourly.xml" />
    <link rel="alternate" type="application/rss+xml" title="Daten des letzten Tages" href="feed_daily.xml" />
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAANEKwbeFz1aWWanxMaKJYnRRNOcV_wtLph1PjT6OqnqWDY5WWGBSMbv40QA3AaN93X3hyLBMOQMpv6A"></script>
    <script type="text/javascript">
        google.load( 'jquery', '1.4.2' );
    </script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript">
        // <![CDATA[
        $(document).ready( function() {
            $('ul.tabs').tabs('div.panes > div');
        } );
        // ]]>
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
<script type="text/javascript">
    // <![CDATA[
    if ( google.loader.ClientLocation && google.loader.ClientLocation.address.city ) {
        document.write( '<div id="loc">' );
        document.write( 'Ihr Internetzugriff erfolgt aus:<br /><strong>' + google.loader.ClientLocation.address.city + '</strong>' );
        document.write( '</div>' );
    }
    // ]]>
</script>

<ul class="tabs">
    <li><a href="#6hrs">6 Stunden</a></li>
    <li><a href="#24hrs">24 Stunden</a></li>
    <li><a href="#7days">7 Tage</a></li>
    <li><a href="#28days">28 Tage</a></li>
    <li><a href="#12months">12 Monate</a></li>
    <li><a href="#allmonths">alle Monate</a></li>
    <li><a href="#2009">2009</a></li>
    <li><a href="#2010">2010</a></li>
    <li><a href="#wunderground">WUnderground</a></li>
</ul>

<div class="panes">
    <div><!-- letzte 6 Stunden -->
        <?php include('6hrs.txt'); ?>
    </div>

    <div><!-- letzte 24 Stunden -->
        <img src="24hrs.png" />
        <?php include('24hrs.txt'); ?>
        <img src="rose_24hrs.png" />
    </div>

    <div><!-- letzte 7 Tage -->
        <img src="7days.png" />
        <?php include('7days.txt'); ?>
        <img src="rose_7days_nights.png" />
    </div>

    <div><!-- letzte 28 Tage -->
        <img src="28days.png" />
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
    <div><!-- WUnderground -->
        <a href="http://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=IBRANDEN17&graphspan=week" target="_blank">
            Diese Station bei <em>Weather Underground</em>:<br />
            <img src="http://banners.wunderground.com/cgi-bin/banner/ban/wxBanner?bannertype=pws250_metric&weatherstationcount=IBRANDEN17" />
            <img src="http://banners.wunderground.com/cgi-bin/banner/ban/wxBanner?bannertype=WeatherStationCount&weatherstationcount=IBRANDEN17" height="160" width="163" border="0" alt="Weather Underground PWS IBRANDEN17" />
        </a>
        <!--object width="600" height="400">
            <param name="movie" value="http://www.wunderground.com/swf/Rapid_Fire.swf?units=metric&station=IBRANDEN17" />
            <embed src="http://www.wunderground.com/swf/Rapid_Fire.swf?units=metric&station=IBRANDEN17" type="application/x-shockwave-flash" width="600" height="400" />
        </object-->
    </div>
</div>

<div id="footer">
    powered by <a href="http://code.google.com/p/pywws/">pywws</a><br />
    <a href="http://twitter.com/_FalkenseeDE"><img src="img/Twitter.png" /> Twitter</a> | <a href="http://markus.birth-online.de/">Kontakt / Impressum</a>
</div>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.birth-online.de/" : "http://piwik.birth-online.de/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 11);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.birth-online.de/piwik.php?idsite=11" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tag -->

</body>
</html>