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
 * ChargeSearchBasic.
 */
class ChargeSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchMultiSelectField
     */
    public $billingAccount;
    /**
     * @var SearchMultiSelectField
     */
    public $billingItem;
    /**
     * @var SearchMultiSelectField
     */
    public $billTo;
    /**
     * @var SearchDateField
     */
    public $chargeDate;
    /**
     * @var SearchMultiSelectField
     */
    public $chargeType;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
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
    public $location;
    /**
     * @var SearchDateField
     */
    public $modifiedDate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var PostingPeriodDate
     */
    public $postingPeriodRelative;
    /**
     * @var SearchDoubleField
     */
    public $quantity;
    /**
     * @var SearchDoubleField
     */
    public $rate;
    /**
     * @var SearchMultiSelectField
     */
    public $rule;
    /**
     * @var SearchStringField
     */
    public $runId;
    /**
     * @var SearchLongField
     */
    public $salesOrder;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $stage;
    /**
     * @var SearchMultiSelectField
     */
    public $subscriptionLine;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $use;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'amount' => 'SearchDoubleField',
        'billingAccount' => 'SearchMultiSelectField',
        'billingItem' => 'SearchMultiSelectField',
        'billTo' => 'SearchMultiSelectField',
        'chargeDate' => 'SearchDateField',
        'chargeType' => 'SearchMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'createdDate' => 'SearchDateField',
        'currency' => 'SearchMultiSelectField',
        'department' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'location' => 'SearchMultiSelectField',
        'modifiedDate' => 'SearchDateField',
        'postingPeriod' => 'RecordRef',
        'postingPeriodRelative' => 'PostingPeriodDate',
        'quantity' => 'SearchDoubleField',
        'rate' => 'SearchDoubleField',
        'rule' => 'SearchMultiSelectField',
        'runId' => 'SearchStringField',
        'salesOrder' => 'SearchLongField',
        'stage' => 'SearchEnumMultiSelectField',
        'subscriptionLine' => 'SearchMultiSelectField',
        'use' => 'SearchEnumMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
