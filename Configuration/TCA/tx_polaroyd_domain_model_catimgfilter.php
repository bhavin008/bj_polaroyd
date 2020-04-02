<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:tx_polaroyd_domain_model_catimgfilter',
		'label' => 'category',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => true,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		],
		'searchFields' => 'category,image',
		'iconfile' => 'EXT:bj_polaroyd/Resources/Public/Icons/bj_catimgfilter.png',
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, category, image',
	],
	'types' => [
		'1' => ['showitem' => 'category, image, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime,sys_language_uid, l10n_parent, l10n_diffsource, hidden,'],
	],
	'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple',
					],
				],
				'default' => 0,
			],
		],
		'l10n_parent' => [
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'default' => 0,
				'items' => [
					['', 0],
				],
				'foreign_table' => 'tx_polaroyd_domain_model_catimgfilter',
				'foreign_table_where' => 'AND tx_polaroyd_domain_model_catimgfilter.pid=###CURRENT_PID### AND tx_polaroyd_domain_model_catimgfilter.sys_language_uid IN (-1,0)',
			],
		],
		'l10n_diffsource' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		't3ver_label' => [
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			],
		],
		'hidden' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => [
				'type' => 'check',
				'items' => [
					'1' => [
						'0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
					],
				],
			],
		],
		'starttime' => [
			'exclude' => true,
			'behaviour' => [
				'allowLanguageSynchronization' => true,
			],
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'size' => 13,
				'eval' => 'datetime',
				'default' => 0,
			],
		],
		'endtime' => [
			'exclude' => true,
			'behaviour' => [
				'allowLanguageSynchronization' => true,
			],
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'size' => 13,
				'eval' => 'datetime',
				'default' => 0,
				'range' => [
					'upper' => mktime(0, 0, 0, 1, 1, 2038),
				],
			],
		],

		'category' => [
			'exclude' => true,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:tx_polaroyd_domain_model_catimgfilter.category',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectTree',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) ORDER BY sys_category.title ASC',
				'size' => 10,
				'autoSizeMax' => 10,
				'maxitems' => 9999,
				'minitems' => 1,
				'treeConfig' => [
					'parentField' => 'parent',
					'appearance' => [
						'expandAll' => true,
						'showHeader' => true,
					],
				],
			],
		],
		'image' => [
			'exclude' => true,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:tx_polaroyd_domain_model_catimgfilter.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				[
					'appearance' => [
						'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
					],
					'foreign_types' => [
						'0' => [
							'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
							'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
							'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
							'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
							'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
							'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
						],
					],
					'maxitems' => 1,
					'minitems' => 1,
				],
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		],
		'polaroydcatimgfilter_parent' => [
			'exclude' => false,
			'config' => [
				'type' => 'passthrough',
			],
		],
	],
];
