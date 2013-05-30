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
function ccmValidateBlockForm() {
	if ($.trim($('input#copyright-owner').val()) == '') {
		ccm_addError(ccm_t('owner-required'));
	}
}