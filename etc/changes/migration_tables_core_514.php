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

class Migration_514 extends Migration
{
    public function __construct()
    {
        //$this->__construct();

        $this->aTaskList_constructive[] = 'beforeAddField__preference__updates_cs_data_enabled';
        $this->aTaskList_constructive[] = 'afterAddField__preference__updates_cs_data_enabled';
        $this->aTaskList_constructive[] = 'beforeAddField__preference__ad_clicks_sum';
        $this->aTaskList_constructive[] = 'afterAddField__preference__ad_clicks_sum';
        $this->aTaskList_constructive[] = 'beforeAddField__preference__ad_views_sum';
        $this->aTaskList_constructive[] = 'afterAddField__preference__ad_views_sum';
        $this->aTaskList_constructive[] = 'beforeAddField__preference__ad_clicks_per_second';
        $this->aTaskList_constructive[] = 'afterAddField__preference__ad_clicks_per_second';
        $this->aTaskList_constructive[] = 'beforeAddField__preference__ad_views_per_second';
        $this->aTaskList_constructive[] = 'afterAddField__preference__ad_views_per_second';
        $this->aTaskList_constructive[] = 'beforeAddField__preference__ad_cs_data_last_sent';
        $this->aTaskList_constructive[] = 'afterAddField__preference__ad_cs_data_last_sent';
        $this->aTaskList_constructive[] = 'beforeAddField__preference__ad_cs_data_last_received';
        $this->aTaskList_constructive[] = 'afterAddField__preference__ad_cs_data_last_received';


        $this->aObjectMap['preference']['updates_cs_data_enabled'] = ['fromTable' => 'preference', 'fromField' => 'updates_cs_data_enabled'];
        $this->aObjectMap['preference']['ad_clicks_sum'] = ['fromTable' => 'preference', 'fromField' => 'ad_clicks_sum'];
        $this->aObjectMap['preference']['ad_views_sum'] = ['fromTable' => 'preference', 'fromField' => 'ad_views_sum'];
        $this->aObjectMap['preference']['ad_clicks_per_second'] = ['fromTable' => 'preference', 'fromField' => 'ad_clicks_per_second'];
        $this->aObjectMap['preference']['ad_views_per_second'] = ['fromTable' => 'preference', 'fromField' => 'ad_views_per_second'];
        $this->aObjectMap['preference']['ad_cs_data_last_sent'] = ['fromTable' => 'preference', 'fromField' => 'ad_cs_data_last_sent'];
        $this->aObjectMap['preference']['ad_cs_data_last_received'] = ['fromTable' => 'preference', 'fromField' => 'ad_cs_data_last_received'];
    }



    public function beforeAddField__preference__updates_cs_data_enabled()
    {
        return $this->beforeAddField('preference', 'updates_cs_data_enabled');
    }

    public function afterAddField__preference__updates_cs_data_enabled()
    {
        return $this->afterAddField('preference', 'updates_cs_data_enabled');
    }

    public function beforeAddField__preference__ad_clicks_sum()
    {
        return $this->beforeAddField('preference', 'ad_clicks_sum');
    }

    public function afterAddField__preference__ad_clicks_sum()
    {
        return $this->afterAddField('preference', 'ad_clicks_sum');
    }

    public function beforeAddField__preference__ad_views_sum()
    {
        return $this->beforeAddField('preference', 'ad_views_sum');
    }

    public function afterAddField__preference__ad_views_sum()
    {
        return $this->afterAddField('preference', 'ad_views_sum');
    }

    public function beforeAddField__preference__ad_clicks_per_second()
    {
        return $this->beforeAddField('preference', 'ad_clicks_per_second');
    }

    public function afterAddField__preference__ad_clicks_per_second()
    {
        return $this->afterAddField('preference', 'ad_clicks_per_second');
    }

    public function beforeAddField__preference__ad_views_per_second()
    {
        return $this->beforeAddField('preference', 'ad_views_per_second');
    }

    public function afterAddField__preference__ad_views_per_second()
    {
        return $this->afterAddField('preference', 'ad_views_per_second');
    }

    public function beforeAddField__preference__ad_cs_data_last_sent()
    {
        return $this->beforeAddField('preference', 'ad_cs_data_last_sent');
    }

    public function afterAddField__preference__ad_cs_data_last_sent()
    {
        return $this->afterAddField('preference', 'ad_cs_data_last_sent');
    }

    public function beforeAddField__preference__ad_cs_data_last_received()
    {
        return $this->beforeAddField('preference', 'ad_cs_data_last_received');
    }

    public function afterAddField__preference__ad_cs_data_last_received()
    {
        return $this->afterAddField('preference', 'ad_cs_data_last_received');
    }
}
