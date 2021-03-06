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

/**
 * Table Definition for account_preference_assoc
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Account_preference_assoc extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'account_preference_assoc';        // table name
    public $account_id;                      // MEDIUMINT(9) => openads_mediumint => 129
    public $preference_id;                   // MEDIUMINT(9) => openads_mediumint => 129
    public $value;                           // TEXT() => openads_text => 162

    /* Static get */
    public static function staticGet($k, $v = null)
    {
        return DB_DataObject::staticGetFromClassName('DataObjects_Account_preference_assoc', $k, $v);
    }

    public $defaultValues = [
        'value' => '',
    ];

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    public function _auditEnabled()
    {
        return true;
    }

    public function _getContextId()
    {
        return 0;
    }

    public function _getContext()
    {
        return 'Account Preference Association';
    }

    /**
     * build an accounts specific audit array
     *
     * @param integer $actionid
     * @param array $aAuditFields
     */
    public function _buildAuditArray($actionid, &$aAuditFields)
    {
        $aAuditFields['key_desc'] = 'Account #' . $this->account_id . ' -> Preference #' . $this->preference_id;
    }
}
