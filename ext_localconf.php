<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Forum',
	array(
		'Forum' => 'list,show',
		'Topic' => 'list,show'
	),
	array(
		'Forum' => 'list,show',
		'Topic' => 'list,show'
	)
);

?>