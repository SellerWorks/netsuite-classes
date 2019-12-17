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
 * Account.
 */
class Account extends Record
{
    /**
     * @var AccountType
     */
    public $acctType;
    /**
     * @var RecordRef
     */
    public $unitsType;
    /**
     * @var RecordRef
     */
    public $unit;
    /**
     * @var string
     */
    public $acctNumber;
    /**
     * @var string
     */
    public $acctName;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $exchangeRate;
    /**
     * @var ConsolidatedRate
     */
    public $generalRate;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var ConsolidatedRate
     */
    public $cashFlowRate;
    /**
     * @var RecordRef
     */
    public $billableExpensesAcct;
    /**
     * @var RecordRef
     */
    public $deferralAcct;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $curDocNum;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRefList
     */
    public $restrictToAccountingBookList;
    /**
     * @var bool
     */
    public $inventory;
    /**
     * @var bool
     */
    public $eliminate;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var RecordRef
     */
    public $category1099misc;
    /**
     * @var AccountLocalizationsList
     */
    public $localizationsList;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var bool
     */
    public $revalue;
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
        'acctType' => 'AccountType',
        'unitsType' => 'RecordRef',
        'unit' => 'RecordRef',
        'acctNumber' => 'string',
        'acctName' => 'string',
        'legalName' => 'string',
        'includeChildren' => 'boolean',
        'currency' => 'RecordRef',
        'exchangeRate' => 'string',
        'generalRate' => 'ConsolidatedRate',
        'parent' => 'RecordRef',
        'cashFlowRate' => 'ConsolidatedRate',
        'billableExpensesAcct' => 'RecordRef',
        'deferralAcct' => 'RecordRef',
        'description' => 'string',
        'curDocNum' => 'integer',
        'isInactive' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'restrictToAccountingBookList' => 'RecordRefList',
        'inventory' => 'boolean',
        'eliminate' => 'boolean',
        'subsidiaryList' => 'RecordRefList',
        'category1099misc' => 'RecordRef',
        'localizationsList' => 'AccountLocalizationsList',
        'openingBalance' => 'float',
        'tranDate' => 'dateTime',
        'revalue' => 'boolean',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
