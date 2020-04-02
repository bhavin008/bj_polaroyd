#####################
### GDPR Settings ###
#####################

# customsubcategory=300=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie

bj_polaroyd {
	website {
		optimization{
			#cat = bj_polaroyd/website/optimization/01; type=boolean; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.compress_css
			compressCss = 1
			#cat = bj_polaroyd/website/optimization/02; type=boolean; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.compress_js
			compressJs = 1
			#cat = bj_polaroyd/website/optimization/03; type=boolean; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.concatenate_css
			concatenateCss = 1
			#cat = bj_polaroyd/website/optimization/04; type=boolean; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.concatenate_js
			concatenateJs = 1
		}
		debugging{
			#cat = bj_polaroyd/website/debugging/01; type=boolean; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.content_objectExceptionHandler
			contentObjectExceptionHandler = 0
		}
		settings{
			#cat = bj_polaroyd/website/settings/01; type=string; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.logo
			logo = fileadmin/bj_polaroyd/Logos/logo.jpg

			#cat = bj_polaroyd/website/settings/02; type=string; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.copyright
			copyright = Made in <strong>INDIA</strong> with <i class="fa fa-heart"></i> by <strong><a href="mailto:baradbhavin2303@gmail.com">Bhavinkumar Barad</a></strong>

			#cat = bj_polaroyd/website/settings/03; type=string; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.rootpage
			rootpage = 1

			#cat = bj_polaroyd/website/settings/04; type=string; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.facebook
			facebook = https://www.facebook.com/barad.bhavin.5

			#cat = bj_polaroyd/website/settings/05; type=string; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.instagram
			instagram = https://www.instagram.com/bhavin_08/
		
			#cat = bj_polaroyd/website/settings/04; type=string; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:const.mail
			mail = baradbhavin2303@gmail.com

			cookie {
                settings {
                    # cat=bj_gdpr/300; type=boolean; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.cookie_enable
                    cookie_enable = 1

                    # cat=bj_gdpr/300; type=int+; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.url
                    url =

                    # cat=bj_gdpr/300; type=options[edgeless,classic,basic]; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.theme
                    theme = edgeless

                    # cat=bj_gdpr/300; type=options[top,top-left,top-right,bottom,bottom-left,bottom-right]; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.position
                    position = bottom-right

                    # cat=bj_gdpr/300; type=int+; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.dismissOnScroll
                    dismissOnScroll =

                    # cat=bj_gdpr/300; type=options[info,opt-out]; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.type
                    type = info

                    palette {
                        popup {
                            # cat=bj_gdpr/300/popup; type=color; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.background
                            background = #d1cdce
                            # cat=bj_gdpr/300/popup; type=color; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.text
                            text = #fff
                        }
                        button {
                            # cat=bj_gdpr/300/button; type=color; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.btnbackground
                            background = #2F2F37
                            # cat=bj_gdpr/300/button; type=color; label=LLL:EXT:bj_polaroyd/Resources/Private/Language/locallang_db.xlf:cookie.btntext
                            text = #fff
                        }
                    }
                }
            }
		}
		paths{
			templateRootPath = typo3conf/ext/bj_polaroyd/Resources/Private/Templates/
			layoutRootPath = typo3conf/ext/bj_polaroyd/Resources/Private/Layouts/
			partialRootPath = typo3conf/ext/bj_polaroyd/Resources/Private/Partials/
		}
	}
}
