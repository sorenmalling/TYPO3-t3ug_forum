<?php
if (!defined ('TYPO3_MODE')){
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Forum',
	'Forum'
);

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_forum'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_forum', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_forum.xml');





t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'T3UG User');


t3lib_extMgm::addLLrefForTCAdescr('tx_t3ugforum_domain_model_forum', 'EXT:t3ug_forum/Resources/Private/Language/locallang_csh_tx_t3ugforum_domain_model_forum.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_t3ugforum_domain_model_forum');
$TCA['tx_t3ugforum_domain_model_forum'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:t3ug_forum/Resources/Private/Language/locallang_db.xml:tx_t3ugforum_domain_model_forum',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Forum.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_t3ugforum_domain_model_forum.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_t3ugforum_domain_model_topic', 'EXT:t3ug_forum/Resources/Private/Language/locallang_csh_tx_t3ugforum_domain_model_topic.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_t3ugforum_domain_model_topic');
$TCA['tx_t3ugforum_domain_model_topic'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:t3ug_forum/Resources/Private/Language/locallang_db.xml:tx_t3ugforum_domain_model_topic',
		'label' 			=> 'subject',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Topic.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_t3ugforum_domain_model_topic.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_t3ugforum_domain_model_posts', 'EXT:t3ug_forum/Resources/Private/Language/locallang_csh_tx_t3ugforum_domain_model_posts.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_t3ugforum_domain_model_posts');
$TCA['tx_t3ugforum_domain_model_posts'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:t3ug_forum/Resources/Private/Language/locallang_db.xml:tx_t3ugforum_domain_model_posts',
		'label' 			=> 'bodytext',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Posts.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_t3ugforum_domain_model_posts.gif'
	),
);

?>