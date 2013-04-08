<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	<div class="row">

		<div id="main-content-container" class="span12">
			<div id="main-content-inner">
			
				<?php  
				$a = new Area('Main');
				$a->display($c);
				?>
				
			</div>
		
		</div>
	</div>
	<!-- end full width content area -->
	
<?php  $this->inc('elements/footer.php'); ?>
