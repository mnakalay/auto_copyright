<?php    
/*
* Auto Copyright for c5
* @package Auto Copyright
* @author Nour Akalay <mnakalay@yahoo.fr>
* @hugely improved by JohnTheFish
* @version 1.0
* @copyright Copyright (c) 2011, Nour Akalay
* @license http://www.opensource.org/licenses/mit-license.php MIT License
*/
defined('C5_EXECUTE') or die(_("Access Denied."));

class AutoCopyrightPackage extends Package {

	protected $pkgHandle = 'auto_copyright';
	protected $appVersionRequired = '5.4.1';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Add an auto-updating copyright.");
	}
	
	public function getPackageName() {
		return t("Auto Copyright");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage('auto_copyright', $pkg);
	}
}
