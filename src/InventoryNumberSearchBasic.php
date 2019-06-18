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
 * InventoryNumberSearchBasic.
 */
class InventoryNumberSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDateField
     */
    public $expirationDate;
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
     * @var SearchStringField
     */
    public $inventoryNumber;
    /**
     * @var SearchBooleanField
     */
    public $isOnHand;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchDoubleField
     */
    public $quantityAvailable;
    /**
     * @var SearchDoubleField
     */
    public $quantityInTransit;
    /**
     * @var SearchDoubleField
     */
    public $quantityOnHand;
    /**
     * @var SearchDoubleField
     */
    public $quantityOnOrder;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'expirationDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'inventoryNumber' => 'SearchStringField',
        'isOnHand' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'quantityAvailable' => 'SearchDoubleField',
        'quantityInTransit' => 'SearchDoubleField',
        'quantityOnHand' => 'SearchDoubleField',
        'quantityOnOrder' => 'SearchDoubleField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
