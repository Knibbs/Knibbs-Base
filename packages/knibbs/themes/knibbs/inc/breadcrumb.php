<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="breadcrumbs">
  <?php  
      $bt_main = BlockType::getByHandle('autonav');
      $bt_main->controller->displayPages = 'top';
      $bt_main->controller->orderBy = 'display_asc';                    
      $bt_main->controller->displaySubPages = 'relevant_breadcrumb'; // change to none if you don't want drop downs
      $bt_main->controller->displaySubPageLevels = 'enough';      
      $bt_main->render('templates/breadcrumb-plus');
  ?>
</div>