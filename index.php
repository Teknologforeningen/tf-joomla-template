<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/css/foundation.min.css" type="text/css" />

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

<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Teknologföreningen</div>
</div>

<div class="top-bar" id="main-menu">
  <div class="top-bar-left">
    <img id="menu-logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/img/tf_natside_logon-08.svg" alt="TF">
  </div>
  <div class="top-bar-right">
    <jdoc:include type="modules" name="topmenu" />
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <jdoc:include type="modules" name="top" />
  </div>
</div>

<div class="row site-content">
  <div class="small-12 medium-4 large-3 columns">
    <jdoc:include type="modules" name="left" />
  </div>
  <div class="small-12 medium-8 large-6 columns">
    <jdoc:include type="component" />
  </div>
  <div class="small-12 medium-12 large-3 columns">
    <jdoc:include type="modules" name="right" />
  </div>
</div>

<footer class="bottom-bar">
  <jdoc:include type="modules" name="footer" />
</footer>


<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/vendor/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/foundation.min.js"></script>
<script>
  $(document).foundation();

  jQuery.prototype.tooltip = function(){
    console.log("Tooltip called for but not present due to jQuery version conflict.");
  };

  jQuery.prototype.popover = function(){
    console.log("Popover called for but not present due to jQuery version conflict.");
  };
</script>
</body>

</html>
