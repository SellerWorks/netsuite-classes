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
 * CustomerSearchBasic.
 */
class CustomerSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $accountNumber;
    /**
     * @var SearchStringField
     */
    public $address;
    /**
     * @var SearchStringField
     */
    public $addressee;
    /**
     * @var SearchStringField
     */
    public $addressLabel;
    /**
     * @var SearchStringField
     */
    public $addressPhone;
    /**
     * @var SearchMultiSelectField
     */
    public $assignedSite;
    /**
     * @var SearchMultiSelectField
     */
    public $assignedSiteId;
    /**
     * @var SearchStringField
     */
    public $attention;
    /**
     * @var SearchBooleanField
     */
    public $availableOffline;
    /**
     * @var SearchDoubleField
     */
    public $balance;
    /**
     * @var SearchStringField
     */
    public $billAddress;
    /**
     * @var SearchDoubleField
     */
    public $boughtAmount;
    /**
     * @var SearchDateField
     */
    public $boughtDate;
    /**
     * @var SearchMultiSelectField
     */
    public $buyingReason;
    /**
     * @var SearchMultiSelectField
     */
    public $buyingTimeFrame;
    /**
     * @var SearchMultiSelectField
     */
    public $category;
    /**
     * @var SearchStringField
     */
    public $ccCustomerCode;
    /**
     * @var SearchBooleanField
     */
    public $ccDefault;
    /**
     * @var SearchDateField
     */
    public $ccExpDate;
    /**
     * @var SearchStringField
     */
    public $ccHolderName;
    /**
     * @var SearchStringField
     */
    public $ccNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $ccState;
    /**
     * @var SearchDateField
     */
    public $ccStateFrom;
    /**
     * @var SearchMultiSelectField
     */
    public $ccType;
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchMultiSelectField
     */
    public $classBought;
    /**
     * @var SearchStringField
     */
    public $comments;
    /**
     * @var SearchStringField
     */
    public $companyName;
    /**
     * @var SearchDoubleField
     */
    public $consolBalance;
    /**
     * @var SearchLongField
     */
    public $consolDaysOverdue;
    /**
     * @var SearchDoubleField
     */
    public $consolDepositBalance;
    /**
     * @var SearchDoubleField
     */
    public $consolOverdueBalance;
    /**
     * @var SearchDoubleField
     */
    public $consolUnbilledOrders;
    /**
     * @var SearchStringField
     */
    public $contact;
    /**
     * @var SearchLongField
     */
    public $contribution;
    /**
     * @var SearchDateField
     */
    public $conversionDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $county;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $creditHold;
    /**
     * @var SearchBooleanField
     */
    public $creditHoldOverride;
    /**
     * @var SearchDoubleField
     */
    public $creditLimit;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $custStage;
    /**
     * @var SearchMultiSelectField
     */
    public $custStatus;
    /**
     * @var SearchDateField
     */
    public $dateClosed;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchLongField
     */
    public $daysOverdue;
    /**
     * @var SearchDoubleField
     */
    public $defaultOrderPriority;
    /**
     * @var SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var SearchDoubleField
     */
    public $depositBalance;
    /**
     * @var SearchMultiSelectField
     */
    public $deptBought;
    /**
     * @var SearchMultiSelectField
     */
    public $drAccount;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $emailPreference;
    /**
     * @var SearchBooleanField
     */
    public $emailTransactions;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchStringField
     */
    public $entityId;
    /**
     * @var SearchMultiSelectField
     */
    public $entityStatus;
    /**
     * @var SearchDoubleField
     */
    public $estimatedBudget;
    /**
     * @var SearchBooleanField
     */
    public $explicitConversion;
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
     * @var SearchBooleanField
     */
    public $faxTransactions;
    /**
     * @var SearchStringField
     */
    public $firstName;
    /**
     * @var SearchDateField
     */
    public $firstOrderDate;
    /**
     * @var SearchDateField
     */
    public $firstSaleDate;
    /**
     * @var SearchMultiSelectField
     */
    public $fxAccount;
    /**
     * @var SearchDoubleField
     */
    public $fxBalance;
    /**
     * @var SearchDoubleField
     */
    public $fxConsolBalance;
    /**
     * @var SearchDoubleField
     */
    public $fxConsolUnbilledOrders;
    /**
     * @var SearchDoubleField
     */
    public $fxUnbilledOrders;
    /**
     * @var SearchBooleanField
     */
    public $giveAccess;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $group;
    /**
     * @var SearchMultiSelectField
     */
    public $groupPricingLevel;
    /**
     * @var SearchBooleanField
     */
    public $hasDuplicates;
    /**
     * @var SearchStringField
     */
    public $image;
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
    public $isBudgetApproved;
    /**
     * @var SearchBooleanField
     */
    public $isDefaultBilling;
    /**
     * @var SearchBooleanField
     */
    public $isDefaultShipping;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isPerson;
    /**
     * @var SearchBooleanField
     */
    public $isReportedLead;
    /**
     * @var SearchBooleanField
     */
    public $isShipAddress;
    /**
     * @var SearchMultiSelectField
     */
    public $itemPricingLevel;
    /**
     * @var SearchDoubleField
     */
    public $itemPricingUnitPrice;
    /**
     * @var SearchMultiSelectField
     */
    public $itemsBought;
    /**
     * @var SearchMultiSelectField
     */
    public $itemsOrdered;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchStringField
     */
    public $lastName;
    /**
     * @var SearchDateField
     */
    public $lastOrderDate;
    /**
     * @var SearchDateField
     */
    public $lastSaleDate;
    /**
     * @var SearchDateField
     */
    public $leadDate;
    /**
     * @var SearchMultiSelectField
     */
    public $leadSource;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var SearchMultiSelectField
     */
    public $locationBought;
    /**
     * @var SearchBooleanField
     */
    public $manualCreditHold;
    /**
     * @var SearchMultiSelectField
     */
    public $merchantAccount;
    /**
     * @var SearchStringField
     */
    public $middleName;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $monthlyClosing;
    /**
     * @var SearchBooleanField
     */
    public $onCreditHold;
    /**
     * @var SearchDoubleField
     */
    public $orderedAmount;
    /**
     * @var SearchDateField
     */
    public $orderedDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $otherRelationships;
    /**
     * @var SearchDoubleField
     */
    public $overdueBalance;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchMultiSelectField
     */
    public $parentItemsBought;
    /**
     * @var SearchMultiSelectField
     */
    public $parentItemsOrdered;
    /**
     * @var SearchMultiSelectField
     */
    public $partner;
    /**
     * @var SearchLongField
     */
    public $partnerContribution;
    /**
     * @var SearchMultiSelectField
     */
    public $partnerRole;
    /**
     * @var SearchMultiSelectField
     */
    public $partnerTeamMember;
    /**
     * @var SearchStringField
     */
    public $pec;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $permission;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchStringField
     */
    public $phoneticName;
    /**
     * @var SearchMultiSelectField
     */
    public $priceLevel;
    /**
     * @var SearchMultiSelectField
     */
    public $pricingGroup;
    /**
     * @var SearchMultiSelectField
     */
    public $pricingItem;
    /**
     * @var SearchBooleanField
     */
    public $printTransactions;
    /**
     * @var SearchDateField
     */
    public $prospectDate;
    /**
     * @var SearchBooleanField
     */
    public $pstExempt;
    /**
     * @var SearchMultiSelectField
     */
    public $receivablesAccount;
    /**
     * @var SearchDateField
     */
    public $reminderDate;
    /**
     * @var SearchStringField
     */
    public $resaleNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $role;
    /**
     * @var SearchMultiSelectField
     */
    public $salesReadiness;
    /**
     * @var SearchMultiSelectField
     */
    public $salesRep;
    /**
     * @var SearchMultiSelectField
     */
    public $salesTeamMember;
    /**
     * @var SearchMultiSelectField
     */
    public $salesTeamRole;
    /**
     * @var SearchStringField
     */
    public $salutation;
    /**
     * @var SearchStringField
     */
    public $shipAddress;
    /**
     * @var SearchBooleanField
     */
    public $shipComplete;
    /**
     * @var SearchMultiSelectField
     */
    public $shippingItem;
    /**
     * @var SearchMultiSelectField
     */
    public $sourceSite;
    /**
     * @var SearchMultiSelectField
     */
    public $sourceSiteId;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $stage;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidBought;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchBooleanField
     */
    public $taxable;
    /**
     * @var SearchMultiSelectField
     */
    public $terms;
    /**
     * @var SearchMultiSelectField
     */
    public $territory;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var SearchStringField
     */
    public $url;
    /**
     * @var SearchStringField
     */
    public $vatRegNumber;
    /**
     * @var SearchBooleanField
     */
    public $webLead;
    /**
     * @var SearchStringField
     */
    public $zipCode;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountNumber' => 'SearchStringField',
        'address' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'addressLabel' => 'SearchStringField',
        'addressPhone' => 'SearchStringField',
        'assignedSite' => 'SearchMultiSelectField',
        'assignedSiteId' => 'SearchMultiSelectField',
        'attention' => 'SearchStringField',
        'availableOffline' => 'SearchBooleanField',
        'balance' => 'SearchDoubleField',
        'billAddress' => 'SearchStringField',
        'boughtAmount' => 'SearchDoubleField',
        'boughtDate' => 'SearchDateField',
        'buyingReason' => 'SearchMultiSelectField',
        'buyingTimeFrame' => 'SearchMultiSelectField',
        'category' => 'SearchMultiSelectField',
        'ccCustomerCode' => 'SearchStringField',
        'ccDefault' => 'SearchBooleanField',
        'ccExpDate' => 'SearchDateField',
        'ccHolderName' => 'SearchStringField',
        'ccNumber' => 'SearchStringField',
        'ccState' => 'SearchMultiSelectField',
        'ccStateFrom' => 'SearchDateField',
        'ccType' => 'SearchMultiSelectField',
        'city' => 'SearchStringField',
        'classBought' => 'SearchMultiSelectField',
        'comments' => 'SearchStringField',
        'companyName' => 'SearchStringField',
        'consolBalance' => 'SearchDoubleField',
        'consolDaysOverdue' => 'SearchLongField',
        'consolDepositBalance' => 'SearchDoubleField',
        'consolOverdueBalance' => 'SearchDoubleField',
        'consolUnbilledOrders' => 'SearchDoubleField',
        'contact' => 'SearchStringField',
        'contribution' => 'SearchLongField',
        'conversionDate' => 'SearchDateField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'creditHold' => 'SearchEnumMultiSelectField',
        'creditHoldOverride' => 'SearchBooleanField',
        'creditLimit' => 'SearchDoubleField',
        'currency' => 'SearchMultiSelectField',
        'custStage' => 'SearchMultiSelectField',
        'custStatus' => 'SearchMultiSelectField',
        'dateClosed' => 'SearchDateField',
        'dateCreated' => 'SearchDateField',
        'daysOverdue' => 'SearchLongField',
        'defaultOrderPriority' => 'SearchDoubleField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'depositBalance' => 'SearchDoubleField',
        'deptBought' => 'SearchMultiSelectField',
        'drAccount' => 'SearchMultiSelectField',
        'email' => 'SearchStringField',
        'emailPreference' => 'SearchEnumMultiSelectField',
        'emailTransactions' => 'SearchBooleanField',
        'endDate' => 'SearchDateField',
        'entityId' => 'SearchStringField',
        'entityStatus' => 'SearchMultiSelectField',
        'estimatedBudget' => 'SearchDoubleField',
        'explicitConversion' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'faxTransactions' => 'SearchBooleanField',
        'firstName' => 'SearchStringField',
        'firstOrderDate' => 'SearchDateField',
        'firstSaleDate' => 'SearchDateField',
        'fxAccount' => 'SearchMultiSelectField',
        'fxBalance' => 'SearchDoubleField',
        'fxConsolBalance' => 'SearchDoubleField',
        'fxConsolUnbilledOrders' => 'SearchDoubleField',
        'fxUnbilledOrders' => 'SearchDoubleField',
        'giveAccess' => 'SearchBooleanField',
        'globalSubscriptionStatus' => 'SearchEnumMultiSelectField',
        'group' => 'SearchMultiSelectField',
        'groupPricingLevel' => 'SearchMultiSelectField',
        'hasDuplicates' => 'SearchBooleanField',
        'image' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isBudgetApproved' => 'SearchBooleanField',
        'isDefaultBilling' => 'SearchBooleanField',
        'isDefaultShipping' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isPerson' => 'SearchBooleanField',
        'isReportedLead' => 'SearchBooleanField',
        'isShipAddress' => 'SearchBooleanField',
        'itemPricingLevel' => 'SearchMultiSelectField',
        'itemPricingUnitPrice' => 'SearchDoubleField',
        'itemsBought' => 'SearchMultiSelectField',
        'itemsOrdered' => 'SearchMultiSelectField',
        'language' => 'SearchEnumMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'lastName' => 'SearchStringField',
        'lastOrderDate' => 'SearchDateField',
        'lastSaleDate' => 'SearchDateField',
        'leadDate' => 'SearchDateField',
        'leadSource' => 'SearchMultiSelectField',
        'level' => 'SearchEnumMultiSelectField',
        'locationBought' => 'SearchMultiSelectField',
        'manualCreditHold' => 'SearchBooleanField',
        'merchantAccount' => 'SearchMultiSelectField',
        'middleName' => 'SearchStringField',
        'monthlyClosing' => 'SearchEnumMultiSelectField',
        'onCreditHold' => 'SearchBooleanField',
        'orderedAmount' => 'SearchDoubleField',
        'orderedDate' => 'SearchDateField',
        'otherRelationships' => 'SearchEnumMultiSelectField',
        'overdueBalance' => 'SearchDoubleField',
        'parent' => 'SearchMultiSelectField',
        'parentItemsBought' => 'SearchMultiSelectField',
        'parentItemsOrdered' => 'SearchMultiSelectField',
        'partner' => 'SearchMultiSelectField',
        'partnerContribution' => 'SearchLongField',
        'partnerRole' => 'SearchMultiSelectField',
        'partnerTeamMember' => 'SearchMultiSelectField',
        'pec' => 'SearchStringField',
        'permission' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'priceLevel' => 'SearchMultiSelectField',
        'pricingGroup' => 'SearchMultiSelectField',
        'pricingItem' => 'SearchMultiSelectField',
        'printTransactions' => 'SearchBooleanField',
        'prospectDate' => 'SearchDateField',
        'pstExempt' => 'SearchBooleanField',
        'receivablesAccount' => 'SearchMultiSelectField',
        'reminderDate' => 'SearchDateField',
        'resaleNumber' => 'SearchStringField',
        'role' => 'SearchMultiSelectField',
        'salesReadiness' => 'SearchMultiSelectField',
        'salesRep' => 'SearchMultiSelectField',
        'salesTeamMember' => 'SearchMultiSelectField',
        'salesTeamRole' => 'SearchMultiSelectField',
        'salutation' => 'SearchStringField',
        'shipAddress' => 'SearchStringField',
        'shipComplete' => 'SearchBooleanField',
        'shippingItem' => 'SearchMultiSelectField',
        'sourceSite' => 'SearchMultiSelectField',
        'sourceSiteId' => 'SearchMultiSelectField',
        'stage' => 'SearchEnumMultiSelectField',
        'startDate' => 'SearchDateField',
        'state' => 'SearchStringField',
        'subsidBought' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxable' => 'SearchBooleanField',
        'terms' => 'SearchMultiSelectField',
        'territory' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'unbilledOrders' => 'SearchDoubleField',
        'url' => 'SearchStringField',
        'vatRegNumber' => 'SearchStringField',
        'webLead' => 'SearchBooleanField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
