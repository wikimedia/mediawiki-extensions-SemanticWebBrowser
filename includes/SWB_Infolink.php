<?php

use MediaWiki\MediaWikiServices;

/**
 *
 * @file SWB_Infolink
 * @ingroup SWB
 * @author Anna Kantorovitch, Benedikt Kämpgen and Andreas Adler
 *
 */
class SWBInfolink extends SMWInfolink {

	public function __construct( $internal, $caption, $target, $style = false, array $params = array() ) {
		parent::__construct( $internal, $caption, $target, $style, $params );
	}

	public static function newBrowsingLink( $caption, $titleText, $style = 'smwbrowse' ) {
		return new SWBInfolink(
			true,
			$caption,
			MediaWikiServices::getInstance()->getContentLanguage()->getNsText( NS_SPECIAL ) . ':BrowseSW',
			$style,
			array( $titleText )
		);
	}


}


