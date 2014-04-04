<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php  $this->inc('inc/top.php'); ?>
<?php  $this->inc('inc/header.php'); ?>
<?php  $this->inc('inc/nav.php'); ?>
<div class="container">
	<div class="row">
  		<div class="twelve columns">
			<?php  print $innerContent; ?>
      	</div>    
    </div>
</div>
<?php  $this->inc('inc/footer.php'); ?>
</body>
</html>