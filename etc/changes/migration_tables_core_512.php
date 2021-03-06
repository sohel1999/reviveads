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

require_once(MAX_PATH . '/lib/OA/Upgrade/Migration.php');

class Migration_512 extends Migration
{
    public function __construct()
    {
        //$this->__construct();

        $this->aTaskList_constructive[] = 'beforeAddField__banners__parameters';
        $this->aTaskList_constructive[] = 'afterAddField__banners__parameters';


        $this->aObjectMap['banners']['parameters'] = ['fromTable' => 'banners', 'fromField' => 'parameters'];
    }



    public function beforeAddField__banners__parameters()
    {
        return $this->beforeAddField('banners', 'parameters');
    }

    public function afterAddField__banners__parameters()
    {
        return $this->afterAddField('banners', 'parameters');
    }
}
