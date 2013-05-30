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


?>

<?php     if ($copyright_owner) {?>
	<div class="auto-copyright">
		<?php    
		if ($copyright_url) {
			$strCopyrightOwner = '<a href="'.$copyright_url.'" target="_blank" title="'.t('Visit %s',$copyright_url).'">'.$copyright_owner.'</a>';
		} else {
			$strCopyrightOwner = $copyright_owner;
		}
			echo $strContent;
			echo ' ';
			echo t('Copyright &copy; %s %s', $strYear, $strCopyrightOwner);
		?>
	</div>
<?php     } ?>