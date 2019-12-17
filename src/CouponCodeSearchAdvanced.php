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
 * CouponCodeSearchAdvanced.
 */
class CouponCodeSearchAdvanced extends SearchRecord
{
    /**
     * @var CouponCodeSearch
     */
    public $criteria;
    /**
     * @var CouponCodeSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchScriptId;
    /**
     * @var string
     */
    public $savedSearchId;

    public static $paramtypesmap = [
        'criteria' => 'CouponCodeSearch',
        'columns' => 'CouponCodeSearchRow',
        'savedSearchScriptId' => 'string',
        'savedSearchId' => 'string',
    ];
}
