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
 * MseSubsidiarySearchBasic.
 */
class MseSubsidiarySearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBookCurrency;
    /**
     * @var SearchStringField
     */
    public $address;
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchDateField
     */
    public $effectiveFrom;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchStringField
     */
    public $fax;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isElimination;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchStringField
     */
    public $legalName;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchStringField
     */
    public $nameNoHierarchy;
    /**
     * @var SearchMultiSelectField
     */
    public $nexus;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchBooleanField
     */
    public $primary;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderAmount;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderQuantity;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var SearchDoubleField
     */
    public $receiptAmount;
    /**
     * @var SearchDoubleField
     */
    public $receiptQuantity;
    /**
     * @var SearchDoubleField
     */
    public $receiptQuantityDiff;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $taxEngine;
    /**
     * @var SearchStringField
     */
    public $taxIdNum;
    /**
     * @var SearchStringField
     */
    public $taxRegistrationNumber;
    /**
     * @var SearchStringField
     */
    public $tranPrefix;
    /**
     * @var SearchStringField
     */
    public $url;
    /**
     * @var SearchDateField
     */
    public $validUntil;
    /**
     * @var SearchStringField
     */
    public $zip;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountingBook' => 'SearchMultiSelectField',
        'accountingBookCurrency' => 'SearchMultiSelectField',
        'address' => 'SearchStringField',
        'city' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'currency' => 'SearchMultiSelectField',
        'effectiveFrom' => 'SearchDateField',
        'email' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isElimination' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'legalName' => 'SearchStringField',
        'name' => 'SearchStringField',
        'nameNoHierarchy' => 'SearchStringField',
        'nexus' => 'SearchMultiSelectField',
        'phone' => 'SearchStringField',
        'primary' => 'SearchBooleanField',
        'purchaseOrderAmount' => 'SearchDoubleField',
        'purchaseOrderQuantity' => 'SearchDoubleField',
        'purchaseOrderQuantityDiff' => 'SearchDoubleField',
        'receiptAmount' => 'SearchDoubleField',
        'receiptQuantity' => 'SearchDoubleField',
        'receiptQuantityDiff' => 'SearchDoubleField',
        'state' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxEngine' => 'SearchMultiSelectField',
        'taxIdNum' => 'SearchStringField',
        'taxRegistrationNumber' => 'SearchStringField',
        'tranPrefix' => 'SearchStringField',
        'url' => 'SearchStringField',
        'validUntil' => 'SearchDateField',
        'zip' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
