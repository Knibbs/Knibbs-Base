<?php 
defined('C5_EXECUTE') or die("Access Denied.");
echo '<div class="rounded-image">';
echo($controller->getContentAndGenerate());
echo '</div>';
?>