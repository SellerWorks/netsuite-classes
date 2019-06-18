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
 * ChargeSearchRowBasic.
 */
class ChargeSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingItem;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billTo;
    /**
     * @var SearchColumnDateField[]
     */
    public $chargeDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $chargeType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnDateField[]
     */
    public $modifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $postingPeriod;
    /**
     * @var SearchColumnStringField[]
     */
    public $quantity;
    /**
     * @var SearchColumnStringField[]
     */
    public $rate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $rule;
    /**
     * @var SearchColumnStringField[]
     */
    public $runId;
    /**
     * @var SearchColumnStringField[]
     */
    public $salesOrder;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $stage;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscriptionLine;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $use;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'amount' => 'SearchColumnDoubleField[]',
        'billingAccount' => 'SearchColumnSelectField[]',
        'billingItem' => 'SearchColumnSelectField[]',
        'billTo' => 'SearchColumnSelectField[]',
        'chargeDate' => 'SearchColumnDateField[]',
        'chargeType' => 'SearchColumnSelectField[]',
        'class' => 'SearchColumnSelectField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'currency' => 'SearchColumnSelectField[]',
        'department' => 'SearchColumnSelectField[]',
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'modifiedDate' => 'SearchColumnDateField[]',
        'postingPeriod' => 'SearchColumnStringField[]',
        'quantity' => 'SearchColumnStringField[]',
        'rate' => 'SearchColumnStringField[]',
        'rule' => 'SearchColumnSelectField[]',
        'runId' => 'SearchColumnStringField[]',
        'salesOrder' => 'SearchColumnStringField[]',
        'stage' => 'SearchColumnEnumSelectField[]',
        'subscriptionLine' => 'SearchColumnSelectField[]',
        'use' => 'SearchColumnEnumSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
