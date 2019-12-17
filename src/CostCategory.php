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
 * CostCategory.
 */
class CostCategory extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var CostCategoryItemCostType
     */
    public $itemCostType;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'name' => 'string',
        'account' => 'RecordRef',
        'itemCostType' => 'CostCategoryItemCostType',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
