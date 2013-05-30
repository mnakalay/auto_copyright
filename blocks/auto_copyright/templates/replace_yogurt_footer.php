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
* Template by JohnTheFish 
* to replace the yogurt copyright footer
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
		var str_cw = '<?php   echo $str_cw;?>';
		$('.footer-copyright').html(str_cw);
	});
	</script>
	<?php  
}
