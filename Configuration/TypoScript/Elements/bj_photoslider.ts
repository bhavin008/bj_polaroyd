tt_content.bj_photoslider = COA
tt_content.bj_photoslider {
  20 = FLUIDTEMPLATE
  20 {
    file = typo3conf/ext/bj_polaroyd/Resources/Private/Elements/BjPhotoslider.html
    dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
      10 {
        references.table = tt_content
        references.fieldName = image
        as = images
      }
    }
    stdWrap {
      editIcons = tt_content: header [header_layout]
    }
  }
}