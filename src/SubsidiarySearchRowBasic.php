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
 * SubsidiarySearchRowBasic.
 */
class SubsidiarySearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBookCurrency;
    /**
     * @var SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var SearchColumnStringField[]
     */
    public $anonymousCustomerInboundEmail;
    /**
     * @var SearchColumnStringField[]
     */
    public $anonymousCustomerOnlineForms;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseAssignmentTemplate;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseAutomaticClosureTemplate;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseCopyEmployeeTemplate;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseCreationTemplate;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseEscalationTemplate;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseUpdateTemplate;
    /**
     * @var SearchColumnStringField[]
     */
    public $city;
    /**
     * @var SearchColumnStringField[]
     */
    public $companyNameForSupportMessages;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveFrom;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnStringField[]
     */
    public $employeeCaseUpdateTemplate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isElimination;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnStringField[]
     */
    public $legalName;
    /**
     * @var SearchColumnStringField[]
     */
    public $mainSupportEmailAddress;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $nameNoHierarchy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $nexus;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;
    /**
     * @var SearchColumnStringField[]
     */
    public $state;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxEngine;
    /**
     * @var SearchColumnStringField[]
     */
    public $taxIdNum;
    /**
     * @var SearchColumnStringField[]
     */
    public $taxRegistrationNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $tranPrefix;
    /**
     * @var SearchColumnStringField[]
     */
    public $url;
    /**
     * @var SearchColumnDateField[]
     */
    public $validUntil;
    /**
     * @var SearchColumnStringField[]
     */
    public $zip;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountingBook' => 'SearchColumnSelectField[]',
        'accountingBookCurrency' => 'SearchColumnSelectField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'anonymousCustomerInboundEmail' => 'SearchColumnStringField[]',
        'anonymousCustomerOnlineForms' => 'SearchColumnStringField[]',
        'caseAssignmentTemplate' => 'SearchColumnStringField[]',
        'caseAutomaticClosureTemplate' => 'SearchColumnStringField[]',
        'caseCopyEmployeeTemplate' => 'SearchColumnStringField[]',
        'caseCreationTemplate' => 'SearchColumnStringField[]',
        'caseEscalationTemplate' => 'SearchColumnStringField[]',
        'caseUpdateTemplate' => 'SearchColumnStringField[]',
        'city' => 'SearchColumnStringField[]',
        'companyNameForSupportMessages' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'currency' => 'SearchColumnSelectField[]',
        'effectiveFrom' => 'SearchColumnDateField[]',
        'email' => 'SearchColumnStringField[]',
        'employeeCaseUpdateTemplate' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isElimination' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'legalName' => 'SearchColumnStringField[]',
        'mainSupportEmailAddress' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'nameNoHierarchy' => 'SearchColumnStringField[]',
        'nexus' => 'SearchColumnSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'purchaseOrderAmount' => 'SearchColumnDoubleField[]',
        'purchaseOrderQuantity' => 'SearchColumnDoubleField[]',
        'purchaseOrderQuantityDiff' => 'SearchColumnDoubleField[]',
        'receiptAmount' => 'SearchColumnDoubleField[]',
        'receiptQuantity' => 'SearchColumnDoubleField[]',
        'receiptQuantityDiff' => 'SearchColumnDoubleField[]',
        'state' => 'SearchColumnStringField[]',
        'taxEngine' => 'SearchColumnSelectField[]',
        'taxIdNum' => 'SearchColumnStringField[]',
        'taxRegistrationNumber' => 'SearchColumnStringField[]',
        'tranPrefix' => 'SearchColumnStringField[]',
        'url' => 'SearchColumnStringField[]',
        'validUntil' => 'SearchColumnDateField[]',
        'zip' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
