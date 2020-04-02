<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:polaroyd/Resources/Private/Language/locallang_db.xlf:tx_polaroyd_domain_model_team',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'hideTable' => true,
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
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
		'searchFields' => 'name, shortname, description',
		'iconfile' => 'EXT:bj_polaroyd/Resources/Public/Icons/bj_team.png',
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, animationDelaytime, content',
	],
	'types' => [
		'1' => [
			'showitem' => '--palette--;;fields,
            --div--;Language,
            --palette--;;language,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;;access',
		],
	],
	'palettes' => [
		'fields' => ['showitem' => 'name,--linebreak--, shortname,--linebreak--, description,--linebreak--, image'],
		'language' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource'],
		'access' => ['showitem' => 'hidden, --linebreak--,starttime, endtime'],
	],
	'columns' => [
		'sys_language_uid' => [
			'exclude' => false,
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
                'foreign_table' => 'tx_polaroyd_domain_model_team',
                'foreign_table_where' => 'AND tx_polaroyd_domain_model_team.pid=###CURRENT_PID### AND tx_polaroyd_domain_model_team.sys_language_uid IN (-1,0)',
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
			'exclude' => false,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => [
				'type' => 'check',
				'items' => [
					'1' => [
						'0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
					],
				],
			],
		],
		'starttime' => [
			'exclude' => false,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => [
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime',
				'default' => 0,
			],
		],
		'endtime' => [
			'exclude' => false,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => [
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime',
				'default' => 0,
				'range' => [
					'upper' => mktime(0, 0, 0, 1, 1, 2038),
				],
			],
		],
		'name' => [
			'exclude' => false,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_team.name',
			'config' => [
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim,required',
			],
		],
		'shortname' => [
			'exclude' => false,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_team.shortname',
			'config' => [
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim,required',
			],
		],
		'description' => [
			'exclude' => false,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_team.description',
			'config' => [
				'type' => 'text',
				'cols' => 40,
        		'rows' => 10
			],
		],
		'image' => [
			'exclude' => false,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_team.image',
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
					'minitems' => 1,
					'maxitems' => 1,
				],
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		],
		'polaroydcontactthreecolumn_parent' => [
			'exclude' => false,
			'config' => [
				'type' => 'passthrough',
			],
		],
	],
];
