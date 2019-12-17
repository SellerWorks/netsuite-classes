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
 * VendorBillInstallment.
 */
class VendorBillInstallment
{
    /**
     * @var float
     */
    public $amount;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var float
     */
    public $amountDue;
    /**
     * @var int
     */
    public $seqNum;
    /**
     * @var string
     */
    public $status;

    public static $paramtypesmap = [
        'amount' => 'float',
        'dueDate' => 'dateTime',
        'amountDue' => 'float',
        'seqNum' => 'integer',
        'status' => 'string',
    ];
}
