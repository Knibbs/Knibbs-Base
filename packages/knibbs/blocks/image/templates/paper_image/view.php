<?php 
defined('C5_EXECUTE') or die("Access Denied.");
echo '<div class="testimonial-paper paper"><div class="image-content">';
echo($controller->getContentAndGenerate());
echo '</div></div>';
?>