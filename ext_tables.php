<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Teaser', 'contentelements_teaser'), 'CType');
$TCA['tt_content']['types']['contentelements_teaser']['showitem'] = 'CType;;1-1-1, colPos, header, bodytext, image,
		--div--;LLL:EXT:cms/locallang_tca.xml:pages.tabs.access, hidden, starttime, endtime, fe_group';

?>