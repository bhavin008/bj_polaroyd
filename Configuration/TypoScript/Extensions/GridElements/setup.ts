# TypoScript for rendering in frontend
tt_content.gridelements_pi1.20.10.setup {
    # One column grid container
    1 < lib.gridelements.defaultGridSetup
    1 {
        cObject = FLUIDTEMPLATE
        cObject {
            file = typo3conf/ext/bj_polaroyd/Resources/Private/Extensions/Gridelements/BjContainer.html
        }
    }
    # Three column grid container
    2 < lib.gridelements.defaultGridSetup
    2{
        cObject = FLUIDTEMPLATE
        cObject {
            file = typo3conf/ext/bj_polaroyd/Resources/Private/Extensions/Gridelements/Bj3column.html
        }
    }
    # Three column grid container
    3 < lib.gridelements.defaultGridSetup
    3{
        cObject = FLUIDTEMPLATE
        cObject {
            file = typo3conf/ext/bj_polaroyd/Resources/Private/Extensions/Gridelements/Bj2column.html
        }
    }
}
