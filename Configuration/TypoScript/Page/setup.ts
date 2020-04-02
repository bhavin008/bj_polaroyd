plugin.tx_bjpolaroyd.settings.logo = {$bj_polaroyd.website.settings.logo}
plugin.tx_bjpolaroyd.settings.rootpage = {$bj_polaroyd.website.settings.rootpage}
plugin.tx_bjpolaroyd.settings.copyright = {$bj_polaroyd.website.settings.copyright}
plugin.tx_bjpolaroyd.settings.facebook = {$bj_polaroyd.website.settings.facebook}
plugin.tx_bjpolaroyd.settings.instagram = {$bj_polaroyd.website.settings.instagram}
plugin.tx_bjpolaroyd.settings.mail = {$bj_polaroyd.website.settings.mail}

page = PAGE
page{
	typeNum = 0

	shortcutIcon = fileadmin/bj_polaroyd/Logos/bjdas.ico

	bodyTag >
	bodyTagCObject = TEXT
	bodyTagCObject.value = <body class='' id='page_{page:uid}'>
	bodyTagCObject.insertData = 1
	
	meta{
		viewport = width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no
		author = Polaroyd Templates by Bhavin
		description = Welcome to Polaroyd
	}

	headerData{
		5 = TEXT
		5.field = title
		5.wrap = <title> | &nbsp;- Polaroyd</title>

		10 = TEXT
		10.value(
            <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext" rel="stylesheet">
        )

		998 = FLUIDTEMPLATE
        998 {
            file = EXT:bj_polaroyd/Resources/Private/Extensions/Cookie/Layouts/Cookie.html

            templateRootPath = EXT:bj_polaroyd/Resources/Private/Extensions/Cookie/Templates/
            layoutRootPath = EXT:bj_polaroyd/Resources/Private/Extensions/Cookie/Layouts/

            settings {
                url = {$bj_polaroyd.website.settings.cookie.settings.url}
                theme = {$bj_polaroyd.website.settings.cookie.settings.theme}
                position = {$bj_polaroyd.website.settings.cookie.settings.position}
                type = {$bj_polaroyd.website.settings.cookie.settings.type}
                dismissOnScroll = {$bj_polaroyd.website.settings.cookie.settings.dismissOnScroll}
                barBg = {$bj_polaroyd.website.settings.cookie.settings.palette.popup.background}
                barColor = {$bj_polaroyd.website.settings.cookie.settings.palette.popup.text}
                btnBg = {$bj_polaroyd.website.settings.cookie.settings.palette.button.background}
                btnColor = {$bj_polaroyd.website.settings.cookie.settings.palette.button.text}
            }
        }

        657 {
            10 {
                stdWrap.replacement {
                    10 {
                        search = <script
                        replace = <script data-ignore="1" data-cookieconsent="statistics" type="text/plain"
                    }
                    20 {
                        search = src=
                        replace = data-src=
                    }
                }
            }
            20 {
                stdWrap.replacement {
                    10 {
                        search = <script
                        replace = <script data-ignore="1" data-cookieconsent="statistics" type="text/plain"
                    }
                }
            }
        }

        90 = COA
        90 {
            wrap = <script data-ignore="1" data-cookieconsent="statistics" type="text/plain">|</script>
            10 < .jsInline.654
        }
	}

	includeCSS{
		10 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/bootstrap/css/bootstrap.min.css
		20 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/font-awesome/css/font-awesome.min.css
		30 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/ionicons/css/ionicons.min.css
		40 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/photostack/photostack.css
		50 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/fullpage-menu/fullpage-menu.css
		60 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/cubeportfolio/cubeportfolio.css
		70 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/superslides/superslides.css
        71 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/ihover/ihover.css
		80 = typo3conf/ext/bj_polaroyd/Resources/Public/css/style.css
	}

	includeJSFooter{
		10 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/jquery/jquery.min.js
		20 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/modernizr/modernizr.min.js
		30 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/bootstrap/js/bootstrap.min.js
		40 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/php-mail-form/validate.js
		50 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/easing/easing.min.js 
		60 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/cubeportfolio/cubeportfolio.js
		70 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/classie/classie.js
		80 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/fullpage-menu/fullpage-menu.js
		90 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/photostack/photostack.js
		100 = typo3conf/ext/bj_polaroyd/Resources/Public/lib/superslides/superslides.js
		110 = typo3conf/ext/bj_polaroyd/Resources/Public/js/main.js
		120 = typo3conf/ext/bj_polaroyd/Resources/Public/custom.js
	}

	10 = FLUIDTEMPLATE
	10 {
		layoutRootPath = {$bj_polaroyd.website.paths.layoutRootPath}
		partialRootPath = {$bj_polaroyd.website.paths.partialRootPath}
		templateRootPath = {$bj_polaroyd.website.paths.templateRootPath}

		// Let's automatically choose backend layout and template
        file.stdWrap.cObject = CASE
        file.stdWrap.cObject {
            key {
                data = levelfield:-1, backend_layout_next_level, slide
                override.field = backend_layout
            }

            default = TEXT
            default.value = {$bj_polaroyd.website.paths.templateRootPath}Main.html

            pagets__content = TEXT
            pagets__content.value = {$bj_polaroyd.website.paths.templateRootPath}Content.html
        }

		settings < plugin.tx_bjpolaroyd.settings

		// Generate menu with DataProcessing
        dataProcessing {
            // Main menu
            101 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
            101 {
                levels = 5
                special = directory
                special.value = {$bj_polaroyd.website.settings.rootpage}
                expandAll = 1
                includeSpacer = 1
                as = MainMenu
            }
        }
	}
}

# Define the library
lib {
    // Define default content
    content = CONTENT
    content {
		table = tt_content
		select.where = colPos = 1
	}

	// Define default content
    footer = CONTENT
    footer {
		table = tt_content
		select.where = colPos = 20
		slide = -1
	}

    // Footer's dynamic copyright text
    copyright = COA
    copyright {
        stdWrap.wrap = |

        1 = TEXT
        1 {
            current = 1
            strftime = %Y
            wrap = © &nbsp;|&nbsp;@&nbsp;
        }

        2 = TEXT
        2 {
            value = {$bj_polaroyd.website.settings.copyright}
            wrap = |
        }
    }

    imageData = FILES
	imageData.begin = 0
	imageData.maxItems = 1
	imageData.references.table = pages
	imageData.references.data = levelmedia:-1,slide
	imageData.references.uid.data = uid
	imageData.references.fieldName  = media
	imageData.renderObj = TEXT
	imageData.renderObj {
	    data = file:current:publicUrl
	}
}

##############################
### Disable Cookie Consent ###
##############################

[{$bj_polaroyd.website.settings.cookie.settings.cookie_enable} == 0]
    page.headerData.998 >
[global]