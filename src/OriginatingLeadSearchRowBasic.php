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
 * OriginatingLeadSearchRowBasic.
 */
class OriginatingLeadSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accountNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $address;
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
    public $addressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressInternalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressLabel;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressPhone;
    /**
     * @var SearchColumnStringField[]
     */
    public $altContact;
    /**
     * @var SearchColumnStringField[]
     */
    public $altEmail;
    /**
     * @var SearchColumnStringField[]
     */
    public $altName;
    /**
     * @var SearchColumnStringField[]
     */
    public $altPhone;
    /**
     * @var SearchColumnSelectField[]
     */
    public $assignedSite;
    /**
     * @var SearchColumnLongField[]
     */
    public $assignedSiteId;
    /**
     * @var SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableOffline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress1;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress2;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAttention;
    /**
     * @var SearchColumnStringField[]
     */
    public $billCity;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $billCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $billCountryCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $billPhone;
    /**
     * @var SearchColumnStringField[]
     */
    public $billState;
    /**
     * @var SearchColumnStringField[]
     */
    public $billZipCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $buyingReason;
    /**
     * @var SearchColumnStringField[]
     */
    public $buyingTimeFrame;
    /**
     * @var SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccCustomerCode;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $ccDefault;
    /**
     * @var SearchColumnDateField[]
     */
    public $ccExpDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccHolderName;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccInternalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $ccNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $ccState;
    /**
     * @var SearchColumnDateField[]
     */
    public $ccStateFrom;
    /**
     * @var SearchColumnSelectField[]
     */
    public $ccType;
    /**
     * @var SearchColumnStringField[]
     */
    public $city;
    /**
     * @var SearchColumnStringField[]
     */
    public $comments;
    /**
     * @var SearchColumnStringField[]
     */
    public $companyName;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $consolBalance;
    /**
     * @var SearchColumnLongField[]
     */
    public $consolDaysOverdue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $consolDepositBalance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $consolOverdueBalance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $consolUnbilledOrders;
    /**
     * @var SearchColumnStringField[]
     */
    public $contact;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $contribution;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $contributionPrimary;
    /**
     * @var SearchColumnDateField[]
     */
    public $conversionDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $creditHold;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $creditHoldOverride;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $creditLimit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateClosed;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysOverdue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $defaultOrderPriority;
    /**
     * @var SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $depositBalance;
    /**
     * @var SearchColumnStringField[]
     */
    public $drAccount;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $emailPreference;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $emailTransactions;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $entityId;
    /**
     * @var SearchColumnLongField[]
     */
    public $entityNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedBudget;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $explicitConversion;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $faxTransactions;
    /**
     * @var SearchColumnStringField[]
     */
    public $firstName;
    /**
     * @var SearchColumnDateField[]
     */
    public $firstOrderDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $firstSaleDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $fxAccount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxBalance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxConsolBalance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxConsolUnbilledOrders;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxUnbilledOrders;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $giveAccess;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $groupPricingLevel;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $hasDuplicates;
    /**
     * @var SearchColumnStringField[]
     */
    public $homePhone;
    /**
     * @var SearchColumnSelectField[]
     */
    public $image;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isBudgetApproved;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultBilling;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultShipping;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isPerson;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isShipAddress;
    /**
     * @var SearchColumnStringField[]
     */
    public $itemPricingLevel;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $itemPricingUnitPrice;
    /**
     * @var SearchColumnDateField[]
     */
    public $jobEndDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $jobProjectedEnd;
    /**
     * @var SearchColumnDateField[]
     */
    public $jobStartDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $jobType;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $lastName;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastOrderDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastSaleDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $leadDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $leadSource;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $manualCreditHold;
    /**
     * @var SearchColumnStringField[]
     */
    public $middleName;
    /**
     * @var SearchColumnStringField[]
     */
    public $mobilePhone;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $monthlyClosing;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $onCreditHold;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $overdueBalance;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partner;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $partnerContribution;
    /**
     * @var SearchColumnStringField[]
     */
    public $partnerRole;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partnerTeamMember;
    /**
     * @var SearchColumnStringField[]
     */
    public $pec;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $permission;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnStringField[]
     */
    public $phoneticName;
    /**
     * @var SearchColumnSelectField[]
     */
    public $prefCCProcessor;
    /**
     * @var SearchColumnSelectField[]
     */
    public $priceLevel;
    /**
     * @var SearchColumnStringField[]
     */
    public $pricingGroup;
    /**
     * @var SearchColumnStringField[]
     */
    public $pricingItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $printTransactions;
    /**
     * @var SearchColumnDateField[]
     */
    public $prospectDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $receivablesAccount;
    /**
     * @var SearchColumnLongField[]
     */
    public $reminderDays;
    /**
     * @var SearchColumnStringField[]
     */
    public $resaleNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $role;
    /**
     * @var SearchColumnStringField[]
     */
    public $salesReadiness;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesRep;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTeamMember;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTeamRole;
    /**
     * @var SearchColumnStringField[]
     */
    public $salutation;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress1;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress2;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAttention;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipCity;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $shipComplete;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipCountryCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipPhone;
    /**
     * @var SearchColumnSelectField[]
     */
    public $shippingItem;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var SearchColumnSelectField[]
     */
    public $sourceSite;
    /**
     * @var SearchColumnLongField[]
     */
    public $sourceSiteId;
    /**
     * @var SearchColumnStringField[]
     */
    public $stage;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $state;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var SearchColumnDateField[]
     */
    public $subscriptionDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $subscriptionStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $taxable;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxItem;
    /**
     * @var SearchColumnSelectField[]
     */
    public $terms;
    /**
     * @var SearchColumnSelectField[]
     */
    public $territory;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unbilledOrders;
    /**
     * @var SearchColumnStringField[]
     */
    public $url;
    /**
     * @var SearchColumnStringField[]
     */
    public $vatRegNumber;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $webLead;
    /**
     * @var SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountNumber' => 'SearchColumnStringField[]',
        'address' => 'SearchColumnStringField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'addressee' => 'SearchColumnStringField[]',
        'addressInternalId' => 'SearchColumnStringField[]',
        'addressLabel' => 'SearchColumnStringField[]',
        'addressPhone' => 'SearchColumnStringField[]',
        'altContact' => 'SearchColumnStringField[]',
        'altEmail' => 'SearchColumnStringField[]',
        'altName' => 'SearchColumnStringField[]',
        'altPhone' => 'SearchColumnStringField[]',
        'assignedSite' => 'SearchColumnSelectField[]',
        'assignedSiteId' => 'SearchColumnLongField[]',
        'attention' => 'SearchColumnStringField[]',
        'availableOffline' => 'SearchColumnBooleanField[]',
        'balance' => 'SearchColumnDoubleField[]',
        'billAddress' => 'SearchColumnStringField[]',
        'billAddress1' => 'SearchColumnStringField[]',
        'billAddress2' => 'SearchColumnStringField[]',
        'billAddress3' => 'SearchColumnStringField[]',
        'billAddressee' => 'SearchColumnStringField[]',
        'billAttention' => 'SearchColumnStringField[]',
        'billCity' => 'SearchColumnStringField[]',
        'billCountry' => 'SearchColumnEnumSelectField[]',
        'billCountryCode' => 'SearchColumnStringField[]',
        'billPhone' => 'SearchColumnStringField[]',
        'billState' => 'SearchColumnStringField[]',
        'billZipCode' => 'SearchColumnStringField[]',
        'buyingReason' => 'SearchColumnStringField[]',
        'buyingTimeFrame' => 'SearchColumnStringField[]',
        'category' => 'SearchColumnSelectField[]',
        'ccCustomerCode' => 'SearchColumnStringField[]',
        'ccDefault' => 'SearchColumnBooleanField[]',
        'ccExpDate' => 'SearchColumnDateField[]',
        'ccHolderName' => 'SearchColumnStringField[]',
        'ccInternalId' => 'SearchColumnStringField[]',
        'ccNumber' => 'SearchColumnStringField[]',
        'ccState' => 'SearchColumnSelectField[]',
        'ccStateFrom' => 'SearchColumnDateField[]',
        'ccType' => 'SearchColumnSelectField[]',
        'city' => 'SearchColumnStringField[]',
        'comments' => 'SearchColumnStringField[]',
        'companyName' => 'SearchColumnStringField[]',
        'consolBalance' => 'SearchColumnDoubleField[]',
        'consolDaysOverdue' => 'SearchColumnLongField[]',
        'consolDepositBalance' => 'SearchColumnDoubleField[]',
        'consolOverdueBalance' => 'SearchColumnDoubleField[]',
        'consolUnbilledOrders' => 'SearchColumnDoubleField[]',
        'contact' => 'SearchColumnStringField[]',
        'contribution' => 'SearchColumnDoubleField[]',
        'contributionPrimary' => 'SearchColumnDoubleField[]',
        'conversionDate' => 'SearchColumnDateField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'creditHold' => 'SearchColumnEnumSelectField[]',
        'creditHoldOverride' => 'SearchColumnBooleanField[]',
        'creditLimit' => 'SearchColumnDoubleField[]',
        'currency' => 'SearchColumnSelectField[]',
        'dateClosed' => 'SearchColumnDateField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'daysOverdue' => 'SearchColumnLongField[]',
        'defaultOrderPriority' => 'SearchColumnDoubleField[]',
        'defaultTaxReg' => 'SearchColumnStringField[]',
        'depositBalance' => 'SearchColumnDoubleField[]',
        'drAccount' => 'SearchColumnStringField[]',
        'email' => 'SearchColumnStringField[]',
        'emailPreference' => 'SearchColumnEnumSelectField[]',
        'emailTransactions' => 'SearchColumnBooleanField[]',
        'endDate' => 'SearchColumnDateField[]',
        'entityId' => 'SearchColumnStringField[]',
        'entityNumber' => 'SearchColumnLongField[]',
        'entityStatus' => 'SearchColumnSelectField[]',
        'estimatedBudget' => 'SearchColumnDoubleField[]',
        'explicitConversion' => 'SearchColumnBooleanField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'faxTransactions' => 'SearchColumnBooleanField[]',
        'firstName' => 'SearchColumnStringField[]',
        'firstOrderDate' => 'SearchColumnDateField[]',
        'firstSaleDate' => 'SearchColumnDateField[]',
        'fxAccount' => 'SearchColumnStringField[]',
        'fxBalance' => 'SearchColumnDoubleField[]',
        'fxConsolBalance' => 'SearchColumnDoubleField[]',
        'fxConsolUnbilledOrders' => 'SearchColumnDoubleField[]',
        'fxUnbilledOrders' => 'SearchColumnDoubleField[]',
        'giveAccess' => 'SearchColumnBooleanField[]',
        'globalSubscriptionStatus' => 'SearchColumnEnumSelectField[]',
        'groupPricingLevel' => 'SearchColumnStringField[]',
        'hasDuplicates' => 'SearchColumnBooleanField[]',
        'homePhone' => 'SearchColumnStringField[]',
        'image' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isBudgetApproved' => 'SearchColumnBooleanField[]',
        'isDefaultBilling' => 'SearchColumnBooleanField[]',
        'isDefaultShipping' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isPerson' => 'SearchColumnBooleanField[]',
        'isShipAddress' => 'SearchColumnBooleanField[]',
        'itemPricingLevel' => 'SearchColumnStringField[]',
        'itemPricingUnitPrice' => 'SearchColumnDoubleField[]',
        'jobEndDate' => 'SearchColumnDateField[]',
        'jobProjectedEnd' => 'SearchColumnDateField[]',
        'jobStartDate' => 'SearchColumnDateField[]',
        'jobType' => 'SearchColumnSelectField[]',
        'language' => 'SearchColumnEnumSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'lastName' => 'SearchColumnStringField[]',
        'lastOrderDate' => 'SearchColumnDateField[]',
        'lastSaleDate' => 'SearchColumnDateField[]',
        'leadDate' => 'SearchColumnDateField[]',
        'leadSource' => 'SearchColumnSelectField[]',
        'level' => 'SearchColumnEnumSelectField[]',
        'manualCreditHold' => 'SearchColumnBooleanField[]',
        'middleName' => 'SearchColumnStringField[]',
        'mobilePhone' => 'SearchColumnStringField[]',
        'monthlyClosing' => 'SearchColumnEnumSelectField[]',
        'onCreditHold' => 'SearchColumnBooleanField[]',
        'overdueBalance' => 'SearchColumnDoubleField[]',
        'parent' => 'SearchColumnSelectField[]',
        'partner' => 'SearchColumnSelectField[]',
        'partnerContribution' => 'SearchColumnDoubleField[]',
        'partnerRole' => 'SearchColumnStringField[]',
        'partnerTeamMember' => 'SearchColumnSelectField[]',
        'pec' => 'SearchColumnStringField[]',
        'permission' => 'SearchColumnEnumSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'phoneticName' => 'SearchColumnStringField[]',
        'prefCCProcessor' => 'SearchColumnSelectField[]',
        'priceLevel' => 'SearchColumnSelectField[]',
        'pricingGroup' => 'SearchColumnStringField[]',
        'pricingItem' => 'SearchColumnStringField[]',
        'printTransactions' => 'SearchColumnBooleanField[]',
        'prospectDate' => 'SearchColumnDateField[]',
        'receivablesAccount' => 'SearchColumnStringField[]',
        'reminderDays' => 'SearchColumnLongField[]',
        'resaleNumber' => 'SearchColumnStringField[]',
        'role' => 'SearchColumnStringField[]',
        'salesReadiness' => 'SearchColumnStringField[]',
        'salesRep' => 'SearchColumnSelectField[]',
        'salesTeamMember' => 'SearchColumnSelectField[]',
        'salesTeamRole' => 'SearchColumnSelectField[]',
        'salutation' => 'SearchColumnStringField[]',
        'shipAddress' => 'SearchColumnStringField[]',
        'shipAddress1' => 'SearchColumnStringField[]',
        'shipAddress2' => 'SearchColumnStringField[]',
        'shipAddress3' => 'SearchColumnStringField[]',
        'shipAddressee' => 'SearchColumnStringField[]',
        'shipAttention' => 'SearchColumnStringField[]',
        'shipCity' => 'SearchColumnStringField[]',
        'shipComplete' => 'SearchColumnBooleanField[]',
        'shipCountry' => 'SearchColumnEnumSelectField[]',
        'shipCountryCode' => 'SearchColumnStringField[]',
        'shipPhone' => 'SearchColumnStringField[]',
        'shippingItem' => 'SearchColumnSelectField[]',
        'shipState' => 'SearchColumnStringField[]',
        'shipZip' => 'SearchColumnStringField[]',
        'sourceSite' => 'SearchColumnSelectField[]',
        'sourceSiteId' => 'SearchColumnLongField[]',
        'stage' => 'SearchColumnStringField[]',
        'startDate' => 'SearchColumnDateField[]',
        'state' => 'SearchColumnEnumSelectField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'subscriptionDate' => 'SearchColumnDateField[]',
        'subscriptionStatus' => 'SearchColumnBooleanField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'taxable' => 'SearchColumnBooleanField[]',
        'taxItem' => 'SearchColumnSelectField[]',
        'terms' => 'SearchColumnSelectField[]',
        'territory' => 'SearchColumnSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'unbilledOrders' => 'SearchColumnDoubleField[]',
        'url' => 'SearchColumnStringField[]',
        'vatRegNumber' => 'SearchColumnStringField[]',
        'webLead' => 'SearchColumnBooleanField[]',
        'zipCode' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
