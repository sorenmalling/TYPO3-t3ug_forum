<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_t3ugforum_domain_model_posts'] = array(
	'ctrl' => $TCA['tx_t3ugforum_domain_model_posts']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bodytext, topic',
	),
	'types' => array(
		'1' => array('showitem'	=> 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, bodytext, topic,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem'	=> ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude'			=> 1,
			'label'				=> 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config'			=> array(
				'type'					=> 'select',
				'foreign_table'			=> 'sys_language',
				'foreign_table_where'	=> 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond'	=> 'FIELD:sys_language_uid:>:0',
			'exclude'		=> 1,
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config'		=> array(
				'type'			=> 'select',
				'items'			=> array(
					array('', 0),
				),
				'foreign_table' => 'tx_t3ugforum_domain_model_posts',
				'foreign_table_where' => 'AND tx_t3ugforum_domain_model_posts.uid=###REC_FIELD_l10n_parent### AND tx_t3ugforum_domain_model_posts.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config'		=>array(
				'type'		=>'passthrough',
			),
		),
		't3ver_label' => array(
			'displayCond'	=> 'FIELD:t3ver_label:REQ:true',
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config'		=> array(
				'type'		=>'none',
				'cols'		=> 27,
			),
		),
		'hidden' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => '10',
				'max' => '20',
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => '8',
				'max' => '20',
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
				'range' => array(
					'upper' => mktime(0,0,0,12,31,date('Y')+10),
					'lower' => mktime(0,0,0,date('m')-1,date('d'),date('Y'))
				),
			),
		),
		'bodytext' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:t3ug_forum/Resources/Private/Language/locallang_db.xml:tx_t3ugforum_domain_model_posts.bodytext',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'topic' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:t3ug_forum/Resources/Private/Language/locallang_db.xml:tx_t3ugforum_domain_model_posts.topic',
			'config'	=> array(
				'type' => 'inline',
				'foreign_table' => 'tx_t3ugforum_domain_model_topic',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'topic' => array(
			'config' => array(
				'type'	=> 'passthrough',
			),
		),
	),
);
?>