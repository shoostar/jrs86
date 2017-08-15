<!DOCTYPE html>
  <html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ca281b" />
    <?= css('assets/css/index.css') ?>
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js" defer></script><![endif]-->

    <!-- UPDATED GOOGLE OPTIMIZE/ANALYTICS CODE -->
    <?= js('assets/js/modernizr-custom.js') ?>
    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-KVMRQ8V':true});</script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-84586441-1', 'auto');
      ga('require', 'GTM-KVMRQ8V');
      ga('send', 'pageview');
    </script>

    <style>
      /* This is for lazy-loading bg images */
      .lazy {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
      }
      .lazy-loaded {
        opacity: 1 !important;
      }
      .b-lazy {
        -webkit-transition: opacity 500ms ease-in-out;
           -moz-transition: opacity 500ms ease-in-out;
             -o-transition: opacity 500ms ease-in-out;
                transition: opacity 500ms ease-in-out;
        max-width: 100%;
        opacity: 0;
      }
      .b-lazy.b-loaded {
        opacity: 1;
      }
    </style>
  </head>

  <body>

  <!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
  <![endif]-->

  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
    <defs>
      <filter id="filter">
        <feTurbulence type="fractalNoise" baseFrequency="0.000001 0.000001" numOctaves="1" result="warp"></feTurbulence>
        <feOffset dx="0" dy="0" result="warpOffset"></feOffset>
        <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warpOffset"></feDisplacementMap>
      </filter>
    </defs>
  </svg>

  <main>
    <a class="skip-main" href="#main" tabindex="-1">Skip to main content</a>

    <!-- <div id="ticker">
    	<ul>
        <li>**WEBSITE STILL UNDER CONSTRUCTION**</li>
      </ul>
    </div> -->

    <header class="row">
      <div class="w--3of5 pinned">
        <h3 class="heading"><a class="glitch-btn modal-btn" href="<?= url() ?>" rel="home">
          <span class="glitch super-glitch" data-text="JRS⁸⁶">
            <span class="pro">JRS<sup>86</sup></span>
          </span>
        </a></h3>
      </div>
      <div class="w--2of5 text-right pinned">
        <?php snippet('menu') ?>
      </div>
    </header>
