<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

// Require the initialisation file
require_once '../../init.php';

// Required files
require_once MAX_PATH . '/www/admin/config.php';
require_once MAX_PATH . '/www/admin/lib-maintenance.inc.php';
require_once MAX_PATH . '/www/admin/lib-statistics.inc.php';
require_once MAX_PATH . '/www/admin/lib-zones.inc.php';

// Security check
OA_Permission::enforceAccount(OA_ACCOUNT_ADMIN);

/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

phpAds_PageHeader("maintenance-index");
phpAds_MaintenanceSelection("user-passwords");


/*-------------------------------------------------------*/
/* Main code                                             */
/*-------------------------------------------------------*/

echo "<br /><p>";
echo str_replace("\n", "</p><p>", $strUserPasswordsExplaination);
echo "</p>";

phpAds_ShowBreak();
echo "<img src='" . OX::assetPath() . "/images/" . $phpAds_TextDirection . "/icon-undo.gif' border='0' align='absmiddle'>&nbsp;
    <a href='maintenance-user-passwords-check.php'>$strCheckUserPasswords</a>&nbsp;&nbsp;";
phpAds_ShowBreak();

/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

phpAds_PageFooter();
