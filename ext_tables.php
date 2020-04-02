<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_polaroyd_domain_model_contactthreecolumn');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_polaroyd_domain_model_team');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_polaroyd_domain_model_catimgfilter');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bjpolaroyd_domain_model_pricing');