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
require_once MAX_PATH . '/lib/OA/Dal.php';
require_once MAX_PATH . '/www/admin/config.php';
require_once MAX_PATH . '/lib/OA/Session.php';
require_once MAX_PATH . '/lib/OA/Admin/UI/UserAccess.php';

// Register input variables
phpAds_registerGlobal('userid', 'returnurl');

// Security check
OA_Permission::enforceAccount(OA_ACCOUNT_MANAGER, OA_ACCOUNT_TRAFFICKER);
OA_Permission::enforceAccountPermission(OA_ACCOUNT_TRAFFICKER, OA_PERM_SUPER_ACCOUNT);
OA_Permission::enforceAccessToObject('affiliates', $affiliateid);

$accountId = OA_Permission::getAccountIdForEntity('affiliates', $affiliateid);

// CVE-2013-5954 - see OA_Permission::checkSessionToken() method for details
OA_Permission::checkSessionToken();

/*-------------------------------------------------------*/
/* Main code                                             */
/*-------------------------------------------------------*/

if (!empty($accountId) && !empty($userid)) {
    OA_Admin_UI_UserAccess::unlinkUserFromAccount($userid, $accountId);
}

if (empty($returnurl)) {
    $returnurl = 'affiliate-access.php?affiliateid=' . $affiliateid;
}

Header("Location: " . $returnurl);
