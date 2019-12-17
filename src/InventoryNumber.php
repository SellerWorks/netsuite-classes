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
 * InventoryNumber.
 */
class InventoryNumber extends Record
{
    /**
     * @var string
     */
    public $inventoryNumber;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $units;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var InventoryNumberLocationsList
     */
    public $locationsList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'inventoryNumber' => 'string',
        'item' => 'RecordRef',
        'status' => 'string',
        'units' => 'string',
        'expirationDate' => 'dateTime',
        'memo' => 'string',
        'locationsList' => 'InventoryNumberLocationsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
