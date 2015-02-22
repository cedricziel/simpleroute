<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'CedricZiel.' . $_EXTKEY,
	'Main',
	array(
		'Waypoint' => 'searchForm, showDirections',
		
	),
	// non-cacheable actions
	array(
		'Waypoint' => 'showDirections',
		
	)
);
