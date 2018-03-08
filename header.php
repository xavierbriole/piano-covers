<!DOCTYPE html>
<html>
<head>
  <title>Piano Covers</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="app.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <!-- Piwik -->
  <script type="text/javascript">
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//analytics.xavierbriole.com/";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', '2']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Piwik Code -->
</head>

<body>
      
  <nav>
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">
        <li>
          <div class="user-view">
            <div class="background"></div>
            <img class="circle" src="https://www.gravatar.com/avatar/085cca50a61982c21cdafd656818a892.jpg?s=290">
            <span class="white-text name">Xavier</span>
            <span class="white-text email">C'est moi frère wallah</span>
          </div>
        </li>
        <li class="list"><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>"><i class="material-icons icon-white">home</i>Home</a></li>
        <li class="list"><a href="request"><i class="material-icons icon-white">music_note</i>Request a song</a></li>
      </ul>

      <ul class="left">
        <li>
          <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        </li>
      </ul>

      <a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>" class="brand-logo center">Piano Covers</a>
    </div>
  </nav>