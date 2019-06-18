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
 * ReturnAuthorization.
 */
class ReturnAuthorization extends Record
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
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var string
     */
    public $source;
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
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var string
     */
    public $otherRefNum;
    /**
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $drAccount;
    /**
     * @var RecordRef
     */
    public $fxAccount;
    /**
     * @var dateTime
     */
    public $salesEffectiveDate;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var float
     */
    public $totalCostEstimate;
    /**
     * @var float
     */
    public $estGrossProfit;
    /**
     * @var float
     */
    public $estGrossProfitPercent;
    /**
     * @var dateTime
     */
    public $revRecStartDate;
    /**
     * @var dateTime
     */
    public $revRecEndDate;
    /**
     * @var bool
     */
    public $excludeCommission;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var RecordRef
     */
    public $discountItem;
    /**
     * @var string
     */
    public $discountRate;
    /**
     * @var RecordRef
     */
    public $taxItem;
    /**
     * @var float
     */
    public $taxRate;
    /**
     * @var bool
     */
    public $toBePrinted;
    /**
     * @var bool
     */
    public $toBeEmailed;
    /**
     * @var bool
     */
    public $toBeFaxed;
    /**
     * @var RecordRef
     */
    public $messageSel;
    /**
     * @var string
     */
    public $message;
    /**
     * @var Address
     */
    public $billingAddress;
    /**
     * @var RecordRef
     */
    public $billAddressList;
    /**
     * @var RecordRef
     */
    public $shipAddressList;
    /**
     * @var string
     */
    public $shipAddress;
    /**
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @var bool
     */
    public $syncSalesTeams;
    /**
     * @var RevenueStatus
     */
    public $revenueStatus;
    /**
     * @var float
     */
    public $recognizedRevenue;
    /**
     * @var float
     */
    public $deferredRevenue;
    /**
     * @var bool
     */
    public $revRecOnRevCommitment;
    /**
     * @var RevenueCommitStatus
     */
    public $revCommitStatus;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var RecordRef
     */
    public $creditCard;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var float
     */
    public $altSalesTotal;
    /**
     * @var dateTime
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $ccName;
    /**
     * @var string
     */
    public $ccStreet;
    /**
     * @var string
     */
    public $ccZipCode;
    /**
     * @var bool
     */
    public $ccApproved;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $discountTotal;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $payPalAuthId;
    /**
     * @var bool
     */
    public $payPalProcess;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var RecordRef
     */
    public $promoCode;
    /**
     * @var string
     */
    public $status;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var dateTime
     */
    public $validFrom;
    /**
     * @var ReturnAuthorizationOrderStatus
     */
    public $orderStatus;
    /**
     * @var RecordRef
     */
    public $salesRep;
    /**
     * @var RecordRef
     */
    public $giftCert;
    /**
     * @var string
     */
    public $contribPct;
    /**
     * @var float
     */
    public $giftCertTotal;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var float
     */
    public $giftCertAvailable;
    /**
     * @var bool
     */
    public $tranIsVsoeBundle;
    /**
     * @var bool
     */
    public $vsoeAutoCalc;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var ReturnAuthorizationItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var ReturnAuthorizationSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var ReturnAuthorizationPartnersList
     */
    public $partnersList;
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
        'currency' => 'RecordRef',
        'entity' => 'RecordRef',
        'vatRegNum' => 'string',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'source' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'intercoTransaction' => 'RecordRef',
        'intercoStatus' => 'IntercoStatus',
        'job' => 'RecordRef',
        'partner' => 'RecordRef',
        'otherRefNum' => 'string',
        'leadSource' => 'RecordRef',
        'memo' => 'string',
        'drAccount' => 'RecordRef',
        'fxAccount' => 'RecordRef',
        'salesEffectiveDate' => 'dateTime',
        'createdFrom' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'excludeCommission' => 'boolean',
        'exchangeRate' => 'float',
        'currencyName' => 'string',
        'discountItem' => 'RecordRef',
        'discountRate' => 'string',
        'taxItem' => 'RecordRef',
        'taxRate' => 'float',
        'toBePrinted' => 'boolean',
        'toBeEmailed' => 'boolean',
        'toBeFaxed' => 'boolean',
        'messageSel' => 'RecordRef',
        'message' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'shipAddressList' => 'RecordRef',
        'shipAddress' => 'string',
        'salesGroup' => 'RecordRef',
        'syncSalesTeams' => 'boolean',
        'revenueStatus' => 'RevenueStatus',
        'recognizedRevenue' => 'float',
        'deferredRevenue' => 'float',
        'revRecOnRevCommitment' => 'boolean',
        'revCommitStatus' => 'RevenueCommitStatus',
        'paymentMethod' => 'RecordRef',
        'creditCard' => 'RecordRef',
        'ccNumber' => 'string',
        'altSalesTotal' => 'float',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'ccApproved' => 'boolean',
        'pnRefNum' => 'string',
        'subTotal' => 'float',
        'discountTotal' => 'float',
        'total' => 'float',
        'creditCardProcessor' => 'RecordRef',
        'payPalAuthId' => 'string',
        'payPalProcess' => 'boolean',
        'email' => 'string',
        'fax' => 'string',
        'debitCardIssueNo' => 'string',
        'isTaxable' => 'boolean',
        'promoCode' => 'RecordRef',
        'status' => 'string',
        'taxTotal' => 'float',
        'tax2Total' => 'float',
        'validFrom' => 'dateTime',
        'orderStatus' => 'ReturnAuthorizationOrderStatus',
        'salesRep' => 'RecordRef',
        'giftCert' => 'RecordRef',
        'contribPct' => 'string',
        'giftCertTotal' => 'float',
        'giftCertApplied' => 'float',
        'giftCertAvailable' => 'float',
        'tranIsVsoeBundle' => 'boolean',
        'vsoeAutoCalc' => 'boolean',
        'syncPartnerTeams' => 'boolean',
        'itemList' => 'ReturnAuthorizationItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'salesTeamList' => 'ReturnAuthorizationSalesTeamList',
        'partnersList' => 'ReturnAuthorizationPartnersList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
