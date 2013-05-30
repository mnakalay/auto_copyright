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
defined('C5_EXECUTE') or die(_("Access Denied.")); 
?>
<style type="text/css">
.auto-copyright-help ol{
	list-style: decimal!important;
}
/*.auto-copyright-help ul{
	list-style: circle!important;
}*/
.auto-copyright-help li{
  display:list-item!important;
  margin-left:30px!important;
}
</style>
<div class="ccm-block-field-group">
	<h2><?php    echo t('Your Copyright notice'); ?></h2><br />
	<strong><?php    echo t('Any text you want to go with your copyright notice?'); ?></strong><br />
	<textarea name="content" style="width:99%;height:100px;"><?php    echo $content; ?></textarea><br />
	<strong><?php    echo t('What year does the copyright start? ("auto" for the current year)'); ?></strong><br />
	<input name="start_year" value="<?php    echo $start_year ? $start_year : 'auto'; ?>" style="width:99%;" maxlength="10"><br />
	<strong><?php    echo t('Who owns the copyright?'); ?></strong><br />
	<input name="copyright_owner" id="copyright-owner" value="<?php    echo $copyright_owner; ?>" style="width:99%;"><br />
	<strong><?php    echo t("Any Link around the name? (don't forget http://)"); ?></strong><br />
	<input name="copyright_url" value="<?php    echo $copyright_url; ?>" style="width:99%;" maxlength="255"><br />
</div>
<div class="ccm-block-field-group auto-copyright-help">
	<h2><?php    echo t('Help'); ?></h2>
	<p><strong><?php    echo t('This block will show a text built like this:'); ?></strong><br />
	<em><?php    echo t('"some text" Copyright &copy; Year "Copyright owner"'); ?></em><br />
	<?php    echo t('For instance:'); ?><br />
	<em><?php    echo t('"Everything in here is protected under Copyright &copy; 2012 Nour Akalay"'); ?></em></p>

	<strong><?php    echo t('The block will show the year according to one of the following situations:'); ?></strong>
	<ol>
	<li><?php    echo t('"auto", empty, or current year => the block will show the current year'); ?></li>
	<ul><li><em><?php    echo t('Example: Copyright &copy; '.date('Y').' Nour Akalay'); ?></em></li></ul>
	<li><?php    echo t('A year in the past => the block will show "past year - current year"'); ?></li>
	<ul><li><em><?php    echo t('Example: Copyright &copy; 1984 - '.date('Y').' Nour Akalay'); ?></em></li></ul>
	<li><?php    echo t('A year in the future (weird) => the block will show the current year'); ?></li>
	<ul><li><em><?php    echo t('Example: Copyright &copy; '.date('Y').' Nour Akalay'); ?></em></li></ul>
	</ol><br />
	<?php    echo t('The block will update the years automatically as time goes by.'); ?><br />
	<strong><?php    echo t(' Just set it and forget it.'); ?></strong>
</div>
