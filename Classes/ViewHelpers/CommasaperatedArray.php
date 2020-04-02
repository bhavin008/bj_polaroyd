<?php
namespace BJ\BjPolaroyd\ViewHelpers;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility as debug;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 *  Get Comma saperated
 */
class CommasaperatedArrayViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     *
     * @return void
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('values', 'int', 'values', true);
    }

    /**
     * Comma saperated
     *
     */
    public function render()
    {
        $myArray = explode(',', $this->arguments['values']);
        return $myArray;
    }
}
