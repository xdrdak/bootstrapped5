<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div class="row">
	<div class="span9">
	
		
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
			
	</div>
	<!-- end main-content container-->
	
	<div class="span3">

		<div class="well sidebar-nav">
	
			<?php  
			$a = new Area('Sidebar');
			$a->display($c);
			?>
			
		</div>
	
	</div>	
	<!-- end sidebar container-->
	
</div>
<!-- end row -->	
<?php  $this->inc('elements/footer.php'); ?>
