<?php
/**
 * This is the UserExport extension to MediaWiki that allows to export user data to a CSV file.
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 *
 * @links https://github.com/wikimedia/mediawiki-extensions-UserExport/blob/master/README.md Documentation
 * @links https://www.mediawiki.org/wiki/Extension_talk:UserExport Support
 * @links https://phabricator.wikimedia.org/ Bug tracker
 * @links https://gerrit.wikimedia.org/r/p/mediawiki/extensions/UserExport Source code
 *
 * @copyright Copyright (c) 2009
 *
 * @author Rodrigo Sampaio Primo (RodrigoSampaioPrimo) <rodrigosprimo@gmail.com>
 * @author Karsten Hoffmeyer (Kghbln) <kontakt@wikihoster.net>
 * @author Sam Reed (Reedy)
 * @author Samantha Nguyen (SamanthaNguyen)
 * @author Jay Prakash (Jayprakash12345)
 *
 * @license GPL-2.0-or-later
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'UserExport' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['UserExport'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['UserExportAlias'] = __DIR__ . '/UserExport.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for the UserExport extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the UserExport extension requires MediaWiki 1.25+' );
}
