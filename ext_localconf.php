<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TLID.' . $_EXTKEY,
	'ContentRenderer',

	array (
		'Elements' => 'teaser',
	)

);

t3lib_extMgm::addTypoScript($_EXTKEY,'setup',
	'[GLOBAL]
tt_content.contentelements_teaser < tt_content.list.20.contentelements_contentrenderer
tt_content.contentelements_teaser.switchableControllerActions.Elements.1 = teaser',
	true
);

?>