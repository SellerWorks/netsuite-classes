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
 * CostCategorySearchRowBasic.
 */
class CostCategorySearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $itemCostType;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;

    public static $paramtypesmap = array(
        'account' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'itemCostType' => 'SearchColumnEnumSelectField[]',
        'name' => 'SearchColumnStringField[]',
    );
}
