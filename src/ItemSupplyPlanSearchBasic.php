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
 * ItemSupplyPlanSearchBasic.
 */
class ItemSupplyPlanSearchBasic extends SearchRecordBasic
{
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
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchBooleanField
     */
    public $orderCreated;
    /**
     * @var SearchDateField
     */
    public $orderDate;
    /**
     * @var SearchMultiSelectField
     */
    public $orderType;
    /**
     * @var SearchDoubleField
     */
    public $quantity;
    /**
     * @var SearchDateField
     */
    public $receiptDate;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $units;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'orderCreated' => 'SearchBooleanField',
        'orderDate' => 'SearchDateField',
        'orderType' => 'SearchMultiSelectField',
        'quantity' => 'SearchDoubleField',
        'receiptDate' => 'SearchDateField',
        'subsidiary' => 'SearchMultiSelectField',
        'units' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
