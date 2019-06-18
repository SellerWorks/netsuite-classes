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
 * DepositPayment.
 */
class DepositPayment
{
    /**
     * @var bool
     */
    public $deposit;
    /**
     * @var int
     */
    public $id;
    /**
     * @var dateTime
     */
    public $docDate;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $docNumber;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $refNum;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $transactionAmount;
    /**
     * @var float
     */
    public $paymentAmount;
    /**
     * @var int
     */
    public $lineId;

    public static $paramtypesmap = array(
        'deposit' => 'boolean',
        'id' => 'integer',
        'docDate' => 'dateTime',
        'type' => 'string',
        'docNumber' => 'string',
        'memo' => 'string',
        'paymentMethod' => 'RecordRef',
        'refNum' => 'string',
        'entity' => 'RecordRef',
        'currency' => 'RecordRef',
        'transactionAmount' => 'float',
        'paymentAmount' => 'float',
        'lineId' => 'integer',
    );
}
