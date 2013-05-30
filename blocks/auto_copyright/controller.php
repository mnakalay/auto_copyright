<?php    
/*
* Auto Copyright for c5
*
* @package Auto Copyright
* @author Nour Akalay <mnakalay@yahoo.fr>
* @hugely improved by JohnTheFish
* @version 1.0
* @copyright Copyright (c) 2011, Nour Akalay
* @license http://www.opensource.org/licenses/mit-license.php MIT License
*/

defined('C5_EXECUTE') or die("Access Denied.");
class AutoCopyrightBlockController extends BlockController {
	//Caching is disabled while in development,
	// but you should change these to TRUE for production.
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;

	protected $btTable = 'btAutoCopyright';
	protected $btInterfaceWidth = "450";
	protected $btInterfaceHeight = "650";
	
	public function getJavaScriptStrings() {
		return array(
			'owner-required' => t('You must set a copyright owner.'),
		);
	}

	public function getBlockTypeDescription() {
		return t("Add an auto-updating copyright.");
	}
	
	public function getBlockTypeName() {
		return t("Auto Copyright");
	}

	public function view() {
		$strYear = date('Y');

		if ($this->start_year == 'auto' || $this->start_year == '') {$strYear = date('Y');}
		else if (intval($this->start_year) == date('Y')) {$strYear = intval($this->start_year);}
		else if (intval($this->start_year) < date('Y')) {$strYear = intval($this->start_year) . ' - ' . date('Y');}
		else if (intval($this->start_year) > date('Y')) {$strYear = date('Y');}

		$this->set('strYear', $strYear);
		$this->set('strContent', $this->content);
		$this->set('copyright_owner', $this->copyright_owner);
		$this->set('copyright_url', $this->copyright_url);
	}

}
?>