tt_content.bj_team = COA
tt_content.bj_team {
  20 = FLUIDTEMPLATE
  20 {
    file = typo3conf/ext/bj_polaroyd/Resources/Private/Elements/BjTeam.html
    dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
      10 {
        table = tx_polaroyd_domain_model_team
        pidInList.field = pid
        where.dataWrap = polaroydteam_parent={field:uid}
        orderBy = tx_polaroyd_domain_model_team.sorting
        as = teammembers
        dataProcessing {
          10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
          10 {
            references.table = tx_polaroyd_domain_model_team
            references.fieldName = image
            as = images
          }
        }
      }
    }
  }
}