<?php
defined('TYPO3_MODE') or die();

// Adresses Plugin Settings Starts
$_EXTKEY = 'bj_polaroyd';

// CType settings
$setColumns = [
	'polaroyd_icon' => [
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.none', ''],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.camera', 'camera-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.heart', 'heart-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.monitor', 'monitor-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.pie', 'pie-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.plus', 'plus-empty'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.wineglass', 'wineglass-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.lightbulb', 'lightbulb-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.monitor', 'monitor-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.bookmarks', 'bookmarks-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.flag', 'flag-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.pricetag', 'pricetag-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.people', 'people-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.cog', 'cog-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.paperplane', 'paperplane-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.folder', 'folder-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.briefcase', 'briefcase-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.help', 'help-outline'],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_icon.chatbubble', 'chatbubble-outline'],
			],
		],
	],

	'polaroyd_sliderlayout' => [
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_sliderlayout',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_sliderlayout.simple', ''],
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:polaroyd_sliderlayout.carousel', 'carousel'],
			],
		],
	],

	'center_check' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:center_check',
		'config' => [
			'type' => 'check',
			'items' => [
				// label, value
				['LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:center_check.center', '1'],
			],
		]
	],

	'polaroyd_catimgfilter' => [
		'exclude' => false,
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:wizard.bj_catimgfilter',
		'config' => [
			'type' => 'inline',
			'foreign_table' => 'tx_polaroyd_domain_model_catimgfilter',
			'foreign_field' => 'polaroydcatimgfilter_parent',
			'foreign_sortby' => 'sorting',
			'foreign_label' => 'category',
			'localizationMode' => 'select',
			'maxitems' => 40,
			'appearance' => [
				'useCombination' => 0,
				'useSortable' => true,
				'expandSingle' => true,
				'newRecordLinkAddTitle' => false,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showAllLocalizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showRemovedLocalizationRecords' => 1,
				'enabledControls' => [
					'new' => true,
					'delete' => true,
					'info' => true,
					'hide' => true,
				],
			],
			'behaviour' => [
				'localizationMode' => 'select',
			],
		],
	],

	'polaroyd_contactthreecolumn' => [
		'exclude' => false,
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:wizard.bj_contactthreecolumn',
		'config' => [
			'type' => 'inline',
			'foreign_table' => 'tx_polaroyd_domain_model_contactthreecolumn',
			'foreign_field' => 'polaroydcontactthreecolumn_parent',
			'foreign_sortby' => 'sorting',
			'foreign_label' => 'content',
			'localizationMode' => 'select',
			'maxitems' => 40,
			'appearance' => [
				'useCombination' => 0,
				'useSortable' => true,
				'expandSingle' => true,
				'newRecordLinkAddTitle' => false,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showAllLocalizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showRemovedLocalizationRecords' => 1,
				'enabledControls' => [
					'new' => true,
					'delete' => true,
					'info' => true,
					'hide' => true,
				],
			],
			'behaviour' => [
				'localizationMode' => 'select',
			],
		],
	],

	'polaroyd_team' => [
		'exclude' => false,
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:wizard.bj_team',
		'config' => [
			'type' => 'inline',
			'foreign_table' => 'tx_polaroyd_domain_model_team',
			'foreign_field' => 'polaroydteam_parent',
			'foreign_sortby' => 'sorting',
			'foreign_label' => 'name',
			'localizationMode' => 'select',
			'maxitems' => 40,
			'appearance' => [
				'useCombination' => 0,
				'useSortable' => true,
				'expandSingle' => true,
				'newRecordLinkAddTitle' => false,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showAllLocalizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showRemovedLocalizationRecords' => 1,
				'enabledControls' => [
					'new' => true,
					'delete' => true,
					'info' => true,
					'hide' => true,
				],
			],
			'behaviour' => [
				'localizationMode' => 'select',
			],
		],
	],

	'polaroyd_pricing' => [
		'exclude' => false,
		'label' => 'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:wizard.bj_pricing',
		'config' => [
			'type' => 'inline',
			'foreign_table' => 'tx_bjpolaroyd_domain_model_pricing',
			'foreign_field' => 'polaroydpricing_parent',
			'foreign_sortby' => 'sorting',
			'foreign_label' => 'header',
			'localizationMode' => 'select',
			'maxitems' => 40,
			'appearance' => [
				'useCombination' => 0,
				'useSortable' => true,
				'expandSingle' => true,
				'newRecordLinkAddTitle' => false,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showAllLocalizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showRemovedLocalizationRecords' => 1,
				'enabledControls' => [
					'new' => true,
					'delete' => true,
					'info' => true,
					'hide' => true,
				],
			],
			'behaviour' => [
				'localizationMode' => 'select',
			],
		],
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $setColumns);

call_user_func(function () {

	$iconpath = 'EXT:bj_polaroyd/Resources/Public/Icons/';

	$allSiteComponents = constant('ALL_SITE_COMPONENTS');

	/* add to TCA */
	foreach ($allSiteComponents as $currentType) {

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
			'tt_content',
			'CType',
			[
				'LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:wizard.' . $currentType,
				$currentType,
				$iconpath . $currentType . '.png',
			],
			'header',
			'after'
		);

		if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('gridelements')) {
			$GLOBALS['TCA']['tt_content']['types'][$currentType]['showitem'] .= ',tx_gridelements_container, tx_gridelements_columns';
		}
	}

	/* Type Icon */
	$typeIcon = $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textmedia'];
	foreach ($allSiteComponents as $currentType) {
		$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$currentType] = $typeIcon;
	}

	// base fields for every content element
	$defaultFields = '
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
    ';

	/* Define presets with fields to display for bj_polaroyd_photoslider*/
	$photoslider = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            image, ' . $defaultFields,
	];

	/* Define presets with fields to display for bj_polaroyd_contactthreecolumn*/
	$contactthreecolumn = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            polaroyd_contactthreecolumn, ' . $defaultFields,
	];

	/* Define presets with fields to display for bj_polaroyd_catimgfilter*/
	$catimgfilter = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            center_check, polaroyd_catimgfilter, ' . $defaultFields,
	];

	/* Define presets with fields to display for bj_polaroyd_logolisting*/
	$logolisting = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            image, ' . $defaultFields,
	];

	/* Define presets with fields to display for bj_polaroyd_slider*/
	$slider = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header,subheader,polaroyd_sliderlayout,image, ' . $defaultFields,
	];

	/* Define presets with fields to display for bj_polaroyd_team*/
	$team = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            polaroyd_team, ' . $defaultFields,
	];

	/* Define presets with fields to display for bj_polaroyd_pricing*/
	$pricing = [
		'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            polaroyd_pricing, ' . $defaultFields,
	];

	// assign to Elements
	$GLOBALS['TCA']['tt_content']['types']['bj_photoslider'] = $photoslider;
	$GLOBALS['TCA']['tt_content']['types']['bj_contactthreecolumn'] = $contactthreecolumn;
	$GLOBALS['TCA']['tt_content']['types']['bj_catimgfilter'] = $catimgfilter;
	$GLOBALS['TCA']['tt_content']['types']['bj_logolisting'] = $logolisting;
	$GLOBALS['TCA']['tt_content']['types']['bj_slider'] = $slider;
	$GLOBALS['TCA']['tt_content']['types']['bj_team'] = $team;
	$GLOBALS['TCA']['tt_content']['types']['bj_pricing'] = $pricing;
});

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
	'tt_content',
	'general',
	'polaroyd_icon',
	'after:header'
);