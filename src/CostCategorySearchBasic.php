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
 * CostCategorySearchBasic.
 */
class CostCategorySearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $itemCostType;
    /**
     * @var SearchStringField
     */
    public $name;

    public static $paramtypesmap = array(
        'account' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'itemCostType' => 'SearchEnumMultiSelectField',
        'name' => 'SearchStringField',
    );
}
