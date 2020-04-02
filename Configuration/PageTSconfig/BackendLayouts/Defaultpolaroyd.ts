# # Default

mod {
    web_layout {
        BackendLayouts {
            defaultpolaroyd {
                title = LLL:EXT:bj_polaroyd/Resources/Private/Language/BackendLayouts/locallang.xlf:default
                icon = EXT:bj_polaroyd/Resources/Public/Icons/BackendLayouts/default.png
                config {
					backend_layout {
						colCount = 1
						rowCount = 4
						rows {
							1 {
								columns {
									1 {
										name = LLL:EXT:bj_polaroyd/Resources/Private/Language/BackendLayouts/locallang.xlf:content
										colPos = 1
									}
								}
							}
							2 {
								columns {
									1 {
										name = LLL:EXT:bj_polaroyd/Resources/Private/Language/BackendLayouts/locallang.xlf:footer
										colPos = 20
									}
								}
							}
						}
					}
                }
            }
        }
    }
}
