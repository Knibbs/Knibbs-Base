<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php  $this->inc('inc/top.php'); ?>
<?php  $this->inc('inc/header.php'); ?>
<?php  $this->inc('inc/nav.php'); ?>
<div class="container">
	<section class="row">
  		<aside class="four columns">
			<?php $a = new Area('Sidebar');  $a->display($c); ?>
      	</aside>
		<article class="eight columns">
  	  		<?php $a = new Area('Main'); $a->display($c); ?>
        </article>
    </section>
</div>
<?php  $this->inc('inc/footer.php'); ?>
</body>
</html>