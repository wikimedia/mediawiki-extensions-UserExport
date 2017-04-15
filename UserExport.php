<?php
/**
 * This is the UserExport extension to MediaWiki that allows to export user data to a CSV file.
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @version 1.1.1 2016-01-21
 *
 * @links https://github.com/kghbln/UserExport/blob/master/README.md Documentation
 * @links https://www.mediawiki.org/wiki/Extension_talk:UserExport Support
 * @links https://phabricator.wikimedia.org/ Bug tracker
 * @links https://git.wikimedia.org/summary/mediawiki%2Fextensions%2FUserExport.git Source code
 *
 * @copyright Copyright (c) 2009
 * @author Rodrigo Sampaio Primo (RodrigoSampaioPrimo) <rodrigosprimo@gmail.com>
 * @author Karsten Hoffmeyer (Kghbln) <kontakt@wikihoster.net>
 *
 * @license https://www.gnu.org/licenses/gpl-2.0 GNU General Public License 2.0 or later
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
}

// Display extension properties on MediaWiki.
$wgExtensionCredits['specialpage'][] = array(
    'path' => __FILE__,
    'name' => 'User Export',
    'author' => array(
        'Rodrigo Sampaio Primo',
        'Karsten Hoffmeyer',
	'...'
        ),
    'url' => 'https://www.mediawiki.org/wiki/Extension:UserExport',
    'descriptionmsg' => 'userexport-desc',
    'version' => '1.1.1',
    'license-name' => 'GPL-2.0+'
    );

// Register extension class.
$wgAutoloadClasses['UserExport'] = __DIR__ . '/UserExport.body.php';

// Register extension messages and other localisation.
$wgMessagesDirs['UserExport'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['UserExport'] = __DIR__ . '/UserExport.i18n.php';
$wgExtensionMessagesFiles['UserExportAlias'] = __DIR__ . '/UserExport.alias.php';

// Register special page into MediaWiki.
$wgSpecialPages['UserExport'] = 'UserExport';

// Create new right.
$wgAvailableRights[] = 'userexport';
