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
 * BinTransfer.
 */
class BinTransfer extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var BinTransferInventoryList
     */
    public $inventoryList;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $tranId;
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'tranDate' => 'dateTime',
        'memo' => 'string',
        'location' => 'RecordRef',
        'inventoryList' => 'BinTransferInventoryList',
        'subsidiary' => 'RecordRef',
        'tranId' => 'string',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
