<?php 
defined('C5_EXECUTE') or die("Access Denied.");
echo '<div class="photo-image">';
echo($controller->getContentAndGenerate());
echo '</div>';
?>