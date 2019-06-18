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
 * VendorReturnAuthorization.
 */
class VendorReturnAuthorization extends Record
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
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var bool
     */
    public $taxRegOverride;
    /**
     * @var bool
     */
    public $taxDetailsOverride;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var VendorReturnAuthorizationOrderStatus
     */
    public $orderStatus;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var float
     */
    public $userTotal;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var Address
     */
    public $billingAddress;
    /**
     * @var RecordRef
     */
    public $billAddressList;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var float
     */
    public $userTaxTotal;
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
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $intercoTransaction;
    /**
     * @var IntercoStatus
     */
    public $intercoStatus;
    /**
     * @var VendorReturnAuthorizationExpenseList
     */
    public $expenseList;
    /**
     * @var VendorReturnAuthorizationItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var TaxDetailsList
     */
    public $taxDetailsList;
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
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'customForm' => 'RecordRef',
        'tranId' => 'string',
        'createdFrom' => 'RecordRef',
        'entity' => 'RecordRef',
        'orderStatus' => 'VendorReturnAuthorizationOrderStatus',
        'tranDate' => 'dateTime',
        'userTotal' => 'float',
        'currency' => 'RecordRef',
        'currencyName' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'memo' => 'string',
        'exchangeRate' => 'float',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'userTaxTotal' => 'float',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'intercoTransaction' => 'RecordRef',
        'intercoStatus' => 'IntercoStatus',
        'expenseList' => 'VendorReturnAuthorizationExpenseList',
        'itemList' => 'VendorReturnAuthorizationItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
