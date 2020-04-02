tt_content.bj_catimgfilter = COA
tt_content.bj_catimgfilter {
  20 = FLUIDTEMPLATE
  20 {
    file = typo3conf/ext/bj_polaroyd/Resources/Private/Elements/BjCatimgfilter.html
    dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
      10 {
        table = tx_polaroyd_domain_model_catimgfilter
        pidInList.field = pid
        where.dataWrap = polaroydcatimgfilter_parent={field:uid}
        orderBy = tx_polaroyd_domain_model_catimgfilter.sorting
        as = catimgfilter
        dataProcessing {
          10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
          10 {
            references.table = tx_polaroyd_domain_model_catimgfilter
            references.fieldName = image
            as = images
          }
        }
      }
      20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
      20 {
        table = sys_category
        pidInList = root,-1
        selectFields = sys_category.*
        orderBy = sys_category.sorting
        recursive = 99
        as = categories
      }
    }
  }
}