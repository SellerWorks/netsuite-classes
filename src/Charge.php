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
 * Charge.
 */
class Charge extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $salesOrder;
    /**
     * @var RecordRef
     */
    public $billTo;
    /**
     * @var RecordRef
     */
    public $billingAccount;
    /**
     * @var ChargeStage
     */
    public $stage;
    /**
     * @var dateTime
     */
    public $chargeDate;
    /**
     * @var ChargeUse
     */
    public $use;
    /**
     * @var RecordRef
     */
    public $chargeType;
    /**
     * @var RecordRef
     */
    public $projectTask;
    /**
     * @var string
     */
    public $description;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var RecordRef
     */
    public $timeRecord;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $billingItem;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $transaction;
    /**
     * @var RecordRef
     */
    public $transactionLine;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $salesOrderLine;
    /**
     * @var RecordRef
     */
    public $subscriptionLine;
    /**
     * @var RecordRef
     */
    public $invoice;
    /**
     * @var RecordRef
     */
    public $invoiceLine;
    /**
     * @var RecordRef
     */
    public $rule;
    /**
     * @var string
     */
    public $runId;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'salesOrder' => 'RecordRef',
        'billTo' => 'RecordRef',
        'billingAccount' => 'RecordRef',
        'stage' => 'ChargeStage',
        'chargeDate' => 'dateTime',
        'use' => 'ChargeUse',
        'chargeType' => 'RecordRef',
        'projectTask' => 'RecordRef',
        'description' => 'string',
        'createdDate' => 'dateTime',
        'timeRecord' => 'RecordRef',
        'rate' => 'string',
        'quantity' => 'float',
        'amount' => 'float',
        'billingItem' => 'RecordRef',
        'currency' => 'RecordRef',
        'transaction' => 'RecordRef',
        'transactionLine' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'salesOrderLine' => 'RecordRef',
        'subscriptionLine' => 'RecordRef',
        'invoice' => 'RecordRef',
        'invoiceLine' => 'RecordRef',
        'rule' => 'RecordRef',
        'runId' => 'string',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
