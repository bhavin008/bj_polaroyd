setup {
    default {
        rteCleanPasteBehaviour = pasteFormat
    }
}

RTE.classes >
RTE.classes {
    text-left {
        name = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifyleft
        value = text-align: left;
    }
    text-center {
        name = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifycenter
        value = text-align: center;
    }
    text-right {
        name = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifyright
        value = text-align: right;
    }
}

## Default RTE configuration
RTE.default {
        ## Bootstrap CSS
    contentCSS {
        20 = EXT:bj_polaroyd/Resources/Public/RTE.css
    }
    
        ## Markup options
    enableWordClean = 1
    removeTrailingBR = 1
    removeComments = 1
    removeTags = center, font, o:p, sdfield, strike, u
    removeTagsAndContents = link, meta, script, style, title
    
    hidePStyleItems = h5,h6,pre,address,div

        ## Toolbar options
        ## The TCA configuration may add buttons to the toolbar
    showButtons = blockstylelabel, blockstyle, textstylelabel, textstyle
    showButtons := addToList(formatblock, bold, italic, subscript, superscript)
    showButtons := addToList(orderedlist, unorderedlist, outdent, indent, textindicator)
    showButtons := addToList(insertcharacter, link, table, findreplace, chMode, removeformat, undo, redo, about)
    showButtons := addToList(toggleborders, tableproperties)
    showButtons := addToList(rowproperties, rowinsertabove, rowinsertunder, rowdelete, rowsplit)
    showButtons := addToList(columninsertbefore, columninsertafter, columndelete, columnsplit)
    showButtons := addToList(cellproperties, cellinsertbefore, cellinsertafter, celldelete, cellsplit, cellmerge)
    showButtons := addToList(left, center, right, justifyfull, image, pastetoggle)
    showButtons := addToList(formattext)

    
        ## More toolbar options
    keepButtonGroupTogether = 1

        ## Enable status bar
    showStatusBar =  1

		## List all class selectors that are allowed on the way to the database
	proc.allowedClasses = external-link, external-link-new-window, internal-link, internal-link-new-window, download, mail
	proc.allowedClasses := addToList(text-left, text-center, text-right, text-justify)
	proc.allowedClasses := addToList(blockquote-reverse)
	proc.allowedClasses := addToList(list-unstyled, list-inline)
	proc.allowedClasses := addToList(dl-horizontal)
    
    
    buttons.formatblock.removeItems = article, aside, footer, header, nav, section
    
    ## Restrict the list of class selectors presented by the RTE to the following for the specified tags:
    # buttons.blockstyle.tags.div.allowedClasses = align-left, align-center, align-right
    # buttons.blockstyle.tags.div.allowedClasses := addToList(csc-frame-frame1, csc-frame-frame2)
    buttons.blockstyle.tags {
        # p.allowedClasses = text-left, text-center, text-right, text-justify
        # div.allowedClasses = text-left, text-center, text-right, text-justify
    
        table.class.default = table
        # table.allowedClasses = table-striped, table-bordered, table-condensed
        # tr.allowedClasses = text-left, text-center, text-right
        # td.allowedClasses = active, success, info, warning, danger
    }

    buttons.textstyle.tags {
        span.allowedClasses = important, name-of-person, detail
        p.allowedClasses = text-left, text-center, text-right, text-justify
    }
    
    buttons.left.useClass = text-left
    buttons.center.useClass = text-center
    buttons.right.useClass = text-right
    buttons.justifyfull.useClass = text-justify
    
        ## Configuration of links
        ## These classes should also be in the list proc.allowedClasses
    buttons.link.properties.class.allowedClasses = external-link, external-link-new-window, internal-link, internal-link-new-window, download, mail, btn btn-primary
    buttons.link.page.properties.class.default = internal-link
    buttons.link.url.properties.class.default = external-link-new-window
    buttons.link.file.properties.class.default = download
    buttons.link.mail.properties.class.default = mail
    
    buttons.pastetoggle.setActiveOnRteOpen = 1
    buttons.pastetoggle.hidden = 1
    
        ## Configuration specific to the TableOperations feature
        ## Remove the following fieldsets from the table operations dialogs
    disableAlignmentFieldsetInTableOperations = 1
    disableSpacingFieldsetInTableOperations = 1
    disableColorFieldsetInTableOperations = 1
    disableLayoutFieldsetInTableOperations = 1
    disableBordersFieldsetInTableOperations = 1
        ## Show borders on table creation
    buttons.toggleborders.setOnTableCreation = 1

        ## Configuration specific to the bold and italic buttons
        ## Add hotkeys associated with bold and italic buttons
    buttons.bold.hotKey = b
    buttons.italic.hotKey = i

        ## Configuration of microdata schema
    schema {
        sources {
            schemaOrg = EXT:rtehtmlarea/extensions/MicrodataSchema/res/schemaOrgAll.rdf
        }
    }
}

RTE.default.proc.entryHTMLparser_db {
    allowTags < RTE.default.proc.allowTags
}
	## front end RTE configuration for the general public
RTE.default.FE < RTE.default
RTE.default.FE.showStatusBar = 0
RTE.default.FE.hideButtons = chMode, blockstyle, textstyle, underline, strikethrough, subscript, superscript, lefttoright, righttoleft, left, center, right, justifyfull, table, inserttag, findreplace, removeformat, copy, cut, paste
RTE.default.FE.FE >
RTE.default.FE.userElements >