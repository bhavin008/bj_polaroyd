config{
	baseURL >
	absRefPrefix >
	doctype = html5
	xmlprologue = none
	linkVars = L
	uniqueLinkVars = 0
	admPanel = 0
	extTarget = _blank
	fileTarget = _blank

	# For Language
	language = en
	locale_all = english
	sys_language_mode = content_fallback
	htmlTag_langKey = en
	sys_language_uid = 0
	sys_language_overlay = hideNonTranslated

	# Mail Spamming Security
	spamProtectEmailAddresses = ascii

	# For Caching
	cache_period = 86400
	no_cache = 0

	# For Debugging
	contentObjectExceptionHandler = {$bj_polaroyd.website.debugging.contentObjectExceptionHandler}
	
	# For RealURL
	tx_realurl_enable = 1

	# For enable indexed search
	index_enable = 1

	# index files
	index_externals = 1
	# don't index metatags
	index_metatags = 0

	# Site Optimization
	noPageTitle = 2
	moveJsFromHeaderToFooter = 1
	compressJs = {$bj_polaroyd.website.optimization.compressJs}
	compressCss = {$bj_polaroyd.website.optimization.compressCss}
	concatenateJs = {$bj_polaroyd.website.optimization.concatenateJs}
	concatenateCss = {$bj_polaroyd.website.optimization.concatenateCss}
}
