<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Define Components
$allSiteComponents = [
	'bj_photoslider',
	'bj_slider',
	'bj_logolisting',
	'bj_catimgfilter',
	'bj_team',
	'bj_pricing',
	'bj_contactthreecolumn',
];
define('ALL_SITE_COMPONENTS', $allSiteComponents);
$extKey = 'bj_polaroyd';

// loadTsConfig
if (TYPO3_MODE === 'BE') {
	$allSiteComponents = constant('ALL_SITE_COMPONENTS');
	// Get the extension configuration
	$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bj_polaroyd']);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bj_polaroyd/Configuration/PageTSconfig/Setup.ts">');

	// Let's add default PageTS for "Form"
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:bj_polaroyd/Configuration/PageTSconfig/TceForm/Default.yaml';

	$collectComponent = $listComponent = $tsComponents = '';
	foreach ($allSiteComponents as $theComponent) {
		$collectComponent .= "
            $theComponent {
              iconIdentifier = $theComponent
              icon = EXT:$extKey/Resources/Public/Icons/$theComponent.png
              title = LLL:EXT:$extKey/Resources/Private/Language/locallang_db.xlf:wizard.$theComponent
              description = LLL:EXT:$extKey/Resources/Private/Language/locallang_db.xlf:wizard.$theComponent.description
              tt_content_defValues {
                  CType = $theComponent
              }
            }
        ";
		$listComponent .= $theComponent . ',';
		$tsComponents .= '
            ' . $theComponent . ' < .ns_default
            ' . $theComponent . '.templateName = ' . ucfirst($theComponent) . '
        ';
	}

	// Adding final CType and extra tab call "Custom Components"
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("
        # Add new custom wizard for our Components
        mod.wizards.newContentElement.wizardItems.extra {

           # Set caption
           header = Custom Elements
           icon =

           # Register each Elements
           elements {
                $collectComponent
           }
           show := addToList($listComponent)
        }
    ");

	/* set iconidentifier */
	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
		\TYPO3\CMS\Core\Imaging\IconRegistry::class
	);
	foreach ($allSiteComponents as $currentType) {
		$iconRegistry->registerIcon(
			$currentType,
			\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
			['source' => 'EXT:bj_polaroyd/Resources/Public/Icons/' . $currentType . '.png']
		);
	}
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['bj_polaroyd'] = 'BJ\\BjPolaroyd\\Hooks\\PageLayoutView';