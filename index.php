<?php
    // ini_set( 'date.timezone', 'Europe/Berlin' );
    date_default_timezone_set( 'Europe/Berlin' );
?>
<!DOCTYPE html>
<html lang="de" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:profile="http://ogp.me/ns/profile#">
<head>
  <title>Wetterdaten Falkensee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

  <meta property="og:title" content="Wetterdaten für Falkensee"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://fks.birth-online.de/"/>
  <meta property="og:image" content="https://fks.birth-online.de/falkensee.png"/>
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

  <link rel="stylesheet" href="css/materialicons.css"/>
  <link rel="stylesheet" href="css/material.indigo-pink.min.css"/>
  <script defer src="js/material.min.js"></script>
  <style type="text/css">
    .mdl-layout__drawer img {
      width: 16px;
      height: 16px;
      vertical-align: middle;
    }

    img {
      max-width: 100%;
    }

    .mdl-layout__drawer div {
      width: 70%;
      margin: 0 auto;
    }

    .mdl-layout__drawer div img {
      width: 100%;
      height: 100%;
    }

    .mdl-layout__tab-panel {
      display: none;
    }

    .mdl-layout__tab-panel.is-active {
      display: block;
    }

    .mdl-layout__tab-panel.is-scrollable {
      overflow-x: auto;
    }

    .mdl-card {
      width: 1028px;
      margin: 1em auto;
    }

    .mdl-card__supporting-text {
      margin: 0 auto;
      width: auto;
    }

    .mdl-card td {
      color: black;
    }
  </style>
</head>
<body>
<!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Wetterdaten für Falkensee (Stand: <?php echo date( 'Y-m-d H:i.s', filemtime( '6hrs.txt' ) ); ?>)</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#scroll-tab-6hrs" class="mdl-layout__tab is-active">6 Std.</a>
      <a href="#scroll-tab-24hrs" class="mdl-layout__tab">24 Std.</a>
      <a href="#scroll-tab-7days" class="mdl-layout__tab">7 Tage</a>
      <a href="#scroll-tab-28days" class="mdl-layout__tab">28 Tage</a>
      <a href="#scroll-tab-12mo" class="mdl-layout__tab">12 Monate</a>
      <a href="#scroll-tab-2017" class="mdl-layout__tab">2017</a>
      <a href="#scroll-tab-2016" class="mdl-layout__tab">2016</a>
      <a href="#scroll-tab-2012" class="mdl-layout__tab">2012</a>
      <a href="#scroll-tab-2011" class="mdl-layout__tab">2011</a>
      <a href="#scroll-tab-2010" class="mdl-layout__tab">2010</a>
      <a href="#scroll-tab-2009" class="mdl-layout__tab">2009</a>
      <a href="#scroll-tab-alldata" class="mdl-layout__tab">Alle Monate</a>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Über…</span>
    <div><img src="img/falkensee.svg"/></div>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="https://github.com/jim-easterbrook/pywws">powered by pywws</a>
      <a class="mdl-navigation__link" href="https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=IBRANDEN17"><img src="img/icon_wunderground.png"/> WUnderground</a>
      <a class="mdl-navigation__link" href="https://twitter.com/_FalkenseeDE"><img src="img/icon_twitter.png"/> Twitter</a>
      <a class="mdl-navigation__link" rel="author" href="https://plus.google.com/+GottfriedBirth"><img src="img/icon_gplus.png"/> Google+</a>
      <a class="mdl-navigation__link" href="https://github.com/mbirth/pywws-page"><img src="img/icon_github.png"/> GitHub</a>
      <a class="mdl-navigation__link" href="https://markus.birth-online.de/">Kontakt / Impressum</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active is-scrollable" id="scroll-tab-6hrs">
      <div class="page-content"><!-- letzte 6 Stunden -->
        <?php include('6hrs.txt'); ?>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-24hrs">
      <div class="page-content"><!-- letzte 24 Stunden -->
        <img src="24hrs_temp.svg" />
        <img src="24hrs_wind.svg" />
        <img src="24hrs_rain.svg" />
        <img src="24hrs_baro.svg" />
        <img src="24hrs_clouds.svg" />
        <?php include('24hrs.txt'); ?>
        <img src="rose_24hrs.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-7days">
      <div class="page-content"><!-- letzte 7 Tage -->
        <img src="7days_temp.svg" />
        <img src="7days_wind.svg" />
        <img src="7days_rain.svg" />
        <img src="7days_baro.svg" />
        <img src="7days_clouds.svg" />
        <?php include('7days.txt'); ?>
        <img src="rose_7days_nights.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-28days">
      <div class="page-content"><!-- letzte 28 Tage -->
        <img src="28days_temp.svg" />
        <img src="28days_wind.svg" />
        <img src="28days_rain.svg" />
        <img src="28days_baro.svg" />
        <img src="28days_clouds.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-12mo">
      <div class="page-content"><!-- letzte 12 Monate -->
        <?php include('12months.txt'); ?>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2017">
      <div class="page-content"><!-- 2017 -->
        <img src="2017_temp.svg" /><br />
        <img src="2017_rain.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2016">
      <div class="page-content"><!-- 2016 -->
        <img src="2016_temp.svg" /><br />
        <img src="2016_rain.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2012">
      <div class="page-content"><!-- 2012 -->
        <img src="2012_temp.svg" /><br />
        <img src="2012_rain.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2011">
      <div class="page-content"><!-- 2011 -->
        <img src="2011_temp.svg" /><br />
        <img src="2011_rain.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2010">
      <div class="page-content"><!-- 2010 -->
        <img src="2010_temp.svg" /><br />
        <img src="2010_rain.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2009">
      <div class="page-content"><!-- 2009 -->
        <img src="2009_temp.svg" /><br />
        <img src="2009_rain.svg" />
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-alldata">
      <div class="page-content"><!-- alle Monate -->
        <div class="mdl-card mdl-shadow--2dp">
          <div class="mdl-card__supporting-text">
            <?php include('allmonths.txt'); ?>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<!-- BEGIN Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  // tracker methods like "setCustomDimension" should be called before "trackPageView"
  _paq.push(["setDoNotTrack", true]);
  _paq.push(["disableCookies"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.birth-online.de/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '3']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'kiwip.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.birth-online.de/piwik.php?idsite=3&rec=1" style="border:0;" alt="" /></p></noscript>
<!-- END Piwik -->
</body>
</html>
