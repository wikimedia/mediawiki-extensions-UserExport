<?php
/**
 * Initialization file for the UserExport extension.
 *
 * @link https://www.mediawiki.org/wiki/Extension:UserExport Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:UserExport Support
 *
 * @ingroup Extensions
 *
 * @licence http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @author Rodrigo Sampaio Primo (RodrigoSampaioPrimo)
 */
 
// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
}
 
$wgExtensionCredits['specialpage'][] = array(
    'path'           => __FILE__,
    'name'           => 'User Export',
    'version'        => '1.0.1',
    'url'            => 'https://www.mediawiki.org/wiki/Extension:UserExport',
    'author'         => 'Rodrigo Sampaio Primo',
    'descriptionmsg' => 'userexport-desc',
);
 
// Register extension class.
$wgAutoloadClasses['UserExport'] = __DIR__ . '/UserExport.body.php';

// Register extension messages and other localisation.
$wgMessagesDirs['UserExport'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['UserExport'] = __DIR__ . '/UserExport.i18n.php';
$wgExtensionMessagesFiles['UserExportAlias'] = __DIR__ . '/UserExport.alias.php';

// Register special page into MediaWiki. 
$wgSpecialPages['UserExport'] = 'UserExport';
$wgSpecialPageGroups['UserExport'] = 'users';

// Create new right.
$wgAvailableRights[] = 'userexport';
