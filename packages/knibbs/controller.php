<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class knibbsPackage extends Package {
	
	// PACKAGE VERSION / DETAILS
	protected $pkgHandle = 'knibbs';
	protected $appVersionRequired = '5.3.0';
	protected $pkgVersion = '3.1';
	
	public function getPackageDescription() {
		return t("Responsive and customisable theme which includes several premium add-ons.");
	}
	
	// PACKAGE NAME
	public function getPackageName() {
		return t("Knibbs Theme");
	}
	
	// INSTALL OPTIONS
	public function install() {	$pkg = parent::install();
		BlockType::installBlockTypeFromPackage('autonav', $pkg); 
		BlockType::installBlockTypeFromPackage('image', $pkg); 
		BlockType::installBlockTypeFromPackage('form', $pkg); 
		BlockType::installBlockTypeFromPackage('page_list', $pkg); 
		$this->install_custom_attributes($pkg);
		PageTheme::add('knibbs', $pkg);
	}

	// INSTALL CUSTOM ATTRIBUTES
	function install_custom_attributes($pkg) {
		
		// Set Attibute Category
		$eaku = AttributeKeyCategory::getByHandle('collection');
		$eaku->setAllowAttributeSets(AttributeKeyCategory::ASET_ALLOW_SINGLE);
		$evset = $eaku->addSet('knibbs', t('Custom Attributes'),$pkg);
		
		// Attribute Types
		$checkn = AttributeType::getByHandle('boolean'); 
		$textn = AttributeType::getByHandle('text'); 
		$imagen = AttributeType::getByHandle('image_file'); 
	
		// Custom Attributes
		$customReplaceFirstNav=CollectionAttributeKey::getByHandle('replace_link_with_first_in_nav'); 
		if( !is_object($customReplaceFirstNav) ) {
			CollectionAttributeKey::add($checkn, 
			array('akHandle' => 'replace_link_with_first_in_nav', 
			'akName' => t('Replace Link with First in Nav'),
			'akIsSearchableIndexed' => 0,	
			'akIsSearchable' => 1, 
			),$pkg)->setAttributeSet($evset); 
		}  	
		$customDisableLinkNav=CollectionAttributeKey::getByHandle('disable_link_in_nav'); 
		if( !is_object($customDisableLinkNav) ) {
			CollectionAttributeKey::add($checkn, 
			array('akHandle' => 'disable_link_in_nav', 
			'akName' => t('Disable Link in Nav'),
			'akIsSearchableIndexed' => 0,	
			'akIsSearchable' => 1, 
			),$pkg)->setAttributeSet($evset); 
		}  	
		$customNavItemClass=CollectionAttributeKey::getByHandle('nav_item_class'); 
		if( !is_object($customNavItemClass) ) {
			CollectionAttributeKey::add($textn, 
			array('akHandle' => 'nav_item_class', 
			'akName' => t('Nav Item Class'),
			'akIsSearchableIndexed' => 0,	
			'akIsSearchable' => 1, 
			),$pkg)->setAttributeSet($evset); 
		}
		$customIsFeatured=CollectionAttributeKey::getByHandle('is_featured'); 
		if( !is_object($customIsFeatured) ) {
			CollectionAttributeKey::add($checkn, 
			array('akHandle' => 'is_featured', 
			'akName' => t('Is Featured'),
			'akIsSearchableIndexed' => 0,	
			'akIsSearchable' => 1, 
			),$pkg)->setAttributeSet($evset); 
		}  			
		$customThumbnail=CollectionAttributeKey::getByHandle('thumbnail'); 
		if( !is_object($customThumbnail) ) {
			CollectionAttributeKey::add($imagen, 
			array('akHandle' => 'thumbnail', 
			'akName' => t('Thumbnail Image'),
			'akIsSearchableIndexed' => 0,	
			'akIsSearchable' => 1, 
			),$pkg)->setAttributeSet($evset);
		}
			
	}
	
}
?>