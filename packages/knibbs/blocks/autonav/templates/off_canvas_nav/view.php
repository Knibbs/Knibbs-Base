<?php 
$bvt = new BlockViewTemplate($b); 
$bvt->setBlockCustomTemplate(false);
 
function nav_tree_callback($buffer) {
	return str_replace('<ul>','<li class="is-active">',$buffer);
}
 
ob_start("nav_tree_callback");
include($bvt->getTemplate());
ob_end_flush();
?>