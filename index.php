<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/css/foundation.css" type="text/css" />
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/vendor/modernizr.js"></script>

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
<body>

<nav class="top-bar" data-topbar="">
  <ul class="title-area">
    <li class="name">
      <h1>
        <img id="menu-logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/img/tf_natside_logon-04.svg" alt="TF">
      </h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <ul>
      <jdoc:include type="modules" name="topmenu" />
    </ul>
  </section>
</nav>

<jdoc:include type="modules" name="top" />
<jdoc:include type="modules" name="left" />
<jdoc:include type="modules" name="right" />
<jdoc:include type="component" />

<footer>
  <jdoc:include type="modules" name="footer" />
</footer>


<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/vendor/jquery.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/foundation/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
</body>

</html>
