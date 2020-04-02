<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:polaroyd/Resources/Private/Language/locallang_db.xlf:tx_polaroyd_domain_model_contactthreecolumn',
		'label' => 'icon',
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
		'searchFields' => 'icon, content',
		'iconfile' => 'EXT:bj_polaroyd/Resources/Public/Icons/bj_contactthreecolumn.png',
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, icon, content',
	],
	'types' => [
		'1' => [
			'showitem' => '--palette--;;fields,
            --div--;LLL:EXT:polaroyd/Resources/Private/Language/locallang_db.xlf:tabs.language,
            --palette--;;language,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;;access',
		],
	],
	'palettes' => [
		'fields' => ['showitem' => 'icon,--linebreak--, content'],
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
                'foreign_table' => 'tx_polaroyd_domain_model_contactthreecolumn',
                'foreign_table_where' => 'AND tx_polaroyd_domain_model_contactthreecolumn.pid=###CURRENT_PID### AND tx_polaroyd_domain_model_contactthreecolumn.sys_language_uid IN (-1,0)',
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
		'icon' => [
			'exclude' => false,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_contactthreecolumn.icon',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => [
					['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_contactthreecolumn.location', 'ion-ios7-location-outline'],
					['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_contactthreecolumn.telephone', 'ion-ios7-telephone-outline'],
					['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:bj_contactthreecolumn.paperplane', 'ion-ios7-paperplane-outline'],
				],
				'default' => 'ion-ios7-location-outline',
			],
		],
		'content' => [
			'exclude' => false,
			'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:content',
			'config' => [
				'type' => 'text',
				'enableRichtext' => true,
			],
		],
		'polaroydcontactthreecolumn_parent' => [
			'exclude' => false,
			'config' => [
				'type' => 'passthrough',
			],
		],
	],
];
