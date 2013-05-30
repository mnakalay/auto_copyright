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


/*
* Template by JohnTheFish & Nour Akalay
* to replace the year only in the yogurt copyright footer
*/

defined('C5_EXECUTE') or die("Access Denied.");


if ($copyright_owner) {

	if ($copyright_url) {
			$strCopyrightOwner = '<a href="'.$copyright_url.'" target="_blank" title="'.t('Visit %s',$copyright_url).'">'.$copyright_owner.'</a>';
		} else {
			$strCopyrightOwner = $copyright_owner;
		}
	$str_cw = $strContent.' '.t('Copyright &copy; %s %s', $strYear, $strCopyrightOwner);
	$page = Page::getCurrentPage();
	if ($page->isEditMode()) {
		echo t('This is the Auto Copyright add-on. This text is only visible in edit mode');
	}
	?>
	<script type="text/javascript">
	$(document).ready(function(){
		var templateHTML = $('.footer-copyright').html().replace(/((copyright|©|\(c\)|&copy;){1} *\d{4})( *[-,] *\d{4})*/g,'$2 <?php   echo $strYear;?>');
		$('.footer-copyright').html(templateHTML);
	});
	</script>
	<?php  
}
