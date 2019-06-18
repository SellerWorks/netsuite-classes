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
 * InventoryAssignment.
 */
class InventoryAssignment
{
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var RecordRef
     */
    public $issueInventoryNumber;
    /**
     * @var string
     */
    public $receiptInventoryNumber;
    /**
     * @var RecordRef
     */
    public $binNumber;
    /**
     * @var RecordRef
     */
    public $toBinNumber;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var float
     */
    public $quantityAvailable;

    public static $paramtypesmap = array(
        'internalId' => 'string',
        'issueInventoryNumber' => 'RecordRef',
        'receiptInventoryNumber' => 'string',
        'binNumber' => 'RecordRef',
        'toBinNumber' => 'RecordRef',
        'quantity' => 'float',
        'expirationDate' => 'dateTime',
        'quantityAvailable' => 'float',
    );
}
