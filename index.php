<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <jdoc:include type="head" />

  <!-- Favicons generated using http://realfavicongenerator.net highly recommended to use if these change -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/apple-touch-icon-76x76.png">
  <link rel="icon" type="image/png" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/manifest.json">
  <link rel="mask-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/safari-pinned-tab.svg" color="#b20738">
  <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Teknologföreningen">
  <meta name="application-name" content="Teknologföreningen">
  <meta name="msapplication-TileColor" content="#b20738">
  <meta name="msapplication-config" content="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/ico/browserconfig.xml">
  <meta name="theme-color" content="#b20738">

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/css/foundation.css" type="text/css" />

  <!-- Style tag to allow joomla template paths via php -->
  <style>
  @font-face {
    font-family: 'Montserrat-Bold';
    src:
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Bold.eot?#iefix') format('embedded-opentype'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Bold.otf')  format('opentype'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Bold.woff') format('woff'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Bold.ttf')  format('truetype'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Bold.svg#Montserrat-Bold') format('svg');
    font-weight: normal;
    font-style: normal;
  }

  @font-face {
    font-family: 'Montserrat-Light';
    src:
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Light.eot?#iefix') format('embedded-opentype'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Light.otf')  format('opentype'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Light.woff') format('woff'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Light.ttf')  format('truetype'),
      url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/fonts/Montserrat-Light.svg#Montserrat-Light') format('svg');
    font-weight: normal;
    font-style: normal;
  }
  </style>
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/style.css" type="text/css" />

</head>
<body class="site">
<div class="site-content">


  <div id="top-bar-wrapper">

    <!-- Title bar for small screens. Hides/Shows menu on small screen. -->
    <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
      <span class="title-bar-header"><?php $doc = JFactory::getDocument(); echo $doc->getTitle();?></span>
      <button class="menu-icon" type="button" data-toggle></button>
    </div>

    <!-- Menu -->
    <div class="top-bar row align-middle" id="main-menu">
      <div class="column show-for-medium medium-2 large-4">
        <a href="//www.teknologforeningen.fi/"><img id="menu-logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/img/tf_logo_black.svg" alt="TF"></a>
      </div>
      <div class="column small-12 medium-10 large-8">
        <jdoc:include type="modules" name="topmenu" />
      </div>
    </div>
  </div>


  <!-- Breadcrums module -->
  <div class="row">
    <div class="column">
      <jdoc:include type="modules" name="breadcrumbs" />
    </div>
  </div>

  <!-- Module place right below the top-bar -->
  <div id="top-module-wrapper">
    <div id="top-module" class="row">
      <div class="small-12 columns">
        <jdoc:include type="modules" name="top" />
      </div>
    </div>
  </div>

  <!-- Main content area -->
  <div class="row">
    <div class="small-12 medium-3 large-3 small-order-2 medium-order-1 column">
      <!-- Module: left -->
      <jdoc:include type="modules" name="left" />
    </div>
    <div class="small-12 medium-6 large-6 small-order-1 medium-order-2 column">
      <!-- Component -->
      <jdoc:include type="component" />
    </div>
    <div class="small-12 medium-3 large-3 small-order-3 medium-order-3 column">
      <!-- Module: right -->
      <jdoc:include type="modules" name="right" />
    </div>
  </div>
</div>

<!-- Footer -->
<div id="footer-wrapper">
  <footer class="footer row">
    <div id="footer-left" class="small-12 medium-6 large-6 columns">
      <jdoc:include type="modules" name="footer-left" />
    </div>
    <div id="footer-right" class="small-12 medium-6 large-6 columns">
      <jdoc:include type="modules" name="footer-right" />
    </div>
  </footer>
</div>

<!-- Load scripts here to make sure everything else is loaded before it -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/vendor/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/foundation.min.js"></script>
<script>
  $(document).foundation();

  /*
   * Joomla insists on importing one ancient version of bootstrap, but new foundation needs a later version.
   */

  jQuery.prototype.tooltip = function(){
    if (console && console.log) {
      console.log("Tooltip called for but not present due to jQuery version conflict.");
    }
  };

  jQuery.prototype.popover = function(){
    if (console && console.log) {
      console.log("Popover called for but not present due to jQuery version conflict.");
    }
  };
</script>
</body>

</html>
