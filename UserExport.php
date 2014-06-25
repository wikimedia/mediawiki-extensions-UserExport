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
 
if (!defined('MEDIAWIKI')) {
    echo ("This file is an extension to the MediaWiki software and cannot be used standalone.\n");
    die(1);
}
 
$wgExtensionCredits['specialpage'][] = array(
    'path'           => __FILE__,
    'name'           => 'User Export',
    'version'        => '1.0.1',
    'url'            => 'https://www.mediawiki.org/wiki/Extension:UserExport',
    'author'         => 'Rodrigo Sampaio Primo',
    'descriptionmsg' => 'userexport-desc',
);
 
$wgAvailableRights[] = 'userexport';
$wgGroupPermissions['bureaucrat']['userexport'] = true;
 
$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['UserExport'] = $dir . 'UserExport.body.php';
$wgExtensionMessagesFiles['UserExport'] = $dir . 'UserExport.i18n.php';
$wgExtensionAliasesFiles['UserExport'] = $dir . 'UserExport.i18n.alias.php';
 
$wgSpecialPages['UserExport'] = 'UserExport';
$wgSpecialPageGroups['UserExport'] = 'users';
$wgUserExportProtectedGroups = array( "sysop" );
 
# Add a new log type
$wgLogTypes[]                         = 'userexport';
$wgLogNames['userexport']              = 'userexport-logpage';
$wgLogHeaders['userexport']            = 'userexport-logpagetext';
$wgLogActions['userexport/exportuser']  = 'userexport-success-log';
