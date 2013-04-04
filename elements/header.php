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


<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/960_24_col.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css')?>" />
<link href='//fonts.googleapis.com/css?family=Merriweather:400,700,900,300' rel='stylesheet' type='text/css' />


</head>

<body>

<!--This is the website's fixed navbar. Has to be outside the container -->
 <div class="navbar navbar-inverse" style="display:none;">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <?php  
		$a = new GlobalArea('Site Name');
		$a->display();
		?>
                    <div class="nav-collapse collapse">
                       <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

<!--This is the website's container -->
<div class="container">

<div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
                     <?php  
			$a = new GlobalArea('Header Nav');
			$a->display();
			?>  
        <span>	
        <?php  
		$a = new GlobalArea('Site Name');
		$a->display();
		?></span>
      </div>
	<div id="header">
	
	
	

		
		
	</div>
	
