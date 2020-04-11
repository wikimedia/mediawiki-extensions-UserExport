<?php

$IP = getenv( "MW_INSTALL_PATH" );

if ( $IP === false ) {
	$IP = realpath( "../.." );
}
if ( $IP === false || !is_file( "$IP/includes/AutoLoader.php" ) ) {
	echo "Set the environment variable MW_INSTALL_PATH!\n";
	exit;
}
define( "MEDIAWIKI", true );
global $wgVersion, $wgAutoloadClasses;
require "$IP/maintenance/Maintenance.php";
require "$IP/includes/AutoLoader.php";
require "$IP/includes/Defines.php";
require "$IP/includes/DefaultSettings.php";
require "$IP/includes/GlobalFunctions.php";
require "$IP/vendor/autoload.php";
