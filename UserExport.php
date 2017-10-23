<?php
/**
 * This is the UserExport extension to MediaWiki that allows to export user data to a CSV file.
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @version 1.2.0 2017-07-03
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
 *
 * @license https://www.gnu.org/licenses/gpl-2.0 GNU General Public License 2.0 or later
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This is an extension to MediaWiki and cannot be run standalone.' );
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
    'version' => '1.2.0',
    'license-name' => 'GPL-2.0+'
    );

// Register extension class.
$wgAutoloadClasses['UserExport'] = __DIR__ . '/UserExport.body.php';

// Register extension messages and other localisation.
$wgMessagesDirs['UserExport'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['UserExportAlias'] = __DIR__ . '/UserExport.alias.php';

// Register special page into MediaWiki.
$wgSpecialPages['UserExport'] = 'UserExport';

// Create new right.
$wgAvailableRights[] = 'userexport';
