<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<header>
  <div class="container">
    <section class="row">
      <article class="six columns">
        <a href="<?php echo DIR_REL; ?>/"><img src="http://www.knibbs.co.uk/images/knibbs_200x67.jpg" alt="Main Logo"></a>
        <!--<a href="<?php echo DIR_REL; ?>/"><img src="<?php  echo $this->getThemePath(); ?>/img/Knibbs.png" alt="Main Logo" width="100%"></a>-->
      </article>
      <article class="six columns">
		<?php $a = new GlobalArea('Header Area 1'); $a->display($c); ?>
        <div class="visible-desktop">
		  <?php $a = new GlobalArea('Header Area 2'); $a->display($c); ?>
        </div>                    
      </article>            
    </section>
  </div> <!--! end container -->
</header>