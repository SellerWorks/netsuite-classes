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
 * AccountingPeriodSearchAdvanced.
 */
class AccountingPeriodSearchAdvanced extends SearchRecord
{
    /**
     * @var AccountingPeriodSearch
     */
    public $criteria;
    /**
     * @var AccountingPeriodSearchRow
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
        'criteria' => 'AccountingPeriodSearch',
        'columns' => 'AccountingPeriodSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
