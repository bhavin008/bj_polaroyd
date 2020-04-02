tt_content.bj_contactthreecolumn = COA
tt_content.bj_contactthreecolumn {
  20 = FLUIDTEMPLATE
  20 {
    file = typo3conf/ext/bj_polaroyd/Resources/Private/Elements/BjContactthreecolumn.html
    dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
      10 {
        table = tx_polaroyd_domain_model_contactthreecolumn
        pidInList.field = pid
        where.dataWrap = polaroydcontactthreecolumn_parent={field:uid}
        orderBy = tx_polaroyd_domain_model_contactthreecolumn.sorting
        as = contactthreecolumns
      }
    }
  }
}