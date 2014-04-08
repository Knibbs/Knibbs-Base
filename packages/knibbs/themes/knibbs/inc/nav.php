<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<nav id="horizontal-nav" role="navigation">
<div class="knibbs-container">
     <div class="knibbs-button">
    	<div class="nav-icon"><span class="knibbs-bar"></span><span class="knibbs-bar"></span><span class="knibbs-bar"></span></div>
        <div class="nav-text">Menu</div>        
    </div>
    <a class="call-btn" href="tel:"><i class="fa fa-phone"></i> Number</a>
    <div id="menu" class="menu" style="display:none;">
	  <?php 
      $autonav = BlockType::getByHandle('autonav');
      $autonav->controller->orderBy = 'display_asc';
      $autonav->controller->displayPages = 'top';
      $autonav->controller->displaySubPages = 'all';
      $autonav->controller->displaySubPageLevels = 'all';
      $autonav->render('templates/horizontal-nav');
      ?>  
    </div><!-- menu -->
    <div class="clearfix"></div>
  </div><!-- knibbs-container -->
</nav>