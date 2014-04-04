<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$aBlocks = $controller->generateNav();
	$c = Page::getCurrentPage();
	$nh = Loader::helper('navigation');
	$i = 0;
	foreach($aBlocks as $ni) {
		$_c = $ni->getCollectionObject();
	
		$pageLink = false;
	
		if (!$pageLink) {
			$pageLink = $ni->getURL();
		}

		$target = $ni->getTarget();
		if ($target != '') {
			$target = 'target="' . $target . '"';
		}

		// url to write for each breadcrumb
		$printUrl = '<a href="' . $pageLink . '" ' . $target . '>' . $ni->getName() . '</a>';

		// style for disabled breadcrumbs
		$spanClassBegin = '<span style="color:#0054A4;">';
		$spanClassEnd = '</span>';
	
		// replace breadcrumb with first child if attribute is enabled 
		if ($_c->getCollectionAttributeValue('replace_link_with_first_in_nav')) {
			$subPage = $_c->getFirstChild();
			if ($subPage instanceof Page) {
				$pageLink = $nh->getLinkToCollection($subPage);
				$printUrl = $ni->getName();
			}
		}
		
		// disable breadcrumb if attribute is enabled 
		if ($_c->getCollectionAttributeValue('disable_link_in_nav')) {
			$currentPage = $_c->getCurrentPage();
			$subPage = $_c->getFirstChild();
			if ($subPage instanceof Page) {
			$printUrl = $ni->getName();
			}
		}
		
		// create breadcrumbs
		if ($i > 0) {
			print ' <span class="ccm-autonav-breadcrumb-sep">&gt;</span> ';
		}
		if ($c->getCollectionID() == $_c->getCollectionID()) { 
			echo($ni->getName());
		} else {
			echo $spanClassBegin . $printUrl . $spanClassEnd;
		}	
		$lastLevel = $thisLevel;
		$i++;
	}
	
	$thisLevel = 0;