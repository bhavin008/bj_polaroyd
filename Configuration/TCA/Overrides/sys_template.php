<?php
defined('TYPO3_MODE') or die();

$extKey = 'bj_polaroyd';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'BJ Polaroyd');
