<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">

<head>

  <?php   Loader::element('header_required'); ?>

  <!-- Site Header Content //-->

  <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/reset.css" />
  <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/text.css" />

  <!--Bootstrap CSS goodness!-->
  <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/bootstrap-responsive.min.css" />



  <link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css')?>" />



</head>

<body>
  <div id="wrap">
  <!--This is the website's container -->
  <div class="container">

    <div class="masthead">


      <span>	
        <?php  
          $a = new GlobalArea('Site Name');
          $a->display();
        ?>
      </span>
      <div class="justified-navbar">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <?php  
                $headernav = new GlobalArea('Header Nav');
                $headernav->display();
              ?>  
            </div>
          </div>
        </div>
      </div>

    </div>


    
    <div id="header">






    </div>

