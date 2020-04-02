tt_content.bj_pricing = COA
tt_content.bj_pricing {
  20 = FLUIDTEMPLATE
  20 {
    file = typo3conf/ext/bj_polaroyd/Resources/Private/Elements/BjPricing.html
    dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
      10 {
        table = tx_bjpolaroyd_domain_model_pricing
        pidInList.field = pid
        where.dataWrap = polaroydpricing_parent={field:uid}
        orderBy = tx_bjpolaroyd_domain_model_pricing.sorting
        as = pricings
      }
    }
  }
}