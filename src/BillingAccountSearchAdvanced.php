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
 * BillingAccountSearchAdvanced.
 */
class BillingAccountSearchAdvanced extends SearchRecord
{
    /**
     * @var BillingAccountSearch
     */
    public $criteria;
    /**
     * @var BillingAccountSearchRow
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
        'criteria' => 'BillingAccountSearch',
        'columns' => 'BillingAccountSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
