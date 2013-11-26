<?php
/**
 * Main entry point for the Semantic Web Browser extension.
 * @author Anna Kantorovitch, Benedikt Kämpgen and Andreas Adler
 * @file SemanticWebBrowser.php
 * @ingroup SWB
 */

// ask if we are being called directly
if ( !defined( 'MEDIAWIKI' ) ) {
        die( 'Not an entry point.' );
}

// load settings file
require_once dirname( __FILE__ ) . '/SWB_Settings.php';

/**
 * Global functions used for setting up the Semantic WebBrowser extension.
 *
 */
// include for toolbox
global $swbgToolboxBrowseSemWeb, $wgHooks, $wgAutoloadClasses, $swbgIP,
       $wgFooterIcons, $wgExtensionFunctions, $wgSpecialPageGroups,
       $wgExtensionMessagesFiles, $wgSpecialPages,
       $smwgNamespace, $wgServer, $wgAPIModules;

$wgExtensionMessagesFiles['SemanticWebBrowser'] = $swbgIP . 'SemanticWebBrowser.i18n.php';
$wgExtensionMessagesFiles['SemanticWebBrowserAlias']  = $swbgIP . 'SemanticWebBrowser.alias.php';

// Special Page for Browse Wiki
$wgAutoloadClasses['SWBSpecialBrowseSW']      = $swbgIP . 'specials/SearchTriple/SWB_SpecialBrowseSW.php';
$wgSpecialPages['BrowseSW']                   = 'SWBSpecialBrowseSW';
$wgSpecialPageGroups['BrowseSW']              = 'smw_group';

// InfoLink
$wgAutoloadClasses['SWBInfolink']               = $swbgIP . 'includes/SWB_Infolink.php';

// Data values
$wgAutoloadClasses['SWBResolvableUriValue']     = $swbgIP . 'includes/datavalues/SWBResolvableUriValue.php';

// SWB Search
$wgAutoloadClasses['SWBSearch']                 = $swbgIP . 'includes/SWB_Search.php';

$wgHooks['smwInitProperties'][] = 'registerPropertyTypes';



function registerPropertyTypes() {
	SMWDataValueFactory::registerDatatype( "_rur", "SWBResolvableUriValue",
		SMWDataItem::TYPE_URI, $label = false );

	return true;
}

/*
 * Include in toolbox to show the last article in "Browsing Semantic Web".
 * Has the same functionality as 'Browse properties' in the toolbox.
 */
if ( $swbgToolboxBrowseSemWeb ) {
	$wgHooks['SkinTemplateToolboxEnd'][] = 'swbfShowBrowseSemWeb';
}


function swbfShowBrowseSemWeb( $skintemplate ) {
	if ( $skintemplate->data['isarticle'] ) {
		$browselink = SWBInfolink::newBrowsingLink( wfMessage( 'browsesw' )->text(),
			$skintemplate->data['titleprefixeddbkey'], false );
		echo '<li id="t-smwbrowselink">' . $browselink->getHTML() . '</li>';
	}

	return true;
}

