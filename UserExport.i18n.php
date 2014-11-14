<?php
/**
 * Internationalisation file for the system messages of the UserExport extension.
 *
 * @author Rodrigoprimo
 *
 * @licence GNU General Public Licence 2.0 or later
 */
 
$messages = array();
 
/** English
 * @author Rodrigoprimo
 */
$messages['en'] = array(
    'userexport-desc'         		 => 'Allows to export the user names and the respective email addresses to a CSV file',
    'userexport'                     => 'User Export',
    'userexport-submit'              => 'Export users to CSV file',
    'userexport-badtoken' 		     => 'Invalid edit token',
    'userexport-description'         => 'This is a very simple extension to export Mediawiki users to a CSV file.<br />It only export the user name and user email, but it can be easily extended to support more user fields.'
);
 
/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
    'userexport-desc'        		 => 'Ergänzt eine [[Spezial:UserExport|Spezialseite]] zum Exportieren von Benutzerdaten im CSV-Format',
    'userexport'                     => 'Benutzerdatenexport',
    'userexport-submit'              => 'Benutzerdaten exportieren',
    'userexport-badtoken' 		     => 'Der Bearbeitungstoken ist ungültig.',
    'userexport-description'         => 'Dies ist eine einfache Programmerweiterung mit der man die Benutzerdaten (Name und E-Mail-Adresse) der auf dem Wiki registrierten Benutzer in eine CSV-Datei exportieren kann.'
);
