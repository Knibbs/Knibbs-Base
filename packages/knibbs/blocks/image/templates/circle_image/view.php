<?php 
defined('C5_EXECUTE') or die("Access Denied.");
echo '<div class="circle-image">';
echo($controller->getContentAndGenerate());
echo '</div>';
?>