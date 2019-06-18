<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * BillingScheduleSearchAdvanced.
 */
class BillingScheduleSearchAdvanced extends SearchRecord
{
    /**
     * @var BillingScheduleSearch
     */
    public $criteria;
    /**
     * @var BillingScheduleSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = array(
        'criteria' => 'BillingScheduleSearch',
        'columns' => 'BillingScheduleSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
