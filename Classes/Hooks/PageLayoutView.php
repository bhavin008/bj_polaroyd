<?php
namespace BJ\BjPolaroyd\Hooks;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class PageLayoutView implements \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface {

	public function preProcess(\TYPO3\CMS\Backend\View\PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row) {
		$extKey = 'bj_polaroyd';

		if ($row['CType'] === 'bj_contactthreecolumn') {
			// TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($product);exit;
			$drawItem = false;
			$headerContent = '';

			// template
			$view = $this->getFluidTemplate($extKey, GeneralUtility::underscoredToUpperCamelCase($row['CType']));

			// get data records
			$irreItems = $this->getInlineRecords($row, 'tx_polaroyd_domain_model_contactthreecolumn', 'polaroydcontactthreecolumn_parent', '');

			// assign all to view
			$view->assignMultiple([
				'data' => $row,
				'contactthreecolumns' => $irreItems,
			]);

			// return the preview
			$itemContent = $parentObject->linkEditContent($view->render(), $row);
		}

		if ($row['CType'] === 'bj_catimgfilter') {
			// TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($product);exit;
			$drawItem = false;
			$headerContent = '';

			// template
			$view = $this->getFluidTemplate($extKey, GeneralUtility::underscoredToUpperCamelCase($row['CType']));

			// get data records
			$irreItems = $this->getInlineRecords($row, 'tx_polaroyd_domain_model_catimgfilter', 'polaroydcatimgfilter_parent', 'image');

			// assign all to view
			$view->assignMultiple([
				'data' => $row,
				'catimgfilter' => $irreItems,
			]);

			// return the preview
			$itemContent = $parentObject->linkEditContent($view->render(), $row);
		}

		if ($row['CType'] === 'bj_team') {
			// TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($product);exit;
			$drawItem = false;
			$headerContent = '';

			// template
			$view = $this->getFluidTemplate($extKey, GeneralUtility::underscoredToUpperCamelCase($row['CType']));

			// get data records
			$irreItems = $this->getInlineRecords($row, 'tx_polaroyd_domain_model_team', 'polaroydteam_parent', 'image');

			// assign all to view
			$view->assignMultiple([
				'data' => $row,
				'teammembers' => $irreItems,
			]);

			// return the preview
			$itemContent = $parentObject->linkEditContent($view->render(), $row);
		}

		if ($row['CType'] === 'bj_pricing') {
			// TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($product);exit;
			$drawItem = false;
			$headerContent = '';

			// template
			$view = $this->getFluidTemplate($extKey, GeneralUtility::underscoredToUpperCamelCase($row['CType']));

			// get data records
			$irreItems = $this->getInlineRecords($row, 'tx_bjpolaroyd_domain_model_pricing', 'polaroydpricing_parent', '');

			// assign all to view
			$view->assignMultiple([
				'data' => $row,
				'pricings' => $irreItems,
			]);

			// return the preview
			$itemContent = $parentObject->linkEditContent($view->render(), $row);
		}
	}

	/**
	 * @param string $extKey
	 * @param string $templateName
	 * @return string the fluid template
	 */
	protected function getFluidTemplate($extKey, $templateName) {
		// prepare own template
		$fluidTemplateFile = GeneralUtility::getFileAbsFileName('EXT:' . $extKey . '/Resources/Private/Backend/' . $templateName . '.html');
		$view = GeneralUtility::makeInstance(StandaloneView::class);
		$view->setTemplatePathAndFilename($fluidTemplateFile);
		return $view;
	}

	/**
	 * @param array $row the parent record
	 * @param string $table the name of the irre table
	 * @param string $parentField the field name with the uid of the parent record
	 * @param string $imageField optional image field
	 * @return array the irre elements
	 */
	private function getInlineRecords(array &$row, $table = '', $parentField = '', $imageField = '') {
		$irreItems = [];

		if ($table && $parentField) {
			if (version_compare(TYPO3_branch, '9.0', '>')) {
				$queryBuilder = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Database\ConnectionPool::class)
				->getQueryBuilderForTable($table);
				$irreItems = $queryBuilder
							->select('*')
							->from($table)
							->where($queryBuilder->expr()->eq('hidden', 0))
							->andwhere($queryBuilder->expr()->eq($parentField, intval($row['uid'])))
							->andwhere($queryBuilder->expr()->eq('pid', intval($row['pid'])))
							->orderBy('sorting')
							->execute()
							->fetchAll();
			} else {
				$irreItems = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
					'*',
					$table,
					' hidden=0 and ' . $parentField . '=' . intval($row['uid']) . ' and pid=' . intval($row['pid'])
					. BackendUtility::deleteClause($table)
					. BackendUtility::versioningPlaceholderClause($table),
					'',
					'sorting'
				);
			}
			if ($imageField && is_array($irreItems) && count($irreItems)) {
				foreach ($irreItems as $k => $irreItem) {
					$irreItems[$k]['irre_' . $imageField] = BackendUtility::resolveFileReferences($table, $imageField,
						$irreItem);
				}
			}
		}

		return $irreItems;
	}
}