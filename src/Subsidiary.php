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
 * Subsidiary.
 */
class Subsidiary extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $showSubsidiaryName;
    /**
     * @var string
     */
    public $url;
    /**
     * @var RecordRef
     */
    public $logo;
    /**
     * @var string
     */
    public $tranPrefix;
    /**
     * @var RecordRef
     */
    public $pageLogo;
    /**
     * @var string
     */
    public $state;
    /**
     * @var Country
     */
    public $country;
    /**
     * @var Address
     */
    public $mainAddress;
    /**
     * @var Address
     */
    public $shippingAddress;
    /**
     * @var Address
     */
    public $returnAddress;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var bool
     */
    public $isElimination;
    /**
     * @var RecordRef
     */
    public $fiscalCalendar;
    /**
     * @var RecordRef
     */
    public $taxFiscalCalendar;
    /**
     * @var bool
     */
    public $allowPayroll;
    /**
     * @var string
     */
    public $email;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $purchaseOrderQuantity;
    /**
     * @var float
     */
    public $purchaseOrderAmount;
    /**
     * @var float
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var float
     */
    public $receiptQuantity;
    /**
     * @var float
     */
    public $receiptAmount;
    /**
     * @var float
     */
    public $receiptQuantityDiff;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $edition;
    /**
     * @var string
     */
    public $federalIdNumber;
    /**
     * @var string
     */
    public $addrLanguage;
    /**
     * @var string
     */
    public $nonConsol;
    /**
     * @var string
     */
    public $consol;
    /**
     * @var string
     */
    public $state1TaxNumber;
    /**
     * @var SubsidiaryTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var string
     */
    public $ssnOrTin;
    /**
     * @var RecordRef
     */
    public $interCoAccount;
    /**
     * @var SubsidiaryNexusList
     */
    public $nexusList;
    /**
     * @var SubsidiaryAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var RecordRef
     */
    public $checkLayout;
    /**
     * @var string
     */
    public $inboundEmail;
    /**
     * @var ClassTranslationList
     */
    public $classTranslationList;
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
        'name' => 'string',
        'parent' => 'RecordRef',
        'isInactive' => 'boolean',
        'showSubsidiaryName' => 'boolean',
        'url' => 'string',
        'logo' => 'RecordRef',
        'tranPrefix' => 'string',
        'pageLogo' => 'RecordRef',
        'state' => 'string',
        'country' => 'Country',
        'mainAddress' => 'Address',
        'shippingAddress' => 'Address',
        'returnAddress' => 'Address',
        'legalName' => 'string',
        'isElimination' => 'boolean',
        'fiscalCalendar' => 'RecordRef',
        'taxFiscalCalendar' => 'RecordRef',
        'allowPayroll' => 'boolean',
        'email' => 'string',
        'currency' => 'RecordRef',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'fax' => 'string',
        'edition' => 'string',
        'federalIdNumber' => 'string',
        'addrLanguage' => 'string',
        'nonConsol' => 'string',
        'consol' => 'string',
        'state1TaxNumber' => 'string',
        'taxRegistrationList' => 'SubsidiaryTaxRegistrationList',
        'ssnOrTin' => 'string',
        'interCoAccount' => 'RecordRef',
        'nexusList' => 'SubsidiaryNexusList',
        'accountingBookDetailList' => 'SubsidiaryAccountingBookDetailList',
        'checkLayout' => 'RecordRef',
        'inboundEmail' => 'string',
        'classTranslationList' => 'ClassTranslationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
